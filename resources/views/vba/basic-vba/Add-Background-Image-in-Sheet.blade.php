@extends('master-layout.master')
@section('application-title')
  <title> Excel VBA - Add Background Image in Sheet(Hindi)</title>    
@endsection


@section('fevicon')
    <link rel="icon" href="{{ asset('images/AutomationFever_icon.png')}}" type="image/gif" sizes="16x16">
@endsection


@section('meta_data')
<meta name="keywords" content="Insert background image in vba,remove background image from sheet in vba,set sheet background picture in vba,add sheet background image in vba,Hide grid lines sheet images in vba,how to remove background picture in vba,vba tutorial excel,automation fever,vba training,vba training in hindi,excel vba tutorial for beginners,vba tutorial,learn excel vba,learn excel vba step by step,excel,excel vba,macro,excel macros" />
<meta name="description" content="Download Code :-https://www.automationfever.com/single/rTJrSssoni0\n\nIn this video tutorial, you will learn how to add background image in your sheet using VBA code. You will also learn how to remove background image from your sheet. Sometimes you need to remove gridlines from your excel sheet using VBA code. You will learn how to remove gridlines from your excel sheet. And if the gridlines already removed how to get back gridlines. Please do watch this video and share your feedback with us.\n\nFor adding background image in sheet, you need to use SetBackgroundPicture function of Sheets collection. Below is the code for same :-\nSheet2.SetBackgroundPicture Filename\n\n\nFor removing grid lines from your sheet, you need to set DisplayGridlines properties false of ActiveWindow Object. Code for the same is below :-\nActiveWindow.DisplayGridlines = False\n\nFor removing background image, you need to use the below code :-\nSheet2.SetBackgroundPicture ""\n\nHope you found this video useful. Please like, share and subscribe to our channel. This will motivate us to create more good contents. Thanks! \n\nThe excel file used in this video uploaded to our website. You can visit our website and download the code file for practice. Below is the link for the same:-\nhttps://www.automationfever.com/single/rTJrSssoni0\n\nVba Loops in Hindi :- https://www.youtube.com/watch?v=pJdkwfyohNU&list=PLMJfpumszTDOnMC1vRfiT-cMN7odyonSK\n\nVBA - Text To Columns in Hindi :- https://www.youtube.com/watch?v=_gMix4qY1Cw&list=PLMJfpumszTDOsom1agKDj603nJHBljGer\n\nVBA - Worksheets in Hindi :- https://www.youtube.com/watch?v=MRtR7aStVck&list=PLMJfpumszTDMX-cGlgEqUM8eLJgiZhpWu\n\nVBA - Sorting in Hindi :- https://www.youtube.com/watch?v=4FAT48smqZs&list=PLMJfpumszTDPukJFlvyyVveI31KVQH88W\n\nVBA - Filter in Hindi :- https://www.youtube.com/watch?v=RVO_tEEiI-k&list=PLMJfpumszTDM_zeesRjwV4FtkOVn6YKpn\n\nExcel VBA Projects in Hindi :- https://www.youtube.com/watch?v=RVO_tEEiI-k&list=PLMJfpumszTDM_zeesRjwV4FtkOVn6YKpn\n\nExcel VBA - Introduction in Hindi :- https://www.youtube.com/watch?v=mF3agvrs7nc&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=2\n\nExcel VBA - Range in Hindi :- https://www.youtube.com/watch?v=N6GbVZSdZw4&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=16\n\nExcel VBA - Auto Format in Hindi :- https://www.youtube.com/watch?v=8xjOP0XKOxM&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=26\n\nExcel VBA - Add Background Image in Sheet (Hindi) :-https://www.youtube.com/watch?v=rTJrSssoni0&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=14\n\nExcel VBA - Immediate Window in Hindi :- https://www.youtube.com/watch?v=fZ7C2onBZXQ&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=55\n\nExcel VBA - Auto Filter using WildCard characters in Hindi :- https://www.youtube.com/watch?v=vpUcMvoAjTE&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=68\n\nExcel VBA - Hyperlinks in Hindi :- https://www.youtube.com/watch?v=O8fpvP2Qppw&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=57\n\nIf you have any doubt or query, drop us an email:\nquery@automationfever.com\n\nOur Website :-\nhttp://www.automationfever.com/\n\nPlease do like our FaceBook Page :-\nhttps://www.facebook.com/FeverAutomation\n\nFollow us on Twitter :-\nhttps://twitter.com/AutomationFever\n\nBlogpost:-\nhttps://automationfever.blogspot.com\n\n#Excel\n#ExcelVba\n#ExcelMacros\n#AddBackgroundImageVba\n#InsertBackgoundImageVba\n#LearnVba\n#RemoveBackgroundImageVba\n#RemoveGridlineVba\n#Addsheetbackgroundimageinvba\n#Insertbackgroundimageinvba\n#Removebackgroundimageinsheet\n#Howtoaddbackgroundimageinsheet\n#removebackgroundimagefromsheetinvba\n#setsheetbackgroundpictureinvba\n#addsheetbackgroundimageinvba\n#Hidegridlinessheetimagesinvba\n#howtoremovesheetgridlinesinvba\n#howtoremovebackgroundpictureinvba" />
<meta name="robots" content="noodp"/>
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Excel VBA - Add Background Image in Sheet(Hindi)" />
<meta property="og:description" content="Download Code :-https://www.automationfever.com/single/rTJrSssoni0\n\nIn this video tutorial, you will learn how to add background image in your sheet using VBA code. You will also learn how to remove background image from your sheet. Sometimes you need to remove gridlines from your excel sheet using VBA code. You will learn how to remove gridlines from your excel sheet. And if the gridlines already removed how to get back gridlines. Please do watch this video and share your feedback with us.\n\nFor adding background image in sheet, you need to use SetBackgroundPicture function of Sheets collection. Below is the code for same :-\nSheet2.SetBackgroundPicture Filename\n\n\nFor removing grid lines from your sheet, you need to set DisplayGridlines properties false of ActiveWindow Object. Code for the same is below :-\nActiveWindow.DisplayGridlines = False\n\nFor removing background image, you need to use the below code :-\nSheet2.SetBackgroundPicture ""\n\nHope you found this video useful. Please like, share and subscribe to our channel. This will motivate us to create more good contents. Thanks! \n\nThe excel file used in this video uploaded to our website. You can visit our website and download the code file for practice. Below is the link for the same:-\nhttps://www.automationfever.com/single/rTJrSssoni0\n\nVba Loops in Hindi :- https://www.youtube.com/watch?v=pJdkwfyohNU&list=PLMJfpumszTDOnMC1vRfiT-cMN7odyonSK\n\nVBA - Text To Columns in Hindi :- https://www.youtube.com/watch?v=_gMix4qY1Cw&list=PLMJfpumszTDOsom1agKDj603nJHBljGer\n\nVBA - Worksheets in Hindi :- https://www.youtube.com/watch?v=MRtR7aStVck&list=PLMJfpumszTDMX-cGlgEqUM8eLJgiZhpWu\n\nVBA - Sorting in Hindi :- https://www.youtube.com/watch?v=4FAT48smqZs&list=PLMJfpumszTDPukJFlvyyVveI31KVQH88W\n\nVBA - Filter in Hindi :- https://www.youtube.com/watch?v=RVO_tEEiI-k&list=PLMJfpumszTDM_zeesRjwV4FtkOVn6YKpn\n\nExcel VBA Projects in Hindi :- https://www.youtube.com/watch?v=RVO_tEEiI-k&list=PLMJfpumszTDM_zeesRjwV4FtkOVn6YKpn\n\nExcel VBA - Introduction in Hindi :- https://www.youtube.com/watch?v=mF3agvrs7nc&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=2\n\nExcel VBA - Range in Hindi :- https://www.youtube.com/watch?v=N6GbVZSdZw4&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=16\n\nExcel VBA - Auto Format in Hindi :- https://www.youtube.com/watch?v=8xjOP0XKOxM&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=26\n\nExcel VBA - Add Background Image in Sheet (Hindi) :-https://www.youtube.com/watch?v=rTJrSssoni0&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=14\n\nExcel VBA - Immediate Window in Hindi :- https://www.youtube.com/watch?v=fZ7C2onBZXQ&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=55\n\nExcel VBA - Auto Filter using WildCard characters in Hindi :- https://www.youtube.com/watch?v=vpUcMvoAjTE&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=68\n\nExcel VBA - Hyperlinks in Hindi :- https://www.youtube.com/watch?v=O8fpvP2Qppw&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=57\n\nIf you have any doubt or query, drop us an email:\nquery@automationfever.com\n\nOur Website :-\nhttp://www.automationfever.com/\n\nPlease do like our FaceBook Page :-\nhttps://www.facebook.com/FeverAutomation\n\nFollow us on Twitter :-\nhttps://twitter.com/AutomationFever\n\nBlogpost:-\nhttps://automationfever.blogspot.com\n\n#Excel\n#ExcelVba\n#ExcelMacros\n#AddBackgroundImageVba\n#InsertBackgoundImageVba\n#LearnVba\n#RemoveBackgroundImageVba\n#RemoveGridlineVba\n#Addsheetbackgroundimageinvba\n#Insertbackgroundimageinvba\n#Removebackgroundimageinsheet\n#Howtoaddbackgroundimageinsheet\n#removebackgroundimagefromsheetinvba\n#setsheetbackgroundpictureinvba\n#addsheetbackgroundimageinvba\n#Hidegridlinessheetimagesinvba\n#howtoremovesheetgridlinesinvba\n#howtoremovebackgroundpictureinvba" />
<meta property="og:url" content="http://www.automationfever.com/" />
<meta property="og:site_name" content="AutomationFever" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Download Code :-https://www.automationfever.com/single/rTJrSssoni0\n\nIn this video tutorial, you will learn how to add background image in your sheet using VBA code. You will also learn how to remove background image from your sheet. Sometimes you need to remove gridlines from your excel sheet using VBA code. You will learn how to remove gridlines from your excel sheet. And if the gridlines already removed how to get back gridlines. Please do watch this video and share your feedback with us.\n\nFor adding background image in sheet, you need to use SetBackgroundPicture function of Sheets collection. Below is the code for same :-\nSheet2.SetBackgroundPicture Filename\n\n\nFor removing grid lines from your sheet, you need to set DisplayGridlines properties false of ActiveWindow Object. Code for the same is below :-\nActiveWindow.DisplayGridlines = False\n\nFor removing background image, you need to use the below code :-\nSheet2.SetBackgroundPicture ""\n\nHope you found this video useful. Please like, share and subscribe to our channel. This will motivate us to create more good contents. Thanks! \n\nThe excel file used in this video uploaded to our website. You can visit our website and download the code file for practice. Below is the link for the same:-\nhttps://www.automationfever.com/single/rTJrSssoni0\n\nVba Loops in Hindi :- https://www.youtube.com/watch?v=pJdkwfyohNU&list=PLMJfpumszTDOnMC1vRfiT-cMN7odyonSK\n\nVBA - Text To Columns in Hindi :- https://www.youtube.com/watch?v=_gMix4qY1Cw&list=PLMJfpumszTDOsom1agKDj603nJHBljGer\n\nVBA - Worksheets in Hindi :- https://www.youtube.com/watch?v=MRtR7aStVck&list=PLMJfpumszTDMX-cGlgEqUM8eLJgiZhpWu\n\nVBA - Sorting in Hindi :- https://www.youtube.com/watch?v=4FAT48smqZs&list=PLMJfpumszTDPukJFlvyyVveI31KVQH88W\n\nVBA - Filter in Hindi :- https://www.youtube.com/watch?v=RVO_tEEiI-k&list=PLMJfpumszTDM_zeesRjwV4FtkOVn6YKpn\n\nExcel VBA Projects in Hindi :- https://www.youtube.com/watch?v=RVO_tEEiI-k&list=PLMJfpumszTDM_zeesRjwV4FtkOVn6YKpn\n\nExcel VBA - Introduction in Hindi :- https://www.youtube.com/watch?v=mF3agvrs7nc&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=2\n\nExcel VBA - Range in Hindi :- https://www.youtube.com/watch?v=N6GbVZSdZw4&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=16\n\nExcel VBA - Auto Format in Hindi :- https://www.youtube.com/watch?v=8xjOP0XKOxM&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=26\n\nExcel VBA - Add Background Image in Sheet (Hindi) :-https://www.youtube.com/watch?v=rTJrSssoni0&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=14\n\nExcel VBA - Immediate Window in Hindi :- https://www.youtube.com/watch?v=fZ7C2onBZXQ&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=55\n\nExcel VBA - Auto Filter using WildCard characters in Hindi :- https://www.youtube.com/watch?v=vpUcMvoAjTE&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=68\n\nExcel VBA - Hyperlinks in Hindi :- https://www.youtube.com/watch?v=O8fpvP2Qppw&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=57\n\nIf you have any doubt or query, drop us an email:\nquery@automationfever.com\n\nOur Website :-\nhttp://www.automationfever.com/\n\nPlease do like our FaceBook Page :-\nhttps://www.facebook.com/FeverAutomation\n\nFollow us on Twitter :-\nhttps://twitter.com/AutomationFever\n\nBlogpost:-\nhttps://automationfever.blogspot.com\n\n#Excel\n#ExcelVba\n#ExcelMacros\n#AddBackgroundImageVba\n#InsertBackgoundImageVba\n#LearnVba\n#RemoveBackgroundImageVba\n#RemoveGridlineVba\n#Addsheetbackgroundimageinvba\n#Insertbackgroundimageinvba\n#Removebackgroundimageinsheet\n#Howtoaddbackgroundimageinsheet\n#removebackgroundimagefromsheetinvba\n#setsheetbackgroundpictureinvba\n#addsheetbackgroundimageinvba\n#Hidegridlinessheetimagesinvba\n#howtoremovesheetgridlinesinvba\n#howtoremovebackgroundpictureinvba" />
<meta name="twitter:title" content="Excel VBA - Add Background Image in Sheet(Hindi)" />
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
                    <iframe src="https://www.youtube.com/embed/rTJrSssoni0?autoplay=0&rel=0&modestbranding=1&mute=0&controls=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                </div>
                <div class="song-info">
                    <h3> Excel VBA - Add Background Image in Sheet(Hindi)
                            <a href="enable-developer-tab">                                <img src="{{asset('images/next.png')}}" style="margin-top: -6px;"> </a>  
                            <a href="{{ asset('vba_codes/InserBackgroudImage.zip')}}"><img src="{{asset('images/download_code.png')}}" width="50" height="30" alt="Download code files" class="float-right" />
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
data-published-datetime="2020-06-13 15:23:00"
data-parent-playlist="VBA Tutorials For Beginners (Hindi)">
                            
                                <h4>Published on 13 June 2020</h4>
                                    <p>
                                        Download Code :-https://www.automationfever.com/single/rTJrSssoni0 <BR>  <BR> In this video tutorial, you will learn how to add background image in your sheet using VBA code. You will also learn how to remove background image from your sheet. Sometimes you need to remove gridlines from your excel sheet using VBA code. You will learn how to remove gridlines from your excel sheet. And if the gridlines already removed how to get back gridlines. Please do watch this video and share your feedback with us. <BR>  <BR> For adding background image in sheet, you need to use SetBackgroundPicture function of Sheets collection. Below is the code for same :- <BR> Sheet2.SetBackgroundPicture Filename <BR>  <BR>  <BR> For removing grid lines from your sheet, you need to set DisplayGridlines properties false of ActiveWindow Object. Code for the same is below :- <BR> ActiveWindow.DisplayGridlines = False <BR>  <BR> For removing background image, you need to use the below code :- <BR> Sheet2.SetBackgroundPicture "" <BR>  <BR> Hope you found this video useful. Please like, share and subscribe to our channel. This will motivate us to create more good contents. Thanks!  <BR>  <BR> The excel file used in this video uploaded to our website. You can visit our website and download the code file for practice. Below is the link for the same:- <BR> https://www.automationfever.com/single/rTJrSssoni0 <BR>  <BR> Vba Loops in Hindi :- https://www.youtube.com/watch?v=pJdkwfyohNU&list=PLMJfpumszTDOnMC1vRfiT-cMN7odyonSK <BR>  <BR> VBA - Text To Columns in Hindi :- https://www.youtube.com/watch?v=_gMix4qY1Cw&list=PLMJfpumszTDOsom1agKDj603nJHBljGer <BR>  <BR> VBA - Worksheets in Hindi :- https://www.youtube.com/watch?v=MRtR7aStVck&list=PLMJfpumszTDMX-cGlgEqUM8eLJgiZhpWu <BR>  <BR> VBA - Sorting in Hindi :- https://www.youtube.com/watch?v=4FAT48smqZs&list=PLMJfpumszTDPukJFlvyyVveI31KVQH88W <BR>  <BR> VBA - Filter in Hindi :- https://www.youtube.com/watch?v=RVO_tEEiI-k&list=PLMJfpumszTDM_zeesRjwV4FtkOVn6YKpn <BR>  <BR> Excel VBA Projects in Hindi :- https://www.youtube.com/watch?v=RVO_tEEiI-k&list=PLMJfpumszTDM_zeesRjwV4FtkOVn6YKpn <BR>  <BR> Excel VBA - Introduction in Hindi :- https://www.youtube.com/watch?v=mF3agvrs7nc&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=2 <BR>  <BR> Excel VBA - Range in Hindi :- https://www.youtube.com/watch?v=N6GbVZSdZw4&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=16 <BR>  <BR> Excel VBA - Auto Format in Hindi :- https://www.youtube.com/watch?v=8xjOP0XKOxM&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=26 <BR>  <BR> Excel VBA - Add Background Image in Sheet (Hindi) :-https://www.youtube.com/watch?v=rTJrSssoni0&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=14 <BR>  <BR> Excel VBA - Immediate Window in Hindi :- https://www.youtube.com/watch?v=fZ7C2onBZXQ&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=55 <BR>  <BR> Excel VBA - Auto Filter using WildCard characters in Hindi :- https://www.youtube.com/watch?v=vpUcMvoAjTE&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=68 <BR>  <BR> Excel VBA - Hyperlinks in Hindi :- https://www.youtube.com/watch?v=O8fpvP2Qppw&list=PLMJfpumszTDOGU4PKGZZxU6zLNnQOq1sG&index=57 <BR>  <BR> If you have any doubt or query, drop us an email: <BR> query@automationfever.com <BR>  <BR> Our Website :- <BR> http://www.automationfever.com/ <BR>  <BR> Please do like our FaceBook Page :- <BR> https://www.facebook.com/FeverAutomation <BR>  <BR> Follow us on Twitter :- <BR> https://twitter.com/AutomationFever <BR>  <BR> Blogpost:- <BR> https://automationfever.blogspot.com <BR>  <BR> #Excel <BR> #ExcelVba <BR> #ExcelMacros <BR> #AddBackgroundImageVba <BR> #InsertBackgoundImageVba <BR> #LearnVba <BR> #RemoveBackgroundImageVba <BR> #RemoveGridlineVba <BR> #Addsheetbackgroundimageinvba <BR> #Insertbackgroundimageinvba <BR> #Removebackgroundimageinsheet <BR> #Howtoaddbackgroundimageinsheet <BR> #removebackgroundimagefromsheetinvba <BR> #setsheetbackgroundpictureinvba <BR> #addsheetbackgroundimageinvba <BR> #Hidegridlinessheetimagesinvba <BR> #howtoremovesheetgridlinesinvba <BR> #howtoremovebackgroundpictureinvba
                                    </p>
                        </ul>
                    </div>
                    </div>
                    <div class="published">
                    <div class="load_more"> 
                        <ul id="text-description" data-description="text-description" data-video_id="rTJrSssoni0">
                            
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
                      <input type="hidden" id="video_id" name="video_id" value="rTJrSssoni0" />
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
            
            @include('vba.basic-vba.supported-js-code')     
@endsection
