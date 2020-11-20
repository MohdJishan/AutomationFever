<?php

namespace App\Http\Controllers;

use App\Models\Videos_lists;
use Illuminate\Http\Request;


class SingleController extends Controller
{
    protected function ShowSingleVideo(Request $request){
        $video_id=$request->video_id;

        $video_details=Videos_lists::select(
                                            'video_id',
                                            'video_title',
                                            'published_datetime',
                                            'description',
                                            'comment_count',
                                            'file1_url',
                                            'meta_data',
                                            'meta_description',
                                        )
                                        ->where('video_id',$video_id)
                                        ->first();
        
        $playlist_name=Videos_lists::select('playlist','parent_playlist')
                                    ->where('video_id',$video_id)
                                    ->first();


        if($playlist_name==null){
            $up_next_videos=Videos_lists::select(
                                                    'thumbnail',
                                                    'video_title',
                                                    'channel_title',
                                                    'view_count',
                                                    'video_id',
                                        )
                                        ->where('parent_playlist','Excel VBA Tutorials in Hindi')
                                        ->where('video_id','!=',$video_id)
                                        ->get();                                
        }else{
            $up_next_videos=Videos_lists::select(
                                                    'thumbnail',
                                                    'video_title',
                                                    'channel_title',
                                                    'view_count',
                                                    'video_id',
                                        )
                                        ->where('playlist',$playlist_name->playlist)
                                        ->where('video_id','!=',$video_id)
                                        ->get();               
        }
            

        return view('single',[
                                'video_id'=>$video_id,
                                'video_details' => $video_details,
                                'up_next_videos' => $up_next_videos,
                            ]);

    }    
}
