@extends('master-layout.master')

@section('application-title','Home')

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