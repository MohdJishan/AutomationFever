<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    protected function RecentVideos(){
     $part='snippet';
     $country='IN';
     $apiKey=config('services.youtube.api_key');
     $maxResults=3;
     $youTubeEndPoint=config('services.youtube.search_endpoint');
     $type='video';
     $channel_id="UC1--rb_uXtl_CvD2U7z6IBQ";
     $url=$youTubeEndPoint . '?key=' . $apiKey . '&channelId=' . $channel_id  . '&part=' . $part . '&order=date' . '&maxResults=' . $maxResults . "&regionCode=" . $country . '&type=' . $type ;
     $responce=Http::get($url);
     $videoList=json_decode($responce);
    //   return view('home',['responce' =>$videoList]);
     return $url;
    }

    public function GetVideoDetails(Request $request){
        $video_id=$request->video_id;
        $part='contentDetails';
        $apiKey=config('services.youtube.api_key');
        $youTubeEndPoint=config('services.youtube.videos_search_endpoint');
        $url=$youTubeEndPoint . '?key=' . $apiKey  . '&part=' . $part . '&id=' .$video_id;
        $responce=Http::get($url);
        $videoData=json_decode($responce);
        $duration=$videoData;
        return response()->json(array('success'=>true,'html'=>$duration));
    }
}
