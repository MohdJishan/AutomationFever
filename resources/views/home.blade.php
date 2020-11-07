@extends('master-layout.master')

@section('application-title','Home')

@section('content')
    <div class="top-grids">
        <div class="recommended-info">
            <h3>Recent Videos</h3>
        </div>

@foreach ($recent_videos as $item)
        <div class="col-md-4 resent-grid recommended-grid slider-top-grids video-id-class" data-video-id="">
            <div class="resent-grid-img recommended-grid-img">
            <a href="{{route('single',['video_id'=>$item->video_id])}}"><img src="images/{{$item->thumbnail}}" alt="" />
            </a>
                <div class="time small-time slider-time">
                <p data-video-time=''>{{$item->duration}}</p>
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
     <div class="clearfix"> </div>
    </div>


    <div class="recommended">
        <div class="recommended-grids">
            <div class="heading-right float-right">
                <a href="#">View All</a>
            </div>
            <div class="recommended-info">
            <h3>Excel VBA Tutorials in Hindi<span class="badge badge-pill badge-info">{{$count_excelVBATutorials}}</span></h3>
            </div>
            <script src="js/responsiveslides.min.js"></script>
            <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                // Slideshow 4
                $("#slider3").responsiveSlides({
                    auto: true,
                    pager: false,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                    $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                    $('.events').append("<li>after event fired.</li>");
                    }
                });
            
                });
            </script>
            <div  id="top" class="callbacks_container">
                <ul class="rslides" id="slider3">
                @for ($i = 0; $i < sizeof($excelVBATutorials); $i=$i+4)
                   <li>
                       
                        <div class="animated-grids">
                            @for ($indx = $i; $indx < $i+4; $indx++)    
                                <div class="col-md-3 resent-grid recommended-grid slider-first">
                                    <div class="resent-grid-img recommended-grid-img">
                                        <a href="{{route('single',['video_id'=>$excelVBATutorials[$indx]->video_id])}}"><img src="images/{{$excelVBATutorials[$indx]->thumbnail}}" alt="" /></a>
                                        <div class="time small-time slider-time">
                                            <p>{{$excelVBATutorials[$indx]->duration}}</p>
                                        </div>
                                        <div class="clck small-clck">
                                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="resent-grid-info recommended-grid-info">
                                    <h5><a href="{{route('single',['video_id'=>$excelVBATutorials[$indx]->video_id])}}" class="title">{{$excelVBATutorials[$indx]->video_title}}</a></h5>
                                        <div class="slid-bottom-grids">
                                            <div class="slid-bottom-grid">
                                                <p class="author author-info"><a href="#" class="author">{{$excelVBATutorials[$indx]->channel_title}}</a></p>
                                            </div>
                                            <div class="slid-bottom-grid slid-bottom-right">
                                                <p class="views views-info">{{$excelVBATutorials[$indx]->view_count}} views</p>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor   
                        <div class="clearfix"> </div>
                    </div>
                </li>
                @endfor
                </ul>
            </div>
        </div>
    </div>

  {{-- Vba Loops  --}}
    <div class="recommended">
        <div class="recommended-grids">
          @for ($i = 0; $i < sizeof($vbaLoops); $i=$i+4)
            <div class="recommended-info">
                        <h3>
                        @if ($i==0)
                            VBA - Loops in Hindi<span class="badge badge-pill badge-info">{{$count_vbaLoops}}</span>
                        @endif
                        </h3>
            </div>
                @php
                if (($i+4)<sizeof($vbaLoops)) {
                    $total_items=$i+4;
                }else {
                        $total_items=sizeof($vbaLoops)-$i;         
                    }
                @endphp

                    @for ($indx = $i; $indx < $i+$total_items ; $indx++)
                        <div class="col-md-3 resent-grid recommended-grid">
                            <div class="resent-grid-img recommended-grid-img">
                                <a href="{{route('single',['video_id'=>$vbaLoops[$indx]->video_id])}}"><img src="images/{{$vbaLoops[$indx]->thumbnail}}" alt="" /></a>
                                <div class="time small-time">
                                    <p>{{$vbaLoops[$indx]->duration}}</p>
                                </div>
                                <div class="clck small-clck">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="resent-grid-info recommended-grid-info video-info-grid">
                                <h5><a href="{{route('single',['video_id'=>$vbaLoops[$indx]->video_id])}}" class="title">{{$vbaLoops[$indx]->video_title}}</a></h5>
                                <ul>
                                    <li><p class="author author-info"><a href="#" class="author">{{$vbaLoops[$indx]->channel_title}}</a></p></li>
                                    <li class="right-list"><p class="views views-info">{{$vbaLoops[$indx]->view_count}} views</p></li>
                                </ul>
                            </div>
                        </div>
                    @endfor
                    <div class="clearfix"> </div>
            </div>
           @endfor    
    </div>

{{-- VBA - Text To Columns in Hindi --}}
    <div class="recommended">
        <div class="recommended-grids">
            <div class="recommended-info">
                <h3>VBA - Text To Columns in Hindi<span class="badge badge-pill badge-info">{{$count_vbaTextToCols}}</span></h3>
            </div>
            @foreach ($vbaTextToCols as $item)
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
                        <h5><a href="single.php" class="title">{{$item->video_title}}</a></h5>
                        <ul>
                            <li><p class="author author-info"><a href="#" class="author">{{$item->channel_title}}</a></p></li>
                            <li class="right-list"><p class="views views-info">{{$item->view_count}} views</p></li>
                        </ul>
                    </div>
                </div>
            @endforeach
            <div class="clearfix"> </div>
        </div>
    </div>    

    
 

     {{-- Hyperlink  --}}
    <div class="recommended">
        <div class="recommended-grids">
          @for ($i = 0; $i < sizeof($vbaHyperlinks); $i=$i+4)
            <div class="recommended-info">
                        <h3>
                        @if ($i==0)
                            VBA - Hyperlinks in Hindi<span class="badge badge-pill badge-info">{{$count_vbaHyperlinks}}</span>
                        @endif
                        </h3>
            </div>
                @php
                if (($i+4)<sizeof($vbaHyperlinks)) {
                    $total_items=$i+4;
                }else {
                        $total_items=sizeof($vbaHyperlinks)-$i;         
                    }
                @endphp

                    @for ($indx = $i; $indx < $i+$total_items ; $indx++)
                        <div class="col-md-3 resent-grid recommended-grid">
                            <div class="resent-grid-img recommended-grid-img">
                                <a href="{{route('single',['video_id'=>$vbaHyperlinks[$indx]->video_id])}}"><img src="images/{{$vbaHyperlinks[$indx]->thumbnail}}" alt="" /></a>
                                <div class="time small-time">
                                    <p>{{$vbaHyperlinks[$indx]->duration}}</p>
                                </div>
                                <div class="clck small-clck">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="resent-grid-info recommended-grid-info video-info-grid">
                                <h5><a href="{{route('single',['video_id'=>$vbaHyperlinks[$indx]->video_id])}}" class="title">{{$vbaHyperlinks[$indx]->video_title}}</a></h5>
                                <ul>
                                    <li><p class="author author-info"><a href="#" class="author">{{$vbaHyperlinks[$indx]->channel_title}}</a></p></li>
                                    <li class="right-list"><p class="views views-info">{{$vbaHyperlinks[$indx]->view_count}} views</p></li>
                                </ul>
                            </div>
                        </div>
                    @endfor
                    <div class="clearfix"> </div>
            </div>
           @endfor    
        </div>
    </div>       
</div>


    {{-- VBA - Sorting in Hindi --}}
    <div class="recommended">
        <div class="recommended-grids">
            <div class="recommended-info">
                <h3>VBA - Sorting in Hindi<span class="badge badge-pill badge-info">{{$count_vbaSorting}}</span></h3>
            </div>
            @foreach ($vbaSorting as $item)
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
        </div>
    </div>    


{{-- Excel VBA Projects in Hindi --}}
<div class="recommended">
    <div class="recommended-grids">
        <div class="recommended-info">
            <h3>Excel VBA Projects in Hindi<span class="badge badge-pill badge-info">{{$count_vbaProjects}}</span></h3>
        </div>
        @foreach ($vbaProjects as $item)
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
    </div>
</div>    
    <script>
    </script>
@endsection