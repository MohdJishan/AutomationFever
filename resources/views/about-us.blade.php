@extends('master-layout.master')

@section('application-title')
  <title>Contact Us</title>    
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
<meta property="og:title" content="Contact us -Automation Fever" />
<meta property="og:description" content="You can watch excel vba videos here. We are trying to make you understand every topic of vba." />
<meta property="og:url" content="http://www.automationfever.com/" />
<meta property="og:site_name" content="AutomationFever" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="You can watch excel vba videos here. We are trying to make you understand every topic of vba." />
<meta name="twitter:title" content="Contact us -Automation Fever" />
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
@endsection

@section('content')
<div class="show-top-grids">
  <div class="show-top-grids">
    <div class="main-grids about-main-grids">
      <div class="recommended-info">
        <div class="about-grids">
          <div class="about-bottom-grids">
            <div class="col-sm-6 about-left">
              <div class="about-left-grids">
                <div class="col-md-2 about-left-img">
                  <span class="glyphicon glyphicon-user glyphicon-facetime-video" aria-hidden="true"></span>
                </div>
                <div class="col-md-10 about-left-info">
                  <a href="#">When We Started</a>
                  <p>Suspendisse cursus tempus ullamcorper Praesent molestie urna a metus auctor vulputate molestie urna a metus auctor molestie urna a metus auctor.</p>
                </div>
                <div class="clearfix"> </div>
              </div>
            </div>
            <div class="col-sm-6 about-right">
              <div class="about-left-grids">
                <div class="col-md-2 about-left-img">
                  <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                </div>
                <div class="col-md-10 about-left-info">
                  <a href="#">Community Guidelines</a>
                  <p>Suspendisse cursus tempus ullamcorper Praesent molestie urna a metus auctor vulputate molestie urna a metus auctor molestie urna a metus auctor.</p>
                </div>
                <div class="clearfix"> </div>
              </div>
            </div>
            <div class="clearfix"> </div>
          </div>
          <div class="about-bottom-grids">
            <div class="col-sm-6 about-left">
              <div class="about-left-grids">
                <div class="col-md-2 about-left-img">
                  <span class="glyphicon glyphicon-user glyphicon-book" aria-hidden="true"></span>
                </div>
                <div class="col-md-10 about-left-info">
                  <a href="#">About Our Site</a>
                  <p>Suspendisse cursus tempus ullamcorper Praesent molestie urna a metus auctor vulputate molestie urna a metus auctor molestie urna a metus auctor.</p>
                </div>
                <div class="clearfix"> </div>
              </div>
            </div>
            <div class="col-sm-6 about-right">
              <div class="about-left-grids">
                <div class="col-md-2 about-left-img">
                  <span class="glyphicon glyphicon-user glyphicon-headphones" aria-hidden="true"></span>
                </div>
                <div class="col-md-10 about-left-info">
                  <a href="#">New Update</a>
                  <p>Suspendisse cursus tempus ullamcorper Praesent molestie urna a metus auctor vulputate molestie urna a metus auctor molestie urna a metus auctor.</p>
                </div>
                <div class="clearfix"> </div>
              </div>
            </div>
            <div class="clearfix"> </div>
          </div>
          <div class="about-bottom-grids">
            <div class="col-sm-6 about-left">
              <div class="about-left-grids">
                <div class="col-md-2 about-left-img">
                  <span class="glyphicon glyphicon-user glyphicon-folder-open" aria-hidden="true"></span>
                </div>
                <div class="col-md-10 about-left-info">
                  <a href="#">Careers</a>
                  <p>Suspendisse cursus tempus ullamcorper Praesent molestie urna a metus auctor vulputate molestie urna a metus auctor molestie urna a metus auctor.</p>
                </div>
                <div class="clearfix"> </div>
              </div>
            </div>
            <div class="col-sm-6 about-right">
              <div class="about-left-grids">
                <div class="col-md-2 about-left-img">
                  <span class="glyphicon glyphicon-user glyphicon-phone" aria-hidden="true"></span>
                </div>
                <div class="col-md-10 about-left-info">
                  <a href="#">Contact Us</a>
                  <p>Suspendisse cursus tempus ullamcorper Praesent molestie urna a metus auctor vulputate molestie urna a metus auctor molestie urna a metus auctor.</p>
                </div>
                <div class="clearfix"> </div>
              </div>
            </div>
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection