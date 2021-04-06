@extends('master-layout.master')
@section('application-title')
  <title> Excel VBA - Message Box (Hindi)</title>    
@endsection


@section('fevicon')
    <link rel="icon" href="{{ asset('images/AutomationFever_icon.png')}}" type="image/gif" sizes="16x16">
@endsection


@section('meta_data')
<meta name="keywords" content="excel vba messagebox,how to use message box in vba,message box in excel vba,msgbox in vba,Msgbox function in vba,msgbox in vba excel,msgbox in vba example,using msgbox in vba,how to create msgbox in vba,how to add msgbox in vba,how to write msgbox in vba,message box in vba,message box in vba code,vba code for message box,excel vba tutorial in hindi,message box vba,automation fever,vba,excel,macro,excel vba,excel macros" />
<meta name="description" content="Download Code:-https://www.automationfever.com/single/WYc-DZ5c8uk\nMsgBox:-\nMsgBox is a function which displays a message window, also known as a dialog box, that you can use to inform your users by showinga custom message or get some basic inputs (such as yes/no or ok/cancel).\n\nTitle:-\nThis is the title that will appear at the top of the message box. The default is �Microsoft Excel�.\n\nButtons:-\nThis parameter does many things including setting the button type, icon type, default button, modal type etc. If this parameter is not used a message box with the Ok button and no icon is displayed.\nSyntax:-MsgBox �This is Message�,vbOkCancel+VBInformation,�My Title�\n\nButton Types:-\nvbOKOnly, vbOKCancel, vbYesNo, vbYesNoCancel, vbRetryCancel, vbAbortRetryIgnore\n\nIcon Types:-\nvbInformation,vbCritical,vbExclamation,vbQuestion\n\nDefault Button:-\nvbDefaultButton1, vbDefaultButton2, vbDefaultButton3\n\nConstant Value Description\nvbOK         1           OK\nvbCancel 2         Cancel\nvbAbort     3         Abort\nvbRetry         4         Retry\nvbIgnore 5        Ignore\nvbYes         6              Yes\nvbNo         7         No\n\nIf you have any doubt or query, drop us an email:\nquery@automationfever.com\n\nOur Website :-\nhttp://www.automationfever.com/\n\nPlease do like our FaceBook Page :-\nhttps://www.facebook.com/FeverAutomation\n\nFollow us on Twitter :-\nhttps://twitter.com/AutomationFever\n\nBlogpost:-\nhttps://automationfever.blogspot.com\n\n\n#MsgBox\n#VbaMessageBox\n#ExcelVbaMessageBox\n#WhatIsMsgBox\n#AlertInVba\n#PromptInVba\n#VbaMsgBox\n#MsgBoxVba\n#ExcelVbaTutorial\n#ExcelVbaTutorialsinhindi\n#Messageboxinvba\n#excelvbamessagebox\n#howtousemessageboxinvba\n#messageboxinexcelvba\n#msgboxinvba\n#Msgboxfunctioninvba\n#msgboxinvbaexcel\n#msgboxinvbaexample\n#usingmsgboxinvba\n#msgboxinexcelvba\n#howtocreatemsgboxinvba\n#howtoaddmsgboxinvba\n#howtowritemsgboxinvba\n#messageboxinvba\n#messageboxinvbacode\n#vbacodeformessagebox\n#messageboxinvbamacro" />
<meta name="robots" content="noodp"/>
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Excel VBA - Message Box (Hindi)" />
<meta property="og:description" content="Download Code:-https://www.automationfever.com/single/WYc-DZ5c8uk\nMsgBox:-\nMsgBox is a function which displays a message window, also known as a dialog box, that you can use to inform your users by showinga custom message or get some basic inputs (such as yes/no or ok/cancel).\n\nTitle:-\nThis is the title that will appear at the top of the message box. The default is �Microsoft Excel�.\n\nButtons:-\nThis parameter does many things including setting the button type, icon type, default button, modal type etc. If this parameter is not used a message box with the Ok button and no icon is displayed.\nSyntax:-MsgBox �This is Message�,vbOkCancel+VBInformation,�My Title�\n\nButton Types:-\nvbOKOnly, vbOKCancel, vbYesNo, vbYesNoCancel, vbRetryCancel, vbAbortRetryIgnore\n\nIcon Types:-\nvbInformation,vbCritical,vbExclamation,vbQuestion\n\nDefault Button:-\nvbDefaultButton1, vbDefaultButton2, vbDefaultButton3\n\nConstant Value Description\nvbOK         1           OK\nvbCancel 2         Cancel\nvbAbort     3         Abort\nvbRetry         4         Retry\nvbIgnore 5        Ignore\nvbYes         6              Yes\nvbNo         7         No\n\nIf you have any doubt or query, drop us an email:\nquery@automationfever.com\n\nOur Website :-\nhttp://www.automationfever.com/\n\nPlease do like our FaceBook Page :-\nhttps://www.facebook.com/FeverAutomation\n\nFollow us on Twitter :-\nhttps://twitter.com/AutomationFever\n\nBlogpost:-\nhttps://automationfever.blogspot.com\n\n\n#MsgBox\n#VbaMessageBox\n#ExcelVbaMessageBox\n#WhatIsMsgBox\n#AlertInVba\n#PromptInVba\n#VbaMsgBox\n#MsgBoxVba\n#ExcelVbaTutorial\n#ExcelVbaTutorialsinhindi\n#Messageboxinvba\n#excelvbamessagebox\n#howtousemessageboxinvba\n#messageboxinexcelvba\n#msgboxinvba\n#Msgboxfunctioninvba\n#msgboxinvbaexcel\n#msgboxinvbaexample\n#usingmsgboxinvba\n#msgboxinexcelvba\n#howtocreatemsgboxinvba\n#howtoaddmsgboxinvba\n#howtowritemsgboxinvba\n#messageboxinvba\n#messageboxinvbacode\n#vbacodeformessagebox\n#messageboxinvbamacro" />
<meta property="og:url" content="http://www.automationfever.com/" />
<meta property="og:site_name" content="AutomationFever" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Download Code:-https://www.automationfever.com/single/WYc-DZ5c8uk\nMsgBox:-\nMsgBox is a function which displays a message window, also known as a dialog box, that you can use to inform your users by showinga custom message or get some basic inputs (such as yes/no or ok/cancel).\n\nTitle:-\nThis is the title that will appear at the top of the message box. The default is �Microsoft Excel�.\n\nButtons:-\nThis parameter does many things including setting the button type, icon type, default button, modal type etc. If this parameter is not used a message box with the Ok button and no icon is displayed.\nSyntax:-MsgBox �This is Message�,vbOkCancel+VBInformation,�My Title�\n\nButton Types:-\nvbOKOnly, vbOKCancel, vbYesNo, vbYesNoCancel, vbRetryCancel, vbAbortRetryIgnore\n\nIcon Types:-\nvbInformation,vbCritical,vbExclamation,vbQuestion\n\nDefault Button:-\nvbDefaultButton1, vbDefaultButton2, vbDefaultButton3\n\nConstant Value Description\nvbOK         1           OK\nvbCancel 2         Cancel\nvbAbort     3         Abort\nvbRetry         4         Retry\nvbIgnore 5        Ignore\nvbYes         6              Yes\nvbNo         7         No\n\nIf you have any doubt or query, drop us an email:\nquery@automationfever.com\n\nOur Website :-\nhttp://www.automationfever.com/\n\nPlease do like our FaceBook Page :-\nhttps://www.facebook.com/FeverAutomation\n\nFollow us on Twitter :-\nhttps://twitter.com/AutomationFever\n\nBlogpost:-\nhttps://automationfever.blogspot.com\n\n\n#MsgBox\n#VbaMessageBox\n#ExcelVbaMessageBox\n#WhatIsMsgBox\n#AlertInVba\n#PromptInVba\n#VbaMsgBox\n#MsgBoxVba\n#ExcelVbaTutorial\n#ExcelVbaTutorialsinhindi\n#Messageboxinvba\n#excelvbamessagebox\n#howtousemessageboxinvba\n#messageboxinexcelvba\n#msgboxinvba\n#Msgboxfunctioninvba\n#msgboxinvbaexcel\n#msgboxinvbaexample\n#usingmsgboxinvba\n#msgboxinexcelvba\n#howtocreatemsgboxinvba\n#howtoaddmsgboxinvba\n#howtowritemsgboxinvba\n#messageboxinvba\n#messageboxinvbacode\n#vbacodeformessagebox\n#messageboxinvbamacro" />
<meta name="twitter:title" content="Excel VBA - Message Box (Hindi)" />
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
                    <iframe src="https://www.youtube.com/embed/WYc-DZ5c8uk?autoplay=0&rel=0&modestbranding=1&mute=0&controls=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                </div>
                <div class="song-info">
                    <h3> Excel VBA - Message Box (Hindi)
                            <a href="enable-developer-tab">                                <img src="{{asset('images/next.png')}}" style="margin-top: -6px;"> </a>  
                            <a href="{{ asset('vba_codes/MessageBox/MessageBox.xlsm')}}"><img src="{{asset('images/download_code.png')}}" width="50" height="30" alt="Download code files" class="float-right" />
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
data-published-datetime="2020-06-09 08:52:48"
data-parent-playlist="VBA Tutorials For Beginners (Hindi)">
                            
                                <h4>Published on 09 June 2020</h4>
                                    <p>
                                        Download Code:-https://www.automationfever.com/single/WYc-DZ5c8uk <BR> MsgBox:- <BR> MsgBox is a function which displays a message window, also known as a dialog box, that you can use to inform your users by showinga custom message or get some basic inputs (such as yes/no or ok/cancel). <BR>  <BR> Title:- <BR> This is the title that will appear at the top of the message box. The default is �Microsoft Excel�. <BR>  <BR> Buttons:- <BR> This parameter does many things including setting the button type, icon type, default button, modal type etc. If this parameter is not used a message box with the Ok button and no icon is displayed. <BR> Syntax:-MsgBox �This is Message�,vbOkCancel+VBInformation,�My Title� <BR>  <BR> Button Types:- <BR> vbOKOnly, vbOKCancel, vbYesNo, vbYesNoCancel, vbRetryCancel, vbAbortRetryIgnore <BR>  <BR> Icon Types:- <BR> vbInformation,vbCritical,vbExclamation,vbQuestion <BR>  <BR> Default Button:- <BR> vbDefaultButton1, vbDefaultButton2, vbDefaultButton3 <BR>  <BR> Constant Value Description <BR> vbOK         1           OK <BR> vbCancel 2         Cancel <BR> vbAbort     3         Abort <BR> vbRetry         4         Retry <BR> vbIgnore 5        Ignore <BR> vbYes         6              Yes <BR> vbNo         7         No <BR>  <BR> If you have any doubt or query, drop us an email: <BR> query@automationfever.com <BR>  <BR> Our Website :- <BR> http://www.automationfever.com/ <BR>  <BR> Please do like our FaceBook Page :- <BR> https://www.facebook.com/FeverAutomation <BR>  <BR> Follow us on Twitter :- <BR> https://twitter.com/AutomationFever <BR>  <BR> Blogpost:- <BR> https://automationfever.blogspot.com <BR>  <BR>  <BR> #MsgBox <BR> #VbaMessageBox <BR> #ExcelVbaMessageBox <BR> #WhatIsMsgBox <BR> #AlertInVba <BR> #PromptInVba <BR> #VbaMsgBox <BR> #MsgBoxVba <BR> #ExcelVbaTutorial <BR> #ExcelVbaTutorialsinhindi <BR> #Messageboxinvba <BR> #excelvbamessagebox <BR> #howtousemessageboxinvba <BR> #messageboxinexcelvba <BR> #msgboxinvba <BR> #Msgboxfunctioninvba <BR> #msgboxinvbaexcel <BR> #msgboxinvbaexample <BR> #usingmsgboxinvba <BR> #msgboxinexcelvba <BR> #howtocreatemsgboxinvba <BR> #howtoaddmsgboxinvba <BR> #howtowritemsgboxinvba <BR> #messageboxinvba <BR> #messageboxinvbacode <BR> #vbacodeformessagebox <BR> #messageboxinvbamacro
                                    </p>
                        </ul>
                    </div>
                    </div>
                    <div class="published">
                    <div class="load_more"> 
                        <ul id="text-description" data-description="text-description" data-video_id="WYc-DZ5c8uk">
                            
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
                      <input type="hidden" id="video_id" name="video_id" value="WYc-DZ5c8uk" />
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
