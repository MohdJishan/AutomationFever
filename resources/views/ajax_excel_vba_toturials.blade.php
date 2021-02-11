<div class="heading-right float-right">
    <a href="{{route('view-all',['playlist_name'=>$playlist_name])}}">View All</a>
</div>
<div class="recommended-info">
    <h3>Excel VBA Tutorials in Hindi<span class="badge badge-pill badge-info">{{$count_excelVBATutorials}}</span></h3>
</div>

<script src="{{ asset('js/responsiveslides.min.js')}}"></script>
<script>
   // You can also use "$(window).load(function() {"
   $(window).load(function() {
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
                                        <a href=" {{$excelVBATutorials[$indx]->page_url}}"><img src="images/{{$excelVBATutorials[$indx]->thumbnail}}" alt="" /></a>
                                        <div class="time small-time slider-time">
                                            <p>{{$excelVBATutorials[$indx]->duration}}</p>
                                        </div>
                                        <div class="clck small-clck">
                                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="resent-grid-info recommended-grid-info">
                                    <h5><a href="{{$excelVBATutorials[$indx]->page_url}}" class="title">{{$excelVBATutorials[$indx]->video_title}}</a></h5>
                                        <div class="slid-bottom-grids">
                                            <div class="slid-bottom-grid">
                                                <p class="author author-info"><a href='#' class="author">Automation Fever</a></p>
                                            </div>
                                            <div class="slid-bottom-grid slid-bottom-right">
                                                <p class="views views-info"> {{ number_format($excelVBATutorials[$indx]->view_count,0,'.',',')}} views</p>
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