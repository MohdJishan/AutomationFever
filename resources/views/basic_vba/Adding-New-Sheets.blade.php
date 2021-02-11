@extends('master-layout.master')
@section('application-title')
  <title> Excel VBA - Adding Sheets (Hindi)</title>    
@endsection


@section('fevicon')
    <link rel="icon" href="{{ asset('images/AutomationFever_icon.png')}}" type="image/gif" sizes="16x16">
@endsection


@section('meta_data')
<meta name="keywords" content="vba add a sheet,Excel vba add a sheet,How to add a sheet in vba,how to add multiple sheets in vba,add a sheet in hindi,add multiple sheets in hindi,counting sheets in workbook,automation fever,excel vba tutorials in hindi,excel vba tutorials for beginners,add sheets in excel vba,vba add sheet with name,add sheet vba excel,add multiple sheets in excel vba,how to add multiple sheets in excel using vba,vba,excel vba,macro,excel macros" />
<meta name="description" content="Download Code:-https://www.automationfever.com/single/MRtR7aStVck\nIn this video, you will learn\nHow to add single sheet in excel using VBA\nHow to rename excel sheet in VBA\nHow to add Edit Toolbar \nHow to comment VBA code \nHow to add multiple excel sheet in VBA\nHow to add worksheet in last\nHow to add sheet in start\nHow to add Chart Sheet in macro\nHow to add a macro sheet in excel VBA\n\nContent of this video :-\n00:00 Intro\n01:47 Add Single Sheet\n02:39 Rename excel sheet\n05:20 Rename sheet according to user\n07:40 Add multiple Sheets\n08:55 Add Sheet in last \n12:30 Add Sheet in Start\n14:05 Add Chart Sheet\n15:34 Add Macro Sheet\n\nTo add a new sheet in your worksheet, we use Add function of Worksheets collection.\nBelow  is the code for adding a new sheet :- \nSub AddSheet()\n  Worksheets.Add\nEnd Sub\n\nIf you want to change the name of your sheet. You need to use name property of Worksheets collection.\nBelow is sample code to rename a sheet :-\nSub RenameSheet()\n'   Worksheets("Sheet2").Name = "dummy"\n' Worksheets(2).Name = "mySheet"\n \nWorksheets(1).Name = VBA.InputBox(Prompt:="Please enter sheet name", Title:="Rename Sheet")\nEnd Sub\n\nTo add multiple sheets at one time in vba, you can use Count property of Worksheets collection Add function.\nBelow is a example for the same:-\nSub AddMultiSheets()\n   Worksheets.Add Count:=4\nEnd Sub\n\nYou can use After property to add a sheet after any sheet. If you need to add a sheet after last sheet in your excel workbook, you can either pass the name of last worksheet in After property of Add function or you can also pass the count of total sheets.\nSub AddSheetInLast()\n'  Worksheets.Add After:=Worksheets("mySheet")\nWorksheets.Add After:=Worksheets(Worksheets.Count)\n  'Debug.Print Worksheets.Count\nEnd Sub\n\nTo add a sheet before any worksheet, you need to pass the worksheet name in Before property of Add function.\nSub AddsheetInStart()\n   Worksheets.Add Before:=Worksheets(3)\nEnd Sub\n\nIf you need to add Macro sheet of a chart in your workbook, you can use Type property of Add function.\nBelow is the sample example for the same\nSub AddMacroChart()\n' Sheets.Add Type:=2\n'  Sheets.Add Type:=3\n  Sheets.Add Type:=1\nEnd Sub\n\nThe excel file used in this video uploaded to our website. You can visit our website and download the code file for practice. Below is the link for the same:-\nhttps://www.automationfever.com/single/MRtR7aStVck\n\nIf you have any doubt or query, drop us an email:\nquery@automationfever.com\n\nOur Website :-\nhttp://www.automationfever.com/\n\nPlease do like our FaceBook Page :-\nhttps://www.facebook.com/FeverAutomation\n\nFollow us on Twitter :-\nhttps://twitter.com/AutomationFever\n\nBlogpost:-\nhttps://automationfever.blogspot.com\n\n#Vba\n#ExcelVba\n#AddSheetInVBA\n#AddWorksheetInVBA\n#HowToAddWorksheetsInVBA\n#AddNewWorkSheets\n#AddMultipleWorksheets\n#WorksheetsCount\n#SheetVba\n#SheetCounts\n#ExcelVbaTutorialsinHindi\n#AddaSheet\n#Addmultiplesheets\n#Addmultiplesheetsinvba\n#vbaaddasheet\n#vbaaddmultiplesheets\n#Excelvbaaddasheet\n#Excelvbaaddmultiplesheets\n#Howtoaddasheetinvba\n#howtoaddmultiplesheetsinvba\n#addasheetinhindi\n#addmultiplesheetsinhindi\n#renameasheet\n#countingsheetsinworkbook\n#automationfever\n#excelvbatutorialsinhindi\n#excelvbatutorialsforbeginners\n#excelmacro" />
<meta name="robots" content="noodp"/>
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Excel VBA - Adding Sheets (Hindi)" />
<meta property="og:description" content="Download Code:-https://www.automationfever.com/single/MRtR7aStVck\nIn this video, you will learn\nHow to add single sheet in excel using VBA\nHow to rename excel sheet in VBA\nHow to add Edit Toolbar \nHow to comment VBA code \nHow to add multiple excel sheet in VBA\nHow to add worksheet in last\nHow to add sheet in start\nHow to add Chart Sheet in macro\nHow to add a macro sheet in excel VBA\n\nContent of this video :-\n00:00 Intro\n01:47 Add Single Sheet\n02:39 Rename excel sheet\n05:20 Rename sheet according to user\n07:40 Add multiple Sheets\n08:55 Add Sheet in last \n12:30 Add Sheet in Start\n14:05 Add Chart Sheet\n15:34 Add Macro Sheet\n\nTo add a new sheet in your worksheet, we use Add function of Worksheets collection.\nBelow  is the code for adding a new sheet :- \nSub AddSheet()\n  Worksheets.Add\nEnd Sub\n\nIf you want to change the name of your sheet. You need to use name property of Worksheets collection.\nBelow is sample code to rename a sheet :-\nSub RenameSheet()\n'   Worksheets("Sheet2").Name = "dummy"\n' Worksheets(2).Name = "mySheet"\n \nWorksheets(1).Name = VBA.InputBox(Prompt:="Please enter sheet name", Title:="Rename Sheet")\nEnd Sub\n\nTo add multiple sheets at one time in vba, you can use Count property of Worksheets collection Add function.\nBelow is a example for the same:-\nSub AddMultiSheets()\n   Worksheets.Add Count:=4\nEnd Sub\n\nYou can use After property to add a sheet after any sheet. If you need to add a sheet after last sheet in your excel workbook, you can either pass the name of last worksheet in After property of Add function or you can also pass the count of total sheets.\nSub AddSheetInLast()\n'  Worksheets.Add After:=Worksheets("mySheet")\nWorksheets.Add After:=Worksheets(Worksheets.Count)\n  'Debug.Print Worksheets.Count\nEnd Sub\n\nTo add a sheet before any worksheet, you need to pass the worksheet name in Before property of Add function.\nSub AddsheetInStart()\n   Worksheets.Add Before:=Worksheets(3)\nEnd Sub\n\nIf you need to add Macro sheet of a chart in your workbook, you can use Type property of Add function.\nBelow is the sample example for the same\nSub AddMacroChart()\n' Sheets.Add Type:=2\n'  Sheets.Add Type:=3\n  Sheets.Add Type:=1\nEnd Sub\n\nThe excel file used in this video uploaded to our website. You can visit our website and download the code file for practice. Below is the link for the same:-\nhttps://www.automationfever.com/single/MRtR7aStVck\n\nIf you have any doubt or query, drop us an email:\nquery@automationfever.com\n\nOur Website :-\nhttp://www.automationfever.com/\n\nPlease do like our FaceBook Page :-\nhttps://www.facebook.com/FeverAutomation\n\nFollow us on Twitter :-\nhttps://twitter.com/AutomationFever\n\nBlogpost:-\nhttps://automationfever.blogspot.com\n\n#Vba\n#ExcelVba\n#AddSheetInVBA\n#AddWorksheetInVBA\n#HowToAddWorksheetsInVBA\n#AddNewWorkSheets\n#AddMultipleWorksheets\n#WorksheetsCount\n#SheetVba\n#SheetCounts\n#ExcelVbaTutorialsinHindi\n#AddaSheet\n#Addmultiplesheets\n#Addmultiplesheetsinvba\n#vbaaddasheet\n#vbaaddmultiplesheets\n#Excelvbaaddasheet\n#Excelvbaaddmultiplesheets\n#Howtoaddasheetinvba\n#howtoaddmultiplesheetsinvba\n#addasheetinhindi\n#addmultiplesheetsinhindi\n#renameasheet\n#countingsheetsinworkbook\n#automationfever\n#excelvbatutorialsinhindi\n#excelvbatutorialsforbeginners\n#excelmacro" />
<meta property="og:url" content="http://www.automationfever.com/" />
<meta property="og:site_name" content="AutomationFever" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Download Code:-https://www.automationfever.com/single/MRtR7aStVck\nIn this video, you will learn\nHow to add single sheet in excel using VBA\nHow to rename excel sheet in VBA\nHow to add Edit Toolbar \nHow to comment VBA code \nHow to add multiple excel sheet in VBA\nHow to add worksheet in last\nHow to add sheet in start\nHow to add Chart Sheet in macro\nHow to add a macro sheet in excel VBA\n\nContent of this video :-\n00:00 Intro\n01:47 Add Single Sheet\n02:39 Rename excel sheet\n05:20 Rename sheet according to user\n07:40 Add multiple Sheets\n08:55 Add Sheet in last \n12:30 Add Sheet in Start\n14:05 Add Chart Sheet\n15:34 Add Macro Sheet\n\nTo add a new sheet in your worksheet, we use Add function of Worksheets collection.\nBelow  is the code for adding a new sheet :- \nSub AddSheet()\n  Worksheets.Add\nEnd Sub\n\nIf you want to change the name of your sheet. You need to use name property of Worksheets collection.\nBelow is sample code to rename a sheet :-\nSub RenameSheet()\n'   Worksheets("Sheet2").Name = "dummy"\n' Worksheets(2).Name = "mySheet"\n \nWorksheets(1).Name = VBA.InputBox(Prompt:="Please enter sheet name", Title:="Rename Sheet")\nEnd Sub\n\nTo add multiple sheets at one time in vba, you can use Count property of Worksheets collection Add function.\nBelow is a example for the same:-\nSub AddMultiSheets()\n   Worksheets.Add Count:=4\nEnd Sub\n\nYou can use After property to add a sheet after any sheet. If you need to add a sheet after last sheet in your excel workbook, you can either pass the name of last worksheet in After property of Add function or you can also pass the count of total sheets.\nSub AddSheetInLast()\n'  Worksheets.Add After:=Worksheets("mySheet")\nWorksheets.Add After:=Worksheets(Worksheets.Count)\n  'Debug.Print Worksheets.Count\nEnd Sub\n\nTo add a sheet before any worksheet, you need to pass the worksheet name in Before property of Add function.\nSub AddsheetInStart()\n   Worksheets.Add Before:=Worksheets(3)\nEnd Sub\n\nIf you need to add Macro sheet of a chart in your workbook, you can use Type property of Add function.\nBelow is the sample example for the same\nSub AddMacroChart()\n' Sheets.Add Type:=2\n'  Sheets.Add Type:=3\n  Sheets.Add Type:=1\nEnd Sub\n\nThe excel file used in this video uploaded to our website. You can visit our website and download the code file for practice. Below is the link for the same:-\nhttps://www.automationfever.com/single/MRtR7aStVck\n\nIf you have any doubt or query, drop us an email:\nquery@automationfever.com\n\nOur Website :-\nhttp://www.automationfever.com/\n\nPlease do like our FaceBook Page :-\nhttps://www.facebook.com/FeverAutomation\n\nFollow us on Twitter :-\nhttps://twitter.com/AutomationFever\n\nBlogpost:-\nhttps://automationfever.blogspot.com\n\n#Vba\n#ExcelVba\n#AddSheetInVBA\n#AddWorksheetInVBA\n#HowToAddWorksheetsInVBA\n#AddNewWorkSheets\n#AddMultipleWorksheets\n#WorksheetsCount\n#SheetVba\n#SheetCounts\n#ExcelVbaTutorialsinHindi\n#AddaSheet\n#Addmultiplesheets\n#Addmultiplesheetsinvba\n#vbaaddasheet\n#vbaaddmultiplesheets\n#Excelvbaaddasheet\n#Excelvbaaddmultiplesheets\n#Howtoaddasheetinvba\n#howtoaddmultiplesheetsinvba\n#addasheetinhindi\n#addmultiplesheetsinhindi\n#renameasheet\n#countingsheetsinworkbook\n#automationfever\n#excelvbatutorialsinhindi\n#excelvbatutorialsforbeginners\n#excelmacro" />
<meta name="twitter:title" content="Excel VBA - Adding Sheets (Hindi)" />
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
                    <iframe src="https://www.youtube.com/embed/MRtR7aStVck?autoplay=0&rel=0&modestbranding=1&mute=0&controls=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                </div>
                <div class="song-info">
                    <h3> Excel VBA - Adding Sheets (Hindi)
                            <a href="enable-developer-tab">                                <img src="{{asset('images/next.png')}}" style="margin-top: -6px;"> </a>  
                            <a href="{{ asset('vba_codes/Add Worksheet/AddWorksheets.xlsm')}}"><img src="{{asset('images/download_code.png')}}" width="50" height="30" alt="Download code files" class="float-right" />
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
data-published-datetime="2020-06-10 05:48:45"
data-parent-playlist="VBA Tutorials For Beginners (Hindi)">
                            
                                <h4>Published on 10 June 2020</h4>
                                    <p>
                                        Download Code:-https://www.automationfever.com/single/MRtR7aStVck <BR> In this video, you will learn <BR> How to add single sheet in excel using VBA <BR> How to rename excel sheet in VBA <BR> How to add Edit Toolbar  <BR> How to comment VBA code  <BR> How to add multiple excel sheet in VBA <BR> How to add worksheet in last <BR> How to add sheet in start <BR> How to add Chart Sheet in macro <BR> How to add a macro sheet in excel VBA <BR>  <BR> Content of this video :- <BR> 00:00 Intro <BR> 01:47 Add Single Sheet <BR> 02:39 Rename excel sheet <BR> 05:20 Rename sheet according to user <BR> 07:40 Add multiple Sheets <BR> 08:55 Add Sheet in last  <BR> 12:30 Add Sheet in Start <BR> 14:05 Add Chart Sheet <BR> 15:34 Add Macro Sheet <BR>  <BR> To add a new sheet in your worksheet, we use Add function of Worksheets collection. <BR> Below  is the code for adding a new sheet :-  <BR> Sub AddSheet() <BR>   Worksheets.Add <BR> End Sub <BR>  <BR> If you want to change the name of your sheet. You need to use name property of Worksheets collection. <BR> Below is sample code to rename a sheet :- <BR> Sub RenameSheet() <BR> '   Worksheets("Sheet2").Name = "dummy" <BR> ' Worksheets(2).Name = "mySheet" <BR>   <BR> Worksheets(1).Name = VBA.InputBox(Prompt:="Please enter sheet name", Title:="Rename Sheet") <BR> End Sub <BR>  <BR> To add multiple sheets at one time in vba, you can use Count property of Worksheets collection Add function. <BR> Below is a example for the same:- <BR> Sub AddMultiSheets() <BR>    Worksheets.Add Count:=4 <BR> End Sub <BR>  <BR> You can use After property to add a sheet after any sheet. If you need to add a sheet after last sheet in your excel workbook, you can either pass the name of last worksheet in After property of Add function or you can also pass the count of total sheets. <BR> Sub AddSheetInLast() <BR> '  Worksheets.Add After:=Worksheets("mySheet") <BR> Worksheets.Add After:=Worksheets(Worksheets.Count) <BR>   'Debug.Print Worksheets.Count <BR> End Sub <BR>  <BR> To add a sheet before any worksheet, you need to pass the worksheet name in Before property of Add function. <BR> Sub AddsheetInStart() <BR>    Worksheets.Add Before:=Worksheets(3) <BR> End Sub <BR>  <BR> If you need to add Macro sheet of a chart in your workbook, you can use Type property of Add function. <BR> Below is the sample example for the same <BR> Sub AddMacroChart() <BR> ' Sheets.Add Type:=2 <BR> '  Sheets.Add Type:=3 <BR>   Sheets.Add Type:=1 <BR> End Sub <BR>  <BR> The excel file used in this video uploaded to our website. You can visit our website and download the code file for practice. Below is the link for the same:- <BR> https://www.automationfever.com/single/MRtR7aStVck <BR>  <BR> If you have any doubt or query, drop us an email: <BR> query@automationfever.com <BR>  <BR> Our Website :- <BR> http://www.automationfever.com/ <BR>  <BR> Please do like our FaceBook Page :- <BR> https://www.facebook.com/FeverAutomation <BR>  <BR> Follow us on Twitter :- <BR> https://twitter.com/AutomationFever <BR>  <BR> Blogpost:- <BR> https://automationfever.blogspot.com <BR>  <BR> #Vba <BR> #ExcelVba <BR> #AddSheetInVBA <BR> #AddWorksheetInVBA <BR> #HowToAddWorksheetsInVBA <BR> #AddNewWorkSheets <BR> #AddMultipleWorksheets <BR> #WorksheetsCount <BR> #SheetVba <BR> #SheetCounts <BR> #ExcelVbaTutorialsinHindi <BR> #AddaSheet <BR> #Addmultiplesheets <BR> #Addmultiplesheetsinvba <BR> #vbaaddasheet <BR> #vbaaddmultiplesheets <BR> #Excelvbaaddasheet <BR> #Excelvbaaddmultiplesheets <BR> #Howtoaddasheetinvba <BR> #howtoaddmultiplesheetsinvba <BR> #addasheetinhindi <BR> #addmultiplesheetsinhindi <BR> #renameasheet <BR> #countingsheetsinworkbook <BR> #automationfever <BR> #excelvbatutorialsinhindi <BR> #excelvbatutorialsforbeginners <BR> #excelmacro
                                    </p>
                        </ul>
                    </div>
                    </div>
                    <div class="published">
                    <div class="load_more"> 
                        <ul id="text-description" data-description="text-description" data-video_id="MRtR7aStVck">
                            
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
                      <input type="hidden" id="video_id" name="video_id" value="MRtR7aStVck" />
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
