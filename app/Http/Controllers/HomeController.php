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


    public function LoadBasicVbaRecentVideos(Request $request){
      $basic_vba_videos=Videos_lists::select(
                                      'video_id',
                                      'duration',
                                      'video_title',
                                      'published_datetime',
                                      'thumbnail',
                                      'course_name',
                                      'view_count',
                                      'page_url',
                                    )
                                   ->where('course_name','basic-vba')
                                   ->limit(12)
                                   ->orderBy('published_datetime','desc')
                                   ->get();

      $returnHTML=view('ajax-recent-basic-vba-videos',
                                  [
                                    'basic_vba_videos' => $basic_vba_videos,
                                 ])->render();       
                                 
                                //  $returnHTML='abv';;
                                   
      return response()->json(array('success'=>true,'html'=>$returnHTML));
    }

    public function LoadAdvancedVbaRecentVideos(Request $request){
      $advanced_vba_videos=Videos_lists::select(
                                      'video_id',
                                      'duration',
                                      'video_title',
                                      'published_datetime',
                                      'thumbnail',
                                      'course_name',
                                      'view_count',
                                      'page_url',
                                    )
                                   ->where('course_name','advanced-vba')
                                   ->limit(12)
                                   ->orderBy('published_datetime','desc')
                                   ->get();

      $returnHTML=view('ajax-recent-advanced-vba-videos',
                                  [
                                    'advanced_vba_videos' => $advanced_vba_videos,
                                 ])->render();                                     
                                   
      return response()->json(array('success'=>true,'html'=>$returnHTML));
    }


    public function LoadVbaProjectsRecentVideos(Request $request){
      $vba_projects_videos=Videos_lists::select(
                                      'video_id',
                                      'duration',
                                      'video_title',
                                      'published_datetime',
                                      'thumbnail',
                                      'course_name',
                                      'view_count',
                                      'page_url',
                                    )
                                   ->where('course_name','vba-projects')
                                   ->limit(12)
                                   ->orderBy('published_datetime','desc')
                                   ->get();

      $returnHTML=view('ajax-recent-vba-projects-videos',
                                  [
                                    'vba_projects_videos' => $vba_projects_videos,
                                 ])->render();                                     
                                 
      return response()->json(array('success'=>true,'html'=>$returnHTML));
    }

    public function LoadExcelTipsAndTricksRecentVideos(Request $request){
      $excel_tips_and_tricks_videos=Videos_lists::select(
                                      'video_id',
                                      'duration',
                                      'video_title',
                                      'published_datetime',
                                      'thumbnail',
                                      'course_name',
                                      'view_count',
                                      'page_url',
                                    )
                                   ->where('course_name','excel-tips-and-tricks')
                                   ->limit(12)
                                   ->orderBy('published_datetime','desc')
                                   ->get();

      $returnHTML=view('ajax-recent-excel-tips-and-tricks-videos',
                                  [
                                    'excel_tips_and_tricks_videos' => $excel_tips_and_tricks_videos,
                                 ])->render();                                     
                                   
      return response()->json(array('success'=>true,'html'=>$returnHTML));
    }


    public function RecentVideos(){
       $basicvba_videoCount=Videos_lists::where('course_name','basic-vba')
                                            ->count();

       $advanced_videoCount=Videos_lists::where('course_name','advanced-vba')
                                           ->count(); 

        $exceltipandtricks_videoCount=Videos_lists::where('course_name','excel-tips-and-tricks')
                                           ->count();                                           
                                           

        $uipath_videoCount=Videos_lists::where('course_name','uipath')
                                           ->count();                                                                                      

        return view('home', [
                              'basicvba_videoCount' => $basicvba_videoCount,
                              'advanced_videoCount' => $advanced_videoCount,
                              'exceltipandtricks_videoCount' => $exceltipandtricks_videoCount,
                              'uipath_videoCount'   => $uipath_videoCount,
                      ]);
      } //RecentVideos

    //Fetch All videos titles from table to be display on playlist
      protected function GetBasicVbaTutorialsList(Request $request){
          $basic_vba_list=Videos_lists::select(
                                                'video_id',
                                                'video_title',
                                                'page_url',
                                                'duration',
                                              )
                                         ->where('course_name','basic-vba')  
                                         ->orderBy('course_sortBy')   
                                        ->get();                                    
        
          $returnHTML=view('ajax-get-basic-vba-list',
                                      [
                                        'basic_vba_list' => $basic_vba_list,
                                     ])->render();                                     
                                       
          return response()->json(array('success'=>true,'html'=>$returnHTML));
      } //end of GetBasicVbaTutorialsList



      protected function GetAdvancedVbaTutorialsList(Request $request){
            $advanced_vba_list=Videos_lists::select(
                                                  'video_id',
                                                  'video_title',
                                                  'page_url',
                                                  'duration',
                                                )
                                           ->where('course_name','advanced-vba')     
                                           ->orderBy('course_sortBy')                                           
                                          ->get();                                    
          
            $returnHTML=view('ajax-get-advanced-vba-list',
                                        [
                                          'advanced_vba_list' => $advanced_vba_list,
                                       ])->render();                                     
                                         
            return response()->json(array('success'=>true,'html'=>$returnHTML));
        } //end of GetAdvancedVbaTutorialsList
  

        protected function GetExcelTipsAndTricksTutorialsList(Request $request){
          $excel_tips_and_tricks_list=Videos_lists::select(
                                                'video_id',
                                                'video_title',
                                                'page_url',
                                                'duration',
                                              )
                                         ->where('course_name','excel-tips-and-tricks')     
                                        ->get();                                    
        
          $returnHTML=view('ajax-get-excel-tips-and-tricks-list',
                                      [
                                        'excel_tips_and_tricks_list' => $excel_tips_and_tricks_list,
                                     ])->render();                                     
                                       
          return response()->json(array('success'=>true,'html'=>$returnHTML));
      } //end of GetExcelTipsAndTricksTutorialsList

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
                                              'duration',
                                              'page_url'
                                            )
                                            ->limit(3)
                                            ->orderBy('published_datetime','desc')
                                            ->get();
  
  
          $returnHTML=view('ajax_recent_videos',['recent_videos'=>$recent_videos])->render();  
  
          return response()->json(array('success'=>true,'html'=>$returnHTML));
        }
  
  
        public function GetExcelVbaToturials(Request $request){
          $playlist_name=$request->playlist_name;
          $excelVBATutorials=Videos_lists::select(
                                                  'video_id',
                                                  'channel_title',
                                                  'video_title',
                                                  'thumbnail',
                                                  'view_count',
                                                  'duration',
                                                  'page_url'
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
                                          'duration',
                                          'page_url'
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
                                                'duration',
                                                'page_url'
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
                                          'duration',
                                          'page_url'
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
                                                'duration',
                                                'page_url'
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
                                        'duration',
                                        'page_url'
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
                                            'page_url',
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
                                           'page_url',
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
