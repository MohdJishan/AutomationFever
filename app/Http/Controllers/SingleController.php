<?php

namespace App\Http\Controllers;

use App\Models\Videos_lists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Comment;
use app\models\Comments_reply;

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


        $comments=Comment::select(
                                    'id',
                                    'user_id',
                                    'user_name',
                                    'comment_body',
                                    'is_reply_found',
                                    'reply_count',
                                )
                                ->where('video_id',$video_id)
                                ->orderBy('created_at','desc')
                                ->get(); 
                                
        $total_video_comments=Comment::where('video_id',$video_id)
                                       ->count();                                                   

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
                                        ->orderBy('published_datetime')
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
                                        ->orderBy('published_datetime')
                                        ->get();               
        }
          
        $next_video_id=Videos_lists::select(
                                             'video_id',
                                              'video_title')
                                    ->orderBy('published_datetime')     
                                    ->where('playlist',$playlist_name->playlist)
                                    ->where('published_datetime','>',$video_details->published_datetime)
                                    ->first();   
                                    

        return view('single',[
                                'video_id'=>$video_id,
                                'video_details' => $video_details,
                                'up_next_videos' => $up_next_videos,
                                'next_video_id' => $next_video_id,
                                'total_video_comments' => $total_video_comments,
                                'comments' => $comments,
                            ]);

    }
    
    
    public function GetVideoTextDescription(Request $request){
        $video_id=$request->video_id;
        $text_description=Videos_lists::select('text_description')
                                        ->where('video_id',$video_id)
                                        ->first();


         
            $returnHTML=view('ajax_get_text_description',[
                'text_description' => $text_description,
                'video_id' => $video_id,
            ])->render();  

        return response()->json(array('success'=>true,'html'=>$returnHTML));                                  
    }

    public function GetCommentReplies(Request $request){
        $comment_id=$request->comment_id;
        $comment_replies=Comment_replys::select(
                                                    'comment_id',
                                                    'user_id',
                                                    'user_name',
                                                    'comment_body'
                                                )
                                        ->where('comment_id',$comment_id)
                                        ->get();


         
            $returnHTML=view('ajax_get_comment_replies',[
                'comment_replies' => $comment_replies,
                'comment_id' => $comment_id,
            ])->render();  

        return response()->json(array('success'=>true,'html'=>$returnHTML));                                
    }
}
