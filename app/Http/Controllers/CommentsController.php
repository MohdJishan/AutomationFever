<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

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

        $comment=new Comment();
        $comment->user_id=$user_email;
        $comment->user_name=$user_name;
        $comment->comment_body=$user_comment;
        $comment->video_id=$video_id;
        $comment->parent_comment_id=$parent_comment_id;
        $comment->save();

        return redirect()->back();
        
    }
}
