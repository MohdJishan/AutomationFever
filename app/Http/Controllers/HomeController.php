<?php

namespace App\Http\Controllers;

use DateInterval;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Videos_lists;

class HomeController extends Controller
{
    public function RecentVideos(){
      $recent_videos=Videos_lists::select(
                                        'video_id',
                                        'channel_title',
                                        'video_title',
                                        'thumbnail',
                                        'view_count',
                                        'duration'
                                      )
                                      ->limit(3)
                                      ->orderBy('published_datetime','desc')
                                      ->get();

      
$excelVBATutorials=Videos_lists::select(
                          'video_id',
                          'channel_title',
                          'video_title',
                          'thumbnail',
                          'view_count',
                          'duration'
                        )
                        ->where('parent_playlist','Excel VBA Tutorials in Hindi')
                        ->limit(8)
                        ->orderBy('published_datetime')
                        ->get();

$count_excelVBATutorials=Videos_lists::where('parent_playlist','Excel VBA Tutorials in Hindi')
                                      ->count();

$vbaLoops=Videos_lists::select(
                              'video_id',
                              'channel_title',
                              'video_title',
                              'thumbnail',
                              'view_count',
                              'duration'
                            )
                            ->where('playlist','VBA - Loops in Hindi')
                            ->orderBy('published_datetime')
                            ->get();

$count_vbaLoops=Videos_lists::where('playlist','VBA - Loops in Hindi')
                            ->count();

$vbaTextToCols=Videos_lists::select(
                              'video_id',
                              'channel_title',
                              'video_title',
                              'thumbnail',
                              'view_count',
                              'duration'
                            )
                            ->where('playlist','VBA - Text To Columns in Hindi')
                            ->orderBy('published_datetime')
                            ->get();

$count_vbaTextToCols=Videos_lists::where('playlist','VBA - Text To Columns in Hindi')
                                   ->count();

$vbaHyperlinks=Videos_lists::select(
                              'video_id',
                              'channel_title',
                              'video_title',
                              'thumbnail',
                              'view_count',
                              'duration'
                            )
                            ->where('playlist','VBA - Hyperlinks in Hindi')
                            ->orderBy('published_datetime')
                            ->get();

                            
$count_vbaHyperlinks=Videos_lists::where('playlist','VBA - Hyperlinks in Hindi')
                            ->count();

$vbaSorting=Videos_lists::select(
                              'video_id',
                              'channel_title',
                              'video_title',
                              'thumbnail',
                              'view_count',
                              'duration'
                            )
                            ->where('playlist','VBA - Sorting in Hindi')
                            ->orderBy('published_datetime')
                            ->get();

$count_vbaSorting=Videos_lists::where('playlist','VBA - Sorting in Hindi')
                                                      ->count();


$vbaProjects=Videos_lists::select(
                              'video_id',
                              'channel_title',
                              'video_title',
                              'thumbnail',
                              'view_count',
                              'duration'
                            )
                            ->where('playlist','Excel VBA Projects in Hindi')
                            ->orderBy('published_datetime')
                            ->get();                            
                            


$count_vbaProjects=Videos_lists::where('playlist','Excel VBA Projects in Hindi')
                                ->count();     
                            


      return view('home',[
                          'recent_videos' => $recent_videos,
                          'excelVBATutorials' => $excelVBATutorials,
                          'vbaLoops' => $vbaLoops,
                          'vbaTextToCols' => $vbaTextToCols,
                          'vbaHyperlinks' => $vbaHyperlinks,
                          'vbaSorting' => $vbaSorting,
                          'vbaProjects' => $vbaProjects,
                          'count_excelVBATutorials' => $count_excelVBATutorials,
                          'count_vbaLoops' => $count_vbaLoops,
                          'count_vbaTextToCols' => $count_vbaTextToCols,
                          'count_vbaHyperlinks' => $count_vbaHyperlinks,
                          'count_vbaSorting' => $count_vbaSorting,
                          'count_vbaProjects' => $count_vbaProjects
                         ]);
    }

    public function GetVideoDetails(Request $request){
        $video_id=$request->video_id;
        $part='contentDetails,statistics';
        $apiKey=config('services.youtube.api_key');
        $youTubeEndPoint=config('services.youtube.videos_search_endpoint');
        $url=$youTubeEndPoint . '?key=' . $apiKey  . '&part=' . $part . '&id=' .$video_id;
        $responce=Http::get($url);
        $video_details=json_decode($responce);
        return response()->json(array('success'=>true,'api_response'=>$video_details));
    }
}
