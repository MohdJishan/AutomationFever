<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Comments_replys;

class CommentsController extends Controller
{
    public function AddComment(Request $request){

        $user_name=$request->user_name_comment;
        $user_email=$request->user_email_comment;
        $user_comment=$request->user_comment;
        $video_id=$request->video_id;

        $comment=new Comment();
        $comment->user_id=$user_email;
        $comment->user_name=$user_name;
        $comment->comment_body=$user_comment;
        $comment->video_id=$video_id;
        $comment->save();

        $returnHTML=view('ajax_add_comment',[
            'comment_id' => $comment->id,
            'video_id' => $video_id,
            'comment_body' => $user_comment,
            'user_name' => $user_name,
          ])->render();  


       return response()->json(array('success'=>true,'html'=>$returnHTML)); 

        // return redirect()->back();    
    }

    public function ReplyComment(Request $request){
        $user_name=$request->user_name_reply;
        $user_email=$request->user_email_reply;
        $user_comment=$request->user_comment_reply;
        $video_id=$request->video_id_reply;
        $parent_comment_id=$request->comment_id_reply;

        $comment_reply=new Comments_replys();
        $comment_reply->user_id=$user_email;
        $comment_reply->user_name=$user_name;
        $comment_reply->comment_body=$user_comment;
        $comment_reply->video_id=$video_id;
        $comment_reply->comment_id=$parent_comment_id;
        $comment_reply->save();

       $comment=Comment::select(
                                'id',
                                'is_reply_found',
                                'reply_count'
                            )
                            ->where('id',$parent_comment_id)
                            ->first();

          if($comment->is_reply_found==null){
            Comment::where('id',$comment->id)
                    ->update(['is_reply_found'=>1,'reply_count'=>1]);
          } else{
            Comment::where('id',$comment->id)
                     ->update(['reply_count'=>$comment->reply_count+1]);
          }                   

          $returnHTML=view('ajax_comment_reply',[
            'comment_id' => $comment->id,
            'video_id' => $video_id,
            'comment_body' => $user_comment,
            'user_name' => $user_name,
          ])->render();  


       return response()->json(array('success'=>true,'html'=>$returnHTML)); 
        // return redirect()->back();        
    }
}
