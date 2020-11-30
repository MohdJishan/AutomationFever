<?php

namespace App\Http\Controllers;


use DateInterval;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Videos_lists;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
      * @return \Illuminate\Contracts\Support\Renderable
      */
    public function index()
    {
        return view('home');
    }


    public function RecentVideos(){
        return view('home');
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
  
        public function GetRecentVideos(Request $request){
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
  
  
          $returnHTML=view('ajax_recent_videos',['recent_videos'=>$recent_videos])->render();  
  
          return response()->json(array('success'=>true,'html'=>$returnHTML));
        }
  
  
        public function GetExcelVbaToturials(Request $request){
          $playlist_name='Excel VBA Tutorials in Hindi';
          $excelVBATutorials=Videos_lists::select(
                                                  'video_id',
                                                  'channel_title',
                                                  'video_title',
                                                  'thumbnail',
                                                  'view_count',
                                                  'duration'
                                                )
                                                ->where('parent_playlist',$playlist_name)
                                                ->limit(4)
                                                ->orderBy('published_datetime','desc')
                                                ->get();
  
          $count_excelVBATutorials=Videos_lists::where('parent_playlist',$playlist_name)
                                        ->count();
  
        
  
          $returnHTML=view('ajax_excel_vba_toturials',[
                                                        'excelVBATutorials' => $excelVBATutorials,
                                                        'count_excelVBATutorials' => $count_excelVBATutorials,
                                                        'playlist_name' => $playlist_name,
                                                        ])->render();  
  
          return response()->json(array('success'=>true,'html'=>$returnHTML));                                      
  
        }
  
        public function GetVbaLoops(Request $request){
          $playlist_name='VBA - Loops in Hindi';
          $vbaLoops=Videos_lists::select(
                                          'video_id',
                                          'channel_title',
                                          'video_title',
                                          'thumbnail',
                                          'view_count',
                                          'duration'
                                        )
                                        ->where('playlist',$playlist_name)
                                        ->orderBy('published_datetime','desc')
                                        ->limit(4)
                                        ->get();
  
          $count_vbaLoops=Videos_lists::where('playlist',$playlist_name)
                                        ->count();
  
          $returnHTML=view('ajax_vba_loops',[
                                          'vbaLoops' => $vbaLoops,
                                          'count_vbaLoops' => $count_vbaLoops,
                                          'playlist_name' => $playlist_name,
                                        ])->render();  
  
          return response()->json(array('success'=>true,'html'=>$returnHTML));                                      
                          
        }
  
  
       public function GetTextToColumns(Request $request){
            $vbaTextToCols=Videos_lists::select(
                                                'video_id',
                                                'channel_title',
                                                'video_title',
                                                'thumbnail',
                                                'view_count',
                                                'duration'
                                              )
                                              ->where('playlist','VBA - Text To Columns in Hindi')
                                              ->orderBy('published_datetime','desc')
                                              ->limit(4)
                                              ->get();
  
          $count_vbaTextToCols=Videos_lists::where('playlist','VBA - Text To Columns in Hindi')
                                            ->count();
        
          $returnHTML=view('ajax_text_to_columns',[
                                              'vbaTextToCols' => $vbaTextToCols,
                                              'count_vbaTextToCols' => $count_vbaTextToCols
                                            ])->render();  
      
          return response()->json(array('success'=>true,'html'=>$returnHTML));                                      
       } 
  
  
     public function GetVbaHyperlinks(Request $request){
      $playlist_name='VBA - Hyperlinks in Hindi';
      $vbaHyperlinks=Videos_lists::select(
                                          'video_id',
                                          'channel_title',
                                          'video_title',
                                          'thumbnail',
                                          'view_count',
                                          'duration'
                                        )
                                        ->where('playlist',$playlist_name)
                                        ->orderBy('published_datetime','desc')
                                        ->limit(4)
                                        ->get();
  
      
      $count_vbaHyperlinks=Videos_lists::where('playlist',$playlist_name)
                                          ->count();
  
            
      $returnHTML=view('ajax_hyperlinks',[
                                            'playlist_name' => $playlist_name,
                                            'vbaHyperlinks' => $vbaHyperlinks,
                                            'count_vbaHyperlinks' => $count_vbaHyperlinks
                                          ])->render();  
    
        return response()->json(array('success'=>true,'html'=>$returnHTML));                                          
     }
  
  
     public function GetVbaSorting(Request $request){
      $playlist_name='VBA - Sorting in Hindi';
          $vbaSorting=Videos_lists::select(
                                                'video_id',
                                                'channel_title',
                                                'video_title',
                                                'thumbnail',
                                                'view_count',
                                                'duration'
                                              )
                                              ->where('playlist',$playlist_name)
                                              ->orderBy('published_datetime','desc')
                                              ->get();
  
          $count_vbaSorting=Videos_lists::where('playlist',$playlist_name)
                                        ->count();
  
  
          $returnHTML=view('ajax_vba_sorting',[
                                          'vbaSorting' => $vbaSorting,
                                          'count_vbaSorting' => $count_vbaSorting,
                                          'playlist_name' => $playlist_name
                                        ])->render();  
  
          return response()->json(array('success'=>true,'html'=>$returnHTML));    
     }
  
  
     public function GetVbaProject(Request $request){
      $playlist_name='Excel VBA Projects in Hindi';
      $vbaProjects=Videos_lists::select(
                                        'video_id',
                                        'channel_title',
                                        'video_title',
                                        'thumbnail',
                                        'view_count',
                                        'duration'
                                      )
                                      ->where('playlist',$playlist_name)
                                      ->orderBy('published_datetime','desc')
                                      ->get();                            
      
  
      $count_vbaProjects=Videos_lists::where('playlist',$playlist_name)
                                        ->count();     
  
  
      $returnHTML=view('ajax_vba_projects',[
                                          'count_vbaProjects' => $count_vbaProjects,
                                          'vbaProjects' => $vbaProjects,
                                          'playlist_name' => $playlist_name
                                        ])->render();  
  
          return response()->json(array('success'=>true,'html'=>$returnHTML));                                      
     }
  
     public function ViewAllViedeos(Request $request){
       $playlist_name=$request->playlist_name;
       $all_video_list=Videos_lists::select(
                                            'video_id',
                                            'channel_title',
                                            'video_title',
                                            'thumbnail',
                                            'view_count',
                                            'duration',
                                            'description',
                                          )
                                    ->where('parent_playlist',$playlist_name)
                                    ->orderBy('published_datetime')
                                    ->get();
  
       return view('all_videos',[
                                'all_video_list' => $all_video_list,
                                'playlist_name' => $playlist_name,
                              ]);
     }
  
  
     public function ViewAllChildPlaylist(Request $request){
      $playlist_name=$request->playlist_name;
      $all_video_list=Videos_lists::select(
                                           'video_id',
                                           'channel_title',
                                           'video_title',
                                           'thumbnail',
                                           'view_count',
                                           'duration',
                                           'description',
                                         )
                                   ->where('playlist',$playlist_name)
                                   ->orderBy('published_datetime')
                                   ->get();
  
      return view('all_videos',[
                               'all_video_list' => $all_video_list,
                               'playlist_name' => $playlist_name,
                             ]);
    }

    
   public function Logout(Request $request){
    $request->session()->forget('name');
    $request->session()->forget('email');
    $request->session()->forget('user_mobile_no');
    return redirect('/');
   } 
}
