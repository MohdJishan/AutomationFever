@extends('master-layout.master')


@section('application-title')
  <title>Automation Fever | Home</title>    
@endsection

@section('fevicon')
    <link rel="icon" href="{{ asset('images/AutomationFever_icon.png')}}" type="image/gif" sizes="16x16">
@endsection

@section('meta_data')
        <meta name="keywords" content="Excel vba toturials, vba tutorials, Automation Fever, excel vba tutorial,excel vba tutorial for beginners,excel vba tutorial for beginners in hindi,excel vba tutorial in hindi,excel vba tutorial advanced,excel and vba tutorial,
        excel vba tutorial for beginners in urdu,
        excel vba macro complete tutorial,
        excel vba code tutorial hindi,
        excel vba code tutorial,
        excel vba expert tutorial,
        excel vba beginner tutorial in hindi,
        excel vba loops tutorial,
        excel vba language tutorial,
        excel vba beginner tutorial learnit,
        macro vba excel tutorial,
        tutorial on vba excel,
        excel vba quick tutorial,
        excel to vba programming,
        excel vba web scraping tutorial,
        excel with vba tutorial,
        excel 2010 vba tutorial,
        vba excel 2019 tutorial,
        excel 2013 vba tutorial,
        excel 365 vba tutorial,Automation fever,automationfever.com" />
<meta name="description" content="You can watch excel vba videos here. We are trying to make you understand every topic of vba." />
<meta name="robots" content="noodp"/>
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Excel Vba Tutorials -Automation Fever" />
<meta property="og:description" content="You can watch excel vba videos here. We are trying to make you understand every topic of vba." />
<meta property="og:url" content="http://www.automationfever.com/" />
<meta property="og:site_name" content="AutomationFever" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="You can watch excel vba videos here. We are trying to make you understand every topic of vba." />
<meta name="twitter:title" content="Excel Vba Tutorials -Automation Fever" />
<meta name="twitter:site" content="@AutomationFever" />
<meta name="twitter:creator" content="@AutomationFever" />
@endsection

@section('JsAndCss')
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- bootstrap -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->

<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

<!-- Custom Theme files -->
<link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' media="all" />
<!--start-smoth-scrolling-->
<link href="{{ asset('css/jquery.scrolling-tabs.css') }}" rel='stylesheet' type='text/css' media="all" />


<!-- fonts -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!-- //fonts -->

 {{-- Google Tracker --}}
  <!-- Global site tag (gtag.js) - Google Analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-170183563-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-170183563-1');
</script>
{{-- end of google tracker --}}

<style>
    /* jssor slider loading skin spin css */
    .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes jssorl-009-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }


    /*jssor slider bullet skin 132 css*/
    .jssorb132 {position:absolute;}
    .jssorb132 .i {position:absolute;cursor:pointer;}
    .jssorb132 .i .b {fill:#fff;fill-opacity:0.8;stroke:#000;stroke-width:1600;stroke-miterlimit:10;stroke-opacity:0.7;}
    .jssorb132 .i:hover .b {fill:#000;fill-opacity:.7;stroke:#fff;stroke-width:2000;stroke-opacity:0.8;}
    .jssorb132 .iav .b {fill:#000;stroke:#fff;stroke-width:2400;fill-opacity:0.8;stroke-opacity:1;}
    .jssorb132 .i.idn {opacity:0.3;}

    .jssora051 {display:block;position:absolute;cursor:pointer;}
    .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
    .jssora051:hover {opacity:.8;}
    .jssora051.jssora051dn {opacity:.5;}
    .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
</style>
@endsection

<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/jssor.slider-28.1.0.min.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    jQuery(document).ready(function ($) {

        var jssor_1_SlideoTransitions = [
          [{b:-1,d:1,ls:0.5},{b:0,d:1000,y:5,e:{y:6}}],
          [{b:-1,d:1,ls:0.5},{b:200,d:1000,y:25,e:{y:6}}],
          [{b:-1,d:1,ls:0.5},{b:400,d:1000,y:45,e:{y:6}}],
          [{b:-1,d:1,ls:0.5},{b:600,d:1000,y:65,e:{y:6}}],
          [{b:-1,d:1,ls:0.5},{b:800,d:1000,y:85,e:{y:6}}],
          [{b:-1,d:1,ls:0.5},{b:500,d:1000,y:195,e:{y:6}}],
          [{b:0,d:2000,y:30,e:{y:3}}],
          [{b:-1,d:1,rY:-15,tZ:100},{b:0,d:1500,y:30,o:1,e:{y:3}}],
          [{b:-1,d:1,rY:-15,tZ:-100},{b:0,d:1500,y:100,o:0.8,e:{y:3}}],
          [{b:500,d:1500,o:1}],
          [{b:0,d:1000,y:380,e:{y:6}}],
          [{b:300,d:1000,x:80,e:{x:6}}],
          [{b:300,d:1000,x:330,e:{x:6}}],
          [{b:-1,d:1,r:-110,sX:5,sY:5},{b:0,d:2000,o:1,r:-20,sX:1,sY:1,e:{o:6,r:6,sX:6,sY:6}}],
          [{b:0,d:600,x:150,o:0.5,e:{x:6}}],
          [{b:0,d:600,x:1140,o:0.6,e:{x:6}}],
          [{b:-1,d:1,sX:5,sY:5},{b:600,d:600,o:1,sX:1,sY:1,e:{sX:3,sY:3}}]
        ];

        var jssor_1_options = {
          $AutoPlay: 1,
          $LazyLoading: 1,
          $CaptionSliderOptions: {
            $Class: $JssorCaptionSlideo$,
            $Transitions: jssor_1_SlideoTransitions
          },
          $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
          },
          $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$,
            $SpacingX: 20,
            $SpacingY: 20
          }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*#region responsive code begin*/

        var MAX_WIDTH = 1600;

        function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;

            if (containerWidth) {

                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                jssor_1_slider.$ScaleWidth(expectedWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        ScaleSlider();

        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    });
</script>

@section('slider')
<svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
    <defs>
        <filter id="jssor_1_flt_1" x="-50%" y="-50%" width="200%" height="200%">
            <feGaussianBlur stddeviation="4"></feGaussianBlur>
        </filter>
        <radialGradient id="jssor_1_grd_2">
            <stop offset="0" stop-color="#fff"></stop>
            <stop offset="1" stop-color="#000"></stop>
        </radialGradient>
        <mask id="jssor_1_msk_3">
            <path fill="url(#jssor_1_grd_2)" d="M600,0L600,400L0,400L0,0Z" x="0" y="0" style="position:absolute;overflow:visible;"></path>
        </mask>
    </defs>
</svg>
<div id="jssor_1" style="position:relative;margin:0 auto;top:-20px;left:-15px;width:1600px;height:420px;overflow:hidden;visibility:hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{ asset('img/spin.svg')}}" />
    </div>
    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:420px;overflow:hidden;">
        <div style="background-color:#e7e1d6;">
            <img data-u="image" style="opacity:0.8;" data-src="{{ asset('img/automation_fever-1.jpg')}}" />
            <div data-ts="flat" data-p="275" data-po="40% 50%" style="left:150px;top:40px;width:800px;height:300px;position:absolute;">
                <div data-to="50% 50%" data-t="0" style="left:50px;top:520px;width:400px;height:100px;position:absolute;color:#E96429;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">AUTOMATION</div>
                <div data-to="50% 50%" data-t="1" style="left:50px;top:540px;width:400px;height:100px;position:absolute;opacity:0.5;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">AUTOMATION</div>
                <div data-to="50% 50%" data-t="2" style="left:50px;top:560px;width:400px;height:100px;position:absolute;opacity:0.25;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">AUTOMATION</div>
                <div data-to="50% 50%" data-t="3" style="left:50px;top:580px;width:400px;height:100px;position:absolute;opacity:0.125;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">AUTOMATION</div>
                <div data-to="50% 50%" data-t="4" style="left:50px;top:600px;width:400px;height:100px;position:absolute;opacity:0.06;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">AUTOMATION</div>
                <div data-to="50% 50%" data-t="5" style="left:50px;top:710px;width:700px;height:100px;position:absolute;color:#E96429;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">FEVER</div>
            </div>
        </div>
        <div>
            <img data-u="image" data-src="{{ asset('img/automation_fever-2.jpg') }}" />
            <div data-ts="flat" data-p="540" data-po="40% 50%" style="left:0px;top:0px;width:1600px;height:420px;position:absolute;">
                <div data-to="50% 50%" data-ts="preserve-3d" data-t="6" style="left:350px;top:360px;width:900px;height:500px;position:absolute;">
                    <svg viewbox="0 0 800 60" data-to="50% 50%" width="800" height="60" data-t="7" style="left:0px;top:-70px;display:block;position:absolute;opacity:0;font-family:'Roboto Condensed',sans-serif;font-size:60px;font-weight:700;letter-spacing:0.05em;overflow:visible;">
                        <text fill="#ffff" stroke="#ff9500" stroke-width="2" text-anchor="middle" x="400" y="60">START LEARNING WITH US
                        </text>
                    </svg>
                    {{-- <div data-to="50% 50%" data-t="8" style="filter:url('#jssor_1_flt_1');left:200px;top:0px;width:600px;height:60px;position:absolute;opacity:1;color:#9b3c0c;font-family:Roboto Condensed, sans-serif;font-size:48px;line-height:1.2;letter-spacing:0.1em;text-align:center;">IN SIMPLE LANGUAGE</div> --}}
                    <svg viewbox="0 0 800 100" width="800" height="100" data-t="9" style="left:40px;top:250px;display:block;position:absolute;opacity:0;font-family:'Roboto Condensed',sans-serif;font-size:100px;font-weight:900;letter-spacing:0.5em;overflow:visible;">
                        {{-- <text fill="rgba(255,255,255,0.7)" stroke="#ff9500" text-anchor="middle" x="400" y="100">STEP BY STEP FROM BEGINNING
                        </text> --}}
                    </svg>
                </div>
            </div>
        </div>
        <div style="background-color:#000000;">
            <img data-u="image" style="opacity:0.8;" data-src="{{ asset('img/automation_fever-3.jpg') }}" />
            <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:420px;position:absolute;">
                <svg viewbox="0 0 600 400" data-ts="preserve-3d" width="600" height="400" data-tchd="jssor_1_msk_3" style="left:255px;top:0px;display:block;position:absolute;overflow:visible;">
                    <g mask="url(#jssor_1_msk_3)">
                        <path data-to="300px -180px" fill="none" stroke="rgba(250,251,252,0.5)" stroke-width="20" d="M410-350L410-10L190-10L190-350Z" x="190" y="-350" data-t="10" style="position:absolute;overflow:visible;"></path>
                    </g>
                </svg>
                <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="11" style="left:-800px;top:78px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;overflow:visible;">
                    <text fill="#fafbfc" text-anchor="middle" x="400" y="72">AUTOMATION FEVER
                    </text>
                </svg>
                <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="12" style="left:1600px;top:153px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:60px;font-weight:900;overflow:visible;">
                    <text fill="#fafbfc" text-anchor="middle" x="400" y="72">A GREAT PLACE FOR LEARNING
                    </text>
                </svg>
            </div>
        </div>
        <div>
            <img data-u="image" data-src="{{ asset('img/automation_fever-4.jpg') }}" />
            <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:420px;position:absolute;">
                <div data-to="50% 50%" data-t="13" style="left:100px;top:-20px;width:800px;height:200px;position:absolute;opacity:0;">
                    <div style="left:94px;top:35px;width:480px;height:90px;position:absolute;color:rgba(233,100,41);font-family:'Roboto Condensed',sans-serif;font-size:72px;line-height:1.2;">SUBSCRIBE</div>
                    <div style="left:307px;top:115px;width:400px;height:50px;position:absolute;color:rgba(2555, 255, 255, 0.5);font-family:'Roboto Condensed',sans-serif;font-size:42px;line-height:1.1;text-align:center;background-color:rgb(45 84 94);"><a href="" style="color:rgba(2555, 255, 255);">@automationfever</a></div>
                </div>
            </div>
        </div>
        <div>
            <img data-u="image" data-src="{{ asset('img/automation_fever-5.jpg') }}" />
            <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:420px;position:absolute;">
                <div data-to="50% 50%" data-t="14" style="left:690px;top:140px;width:600px;height:150px;position:absolute;opacity:0;color:#ffffff;font-family:Georgia,'Times New Roman',Times,serif;font-size:60px;line-height:1.2;letter-spacing:0.1em;">LEARN STEP BY STEP<br />FROM BEGINNING</div>
                {{-- <img data-to="50% 50%" data-t="15" style="left:780px;top:350px;width:344px;height:157px;position:absolute;opacity:0;max-width:344px;" data-src="img/wine-atlantic-ocean.png" /> --}}
                <img data-to="50% 50%" data-t="16" style="left:1330px;top:250px;width:112px;height:100px;position:absolute;opacity:0;max-width:172px;" data-src="img/automation-fever-icon.png" />
            </div>
        </div>
    </div>
    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb132" style="position:absolute;bottom:24px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:12px;height:12px;">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
            </svg>
        </div>
    </div>
    <!-- Arrow Navigator -->
    <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
        </svg>
    </div>
    <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
        </svg>
    </div>
</div> 

<!--Slider End  --->

  <!-- tab section -->
  <div class="col-sm-12 col-md-12">
    <div class="main-grids" style="padding: 0 0 0 2px;">
        <div class="recommended" style="margin-bottom: -20px; margin-top:-15px">
            <div class="recommended-grids" style="color:#2D545E;">
                <h1 style="font-size: xx-large;">Our Latest <span style="font-weight:700">Tutorials<span></h1>
                <hr class="hrr">
            </div>
        </div>
   


  <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
  <!--Scrollable tab example -->
          
          <ul class="nav nav-tabs" role="tablist" >
          <li role="presentation" class="active"><a href="#hometab" role="tab" data-toggle="tab" style="color: #2D545E;">Basic VBA</a></li>
          <li role="presentation"><a href="#javatab" role="tab" data-toggle="tab" style="color: #2D545E;">Advanced VBA</a></li>
          <li role="presentation"><a href="#csharptab" role="tab" data-toggle="tab" style="color: #2D545E;">VBA Projects</a></li>
          <li role="presentation"><a href="#mysqltab" role="tab" data-toggle="tab" style="color: #2D545E;">Excel - Tips & Tricks</a></li>
          <li role="presentation"><a href="#jquerytab" role="tab" data-toggle="tab" style="color: #2D545E;">UiPath</a></li>
        </ul>
    
    
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="hometab">
                      <div class="recommended">
                          <div class="recommended-grids">
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
                                                      <a href="single.html"><img src="images/ActivateFullScreen.jpg" alt="" /></a>
                                                      <div class="time small-time slider-time">
                                                          <p>7:34</p>
                                                      </div>
                                                      <div class="clck small-clck">
                                                          <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                      </div>
                                                  </div>
                                                  <div class="resent-grid-info recommended-grid-info">
                                                      <h5><a href="single.html" class="title">Varius sit sed viverra nullam viverra nullam interdum metus</a></h5>
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
                                                      <a href="single.html"><img src="images/ActivateFullScreen.jpg" alt="" /></a>
                                                      <div class="time small-time slider-time">
                                                          <p>6:23</p>
                                                      </div>
                                                      <div class="clck small-clck">
                                                          <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                      </div>
                                                  </div>
                                                  <div class="resent-grid-info recommended-grid-info">
                                                      <h5><a href="single.html" class="title">Nullam interdum metus varius viverra nullam sit amet viverra</a></h5>
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
                                                      <a href="single.html"><img src="images/ActivateFullScreen.jpg" alt="" /></a>
                                                      <div class="time small-time slider-time">
                                                          <p>2:45</p>
                                                      </div>
                                                      <div class="clck small-clck">
                                                          <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                      </div>
                                                  </div>
                                                  <div class="resent-grid-info recommended-grid-info">
                                                      <h5><a href="single.html" class="title">Varius sit sed viverra nullam viverra nullam interdum metus</a></h5>
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
                                                      <a href="single.html"><img src="images/ActivateFullScreen.jpg" alt="" /></a>
                                                      <div class="time small-time slider-time">
                                                          <p>4:34</p>
                                                      </div>
                                                      <div class="clck small-clck">
                                                          <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                      </div>
                                                  </div>
                                                  <div class="resent-grid-info recommended-grid-info">
                                                      <h5><a href="single.html" class="title">Nullam interdum metus viverra nullam varius sit sed viverra</a></h5>
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
                                                      <a href="single.html"><img src="images/ActivateFullScreen.jpg" alt="" /></a>
                                                      <div class="time small-time slider-time">
                                                          <p>4:42</p>
                                                      </div>
                                                      <div class="clck small-clck">
                                                          <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                      </div>
                                                  </div>
                                                  <div class="resent-grid-info recommended-grid-info">
                                                      <h5><a href="single.html" class="title">Varius sit sed viverra viverra nullam nullam interdum metus</a></h5>
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
                                                      <a href="single.html"><img src="images/ActivateFullScreen.jpg" alt="" /></a>
                                                      <div class="time small-time slider-time">
                                                          <p>6:14</p>
                                                      </div>
                                                      <div class="clck small-clck">
                                                          <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                      </div>
                                                  </div>
                                                  <div class="resent-grid-info recommended-grid-info">
                                                      <h5><a href="single.html" class="title">Nullam interdum metus viverra nullam varius sit sed viverra</a></h5>
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
                                                      <a href="single.html"><img src="images/ActivateFullScreen.jpg" alt="" /></a>
                                                      <div class="time small-time slider-time">
                                                          <p>2:34</p>
                                                      </div>
                                                      <div class="clck small-clck">
                                                          <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                      </div>
                                                  </div>
                                                  <div class="resent-grid-info recommended-grid-info">
                                                      <h5><a href="single.html" class="title">varius sit sed viverra viverra nullam Nullam interdum metus</a></h5>
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
                                                      <a href="single.html"><img src="images/ActivateFullScreen.jpg" alt="" /></a>
                                                      <div class="time small-time slider-time">
                                                          <p>5:12</p>
                                                      </div>
                                                      <div class="clck small-clck">
                                                          <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                      </div>
                                                  </div>
                                                  <div class="resent-grid-info recommended-grid-info">
                                                      <h5><a href="single.html" class="title">Nullam interdum metus viverra nullam varius sit sed viverra</a></h5>
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
                                                      <a href="single.html"><img src="images/ActivateFullScreen.jpg" alt="" /></a>
                                                      <div class="time small-time slider-time">
                                                          <p>4:42</p>
                                                      </div>
                                                      <div class="clck small-clck">
                                                          <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                      </div>
                                                  </div>
                                                  <div class="resent-grid-info recommended-grid-info">
                                                      <h5><a href="single.html" class="title">Varius sit sed viverra viverra nullam nullam interdum metus</a></h5>
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
                                                      <a href="single.html"><img src="images/ActivateFullScreen.jpg" alt="" /></a>
                                                      <div class="time small-time slider-time">
                                                          <p>6:14</p>
                                                      </div>
                                                      <div class="clck small-clck">
                                                          <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                      </div>
                                                  </div>
                                                  <div class="resent-grid-info recommended-grid-info">
                                                      <h5><a href="single.html" class="title">Nullam interdum metus viverra nullam varius sit sed viverra</a></h5>
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
                                                      <a href="single.html"><img src="images/ActivateFullScreen.jpg" alt="" /></a>
                                                      <div class="time small-time slider-time">
                                                          <p>2:34</p>
                                                      </div>
                                                      <div class="clck small-clck">
                                                          <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                      </div>
                                                  </div>
                                                  <div class="resent-grid-info recommended-grid-info">
                                                      <h5><a href="single.html" class="title">varius sit sed viverra viverra nullam Nullam interdum metus</a></h5>
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
                                                      <a href="single.html"><img src="images/ActivateFullScreen.jpg" alt="" /></a>
                                                      <div class="time small-time slider-time">
                                                          <p>5:12</p>
                                                      </div>
                                                      <div class="clck small-clck">
                                                          <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                      </div>
                                                  </div>
                                                  <div class="resent-grid-info recommended-grid-info">
                                                      <h5><a href="single.html" class="title">Nullam interdum metus viverra nullam varius sit sed viverra</a></h5>
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
                                                      <a href="single.html"><img src="images/Add-Bullet-Points-in-Excel.jpg" alt="" /></a>
                                                      <div class="time small-time slider-time">
                                                          <p>4:42</p>
                                                      </div>
                                                      <div class="clck small-clck">
                                                          <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                      </div>
                                                  </div>
                                                  <div class="resent-grid-info recommended-grid-info">
                                                      <h5><a href="single.html" class="title">Varius sit sed viverra viverra nullam nullam interdum metus</a></h5>
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
                                                      <a href="single.html"><img src="images/Add-Bullet-Points-in-Excel.jpg" alt="" /></a>
                                                      <div class="time small-time slider-time">
                                                          <p>6:14</p>
                                                      </div>
                                                      <div class="clck small-clck">
                                                          <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                      </div>
                                                  </div>
                                                  <div class="resent-grid-info recommended-grid-info">
                                                      <h5><a href="single.html" class="title">Nullam interdum metus viverra nullam varius sit sed viverra</a></h5>
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
                                                      <a href="single.html"><img src="images/Add-Bullet-Points-in-Excel.jpg" alt="" /></a>
                                                      <div class="time small-time slider-time">
                                                          <p>2:34</p>
                                                      </div>
                                                      <div class="clck small-clck">
                                                          <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                      </div>
                                                  </div>
                                                  <div class="resent-grid-info recommended-grid-info">
                                                      <h5><a href="single.html" class="title">varius sit sed viverra viverra nullam Nullam interdum metus</a></h5>
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
                                                      <a href="single.html"><img src="images/Add-Bullet-Points-in-Excel.jpg" alt="" /></a>
                                                      <div class="time small-time slider-time">
                                                          <p>5:12</p>
                                                      </div>
                                                      <div class="clck small-clck">
                                                          <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                                      </div>
                                                  </div>
                                                  <div class="resent-grid-info recommended-grid-info">
                                                      <h5><a href="single.html" class="title">Nullam interdum metus viverra nullam varius sit sed viverra</a></h5>
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
                      
      
            </div>
            <div role="tabpanel" class="tab-pane" id="javatab">The Java - A true object oriented programming language. <br />
            Developed by James Gosling from the Sun Microsystems in 1995.<br /><br />
            
            <ul>
            <li>Chapter 1</li>
            <li>Chapter 2</li>
            <li>Chapter 3</li>
            <li>Chapter 4</li>
            </ul>
            </div>
            <div role="tabpanel" class="tab-pane" id="csharptab">C# is also a programming language</div>
            <div role="tabpanel" class="tab-pane" id="mysqltab">MySQL is a databased mostly used for web applications.</div>
            <div role="tabpanel" class="tab-pane" id="jquerytab">jQuery content here</div>
        </div>
    </div> 
 </div>
    <!-- tab section close-->
  
    {{-- <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>--}}
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    <script src="{{ asset('js/jquery.scrolling-tabs.js')}}" type="text/javascript"></script>
    
    <script>
    $('.nav-tabs').scrollingTabs();
    </script>

<!-- Course section start --->
<div class="col-sm-12 col-md-6">
    <div class="main-grids" style="padding: 0 0 0 2px;">
        <div class="recommended"  style="margin-bottom: -20px; margin-top:-15px">
            <div class="recommended-grids" style="color:#2D545E;">
                <h1 style="font-size: xx-large;">Our All <span style="font-weight:700">Courses</span></h1>
                <hr class="hrr">
            
                <div class="col-sm-12 col-md-6" style="margin-top:15px">
                    <div class="row">
                    <div class="col-sm-12 col-md-10 offset-md-1">  
                    <div class="card ccc">
                        <a href="#" style="text-decoration: none;"><img
                          src="course_img/vba_home.png"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body ccb">
                            <p class="card-text float-right" style="text-align:center; padding-top:6px;font-size:12;">
                                (200)
                              </p>
                          <h2 class="card-title">Basic VBA</h2>
                        </div></a>
                      </div>  
                    </div>
                </div>
                </div>
                 <div class="col-sm-12 col-md-6" style="margin-top:15px">   
                    <div class="row">
                        <div class="col-sm-12 col-md-10 offset-md-1">  
                        <div class="card ccc">
                            <a href="#" style="text-decoration: none;">
                        <img
                          src="course_img/vba_home.png"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body ccb">
                            <p class="card-text float-right" style="text-align:center; padding-top:6px;font-size:12;">
                                (200)
                              </p>
                          <h2 class="card-title">Advanced VBA</h2>
                        </div></a>
                      </div>  
                    </div>
                </div>
                </div>
                <div class="col-sm-12 col-md-6" style="margin-top:15px">
                    <div class="row">
                    <div class="col-sm-12 col-md-10 offset-md-1">  
                    <div class="card ccc">
                        <a href="#" style="text-decoration: none;"><img
                          src="course_img/excel_home.png"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body ccb">
                            <p class="card-text float-right" style="text-align:center; padding-top:6px; font-size:12;">
                                (200)
                              </p>
                          <h2 class="card-title">Excel Tips & Tricks</h2>
                        </div></a>
                      </div>  
                    </div>
                </div>
                </div>
                <div class="col-sm-12 col-md-6" style="margin-top:15px">
                    <div class="row">
                    <div class="col-sm-12 col-md-10 offset-md-1">  
                    <div class="card ccc">
                        <a href="#" style="text-decoration: none;"><img
                          src="course_img/vba_home.png"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body ccb">
                            <p class="card-text float-right" style="text-align:center; padding-top:6px;font-size:12;">
                                (200)
                              </p>
                          <h2 class="card-title">UiPath</h2>
                        </div></a>
                      </div>  
                    </div>
                </div>
                </div>
                  
            </div>
        </div>
    </div>
</div>


<!--    End Course Section --->

<!--start colapse-->
	
	<link rel="stylesheet" href= 
"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
	


<script> 
    $(document).ready(function() { 
    
        // Add minus icon for collapse element which 
        // is open by default 
        $(".collapse.show").each(function() { 
            $(this).prev(".card-header").find(".fa") 
                .addClass("fa-minus").removeClass("fa-plus"); 
        }); 

        // Toggle plus minus icon on show hide 
        // of collapse element 
        $(".collapse").on('show.bs.collapse', function() { 
            $(this).prev(".card-header").find(".fa") 
                .removeClass("fa-plus").addClass("fa-minus"); 
        }).on('hide.bs.collapse', function() { 
            $(this).prev(".card-header").find(".fa") 
                .removeClass("fa-minus").addClass("fa-plus"); 
        }); 
    }); 
</script> 
<div class="col-sm-6 col-md-6">
    <div class="main-grids" style="padding: 0 0 0 2px;">
        
        <div class="recommended" style="margin-bottom: -10px; margin-top:-15px">
            <div class="recommended-grids" style="color:#2D545E;">
                <h1 style="font-size: xx-large;">Our Top <span style="font-weight:700">Playlists</span></h1>
                <hr class="hrr">
            

                <div class="accordion"> 
                    <h4 style="padding-bottom: 15px;"> 
                        <i class="fa fa-list"></i>  Course Content 
                    </h4> 
                    
                    <div class="accordion" id="accordionExample"> 
                        <div class="card"> 
                            <div class="card-header" id="headingOne"> 
                                <h2 class="mb-0"> 
                                    <button type="button"
                                        class="btn btn-link header-button-collapse"
                                        data-toggle="collapse"
                                        data-target="#collapseOne"> 
                                        <i class="fa fa-plus-circle"></i> 
                                        <span style="padding: 0px 0px 0px 10px !important;">Basic VBA</span>
                                    </button>								 
                                </h2> 
                            </div> 
                            
                            <div id="collapseOne" class="collapse"
                                aria-labelledby="headingOne"
                                data-parent="#accordionExample"> 
                                <div class="card-body" style=" max-height: 300px; overflow:scroll;"> 
                                    <dd>
                                        <dl> <i class="fa fa-play-circle"></i> <span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="color:#2D545E; text-decoration:none;">Excel VBA - String Functions in Hindi</a></span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                                        <dl> <i class="fa fa-play-circle"></i> <span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="color:#2D545E; text-decoration:none;">Excel VBA -Advanced Filter in Hindi </a></span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                                        <dl> <i class="fa fa-play-circle"></i> <span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="color:#2D545E; text-decoration:none;">Excel VBA - Hyperlinks in Hindi (Part-IV)</a></span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                                        <dl> <i class="fa fa-play-circle"></i> <span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="color:#2D545E; text-decoration:none;">Excel VBA - Hyperdllinks in Hindi (Part-III) </a></span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                                        <dl> <i class="fa fa-play-circle"></i> <span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="color:#2D545E; text-decoration:none;">Excel VBA - String Functions in Hindi</a></span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                                        <dl> <i class="fa fa-play-circle"></i> <span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="color:#2D545E; text-decoration:none;">Excel VBA -Advanced Filter in Hindi</a> </span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                                        <dl> <i class="fa fa-play-circle"></i> <span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="color:#2D545E; text-decoration:none;">Excel VBA - Hyperlinks in Hindi (Part-IV)</a></span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                                        <dl> <i class="fa fa-play-circle"></i> <span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="color:#2D545E; text-decoration:none;">Excel VBA - Hyperlinks in Hindi (Part-III)</a> </span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                                        <dl> <i class="fa fa-play-circle"></i> <span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="color:#2D545E; text-decoration:none;">Excel VBA - String Functions in Hindi</a></span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                                        <dl> <i class="fa fa-play-circle"></i> <span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="color:#2D545E; text-decoration:none;">Excel VBA -Advanced Filter in Hindi </a></span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                                        <dl> <i class="fa fa-play-circle"></i> <span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="color:#2D545E; text-decoration:none;">Excel VBA - Hyperlinks in Hindi (Part-IV)</a></span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                                        <dl> <i class="fa fa-play-circle"></i> <span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="color:#2D545E; text-decoration:none;">Excel VBA - Hyperlinks in Hindi (Part-III)</a> </span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                                        <dl> <i class="fa fa-play-circle"></i> <span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="color:#2D545E; text-decoration:none;">Excel VBA - String Functions in Hindi</a></span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                                        <dl> <i class="fa fa-play-circle"></i> <span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="color:#2D545E; text-decoration:none;">Excel VBA -Advanced Filter in Hindi </a></span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                                        <dl> <i class="fa fa-play-circle"></i> <span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="color:#2D545E; text-decoration:none;">Excel VBA - Hyperlinks in Hindi (Part-IV)</a></span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                                        <dl> <i class="fa fa-play-circle"></i> <span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="color:#2D545E; text-decoration:none;">Excel VBA - Hyperlinks in Hindi (Part-III) </a></span></dl>

                                    </dd>
                                </div> 
                            </div> 
                        </div> 
                        
                        <div class="card"> 
                            <div class="card-header" id="headingTwo"> 
                                <h2 class="mb-0"> 
                                    <button type="button"
                                        class="btn btn-link collapsed header-button-collapse"
                                        data-toggle="collapse"
                                        data-target="#collapseTwo"> 
                                        <i class="fa fa-plus-circle"></i> 
                                        <span style="padding: 0px 0px 0px 10px !important;">Advanced VBA </span>
                                    </button> 
                                </h2> 
                            </div> 
                            <div id="collapseTwo" class="collapse"
                                aria-labelledby="headingTwo"
                                data-parent="#accordionExample"> 
                                <div class="card-body" style=" max-height: 300px; overflow:scroll;"> 
                                    <p> 
                                        Bootstrap is a free and open-source 
                                        collection of tools for creating 
                                        websites and web applications. 
                                    </p> 
                                </div> 
                            </div> 
                        </div> 
                        <div class="card"> 
                            <div class="card-header" id="headingThree"> 
                                <h2 class="mb-0"> 
                                    <button type="button"
                                        class="btn btn-link collapsed header-button-collapse"
                                        data-toggle="collapse"
                                        data-target="#collapseThree"> 
                                        <i class="fa fa-plus-circle"></i> 
                                        <span style="padding: 0px 0px 0px 10px !important;">Excel - Tips & Tricks </span>
                                    </button>					 
                                </h2> 
                            </div> 
                            <div id="collapseThree" class="collapse"
                                aria-labelledby="headingThree"
                                data-parent="#accordionExample"> 
                                <div class="card-body" style=" max-height: 300px; overflow:scroll;"> 
                                    <p> 
                                        HTML stands for HyperText Markup 
                                        Language. It is used to design 
                                        web pages using markup language. 
                                    </p> 
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            


              

</div>
</div>
</div>
</div>
<div class="clearfix"> </div>

<br><br>



<!-- Scroll Top Button Start --> 
<style>
#scroll {
    position:fixed;
    right:10px;
    bottom:10px;
    cursor:pointer;
    width:40px;
    height:40px;
    background-color:#3F874A;
    text-indent:-9999px;
    display:none;
    -webkit-border-radius:60px;
    -moz-border-radius:60px;
    border-radius:60px
}
#scroll span {
    position:absolute;
    top:50%;
    left:50%;
    margin-left:-8px;
    margin-top:-12px;
    height:0;
    width:0;
    border:8px solid transparent;
    border-bottom-color:#ffffff;
}
#scroll:hover {
    background-color:#e74c3c;
    opacity:1;filter:"alpha(opacity=100)";
    -ms-filter:"alpha(opacity=100)";
}
</style>
<script>

$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});
</script>
<a href="#" id="scroll" style="display: none;"><span></span></a>


<!-- Scroll button end-->

<!-- Help Section Start -->


<link rel='stylesheet' href='help/jquery.contactus.min.css' type='text/css' media='all' />
<script type='text/javascript' src='help/jquery.min.js' id='jquery-core-js'></script>

<script type='text/javascript' id='jquery.contactus.min.js-js-extra'>
var arcontactusAjax = {"url":"https:automationfever.com"};
</script>




    <style type="text/css">
            .arcontactus-widget .messangers-block{
            background-color: #ffffff;
        }
        .arcontactus-widget .messangers-block::before{
            border-top-color: #ffffff;
        }
                .messangers-block .messanger p{
            color:  #3b3b3b;
        }
                .messangers-block .messanger:hover p{
            color:  #3b3b3b;
        }
                .messangers-block .messanger:hover{
            background-color:  #f0f0f0;
        }
        #arcontactus-message-callback-phone-submit{
        font-weight: normal;
    }
            .grecaptcha-badge{
            display: none;
        }
                .arcontactus-widget.left.arcontactus-message{
                            left: 20px;
                                }
                .arcontactus-widget.left.arcontactus-message{
            bottom: 250px;
        }
        .arcontactus-widget .arcontactus-message-button .pulsation{
        -webkit-animation-duration:2s;
        animation-duration: 2s;
    }
</style>
<div id="arcontactus"></div>
<script>
        var arcItems = [];
        window.addEventListener('load', function(){
        arCuClosedCookie = arCuGetCookie('arcu-closed');
        jQuery('#arcontactus').on('arcontactus.init', function(){
                                });
                            var arcItem = {};
                            arcItem.id = 'msg-item-1';
                                    arcItem.class = 'msg-item-facebook-messenger';
            arcItem.title = 'Messenger';
            arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 32C15.9 32-77.5 278 84.6 400.6V480l75.7-42c142.2 39.8 285.4-59.9 285.4-198.7C445.8 124.8 346.5 32 224 32zm23.4 278.1L190 250.5 79.6 311.6l121.1-128.5 57.4 59.6 110.4-61.1-121.1 128.5z"></path></svg>';
                            arcItem.href = 'https://m.me/FeverAutomation';
                        arcItem.color = '#567AFF';
            arcItems.push(arcItem);
                    var arcItem = {};
                            arcItem.id = 'msg-item-2';
                                    arcItem.class = 'msg-item-whatsapp';
            arcItem.title = 'Whatsapp';
            arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg>';
                            arcItem.href = 'https://api.whatsapp.com/send?phone=9457940839&amp;text=Hello%20Sir%20!%20I%20';
                        arcItem.color = '#1EBEA5';
           
            arcItems.push(arcItem);
                    var arcItem = {};
                            arcItem.id = 'msg-item-8';
                                    arcItem.class = 'msg-item-phone';

            arcItem.title = 'Email us';
            arcItem.icon = '<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z"></path></svg>';
                            arcItem.href = 'mailto:query@automationfever.com';
                        arcItem.color = '#24726A';
            arcItems.push(arcItem);
                jQuery('#arcontactus').contactUs({
                            buttonIcon: '<svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Canvas" transform="translate(-825 -308)"><g id="Vector"><use xlink:href="#path0_fill0123" transform="translate(825 308)" fill="currentColor"></use></g></g><defs><path id="path0_fill0123" d="M 19 4L 17 4L 17 13L 4 13L 4 15C 4 15.55 4.45 16 5 16L 16 16L 20 20L 20 5C 20 4.45 19.55 4 19 4ZM 15 10L 15 1C 15 0.45 14.55 0 14 0L 1 0C 0.45 0 0 0.45 0 1L 0 15L 4 11L 14 11C 14.55 11 15 10.55 15 10Z"></path></defs></svg>',
                        drag: true,
            align: 'left',
            
            theme: '#008749',
                            buttonText: 'Free Help',
                        buttonSize: 'small',
            menuSize: 'large',
            errorMessage: 'Connection error. Please refresh the page and try again.',
            iconsAnimationSpeed: 630,
            items: arcItems,
            ajaxUrl: arcontactusAjax.url,
            action: 'arcontactus_request_callback'
        });
                    });
                </script>


<div id="pc_lb_codes" style="display: none;"></div>
<script defer src="help/autoptimize.js"></script>


<!--End Help Tool section-->


@endsection
@section('content')
  
  
@endsection