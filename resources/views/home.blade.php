@extends('master-layout.master')

@section('application-title','Home')

@section('content')
    <div class="top-grids">
        <div class="recommended-info">
            <h3>Recent Videos</h3>
        </div>

@foreach ($responce->items as $key => $item)
        <div class="col-md-4 resent-grid recommended-grid slider-top-grids video-id-class" data-video-id="{{$item->id->videoId}}">
            <div class="resent-grid-img recommended-grid-img">
            <a href="single.php"><img src="{{$item->snippet->thumbnails->medium->url}}" alt="" /></a>
                <div class="time small-time slider-time">
                <p data-video-time='{{$item->id->videoId}}'>00:00</p>
                </div>
                <div class="clck small-clck">
                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                </div>
            </div>
            <div class="resent-grid-info recommended-grid-info">
                <h3>
                    <a href="single.php" class="title title-info">
                        {{$item->snippet->title}}
                    </a>
                </h3>
                <ul>
                    <li><p class="author author-info"><a href="#" class="author">{{$item->snippet->channelTitle}}</a></p></li>
                    <li class="right-list">
                        <p class="views views-info">
                        <span data-views='{{$item->id->videoId}}'>0</span> views
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
                <h3>Animated Cartoon</h3>
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
                    <li>
                        <div class="animated-grids">
                            <div class="col-md-3 resent-grid recommended-grid slider-first">
                                <div class="resent-grid-img recommended-grid-img">
                                    <a href="single.php"><img src="images/c.jpg" alt="" /></a>
                                    <div class="time small-time slider-time">
                                        <p>7:34</p>
                                    </div>
                                    <div class="clck small-clck">
                                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="resent-grid-info recommended-grid-info">
                                    <h5><a href="single.php" class="title">Varius sit sed viverra nullam viverra nullam interdum metus</a></h5>
                                    <div class="slid-bottom-grids">
                                        <div class="slid-bottom-grid">
                                            <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                                        </div>
                                        <div class="slid-bottom-grid slid-bottom-right">
                                            <p class="views views-info">2,114,200 views</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 resent-grid recommended-grid slider-first">
                                <div class="resent-grid-img recommended-grid-img">
                                    <a href="single.php"><img src="images/c1.jpg" alt="" /></a>
                                    <div class="time small-time slider-time">
                                        <p>6:23</p>
                                    </div>
                                    <div class="clck small-clck">
                                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="resent-grid-info recommended-grid-info">
                                    <h5><a href="single.php" class="title">Nullam interdum metus varius viverra nullam sit amet viverra</a></h5>
                                    <div class="slid-bottom-grids">
                                        <div class="slid-bottom-grid">
                                            <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                                        </div>
                                        <div class="slid-bottom-grid slid-bottom-right">
                                            <p class="views views-info">14,200 views</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 resent-grid recommended-grid slider-first">
                                <div class="resent-grid-img recommended-grid-img">
                                    <a href="single.php"><img src="images/c2.jpg" alt="" /></a>
                                    <div class="time small-time slider-time">
                                        <p>2:45</p>
                                    </div>
                                    <div class="clck small-clck">
                                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="resent-grid-info recommended-grid-info">
                                    <h5><a href="single.php" class="title">Varius sit sed viverra nullam viverra nullam interdum metus</a></h5>
                                    <div class="slid-bottom-grids">
                                        <div class="slid-bottom-grid">
                                            <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                                        </div>
                                        <div class="slid-bottom-grid slid-bottom-right">
                                            <p class="views views-info">2,114,200 views</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 resent-grid recommended-grid slider-first">
                                <div class="resent-grid-img recommended-grid-img">
                                    <a href="single.php"><img src="images/c3.jpg" alt="" /></a>
                                    <div class="time small-time slider-time">
                                        <p>4:34</p>
                                    </div>
                                    <div class="clck small-clck">
                                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="resent-grid-info recommended-grid-info">
                                    <h5><a href="single.php" class="title">Nullam interdum metus viverra nullam varius sit sed viverra</a></h5>
                                    <div class="slid-bottom-grids">
                                        <div class="slid-bottom-grid">
                                            <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                                        </div>
                                        <div class="slid-bottom-grid slid-bottom-right">
                                            <p class="views views-info">2,114,200 views</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </li>
                    <li>
                        <div class="animated-grids">
                            <div class="col-md-3 resent-grid recommended-grid slider-first">
                                <div class="resent-grid-img recommended-grid-img">
                                    <a href="single.php"><img src="images/c1.jpg" alt="" /></a>
                                    <div class="time small-time slider-time">
                                        <p>4:42</p>
                                    </div>
                                    <div class="clck small-clck">
                                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="resent-grid-info recommended-grid-info">
                                    <h5><a href="single.php" class="title">Varius sit sed viverra viverra nullam nullam interdum metus</a></h5>
                                    <div class="slid-bottom-grids">
                                        <div class="slid-bottom-grid">
                                            <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                                        </div>
                                        <div class="slid-bottom-grid slid-bottom-right">
                                            <p class="views views-info">2,114,200 views</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 resent-grid recommended-grid slider-first">
                                <div class="resent-grid-img recommended-grid-img">
                                    <a href="single.php"><img src="images/c2.jpg" alt="" /></a>
                                    <div class="time small-time slider-time">
                                        <p>6:14</p>
                                    </div>
                                    <div class="clck small-clck">
                                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="resent-grid-info recommended-grid-info">
                                    <h5><a href="single.php" class="title">Nullam interdum metus viverra nullam varius sit sed viverra</a></h5>
                                    <div class="slid-bottom-grids">
                                        <div class="slid-bottom-grid">
                                            <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                                        </div>
                                        <div class="slid-bottom-grid slid-bottom-right">
                                            <p class="views views-info">2,114,200 views</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 resent-grid recommended-grid slider-first">
                                <div class="resent-grid-img recommended-grid-img">
                                    <a href="single.php"><img src="images/c3.jpg" alt="" /></a>
                                    <div class="time small-time slider-time">
                                        <p>2:34</p>
                                    </div>
                                    <div class="clck small-clck">
                                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="resent-grid-info recommended-grid-info">
                                    <h5><a href="single.php" class="title">varius sit sed viverra viverra nullam Nullam interdum metus</a></h5>
                                    <div class="slid-bottom-grids">
                                        <div class="slid-bottom-grid">
                                            <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                                        </div>
                                        <div class="slid-bottom-grid slid-bottom-right">
                                            <p class="views views-info">2,114,200 views</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 resent-grid recommended-grid slider-first">
                                <div class="resent-grid-img recommended-grid-img">
                                    <a href="single.php"><img src="images/c.jpg" alt="" /></a>
                                    <div class="time small-time slider-time">
                                        <p>5:12</p>
                                    </div>
                                    <div class="clck small-clck">
                                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="resent-grid-info recommended-grid-info">
                                    <h5><a href="single.php" class="title">Nullam interdum metus viverra nullam varius sit sed viverra</a></h5>
                                    <div class="slid-bottom-grids">
                                        <div class="slid-bottom-grid">
                                            <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                                        </div>
                                        <div class="slid-bottom-grid slid-bottom-right">
                                            <p class="views views-info">1,14,200 views</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </li>
                    <li>
                        <div class="animated-grids">
                            <div class="col-md-3 resent-grid recommended-grid slider-first">
                                <div class="resent-grid-img recommended-grid-img">
                                    <a href="single.php"><img src="images/c2.jpg" alt="" /></a>
                                    <div class="time small-time slider-time">
                                        <p>4:42</p>
                                    </div>
                                    <div class="clck small-clck">
                                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="resent-grid-info recommended-grid-info">
                                    <h5><a href="single.php" class="title">Varius sit sed viverra viverra nullam nullam interdum metus</a></h5>
                                    <div class="slid-bottom-grids">
                                        <div class="slid-bottom-grid">
                                            <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                                        </div>
                                        <div class="slid-bottom-grid slid-bottom-right">
                                            <p class="views views-info">2,114,200 views</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 resent-grid recommended-grid slider-first">
                                <div class="resent-grid-img recommended-grid-img">
                                    <a href="single.php"><img src="images/c3.jpg" alt="" /></a>
                                    <div class="time small-time slider-time">
                                        <p>6:14</p>
                                    </div>
                                    <div class="clck small-clck">
                                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="resent-grid-info recommended-grid-info">
                                    <h5><a href="single.php" class="title">Nullam interdum metus viverra nullam varius sit sed viverra</a></h5>
                                    <div class="slid-bottom-grids">
                                        <div class="slid-bottom-grid">
                                            <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                                        </div>
                                        <div class="slid-bottom-grid slid-bottom-right">
                                            <p class="views views-info">2,114,200 views</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 resent-grid recommended-grid slider-first">
                                <div class="resent-grid-img recommended-grid-img">
                                    <a href="single.php"><img src="images/c.jpg" alt="" /></a>
                                    <div class="time small-time slider-time">
                                        <p>2:34</p>
                                    </div>
                                    <div class="clck small-clck">
                                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="resent-grid-info recommended-grid-info">
                                    <h5><a href="single.php" class="title">varius sit sed viverra viverra nullam Nullam interdum metus</a></h5>
                                    <div class="slid-bottom-grids">
                                        <div class="slid-bottom-grid">
                                            <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                                        </div>
                                        <div class="slid-bottom-grid slid-bottom-right">
                                            <p class="views views-info">2,114,200 views</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 resent-grid recommended-grid slider-first">
                                <div class="resent-grid-img recommended-grid-img">
                                    <a href="single.php"><img src="images/c3.jpg" alt="" /></a>
                                    <div class="time small-time slider-time">
                                        <p>5:12</p>
                                    </div>
                                    <div class="clck small-clck">
                                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="resent-grid-info recommended-grid-info">
                                    <h5><a href="single.php" class="title">Nullam interdum metus viverra nullam varius sit sed viverra</a></h5>
                                    <div class="slid-bottom-grids">
                                        <div class="slid-bottom-grid">
                                            <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                                        </div>
                                        <div class="slid-bottom-grid slid-bottom-right">
                                            <p class="views views-info">1,14,200 views</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </li>
                    <li>
                        <div class="animated-grids">
                            <div class="col-md-3 resent-grid recommended-grid slider-first">
                                <div class="resent-grid-img recommended-grid-img">
                                    <a href="single.php"><img src="images/c3.jpg" alt="" /></a>
                                    <div class="time small-time slider-time">
                                        <p>4:42</p>
                                    </div>
                                    <div class="clck small-clck">
                                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="resent-grid-info recommended-grid-info">
                                    <h5><a href="single.php" class="title">Varius sit sed viverra viverra nullam nullam interdum metus</a></h5>
                                    <div class="slid-bottom-grids">
                                        <div class="slid-bottom-grid">
                                            <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                                        </div>
                                        <div class="slid-bottom-grid slid-bottom-right">
                                            <p class="views views-info">2,114,200 views</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 resent-grid recommended-grid slider-first">
                                <div class="resent-grid-img recommended-grid-img">
                                    <a href="single.php"><img src="images/c.jpg" alt="" /></a>
                                    <div class="time small-time slider-time">
                                        <p>6:14</p>
                                    </div>
                                    <div class="clck small-clck">
                                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="resent-grid-info recommended-grid-info">
                                    <h5><a href="single.php" class="title">Nullam interdum metus viverra nullam varius sit sed viverra</a></h5>
                                    <div class="slid-bottom-grids">
                                        <div class="slid-bottom-grid">
                                            <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                                        </div>
                                        <div class="slid-bottom-grid slid-bottom-right">
                                            <p class="views views-info">2,114,200 views</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 resent-grid recommended-grid slider-first">
                                <div class="resent-grid-img recommended-grid-img">
                                    <a href="single.php"><img src="images/c1.jpg" alt="" /></a>
                                    <div class="time small-time slider-time">
                                        <p>2:34</p>
                                    </div>
                                    <div class="clck small-clck">
                                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="resent-grid-info recommended-grid-info">
                                    <h5><a href="single.php" class="title">varius sit sed viverra viverra nullam Nullam interdum metus</a></h5>
                                    <div class="slid-bottom-grids">
                                        <div class="slid-bottom-grid">
                                            <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                                        </div>
                                        <div class="slid-bottom-grid slid-bottom-right">
                                            <p class="views views-info">2,114,200 views</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 resent-grid recommended-grid slider-first">
                                <div class="resent-grid-img recommended-grid-img">
                                    <a href="single.php"><img src="images/c2.jpg" alt="" /></a>
                                    <div class="time small-time slider-time">
                                        <p>5:12</p>
                                    </div>
                                    <div class="clck small-clck">
                                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="resent-grid-info recommended-grid-info">
                                    <h5><a href="single.php" class="title">Nullam interdum metus viverra nullam varius sit sed viverra</a></h5>
                                    <div class="slid-bottom-grids">
                                        <div class="slid-bottom-grid">
                                            <p class="author author-info"><a href="#" class="author">John Maniya</a></p>
                                        </div>
                                        <div class="slid-bottom-grid slid-bottom-right">
                                            <p class="views views-info">1,14,200 views</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="recommended">
        <div class="recommended-grids">
        <div class="heading-right float-right">
                <a href="#">View All</a>
            </div>
            <div class="recommended-info">
                <h3>Recommended</h3>
            </div>
            <div class="col-md-3 resent-grid recommended-grid">
                <div class="resent-grid-img recommended-grid-img">
                    <a href="single.php"><img src="images/r1.jpg" alt="" /></a>
                    <div class="time small-time">
                        <p>2:34</p>
                    </div>
                    <div class="clck small-clck">
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="resent-grid-info recommended-grid-info video-info-grid">
                    <h5><a href="single.php" class="title">Varius sit sed viverra viverra nullam nullam interdum metus</a></h5>
                    <ul>
                        <li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
                        <li class="right-list"><p class="views views-info">2,114,200 views</p></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 resent-grid recommended-grid">
                <div class="resent-grid-img recommended-grid-img">
                    <a href="single.php"><img src="images/r2.jpg" alt="" /></a>
                    <div class="time small-time">
                        <p>3:02</p>
                    </div>
                    <div class="clck small-clck">
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="resent-grid-info recommended-grid-info video-info-grid">
                    <h5><a href="single.php" class="title">Nullam interdum metus viverra nullam varius sit sed viverra</a></h5>
                    <ul>
                        <li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
                        <li class="right-list"><p class="views views-info">2,114,200 views</p></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 resent-grid recommended-grid">
                <div class="resent-grid-img recommended-grid-img">
                    <a href="single.php"><img src="images/r3.jpg" alt="" /></a>
                    <div class="time small-time">
                        <p>1:34</p>
                    </div>
                    <div class="clck small-clck">
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="resent-grid-info recommended-grid-info video-info-grid">
                    <h5><a href="single.php" class="title">Varius sit sed viverra nullam viverra nullam interdum metus</a></h5>
                    <ul>
                        <li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
                        <li class="right-list"><p class="views views-info">2,114,200 views</p></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 resent-grid recommended-grid">
                <div class="resent-grid-img recommended-grid-img">
                    <a href="single.php"><img src="images/r4.jpg" alt="" /></a>
                    <div class="time small-time">
                        <p>2:09</p>
                    </div>
                    <div class="clck small-clck">
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="resent-grid-info recommended-grid-info video-info-grid">
                    <h5><a href="single.php" class="title">Nullam interdum viverra nullam metus varius sit sed viverra</a></h5>
                    <ul>
                        <li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
                        <li class="right-list"><p class="views views-info">2,114,200 views</p></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="recommended-grids">
            <div class="col-md-3 resent-grid recommended-grid">
                <div class="resent-grid-img recommended-grid-img">
                    <a href="single.php"><img src="images/r4.jpg" alt="" /></a>
                    <div class="time small-time">
                        <p>6:34</p>
                    </div>
                    <div class="clck small-clck">
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="resent-grid-info recommended-grid-info video-info-grid">
                    <h5><a href="single.php" class="title">Varius sit sed viverra nullam viverra nullam interdum metus</a></h5>
                    <ul>
                        <li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
                        <li class="right-list"><p class="views views-info">2,114,200 views</p></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 resent-grid recommended-grid">
                <div class="resent-grid-img recommended-grid-img">
                    <a href="single.php"><img src="images/r5.jpg" alt="" /></a>
                    <div class="time small-time">
                        <p>7:34</p>
                    </div>
                    <div class="clck small-clck">
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="resent-grid-info recommended-grid-info video-info-grid">
                    <h5><a href="single.php" class="title">Nullam interdum metus viverra nullam varius sit sed viverra</a></h5>
                    <ul>
                        <li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
                        <li class="right-list"><p class="views views-info">2,114,200 views</p></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 resent-grid recommended-grid">
                <div class="resent-grid-img recommended-grid-img">
                    <a href="single.php"><img src="images/r6.jpg" alt="" /></a>
                    <div class="time small-time">
                        <p>6:09</p>
                    </div>
                    <div class="clck small-clck">
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="resent-grid-info recommended-grid-info video-info-grid">
                    <h5><a href="single.php" class="title">Varius sit sed viverra nullam viverra nullam interdum metus</a></h5>
                    <ul>
                        <li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
                        <li class="right-list"><p class="views views-info">2,114,200 views</p></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 resent-grid recommended-grid">
                <div class="resent-grid-img recommended-grid-img">
                    <a href="single.php"><img src="images/r1.jpg" alt="" /></a>
                    <div class="time small-time">
                        <p>9:04</p>
                    </div>
                    <div class="clck small-clck">
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="resent-grid-info recommended-grid-info video-info-grid">
                    <h5><a href="single.php" class="title">Nullam interdum metus viverra nullam varius sit sed viverra</a></h5>
                    <ul>
                        <li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
                        <li class="right-list"><p class="views views-info">2,114,200 views</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
          //Ajax token setup for the post requests. 
          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });

            $(document).ready(function(){
                 //Get all video ids
                 var video_id='';
                   $('.video-id-class').each(function(index){
                       if(index==0){
                            video_id=$(this).attr('data-video-id');
                       }else{
                            video_id=video_id + "," + $(this).attr('data-video-id');
                       }
                   });   //$('.video-id-class').each(function(){
                    $.post("{{ URL::route('getVideoDetails') }}"
                              ,{video_id:video_id}
                              ,function(data){
                                  var json_data=data.api_response;
                                  console.log(json_data);
                                  var total_items=json_data['items']['length'];

                                    for (var i=0;i<total_items;i++){
                                      var duration=json_data['items'][i]['contentDetails']['duration'];
                                      var id_video=json_data['items'][i]['id'];
                                      var views=json_data['items'][i]['statistics']['viewCount'];
                                          $("p[data-video-time='"+id_video+"']").text(duration);
                                          $("span[data-views='"+id_video+"']").text(views);
                                    }//end of for
                              }); //end of function  
            }); //end of ready function

    </script>
@endsection