<div class="media">
    <h5>{{$user_name}}</h5>
    <div class="media-left">
    </div>
    <div class="media-body">
        <p>
            {{$comment_body}}
            <div data-view-comment-div="{{$comment_id}}">
            </div> 
        </p>
            <a href="#small-dialog5" class="play-icon popup-with-zoom-anim btn btn-warning btn-reply-comment" data-video-id="{{$video_id}}" data-comment-id="{{$comment_id}}" style="float:right">
                  Reply
            </a>
    </div>
</div> 