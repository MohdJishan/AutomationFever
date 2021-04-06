 @foreach ($up_next_videos as $item)
    @if ($item->video_id != $video_id)
        <div class="single-right-grids">
            <div class="col-md-4 single-right-grid-left">
                <a href="{{route('single',['video_id'=>$item->video_id])}}"><img src="{{ asset('images/'. $item->thumbnail.'')}}" alt="" /></a>
            </div>
            <div class="col-md-8 single-right-grid-right">
                <a href="{{route('single',['video_id'=>$item->video_id])}}" class="title"> {{$item->video_title}}</a>
                <p class="author"><a href="#" class="author">Automation Fever</a></p>
                <p class="views">{{$item->view_count}} views</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    @else
        <div class="single-right-grids" style="border-left: 5px solid #F46001; font-weight:900; opacity:.4; background-color:#ffffff">
            <div class="col-md-4 single-right-grid-left">
                <a href="{{route('single',['video_id'=>$item->video_id])}}"><img src="{{ asset('images/'. $item->thumbnail.'')}}" alt="" /></a>
            </div>
            <div class="col-md-8 single-right-grid-right">
                <a href="{{route('single',['video_id'=>$item->video_id])}}" class="title"> {{$item->video_title}}</a>
                <p class="author"><a href="#" class="author">Automation Fever</a></p>
                <p class="views">{{$item->view_count}} views</p>
            </div>
            <div class="clearfix"> </div>
        </div> 
    @endif
@endforeach 