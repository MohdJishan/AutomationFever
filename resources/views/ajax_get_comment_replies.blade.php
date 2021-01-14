@foreach ($comment_replies as $item)
<div class="media">
    <h5>{{$item->user_name}}</h5>
    <div class="media-left">
        {{-- <a href="#">    
        </a> --}}
    </div>
    <div class="media-body">
        <p>
            {{$item->comment_body}}
        </p>
        <a href="#small-dialog5" class="play-icon popup-with-zoom-anim btn btn-warning btn-reply-comment" data-video-id="{{$item->video_id}}" data-comment-id="{{$item->id}}" style="float:right">
            Reply
        </a>
    </div>
</div> 
@endforeach