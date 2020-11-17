@foreach ($recent_videos as $item)
    <div class="col-md-4 resent-grid recommended-grid slider-top-grids video-id-class">
               <div class="resent-grid-img recommended-grid-img">
                    <a href="{{route('single',['video_id'=>$item->video_id])}}"><img src="images/{{$item->thumbnail}}" alt="" />
                    </a>
                    <div class="time small-time slider-time">
                    <p>{{$item->duration}}</p>
                    </div>
                    <div class="clck small-clck">
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="resent-grid-info recommended-grid-info">
                    <h3>
                        <a href="{{route('single',['video_id'=>$item->video_id])}}" class="title title-info">
                            {{$item->video_title}}
                        </a>
                    </h3>
                    <ul>
                        <li><p class="author author-info"><a href="#" class="author">{{$item->channel_title}}</a></p></li>
                        <li class="right-list">
                            <p class="views views-info">
                            <span data-views=''>{{$item->view_count}}</span> views
                            </p>
                        </li>
                    </ul>
                </div>   
             
    </div>           
    @endforeach