<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\channel;
use App\europe_category;
use App\europe_feed;
use App\tech_category;
use App\tech_feed;
use DB;

class newsfeedController extends Controller
{
    //get news feed by consuming the resources API
    public function importNewsFeeds()
    {
        $client = new Client([
            'headers' => [ 'Content-Type' => 'application/json', "Accept" => "application/json"],
            'base_uri' => 'http://rss.nytimes.com/services/xml/rss/nyt/'
        ]);

        //import the newsfeeds into the DB
        $responseTech = $client->get("Technology.xml")->getBody();
        $responseEurope = $client->get("Europe.xml")->getBody();
        
        //convert the Tech xml response to json
        $xmlTech = simplexml_load_string($responseTech);
        $jsonTech = json_encode($xmlTech);
        $arrayTech = json_decode($jsonTech,TRUE);
        // return $arrayTech;
        //convert the Europe xml response to json
        $xmlEurope = simplexml_load_string($responseEurope);
        $jsonEurope = json_encode($xmlEurope);
        $arrayEurope = json_decode($jsonEurope,TRUE);

        //Manage both tech and europe channel details in the manage_channels.php file
        manageChannels("Tech",$arrayTech);
        manageChannels("Europe",$arrayEurope);

        //Manage Feeds for both Tech and Europe in the manage_feed.php file
        manageFeeds($arrayTech['channel']['item'], "Tech");
        manageFeeds($arrayEurope['channel']['item'], "Europe");
        
        return "success";
    }

    public function getNewsFeed($feedType)
    {
        //get tech feed
        if ($feedType === "Tech") {
            $feed_id = tech_feed::select('feed_id')->orderBy('created_at', 'DESC')->get();

            for ($i=0; $i < count($feed_id); $i++) { 
                $feed[$i] = tech_feed::select('title','link','description','pubDate','feed_id')
                ->where('feed_id',$feed_id[$i]['feed_id'])->get();
                $categories[$i] = tech_category::select('category')->where('feed_id', $feed_id[$i]['feed_id'])->get();
            }

            for ($i=0; $i < count($feed); $i++) { 
                $result[$i] = array(
                    "title" => $feed[$i][0]['title'],
                    "link" => $feed[$i][0]['link'],
                    "feed_id" => $feed[$i][0]['feed_id'],
                    "pubDate" => $feed[$i][0]['pubDate'],
                    "description" => $feed[$i][0]['description'],
                    "category" => $categories[$i]
                );
            }
            return $result;
        }
        //else get europe feed
        else if ($feedType === "Europe") {
            $feed_id = europe_feed::select('feed_id')->orderBy('created_at', 'DESC')->get();

            for ($i=0; $i < count($feed_id); $i++) { 
                $feed[$i] = europe_feed::select('guid','title','link','description','pubDate','feed_id')
                ->where('feed_id',$feed_id[$i]['feed_id'])->get();
                $categories[$i] = europe_category::select('category')->where('feed_id', $feed_id[$i]['feed_id'])->get();
            }

            for ($i=0; $i < count($feed); $i++) { 
                $result[$i] = array(
                    "title" => $feed[$i][0]['title'],
                    "link" => $feed[$i][0]['link'],
                    "feed_id" => $feed[$i][0]['feed_id'],
                    "pubDate" => $feed[$i][0]['pubDate'],
                    "description" => $feed[$i][0]['description'],
                    "category" => $categories[$i]
                );
            }
            return $result;
        }
    }
}
