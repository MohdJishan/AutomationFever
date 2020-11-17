<div class="heading-right float-right">
    <a href="{{route('view-all-videos',['playlist_name'=>$playlist_name])}}">View All</a>
</div>
<div class="recommended-info">
            <h3>
                VBA - Hyperlinks in Hindi<span class="badge badge-pill badge-info">{{$count_vbaHyperlinks}}</span>
            </h3>
</div>

        @foreach ($vbaHyperlinks as $item)
            <div class="col-md-3 resent-grid recommended-grid">
                <div class="resent-grid-img recommended-grid-img">
                    <a href="{{route('single',['video_id'=>$item->video_id])}}"><img src="images/{{$item->thumbnail}}" alt="" /></a>
                    <div class="time small-time">
                        <p>{{$item->duration}}</p>
                    </div>
                    <div class="clck small-clck">
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="resent-grid-info recommended-grid-info video-info-grid">
                    <h5><a href="{{route('single',['video_id'=>$item->video_id])}}" class="title">{{$item->video_title}}</a></h5>
                    <ul>
                        <li><p class="author author-info"><a href="#" class="author">{{$item->channel_title}}</a></p></li>
                        <li class="right-list"><p class="views views-info">{{$item->view_count}} views</p></li>
                    </ul>
                </div>
            </div>
        @endforeach
        <div class="clearfix"> </div>