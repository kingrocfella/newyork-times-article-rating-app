<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rating;
use App\channel;
use App\europe_category;
use App\europe_feed;
use App\tech_category;
use App\tech_feed;
use App\last_request;
use Carbon\Carbon;
use DB;

class ratingsController extends Controller
{
    public function saveRatings(Request $request)
    {
        $feed_id = $request->input('feed_id');
        $rating = $request->input('rating');

        //find if the feed has been rated before and then update rating else create new entry
        $find_feed = rating::where('feed_id',$feed_id)->first();
        if (!$find_feed) {
            $save_new_rating = new rating;
            $save_new_rating->feed_id = $feed_id;
            $save_new_rating->rating = $rating;
            $save_new_rating->save();
        }
        else{
            $old_rating = rating::select('rating')->where('feed_id',$feed_id)->first();
            $new_rating = $old_rating['rating'] + $rating;
            $find_feed->rating = $new_rating;
            $find_feed->save();
        }
        return "success";
    }

    public function getBestRatedArticles()
    {
        //get the difference in minutes between last request time and now 
        //get last request time
        $last_request_time  = last_request::select('created_at')->orderBy('created_at', 'DESC')->first();
        if (isset($last_request_time)) {
            $last_request_time = Carbon::parse($last_request_time['created_at']);
            $now_time = Carbon::parse(date("Y-m-d H:i:s"));
            //calculate the difference
            $diff = $last_request_time->diffInMinutes($now_time, false);
        }
        else{
            //give $diff a number > 5 so the next if block can be executed for first requests
            $diff = 10;
        }
        //if difference  is greater than 5 minutes, generate a new list
        if ($diff > 5) {
            //get the 5 highest rated articles
            $best_rated = rating::select('feed_id')->orderBy('rating', 'DESC')->take(5)->get();
            
            //wrap everything below in a DB transaction
            DB::beginTransaction();
            try {
                for ($i=0; $i < count($best_rated); $i++) { 
                    $feed  = tech_feed::select('title','link','description','pubDate','guid')
                    ->where('tech_feeds.feed_id',$best_rated[$i]['feed_id'])
                    ->get();
                    $category = tech_category::select('category')
                    ->where('tech_categories.feed_id',$best_rated[$i]['feed_id'])
                    ->get();
                    
                    //check if the feed_id is for a tech article, if yes, push it into an array. If no, then it must be an europe article, so retrieve the article details from the DB
                    if (count($feed) > 0 && count($category) > 0) {
                        $feed_array[$i] = $feed;
                        $category_array[$i] = $category;
                    }
                    else{
                        $feed_array[$i]  = europe_feed::select('title','link','description','pubDate','guid')
                        ->where('europe_feeds.feed_id',$best_rated[$i]['feed_id'])
                        ->get();
                        $category_array[$i] = europe_category::select('category')
                        ->where('europe_categories.feed_id',$best_rated[$i]['feed_id'])
                        ->get();
                    } 
                    //update the last request table
                    $last_request = new last_request;
                    $last_request->feed_id = $best_rated[$i]['feed_id'];
                    $last_request->save();      
                }
                DB::commit();
            } catch (Exception $e) {
                DB::rollBack();
            }
        }
        else{
            $last_rated = last_request::select('feed_id')->orderBy('created_at', 'DESC')->take(5)->get();
            //wrap everything below in a DB transaction
            DB::beginTransaction();
            try {
                for ($i=0; $i < count($last_rated); $i++) { 
                    $feed  = tech_feed::select('title','link','description','pubDate','guid')
                    ->where('tech_feeds.feed_id',$last_rated[$i]['feed_id'])
                    ->get();
                    $category = tech_category::select('category')
                    ->where('tech_categories.feed_id',$last_rated[$i]['feed_id'])
                    ->get();
                    
                    if (count($feed) > 0 && count($category) > 0) {
                        $feed_array[$i] = $feed;
                        $category_array[$i] = $category;
                    }
                    else{
                        $feed_array[$i]  = europe_feed::select('title','link','description','pubDate','guid')
                        ->where('europe_feeds.feed_id',$last_rated[$i]['feed_id'])
                        ->get();
                        $category_array[$i] = europe_category::select('category')
                        ->where('europe_categories.feed_id',$last_rated[$i]['feed_id'])
                        ->get();
                    }      
                }
                DB::commit();
            } catch (Exception $e) {
                DB::rollBack();
            }
        }
        //arrange the result in an array
        for ($i=0; $i < count($feed_array); $i++) { 
            $result[$i] = array(
                "title" => $feed_array[$i][0]['title'],
                "link" => $feed_array[$i][0]['link'],
                "pubDate" => $feed_array[$i][0]['pubDate'],
                "guid" => $feed_array[$i][0]['guid'],
                "description" => $feed_array[$i][0]['description'],
                "category" => $category_array[$i]
            );
        }
        return $result;
    }
}
