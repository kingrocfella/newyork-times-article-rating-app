<?php
use App\channel;

function manageChannels($channel_name,$array)
{
  //create new instances of the channel model and save into the DB if channel doesn't exist else update role if exists
  $find_channel = channel::where('channel',$channel_name)->first();

  //initiase $channel
  $channel = null;
  if (!$find_channel) {
    $channel = new channel;
    $channel->title = $array['channel']['title'];
    $channel->link = $array['channel']['link'];
    //if the description array is not null, save the first item on the array
    if (count($array['channel']['description']) !== 0) {
      $channel->description = $array['channel']['description'][0];
    }
    $channel->language = $array['channel']['language'];
    $channel->copyright = $array['channel']['copyright'];
    $channel->lastBuildDate = $array['channel']['lastBuildDate'];
    $channel->image_title = $array['channel']['image']['title'];
    $channel->image_url = $array['channel']['image']['url'];
    $channel->image_link = $array['channel']['image']['link'];
    $channel->channel = $channel_name;
  }
  else{
    $find_channel->title = $array['channel']['title'];
    $find_channel->link = $array['channel']['link'];
    //if the description array is not null, save the first item on the array
    if (count($array['channel']['description']) !== 0) {
      $find_channel->description = $array['channel']['description'][0];
    }
    $find_channel->language = $array['channel']['language'];
    $find_channel->copyright = $array['channel']['copyright'];
    $find_channel->lastBuildDate = $array['channel']['lastBuildDate'];
    $find_channel->image_title = $array['channel']['image']['title'];
    $find_channel->image_url = $array['channel']['image']['url'];
    $find_channel->image_link = $array['channel']['image']['link'];
    $find_channel->channel = $channel_name;
  }

  //save model instances in DB via DB transactions
  DB::transaction(function () use($channel, $find_channel) {
    if ($channel) {
      $channel->save();
    }
    if ($find_channel) {
      $find_channel->save();
    }
  });

}

?>