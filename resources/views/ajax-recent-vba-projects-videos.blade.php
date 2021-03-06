<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function() {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: true,
            pager: false,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function() {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function() {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>

@php
$index = 1;
@endphp


@foreach ($vba_projects_videos as $item)
    @if ($index == 1 or ($index-1) % 4 == 0)
        <li>
            <div class="animated-grids">
    @endif

        <div class="col-md-3 resent-grid recommended-grid slider-first">
            <div class="resent-grid-img recommended-grid-img">
                <a href="single.html">
                    <img src="images/{{ $item->thumbnail }}" alt="" />
                </a>
                <div class="time small-time slider-time">
                    <p>{{ $item->duration }}</p>
                </div>
                <div class="clck small-clck">
                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                </div>
            </div>
            <div class="resent-grid-info recommended-grid-info">
                <h5>
                    <a href="single.html" class="title">
                        {{ $item->video_title }}
                    </a>
                </h5>
                <div class="slid-bottom-grids">
                    <div class="slid-bottom-grid">
                        <p class="author author-info">
                            <a href="#" class="author">
                                Automation Fever
                            </a>
                        </p>
                    </div>
                    <div class="slid-bottom-grid slid-bottom-right">
                        <p class="views views-info">
                            {{ $item->view_count }} views
                        </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>



        @if ($index % 4 == 0)
                 <div class="clearfix"> </div>
             </div>
            </li>
        @endif

        @php
                $index=$index+1;    
        @endphp        
@endforeach

@if ($index % 4 != 0)
            <div class="clearfix"> </div>
        </div>
    </li>
@endif

