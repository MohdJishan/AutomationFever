@foreach ($comments as $item)
  <div class="media">
      <h5>{{$item->user_name}}</h5>
      <div class="media-left">
      </div>
      <div class="media-body">
          <p>
              {{$item->comment_body}}
            <div>
              @if ($item->is_reply_found)
                  @if ($item->reply_count==1)
                    <button class="btn btn-link btn-view-comment" data-view-count="0"  data-comment-id="{{$item->id}}"> View Reply </button>
                  @else
                    <button class="btn btn-link btn-view-comment" data-view-count="0"  data-comment-id="{{$item->id}}"> View {{$item->reply_count}} replies </button> 
                  @endif
                @endif
            </div>
              <div data-view-comment-div="{{$item->id}}">
              </div> 
          </p>
          <a href="#small-dialog5" class="play-icon popup-with-zoom-anim btn-sm btn-reply-comment comment_button" data-video-id="mF3agvrs7nc" data-comment-id="{{$item->id}}" style="padding:3px 8px 3px 8px">
              Reply
          </a>
      </div>
  </div> 
@endforeach