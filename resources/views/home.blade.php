@extends('master-layout.master')


@section('application-title')
  <title>Automation Fever | Home</title>    
@endsection
@section('fevicon')
    <link rel="icon" href="{{ asset('images/AutomationFever_icon.png')}}" type="image/gif" sizes="16x16">
@endsection

@section('meta_data')
        <meta name="keywords" content="'Excel vba toturials, vba tutorials, Automation Fever, excel vba tutorial,excel vba tutorial for beginners,excel vba tutorial for beginners in hindi,excel vba tutorial in hindi,excel vba tutorial advanced,excel and vba tutorial,
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
@endsection


@section('content')
<div class="top-grids">
        <div class="recommended-info">
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
             $.post("{{URL::route('getExcelVbaToturials') }}",function(data){
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
             
        }); //end of ready function
    </script>
@endsection