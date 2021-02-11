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

        @php
                $VbaBeginnerTutorial_playlist="VBA Tutorial for beginners(Hindi)";
                $VbaProject_playlist="Excel VBA Projects (Hindi)";
                $VbaAdvancedVbaTutorial_playlist="Advanced VBA Tutorials (Hindi)";
                $VbaOutlook_playlist="VBA - Outlook Automation (Hindi)";
                $ExcelTipsTricks_playlist="Excel Tips & Tricks (Hindi)";   
        @endphp

<div class="top-grids">
        <div class="recommended-info">
            @if (Session::get('post-contact-us'))
            <div class="text-success font-weight-bold" id="contact-us-message" style="font-size: 20px">
                {{Session::get('post-contact-us')}}
              </div>
            @endif
            
            <h3>Recent Videos</h3>
        </div>
        <span  id="recent_videos">
            <div id="recent_waiting_image">
            </div>
        </span>

     <div class="clearfix"> </div>
</div>

{{-- Excel Vba tutorials in Hindi --}}
    <div class="recommended">
        <div class="recommended-grids">
            <span  id="excel_vba_toturials">
            </span>
        </div>
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

  {{-- Vba Loops  --}}
    <div class="recommended">
        <div class="recommended-grids" id="vba_loops">
        </div>
    </div>

{{-- VBA - Text To Columns in Hindi --}}
    <div class="recommended">
        <div class="recommended-grids" id="text_to_columns">
        </div>
    </div>    

  
 
     {{-- Hyperlink  --}}
    <div class="recommended">
        <div class="recommended-grids" id="vba_hyperlinks">  
        </div>
    </div>       


    {{-- VBA - Sorting in Hindi --}}
    <div class="recommended">
        <div class="recommended-grids" id="vba_sorting">
        </div>
    </div>    


    {{-- Excel VBA Projects in Hindi --}}
    <div class="recommended">
        <div class="recommended-grids" id="vba_projects">

        </div>
    </div>    

    @include('keyword_config');	  

    <script>
        $(document).ready(function(){
            //Ajax token setup for the post requests. 
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
            }); //$.ajaxSetup({

            //Recent Videos
            $.post("{{URL::route('getRecentVideos') }}",{},function(data){
                $('#recent_videos').html(data.html);     
            });    

            // Excel Vba toturials
            var VbaBeginnerTutorial_playlist="{{$VbaBeginnerTutorial_playlist}}";
             $.post("{{URL::route('getExcelVbaToturials') }}",{
                playlist_name:VbaBeginnerTutorial_playlist,
                         },function(data){
                $('#excel_vba_toturials').html(data.html);     
             });


            // Vba loops
            $.post("{{URL::route('getVbaLoops') }}",function(data){
                $('#vba_loops').html(data.html);     
             });


            // Vba Text to Columns
            $.post("{{URL::route('getTextToColumns') }}",function(data){
                $('#text_to_columns').html(data.html);     
             }); 

            // Vba Hyperlinks
            $.post("{{URL::route('getHyperlinks') }}",function(data){
                $('#vba_hyperlinks').html(data.html);     
             });


            // Vba Sorting
            $.post("{{URL::route('getSorting') }}",function(data){
                $('#vba_sorting').html(data.html);     
             });

             
            // Vba Projects
            $.post("{{URL::route('getVbaProjects') }}",function(data){
                $('#vba_projects').html(data.html);     
             });


             setTimeout(function() { 
                    $("#contact-us-message").slideUp(1000);
                }, 3000);
             
        }); //end of ready function
    </script>
@endsection