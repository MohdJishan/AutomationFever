<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class RefreshVideoDetails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minute:RefreshVideosDetails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Will Refresh the video details using Youtube API';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       $total_videos=DB::table('videos_list')
                        ->count();
        
        $cnt=ceil($total_videos/50);
  
                    
        for($indx=0; $indx<$cnt; $indx++)
             {                            
                $video_ids= DB::table('videos_list')
                                    ->select('video_id')
                                    ->skip($indx*50)
                                    ->take(50)
                                    ->get();
                
                                    
                $api_key=config('services.youtube.api_key');
                $part='statistics';
                $search_endpoint=config('services.youtube.videos_search_endpoint');;
                $video_keys=$video_ids->implode('video_id',',');

                $url=$search_endpoint.  "?part=" . $part . "&key=" .$api_key ."&id=" . $video_keys;

                $response=Http::get($url);
                
                $response=json_decode($response,true);
                

                foreach($response['items'] as $val){
                        $video_id=$val['id'];
                        $viewCount=$val['statistics']['viewCount'];
                        $likeCount=$val['statistics']['likeCount'];
                        $dislikeCount=$val['statistics']['dislikeCount'];
                        $commentCount=$val['statistics']['commentCount'];
                        $record_affected=DB::table('videos_list')
                                        ->where('video_id',$video_id)
                                        ->update([
                                                    'view_count' => $viewCount,
                                                    'like_count' => $likeCount,
                                                    'dislike_count' => $dislikeCount,
                                                    'comment_count'=> $commentCount
                                                ]);
                                                
                } //end of foreach loop
            }// end of for loop    
        return 0;
    }
}
