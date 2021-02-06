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
            <a href="#small-dialog5" class="play-icon popup-with-zoom-anim  btn-sm btn-reply-comment comment_button" data-video-id="{{$video_id}}" data-comment-id="{{$comment_id}}"  style="padding:3px 8px 3px 8px">
                  Reply
            </a>
    </div>
</div> 