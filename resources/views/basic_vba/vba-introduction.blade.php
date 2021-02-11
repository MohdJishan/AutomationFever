@extends('master-layout.master')
@section('application-title')
  <title> VBA Introduction (Hindi)</title>    
@endsection


@section('fevicon')
    <link rel="icon" href="{{ asset('images/AutomationFever_icon.png')}}" type="image/gif" sizes="16x16">
@endsection


@section('meta_data')
<meta name="keywords" content="Vba Intro,Excel Vba Intro,automation fever,excel vba introduction,what is macro,vba introduction in hindi,hindi vba introduction,vba introduction excel,introduction to vba for excel,excel vba introduction in hindi,introduction of vba in hindi,introduction to vba,introduction to excel vba programming,introduction to vba programming,intro vba,intro vba excel,vba tutorial,vba tutorial excel,excel vba tutorial,excel,vba,macro,excel vba" />
<meta name="description" content="In this video tutorial, you will learn\nWhat is VBA?\nHistory of Programming Language\nWhat is application?\nSome examples of applications\nWhen did Excel VBA got launch?\n\n\nContent of this video :-\n00:00 intro\n00:22 VBA Full Form\n00:33 Application\n01:01 Visual Basic\n01:45 History of Programming Language\n03:07 VBA\n\n\nVBA Stands for Visual Basic for Applications. There are two words in VBA. Do you about both the words(Applications & Visual Basic) ?\nLet's first discuss Application.\n\nApplication :-Application is a program or group of programs designed to perform a task or activity for end user. \nSome examples of Applications :- Vlc Media Player, Microsoft Sql Server, Microsoft Word, MicroSoft Power Point, Ms Excel etc.\n\nVisual Basic :-Visual Basic is a programming language. The first version of Visual Basic launched By Microsoft in 1991. It's a high-level programming language.\n\nVba is a language what help you to write code to automate the task of applications. \nExcel-VBA is designed by Microsoft in 1993.\n\nDon’t confuse VBA with VB (which stands for Visual Basic). VB is a programming language that lets you create standalone executable programs (.exe files). Although VBA and VB have a lot in common, but they are different.\n\nKindly do like our video and subscribe our channel that will help us to motivate to work more harder to make you learn Excel Vba.\n\nOur Website :-\nhttp://www.automationfever.com/\n\nPlease do like our FaceBook Page :-\nhttps://www.facebook.com/FeverAutomation\n\nFollow us on Twitter :-\nhttps://twitter.com/AutomationFever\n\nBlogpost:-\nhttps://automationfever.blogspot.com\n\n\n#Vba\n#Macro\n#ExcelVba\n#VbaIntro \n#VbaIntroduction\n#AboutVba\n#Vba\n#Excel365\n#Office365\n#Excel\n#VbaHistory\n#ExcelVbaIntroduction\n#ExcelVbaIntro\n#ExcelVbaHistory\n#VbaIntoduction\n#VbaIntro\n#IntroVba\n#WhatisVBA\n#ExcelVbaIntro\n#automationfever\n#excelvbatutorialsinhindi\n#excelvbatutorialsforbeginners\n#excelvbaintroduction\n#whatismacro\n#vbaintroductioninhindi\n#hindivbaintroduction\n#vbaintroductionexcel\n#vbaintroductioncourse\n#introductiontovbaforexcel\n#excelvbaintroductioninhindi\n#introductionofvbainhindi\n#introductiontovba\n#introductiontoexcelvbaprogramming\n#introductiontovbaprogramming" />
<meta name="robots" content="noodp"/>
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="VBA Introduction (Hindi)" />
<meta property="og:description" content="In this video tutorial, you will learn\nWhat is VBA?\nHistory of Programming Language\nWhat is application?\nSome examples of applications\nWhen did Excel VBA got launch?\n\n\nContent of this video :-\n00:00 intro\n00:22 VBA Full Form\n00:33 Application\n01:01 Visual Basic\n01:45 History of Programming Language\n03:07 VBA\n\n\nVBA Stands for Visual Basic for Applications. There are two words in VBA. Do you about both the words(Applications & Visual Basic) ?\nLet's first discuss Application.\n\nApplication :-Application is a program or group of programs designed to perform a task or activity for end user. \nSome examples of Applications :- Vlc Media Player, Microsoft Sql Server, Microsoft Word, MicroSoft Power Point, Ms Excel etc.\n\nVisual Basic :-Visual Basic is a programming language. The first version of Visual Basic launched By Microsoft in 1991. It's a high-level programming language.\n\nVba is a language what help you to write code to automate the task of applications. \nExcel-VBA is designed by Microsoft in 1993.\n\nDon’t confuse VBA with VB (which stands for Visual Basic). VB is a programming language that lets you create standalone executable programs (.exe files). Although VBA and VB have a lot in common, but they are different.\n\nKindly do like our video and subscribe our channel that will help us to motivate to work more harder to make you learn Excel Vba.\n\nOur Website :-\nhttp://www.automationfever.com/\n\nPlease do like our FaceBook Page :-\nhttps://www.facebook.com/FeverAutomation\n\nFollow us on Twitter :-\nhttps://twitter.com/AutomationFever\n\nBlogpost:-\nhttps://automationfever.blogspot.com\n\n\n#Vba\n#Macro\n#ExcelVba\n#VbaIntro \n#VbaIntroduction\n#AboutVba\n#Vba\n#Excel365\n#Office365\n#Excel\n#VbaHistory\n#ExcelVbaIntroduction\n#ExcelVbaIntro\n#ExcelVbaHistory\n#VbaIntoduction\n#VbaIntro\n#IntroVba\n#WhatisVBA\n#ExcelVbaIntro\n#automationfever\n#excelvbatutorialsinhindi\n#excelvbatutorialsforbeginners\n#excelvbaintroduction\n#whatismacro\n#vbaintroductioninhindi\n#hindivbaintroduction\n#vbaintroductionexcel\n#vbaintroductioncourse\n#introductiontovbaforexcel\n#excelvbaintroductioninhindi\n#introductionofvbainhindi\n#introductiontovba\n#introductiontoexcelvbaprogramming\n#introductiontovbaprogramming" />
<meta property="og:url" content="http://www.automationfever.com/" />
<meta property="og:site_name" content="AutomationFever" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="In this video tutorial, you will learn\nWhat is VBA?\nHistory of Programming Language\nWhat is application?\nSome examples of applications\nWhen did Excel VBA got launch?\n\n\nContent of this video :-\n00:00 intro\n00:22 VBA Full Form\n00:33 Application\n01:01 Visual Basic\n01:45 History of Programming Language\n03:07 VBA\n\n\nVBA Stands for Visual Basic for Applications. There are two words in VBA. Do you about both the words(Applications & Visual Basic) ?\nLet's first discuss Application.\n\nApplication :-Application is a program or group of programs designed to perform a task or activity for end user. \nSome examples of Applications :- Vlc Media Player, Microsoft Sql Server, Microsoft Word, MicroSoft Power Point, Ms Excel etc.\n\nVisual Basic :-Visual Basic is a programming language. The first version of Visual Basic launched By Microsoft in 1991. It's a high-level programming language.\n\nVba is a language what help you to write code to automate the task of applications. \nExcel-VBA is designed by Microsoft in 1993.\n\nDon’t confuse VBA with VB (which stands for Visual Basic). VB is a programming language that lets you create standalone executable programs (.exe files). Although VBA and VB have a lot in common, but they are different.\n\nKindly do like our video and subscribe our channel that will help us to motivate to work more harder to make you learn Excel Vba.\n\nOur Website :-\nhttp://www.automationfever.com/\n\nPlease do like our FaceBook Page :-\nhttps://www.facebook.com/FeverAutomation\n\nFollow us on Twitter :-\nhttps://twitter.com/AutomationFever\n\nBlogpost:-\nhttps://automationfever.blogspot.com\n\n\n#Vba\n#Macro\n#ExcelVba\n#VbaIntro \n#VbaIntroduction\n#AboutVba\n#Vba\n#Excel365\n#Office365\n#Excel\n#VbaHistory\n#ExcelVbaIntroduction\n#ExcelVbaIntro\n#ExcelVbaHistory\n#VbaIntoduction\n#VbaIntro\n#IntroVba\n#WhatisVBA\n#ExcelVbaIntro\n#automationfever\n#excelvbatutorialsinhindi\n#excelvbatutorialsforbeginners\n#excelvbaintroduction\n#whatismacro\n#vbaintroductioninhindi\n#hindivbaintroduction\n#vbaintroductionexcel\n#vbaintroductioncourse\n#introductiontovbaforexcel\n#excelvbaintroductioninhindi\n#introductionofvbainhindi\n#introductiontovba\n#introductiontoexcelvbaprogramming\n#introductiontovbaprogramming" />
<meta name="twitter:title" content="VBA Introduction (Hindi)" />
<meta name="twitter:site" content="@AutomationFever" />
<meta name="twitter:creator" content="@AutomationFever" />
@endsection



@section('JsAndCss')

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


{{-- Toast --}}
<link href="{{ asset('js/toastr/toastr.min.css') }}" rel='stylesheet' type='text/css' media="all" />
<script src="{{ asset('js/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('js/AllToast.js') }}"></script>
{{-- end of toast --}}

{{-- sweet alert --}}
<link rel="stylesheet" href="{{ asset('js/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
<script src="{{ asset('js/sweetalert2/sweetalert2.min.js') }}"></script>
{{-- end of sweet alert --}}
@endsection

@section('content')

    <div class="show-top-grids">
        <div class="col-sm-8 single-left">
            <div class="song">
                <div class="video-grid">
                    <iframe src="https://www.youtube.com/embed/mF3agvrs7nc?autoplay=0&rel=0&modestbranding=1&mute=0&controls=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                </div>
                <div class="song-info">
                    <h3> VBA Introduction (Hindi)
                            <a href="enable-developer-tab">                                <img src="{{asset('images/next.png')}}" style="margin-top: -6px;"> </a>  

                            </a>
                    </h3>   
                </div>
            </div>
            <div class="clearfix"> </div>
            <div class="published">
                {{-- <script src="{{ asset('jquery.min.html')}}"></script> --}}
                    <script>
                        $(document).ready(function () {
                            size_li = $("#myList li").size();
                            x=1;
                            $('#myList li:lt('+x+')').show();
                            $('#loadMore').click(function () {
                                x= (x+1 <= size_li) ? x+1 : size_li;
                                $('#myList li:lt('+x+')').show();
                            });
                            $('#showLess').click(function () {
                                x=(x-1<0) ? 1 : x-1;
                                $('#myList li').not(':lt('+x+')').hide();
                            });
                        });
                    </script>
                    <div class="load_more"> 
                        <ul id="myLista" data-playlistname=""  
data-published-datetime="2019-01-05 17:22:20"
data-parent-playlist="VBA Tutorials For Beginners (Hindi)">
                            
                                <h4>Published on 05 January 2019</h4>
                                    <p>
                                        In this video tutorial, you will learn <BR> What is VBA? <BR> History of Programming Language <BR> What is application? <BR> Some examples of applications <BR> When did Excel VBA got launch? <BR>  <BR>  <BR> Content of this video :- <BR> 00:00 intro <BR> 00:22 VBA Full Form <BR> 00:33 Application <BR> 01:01 Visual Basic <BR> 01:45 History of Programming Language <BR> 03:07 VBA <BR>  <BR>  <BR> VBA Stands for Visual Basic for Applications. There are two words in VBA. Do you about both the words(Applications & Visual Basic) ? <BR> Let's first discuss Application. <BR>  <BR> Application :-Application is a program or group of programs designed to perform a task or activity for end user.  <BR> Some examples of Applications :- Vlc Media Player, Microsoft Sql Server, Microsoft Word, MicroSoft Power Point, Ms Excel etc. <BR>  <BR> Visual Basic :-Visual Basic is a programming language. The first version of Visual Basic launched By Microsoft in 1991. It's a high-level programming language. <BR>  <BR> Vba is a language what help you to write code to automate the task of applications.  <BR> Excel-VBA is designed by Microsoft in 1993. <BR>  <BR> Don’t confuse VBA with VB (which stands for Visual Basic). VB is a programming language that lets you create standalone executable programs (.exe files). Although VBA and VB have a lot in common, but they are different. <BR>  <BR> Kindly do like our video and subscribe our channel that will help us to motivate to work more harder to make you learn Excel Vba. <BR>  <BR> Our Website :- <BR> http://www.automationfever.com/ <BR>  <BR> Please do like our FaceBook Page :- <BR> https://www.facebook.com/FeverAutomation <BR>  <BR> Follow us on Twitter :- <BR> https://twitter.com/AutomationFever <BR>  <BR> Blogpost:- <BR> https://automationfever.blogspot.com <BR>  <BR>  <BR> #Vba <BR> #Macro <BR> #ExcelVba <BR> #VbaIntro  <BR> #VbaIntroduction <BR> #AboutVba <BR> #Vba <BR> #Excel365 <BR> #Office365 <BR> #Excel <BR> #VbaHistory <BR> #ExcelVbaIntroduction <BR> #ExcelVbaIntro <BR> #ExcelVbaHistory <BR> #VbaIntoduction <BR> #VbaIntro <BR> #IntroVba <BR> #WhatisVBA <BR> #ExcelVbaIntro <BR> #automationfever <BR> #excelvbatutorialsinhindi <BR> #excelvbatutorialsforbeginners <BR> #excelvbaintroduction <BR> #whatismacro <BR> #vbaintroductioninhindi <BR> #hindivbaintroduction <BR> #vbaintroductionexcel <BR> #vbaintroductioncourse <BR> #introductiontovbaforexcel <BR> #excelvbaintroductioninhindi <BR> #introductionofvbainhindi <BR> #introductiontovba <BR> #introductiontoexcelvbaprogramming <BR> #introductiontovbaprogramming
                                    </p>
                        </ul>
                    </div>
                    </div>
                    <div class="published">
                    <div class="load_more"> 
                        <ul id="text-description" data-description="text-description" data-video_id="mF3agvrs7nc">
                            
                        </ul>
                    </div>
            </div>
            
            <div class="all-comments">
            <div class="all-comments-info">
                <a href="#">All Comments (<span id="videos_total_count"></span>)</a>
                <div class="box">
                    <form id="post_comment_form" name="post_comment_form" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div class="row">
                        <div class="col-md-6 form-group">
                            @if (Session::get('name'))
                                <input type="hidden" id="user_name_comment" value="{{Session::get('name')}}" name="user_name_comment" class="form-control form-control-sm" placeholder="Name" required="required" />
                            @else
                                <input type="text" id="user_name_comment" name="user_name_comment" class="form-control form-control-sm" placeholder="Name" required="required" />
                            @endif
                          </div>
                        <div class="col-md-6 form-group">
                            @if (Session::get('email'))
                            <input type="hidden" id="user_email_comment" value="{{Session::get('email')}}" name="user_email_comment" class="form-control form-control-sm" placeholder="Email"  required="required" />        
                            @else
                            <input type="email" id="user_email_comment" name="user_email_comment" class="form-control form-control-sm" placeholder="Email"  required="required" />
                            @endif
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 form-group">
                            <textarea id="user_comment" name="user_comment" placeholder="Add a comment.." class="form-control form-control-sm"  required="required"></textarea>
                        </div>
                      </div>
                      <input type="hidden" id="video_id" name="video_id" value="mF3agvrs7nc" />
                      <button type="button" id="add_comment" name="add_comment" class="comment_button">Comment</button>
                      {{-- <input type="submit" id="add_comment" name="add_comment" value="Comment" style="float:right" /> --}}
                        <div class="clearfix"> </div>
                    </form>
                </div>
                {{-- <div class="all-comments-buttons">
                    <ul>
                        <li><a href="#" class="top">Top Comments</a></li>
                        <li><a href="#" class="top newest">Newest First</a></li>
                        <li><a href="#" class="top my-comment">My Comments</a></li>
                    </ul>
                </div> --}}
            </div>
            <div class="media-grids" id="comments_area">
                  {{-- User comments will be rendered here --}}
            </div>
          </div>
        </div>
        <div class="col-md-4 single-right">
            <h3>Up Next</h3>
            <div class="single-grid-right" id="next-video-suggestions-area">
              {{-- Next videos section will be loaded here --}}
            </div>
            </div>
            <div class="clearfix"> </div>
            </div>
            
      @include('basic_vba.supported-js-code')     
@endsection
