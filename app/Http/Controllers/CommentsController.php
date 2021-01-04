<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Comments_replys;

class CommentsController extends Controller
{
    public function AddComment(Request $request){

        $user_name=$request->input('user_name_comment');
        $user_email=$request->input('user_email_comment');
        $user_comment=$request->input('user_comment');
        $video_id=$request->input('video_id');

        $comment=new Comment();
        $comment->user_id=$user_email;
        $comment->user_name=$user_name;
        $comment->comment_body=$user_comment;
        $comment->video_id=$video_id;
        $comment->save();

        return redirect()->back();
        
    }

    public function ReplyComment(Request $request){

        $user_name=$request->input('user_name_reply');
        $user_email=$request->input('user_email_reply');
        $user_comment=$request->input('user_comment_reply');
        $video_id=$request->input('video_id_reply');
        $parent_comment_id=$request->input('comment_id_reply');

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

        return redirect()->back();
        
    }
}
