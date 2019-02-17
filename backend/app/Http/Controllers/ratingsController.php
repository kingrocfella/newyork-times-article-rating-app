<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rating;
use App\channel;
use App\europe_category;
use App\europe_feed;
use App\tech_category;
use App\tech_feed;

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
}
