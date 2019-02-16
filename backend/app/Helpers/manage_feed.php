<?php
use App\europe_category;
use App\europe_feed;
use App\tech_category;
use App\tech_feed;

function manageFeeds($array,$channel_name)
{
  if ($channel_name === "Tech" ) {

    //create new instances of the tech feed and categories by looping through the item array.
    for ($i=0; $i < count($array); $i++) { 
      //check for duplicity
      //ASSUMPTION: THe guid of a newsfeed item is unique and no 2 feed items share the same guid
      $find_feed = tech_feed::where('guid', $array[$i]['guid'])->first();
      if (!$find_feed) {
        $tech_feed = new tech_feed;
        $tech_feed->guid = $array[$i]['guid'];
        $tech_feed->title = $array[$i]['title'];
        $tech_feed->link = $array[$i]['link'];
        $tech_feed->description = $array[$i]['description'];
        $tech_feed->pubDate = $array[$i]['pubDate'];
        //use UNIX datetime as a unique id for each feed
        $tech_feed->feed_id = (string)time().$i;
        $tech_feed->save();

        //check if it's an array
        $check_array = is_array($array[$i]['category']);
        
        if ($check_array) {
          $j = count($array[$i]['category']);
          while ($j > 0){
            //create new instance of europe_categories table to store the categories in each field
            $feed_categories = new tech_category;
            $feed_categories->feed_id = $tech_feed->feed_id;
            $feed_categories->category = $array[$i]['category'][$j-1];
            //save instance in DB
            $feed_categories->save();
            $j--;
          }  
        }
        else{
          $feed_categories = new tech_category;
          $feed_categories->feed_id = $tech_feed->feed_id;
          $feed_categories->category = $array[$i]['category'];
          //save instance in DB
          $feed_categories->save();
        }
      }       
    }
  }
  else if ($channel_name === "Europe"){
    //create new instances of the europe feed and categories by looping through the item array.
    for ($i=0; $i < count($array); $i++) { 
      //check for duplicity
      //ASSUMPTION: THe guid of a newsfeed item is unique and no 2 feed items share the same guid
      $find_feed = europe_feed::where('guid', $array[$i]['guid'])->first();
      if (!$find_feed) {
        $europe_feed = new europe_feed;
        $europe_feed->guid = $array[$i]['guid'];
        $europe_feed->title = $array[$i]['title'];
        $europe_feed->link = $array[$i]['link'];
        $europe_feed->description = $array[$i]['description'];
        $europe_feed->pubDate = $array[$i]['pubDate'];
        //use UNIX datetime as a unique id for each feed
        $europe_feed->feed_id = (string)time().$i;
        $europe_feed->save();
        
        //check if it's an array
        $check_array = is_array($array[$i]['category']);
        
        if ($check_array) {
          $j = count($array[$i]['category']);
          while ($j > 0){
            //create new instance of europe_categories table to store the categories in each field
            $feed_categories = new europe_category;
            $feed_categories->feed_id = $europe_feed->feed_id;
            $feed_categories->category = $array[$i]['category'][$j-1];
            //save instance in DB
            $feed_categories->save();
            $j--;
          }  
        }
        else{
          //create new instance of europe_categories table to store the categories in each field
          $feed_categories = new europe_category;
          $feed_categories->feed_id = $europe_feed->feed_id;
          $feed_categories->category = $array[$i]['category'];
          //save instance in DB
          $feed_categories->save();
        }
      }
    }
  }
  
}


?>

