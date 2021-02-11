@extends('master-layout.master')
@section('application-title')
  <title> Excel VBA - Deleting Sheets (Hindi)</title>    
@endsection


@section('fevicon')
    <link rel="icon" href="{{ asset('images/AutomationFever_icon.png')}}" type="image/gif" sizes="16x16">
@endsection


@section('meta_data')
<meta name="keywords" content="how to delete a sheet in excel vba,automation fever,how to delete worksheet in vba,vba delete sheet,delete sheet vba excel,delete sheet in excel vba,delete sheet in hindi,excel vba tutorial for beginners in hindi,excel vba tutorial for beginners,excel vba tutorial in hindi,vba tutorial in hindi,vba tutorial,delete multiple sheets in excel vba,excel automation,automation ferver,vba,excel,excel vba,macro,vba excel,excel macros" />
<meta name="description" content="Download Code:-https://www.automationfever.com/single/kXMbkcK3OjM\n\nIn this video tutorial, You will learn how to delete worksheet from a excel workbook using VBA. When you try to delete a sheet from a excel file using VBA code, an Alert will ask you to confirm. However you are using VBA code to delete the sheet. You need to manually click on delete button to confirm. So we also explained how to handle this annoying alert. How can you disable Alerts and later enable Alerts according your requirement. You will learn to disable Alerts using VBA programming. You will also learn how to delete all sheets from a particular workbook except one sheet.  \n\nVBA code to delete a sheet from excel workbook :-\nSub DeleteSheet()\n  Application.DisplayAlerts = False\n   Worksheets(1).Delete\nEnd Sub\n\nVBA code to delete all sheets except one sheet from excel file :-\nSub DeleteMultiSheets()\n  Application.DisplayAlerts = False\n   Dim sh As Worksheet\n   \n     For Each sh In Worksheets\n        If (sh.Name = "Sheet20") Then\n          Else\n            sh.Delete\n        End If\n       'Debug.Print sh.Name\n     Next sh\nEnd Sub\n\nHope you found this video useful. Please like, share and subscribe to our channel. This will motivate us to create more good contents. Thanks! \n\nThe excel file used in this video uploaded to our website. You can visit our website and download the code file for practice. Below is the link for the same:-\nhttps://www.automationfever.com/single/kXMbkcK3OjM\n\nIf you have any doubt or query, drop us an email:\nquery@automationfever.com\n\nOur Website :-\nhttp://www.automationfever.com/\n\nPlease do like our FaceBook Page :-\nhttps://www.facebook.com/FeverAutomation\n\nFollow us on Twitter :-\nhttps://twitter.com/AutomationFever\n\nBlogpost:-\nhttps://automationfever.blogspot.com\n\n==================================================\n\nEs video me aap sikhege ki ak excel workbook se aap koi sheet kaise delete kar sakte hai. Jab bhi aap vba code ka use karke ak sheet ko delete karne ki koshish krte hai. Ak Alert aap ko rokkar pochta hai ki "Microsoft will permanently delete this sheet. Do you want to continue?". Appko sheet delete krni hoti hai to aapko delete wale button pe click krna padta hai. Ye action aapko manually krna padega chahe aap Vba code ka use krke sheet ko delete kar rahe hai. Esliye es video me aap ye bhi sikhoge ki es alert ko aap kaise disable kr sakte hai. Or sath hi aap sikhoge ki agar aapko apni workbook se ak sheet ko chhodkr baki sari sheets ko delete krna hai to wo kaise kar sakte hai.\n\n\nKisi ak sheet ko excel workbook se delete karne ka code :-\nSub DeleteSheet()\n  Application.DisplayAlerts = False\n   Worksheets(1).Delete\nEnd Sub\n\nAk sheet ko chhodkr baki sari sheets ko excel file se delete krne ka code :-\nSub DeleteMultiSheets()\n  Application.DisplayAlerts = False\n   Dim sh As Worksheet\n   \n     For Each sh In Worksheets\n        If (sh.Name = "Sheet20") Then\n          Else\n            sh.Delete\n        End If\n       'Debug.Print sh.Name\n     Next sh\nEnd Sub\n\nUmmid hai aapko ye video pasand aayegi, hamari es video ko share or hamara channel suscribe kijiye. Esse hamko motivation milege or bhi achchi achchi videos aapke liye banane ki. Sukriya!\n\nExcel ki jo file hamne video me use ki hai use apni website par upload kr diya hai. Aap code file ko hamari website se download krke practice kar sakte hai. File ka link niche diya ja raha hai:-\nhttps://www.automationfever.com/single/kXMbkcK3OjM\n\nAgar aapko koi bhi sawal ya sujhaw hai to aap niche diye gaye hamare email address pe mail kar sakte hai:\nquery@automationfever.com\n\nHamari Website :-\nhttp://www.automationfever.com/\n\nKripiya hamare facebook page ko like kijiye :-\nhttps://www.facebook.com/FeverAutomation\n\nHamko twitter pe follow kijiye :-\nhttps://twitter.com/AutomationFever\n\nBlogpost:-\nhttps://automationfever.blogspot.com\n\nVba Loops in Hindi :- https://www.youtube.com/watch?v=pJdkwfyohNU&list=PLMJfpumszTDOnMC1vRfiT-cMN7odyonSK\n\nVBA - Text To Columns in Hindi :- https://www.youtube.com/watch?v=_gMix4qY1Cw&list=PLMJfpumszTDOsom1agKDj603nJHBljGer\n\nVBA - Worksheets in Hindi :- https://www.youtube.com/watch?v=MRtR7aStVck&list=PLMJfpumszTDMX-cGlgEqUM8eLJgiZhpWu\n\nVBA - Sorting in Hindi :- https://www.youtube.com/watch?v=4FAT48smqZs&list=PLMJfpumszTDPukJFlvyyVveI31KVQH88W\n\nVBA - Filter in Hindi :- https://www.youtube.com/watch?v=RVO_tEEiI-k&list=PLMJfpumszTDM_zeesRjwV4FtkOVn6YKpn\n\nExcel VBA Projects in Hindi :- https://www.youtube.com/watch?v=RVO_tEEiI-k&list=PLMJfpumszTDM_zeesRjwV4FtkOVn6YKpn\n\n#Vba\n#ExcelVba\n#Macro\n#VbaMacro\n#VbaExcel\n#VbaDeleteSheet\n#ExcelVbaDeleteSheet\n#VbaHowToDeleteSheet\n#ExcelVbaHowToDeleteSheet\n#VbaDeleteMultiSheets\n#ExcelVbaTutorialsInHindi\n#VbaDeleteWorksheets\n#ExcelVbaTutorialsinHindi\n#Deleteaworksheet\n#LearnVba\n#Howtodeleteasheetinvba\n#howtodeleteasheetinexcelvba\n#Deleteasheetinhindi\n#Howtodeletemultiplesheetsinvba\n#automationfever\n#excelvbatutorialsforbeginners\n#howtodeleteworksheetinvba\n#macrocodetodeletesheets" />
<meta name="robots" content="noodp"/>
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Excel VBA - Deleting Sheets (Hindi)" />
<meta property="og:description" content="Download Code:-https://www.automationfever.com/single/kXMbkcK3OjM\n\nIn this video tutorial, You will learn how to delete worksheet from a excel workbook using VBA. When you try to delete a sheet from a excel file using VBA code, an Alert will ask you to confirm. However you are using VBA code to delete the sheet. You need to manually click on delete button to confirm. So we also explained how to handle this annoying alert. How can you disable Alerts and later enable Alerts according your requirement. You will learn to disable Alerts using VBA programming. You will also learn how to delete all sheets from a particular workbook except one sheet.  \n\nVBA code to delete a sheet from excel workbook :-\nSub DeleteSheet()\n  Application.DisplayAlerts = False\n   Worksheets(1).Delete\nEnd Sub\n\nVBA code to delete all sheets except one sheet from excel file :-\nSub DeleteMultiSheets()\n  Application.DisplayAlerts = False\n   Dim sh As Worksheet\n   \n     For Each sh In Worksheets\n        If (sh.Name = "Sheet20") Then\n          Else\n            sh.Delete\n        End If\n       'Debug.Print sh.Name\n     Next sh\nEnd Sub\n\nHope you found this video useful. Please like, share and subscribe to our channel. This will motivate us to create more good contents. Thanks! \n\nThe excel file used in this video uploaded to our website. You can visit our website and download the code file for practice. Below is the link for the same:-\nhttps://www.automationfever.com/single/kXMbkcK3OjM\n\nIf you have any doubt or query, drop us an email:\nquery@automationfever.com\n\nOur Website :-\nhttp://www.automationfever.com/\n\nPlease do like our FaceBook Page :-\nhttps://www.facebook.com/FeverAutomation\n\nFollow us on Twitter :-\nhttps://twitter.com/AutomationFever\n\nBlogpost:-\nhttps://automationfever.blogspot.com\n\n==================================================\n\nEs video me aap sikhege ki ak excel workbook se aap koi sheet kaise delete kar sakte hai. Jab bhi aap vba code ka use karke ak sheet ko delete karne ki koshish krte hai. Ak Alert aap ko rokkar pochta hai ki "Microsoft will permanently delete this sheet. Do you want to continue?". Appko sheet delete krni hoti hai to aapko delete wale button pe click krna padta hai. Ye action aapko manually krna padega chahe aap Vba code ka use krke sheet ko delete kar rahe hai. Esliye es video me aap ye bhi sikhoge ki es alert ko aap kaise disable kr sakte hai. Or sath hi aap sikhoge ki agar aapko apni workbook se ak sheet ko chhodkr baki sari sheets ko delete krna hai to wo kaise kar sakte hai.\n\n\nKisi ak sheet ko excel workbook se delete karne ka code :-\nSub DeleteSheet()\n  Application.DisplayAlerts = False\n   Worksheets(1).Delete\nEnd Sub\n\nAk sheet ko chhodkr baki sari sheets ko excel file se delete krne ka code :-\nSub DeleteMultiSheets()\n  Application.DisplayAlerts = False\n   Dim sh As Worksheet\n   \n     For Each sh In Worksheets\n        If (sh.Name = "Sheet20") Then\n          Else\n            sh.Delete\n        End If\n       'Debug.Print sh.Name\n     Next sh\nEnd Sub\n\nUmmid hai aapko ye video pasand aayegi, hamari es video ko share or hamara channel suscribe kijiye. Esse hamko motivation milege or bhi achchi achchi videos aapke liye banane ki. Sukriya!\n\nExcel ki jo file hamne video me use ki hai use apni website par upload kr diya hai. Aap code file ko hamari website se download krke practice kar sakte hai. File ka link niche diya ja raha hai:-\nhttps://www.automationfever.com/single/kXMbkcK3OjM\n\nAgar aapko koi bhi sawal ya sujhaw hai to aap niche diye gaye hamare email address pe mail kar sakte hai:\nquery@automationfever.com\n\nHamari Website :-\nhttp://www.automationfever.com/\n\nKripiya hamare facebook page ko like kijiye :-\nhttps://www.facebook.com/FeverAutomation\n\nHamko twitter pe follow kijiye :-\nhttps://twitter.com/AutomationFever\n\nBlogpost:-\nhttps://automationfever.blogspot.com\n\nVba Loops in Hindi :- https://www.youtube.com/watch?v=pJdkwfyohNU&list=PLMJfpumszTDOnMC1vRfiT-cMN7odyonSK\n\nVBA - Text To Columns in Hindi :- https://www.youtube.com/watch?v=_gMix4qY1Cw&list=PLMJfpumszTDOsom1agKDj603nJHBljGer\n\nVBA - Worksheets in Hindi :- https://www.youtube.com/watch?v=MRtR7aStVck&list=PLMJfpumszTDMX-cGlgEqUM8eLJgiZhpWu\n\nVBA - Sorting in Hindi :- https://www.youtube.com/watch?v=4FAT48smqZs&list=PLMJfpumszTDPukJFlvyyVveI31KVQH88W\n\nVBA - Filter in Hindi :- https://www.youtube.com/watch?v=RVO_tEEiI-k&list=PLMJfpumszTDM_zeesRjwV4FtkOVn6YKpn\n\nExcel VBA Projects in Hindi :- https://www.youtube.com/watch?v=RVO_tEEiI-k&list=PLMJfpumszTDM_zeesRjwV4FtkOVn6YKpn\n\n#Vba\n#ExcelVba\n#Macro\n#VbaMacro\n#VbaExcel\n#VbaDeleteSheet\n#ExcelVbaDeleteSheet\n#VbaHowToDeleteSheet\n#ExcelVbaHowToDeleteSheet\n#VbaDeleteMultiSheets\n#ExcelVbaTutorialsInHindi\n#VbaDeleteWorksheets\n#ExcelVbaTutorialsinHindi\n#Deleteaworksheet\n#LearnVba\n#Howtodeleteasheetinvba\n#howtodeleteasheetinexcelvba\n#Deleteasheetinhindi\n#Howtodeletemultiplesheetsinvba\n#automationfever\n#excelvbatutorialsforbeginners\n#howtodeleteworksheetinvba\n#macrocodetodeletesheets" />
<meta property="og:url" content="http://www.automationfever.com/" />
<meta property="og:site_name" content="AutomationFever" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Download Code:-https://www.automationfever.com/single/kXMbkcK3OjM\n\nIn this video tutorial, You will learn how to delete worksheet from a excel workbook using VBA. When you try to delete a sheet from a excel file using VBA code, an Alert will ask you to confirm. However you are using VBA code to delete the sheet. You need to manually click on delete button to confirm. So we also explained how to handle this annoying alert. How can you disable Alerts and later enable Alerts according your requirement. You will learn to disable Alerts using VBA programming. You will also learn how to delete all sheets from a particular workbook except one sheet.  \n\nVBA code to delete a sheet from excel workbook :-\nSub DeleteSheet()\n  Application.DisplayAlerts = False\n   Worksheets(1).Delete\nEnd Sub\n\nVBA code to delete all sheets except one sheet from excel file :-\nSub DeleteMultiSheets()\n  Application.DisplayAlerts = False\n   Dim sh As Worksheet\n   \n     For Each sh In Worksheets\n        If (sh.Name = "Sheet20") Then\n          Else\n            sh.Delete\n        End If\n       'Debug.Print sh.Name\n     Next sh\nEnd Sub\n\nHope you found this video useful. Please like, share and subscribe to our channel. This will motivate us to create more good contents. Thanks! \n\nThe excel file used in this video uploaded to our website. You can visit our website and download the code file for practice. Below is the link for the same:-\nhttps://www.automationfever.com/single/kXMbkcK3OjM\n\nIf you have any doubt or query, drop us an email:\nquery@automationfever.com\n\nOur Website :-\nhttp://www.automationfever.com/\n\nPlease do like our FaceBook Page :-\nhttps://www.facebook.com/FeverAutomation\n\nFollow us on Twitter :-\nhttps://twitter.com/AutomationFever\n\nBlogpost:-\nhttps://automationfever.blogspot.com\n\n==================================================\n\nEs video me aap sikhege ki ak excel workbook se aap koi sheet kaise delete kar sakte hai. Jab bhi aap vba code ka use karke ak sheet ko delete karne ki koshish krte hai. Ak Alert aap ko rokkar pochta hai ki "Microsoft will permanently delete this sheet. Do you want to continue?". Appko sheet delete krni hoti hai to aapko delete wale button pe click krna padta hai. Ye action aapko manually krna padega chahe aap Vba code ka use krke sheet ko delete kar rahe hai. Esliye es video me aap ye bhi sikhoge ki es alert ko aap kaise disable kr sakte hai. Or sath hi aap sikhoge ki agar aapko apni workbook se ak sheet ko chhodkr baki sari sheets ko delete krna hai to wo kaise kar sakte hai.\n\n\nKisi ak sheet ko excel workbook se delete karne ka code :-\nSub DeleteSheet()\n  Application.DisplayAlerts = False\n   Worksheets(1).Delete\nEnd Sub\n\nAk sheet ko chhodkr baki sari sheets ko excel file se delete krne ka code :-\nSub DeleteMultiSheets()\n  Application.DisplayAlerts = False\n   Dim sh As Worksheet\n   \n     For Each sh In Worksheets\n        If (sh.Name = "Sheet20") Then\n          Else\n            sh.Delete\n        End If\n       'Debug.Print sh.Name\n     Next sh\nEnd Sub\n\nUmmid hai aapko ye video pasand aayegi, hamari es video ko share or hamara channel suscribe kijiye. Esse hamko motivation milege or bhi achchi achchi videos aapke liye banane ki. Sukriya!\n\nExcel ki jo file hamne video me use ki hai use apni website par upload kr diya hai. Aap code file ko hamari website se download krke practice kar sakte hai. File ka link niche diya ja raha hai:-\nhttps://www.automationfever.com/single/kXMbkcK3OjM\n\nAgar aapko koi bhi sawal ya sujhaw hai to aap niche diye gaye hamare email address pe mail kar sakte hai:\nquery@automationfever.com\n\nHamari Website :-\nhttp://www.automationfever.com/\n\nKripiya hamare facebook page ko like kijiye :-\nhttps://www.facebook.com/FeverAutomation\n\nHamko twitter pe follow kijiye :-\nhttps://twitter.com/AutomationFever\n\nBlogpost:-\nhttps://automationfever.blogspot.com\n\nVba Loops in Hindi :- https://www.youtube.com/watch?v=pJdkwfyohNU&list=PLMJfpumszTDOnMC1vRfiT-cMN7odyonSK\n\nVBA - Text To Columns in Hindi :- https://www.youtube.com/watch?v=_gMix4qY1Cw&list=PLMJfpumszTDOsom1agKDj603nJHBljGer\n\nVBA - Worksheets in Hindi :- https://www.youtube.com/watch?v=MRtR7aStVck&list=PLMJfpumszTDMX-cGlgEqUM8eLJgiZhpWu\n\nVBA - Sorting in Hindi :- https://www.youtube.com/watch?v=4FAT48smqZs&list=PLMJfpumszTDPukJFlvyyVveI31KVQH88W\n\nVBA - Filter in Hindi :- https://www.youtube.com/watch?v=RVO_tEEiI-k&list=PLMJfpumszTDM_zeesRjwV4FtkOVn6YKpn\n\nExcel VBA Projects in Hindi :- https://www.youtube.com/watch?v=RVO_tEEiI-k&list=PLMJfpumszTDM_zeesRjwV4FtkOVn6YKpn\n\n#Vba\n#ExcelVba\n#Macro\n#VbaMacro\n#VbaExcel\n#VbaDeleteSheet\n#ExcelVbaDeleteSheet\n#VbaHowToDeleteSheet\n#ExcelVbaHowToDeleteSheet\n#VbaDeleteMultiSheets\n#ExcelVbaTutorialsInHindi\n#VbaDeleteWorksheets\n#ExcelVbaTutorialsinHindi\n#Deleteaworksheet\n#LearnVba\n#Howtodeleteasheetinvba\n#howtodeleteasheetinexcelvba\n#Deleteasheetinhindi\n#Howtodeletemultiplesheetsinvba\n#automationfever\n#excelvbatutorialsforbeginners\n#howtodeleteworksheetinvba\n#macrocodetodeletesheets" />
<meta name="twitter:title" content="Excel VBA - Deleting Sheets (Hindi)" />
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
                    <iframe src="https://www.youtube.com/embed/kXMbkcK3OjM?autoplay=0&rel=0&modestbranding=1&mute=0&controls=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                </div>
                <div class="song-info">
                    <h3> Excel VBA - Deleting Sheets (Hindi)
                            <a href="enable-developer-tab">                                <img src="{{asset('images/next.png')}}" style="margin-top: -6px;"> </a>  
                            <a href="{{ asset('vba_codes/DeleteWorksheets/DeleteWorksheets.xlsm')}}"><img src="{{asset('images/download_code.png')}}" width="50" height="30" alt="Download code files" class="float-right" />
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
data-published-datetime="2020-06-10 08:13:37"
data-parent-playlist="VBA Tutorials For Beginners (Hindi)">
                            
                                <h4>Published on 10 June 2020</h4>
                                    <p>
                                        Download Code:-https://www.automationfever.com/single/kXMbkcK3OjM <BR>  <BR> In this video tutorial, You will learn how to delete worksheet from a excel workbook using VBA. When you try to delete a sheet from a excel file using VBA code, an Alert will ask you to confirm. However you are using VBA code to delete the sheet. You need to manually click on delete button to confirm. So we also explained how to handle this annoying alert. How can you disable Alerts and later enable Alerts according your requirement. You will learn to disable Alerts using VBA programming. You will also learn how to delete all sheets from a particular workbook except one sheet.   <BR>  <BR> VBA code to delete a sheet from excel workbook :- <BR> Sub DeleteSheet() <BR>   Application.DisplayAlerts = False <BR>    Worksheets(1).Delete <BR> End Sub <BR>  <BR> VBA code to delete all sheets except one sheet from excel file :- <BR> Sub DeleteMultiSheets() <BR>   Application.DisplayAlerts = False <BR>    Dim sh As Worksheet <BR>     <BR>      For Each sh In Worksheets <BR>         If (sh.Name = "Sheet20") Then <BR>           Else <BR>             sh.Delete <BR>         End If <BR>        'Debug.Print sh.Name <BR>      Next sh <BR> End Sub <BR>  <BR> Hope you found this video useful. Please like, share and subscribe to our channel. This will motivate us to create more good contents. Thanks!  <BR>  <BR> The excel file used in this video uploaded to our website. You can visit our website and download the code file for practice. Below is the link for the same:- <BR> https://www.automationfever.com/single/kXMbkcK3OjM <BR>  <BR> If you have any doubt or query, drop us an email: <BR> query@automationfever.com <BR>  <BR> Our Website :- <BR> http://www.automationfever.com/ <BR>  <BR> Please do like our FaceBook Page :- <BR> https://www.facebook.com/FeverAutomation <BR>  <BR> Follow us on Twitter :- <BR> https://twitter.com/AutomationFever <BR>  <BR> Blogpost:- <BR> https://automationfever.blogspot.com <BR>  <BR> ================================================== <BR>  <BR> Es video me aap sikhege ki ak excel workbook se aap koi sheet kaise delete kar sakte hai. Jab bhi aap vba code ka use karke ak sheet ko delete karne ki koshish krte hai. Ak Alert aap ko rokkar pochta hai ki "Microsoft will permanently delete this sheet. Do you want to continue?". Appko sheet delete krni hoti hai to aapko delete wale button pe click krna padta hai. Ye action aapko manually krna padega chahe aap Vba code ka use krke sheet ko delete kar rahe hai. Esliye es video me aap ye bhi sikhoge ki es alert ko aap kaise disable kr sakte hai. Or sath hi aap sikhoge ki agar aapko apni workbook se ak sheet ko chhodkr baki sari sheets ko delete krna hai to wo kaise kar sakte hai. <BR>  <BR>  <BR> Kisi ak sheet ko excel workbook se delete karne ka code :- <BR> Sub DeleteSheet() <BR>   Application.DisplayAlerts = False <BR>    Worksheets(1).Delete <BR> End Sub <BR>  <BR> Ak sheet ko chhodkr baki sari sheets ko excel file se delete krne ka code :- <BR> Sub DeleteMultiSheets() <BR>   Application.DisplayAlerts = False <BR>    Dim sh As Worksheet <BR>     <BR>      For Each sh In Worksheets <BR>         If (sh.Name = "Sheet20") Then <BR>           Else <BR>             sh.Delete <BR>         End If <BR>        'Debug.Print sh.Name <BR>      Next sh <BR> End Sub <BR>  <BR> Ummid hai aapko ye video pasand aayegi, hamari es video ko share or hamara channel suscribe kijiye. Esse hamko motivation milege or bhi achchi achchi videos aapke liye banane ki. Sukriya! <BR>  <BR> Excel ki jo file hamne video me use ki hai use apni website par upload kr diya hai. Aap code file ko hamari website se download krke practice kar sakte hai. File ka link niche diya ja raha hai:- <BR> https://www.automationfever.com/single/kXMbkcK3OjM <BR>  <BR> Agar aapko koi bhi sawal ya sujhaw hai to aap niche diye gaye hamare email address pe mail kar sakte hai: <BR> query@automationfever.com <BR>  <BR> Hamari Website :- <BR> http://www.automationfever.com/ <BR>  <BR> Kripiya hamare facebook page ko like kijiye :- <BR> https://www.facebook.com/FeverAutomation <BR>  <BR> Hamko twitter pe follow kijiye :- <BR> https://twitter.com/AutomationFever <BR>  <BR> Blogpost:- <BR> https://automationfever.blogspot.com <BR>  <BR> Vba Loops in Hindi :- https://www.youtube.com/watch?v=pJdkwfyohNU&list=PLMJfpumszTDOnMC1vRfiT-cMN7odyonSK <BR>  <BR> VBA - Text To Columns in Hindi :- https://www.youtube.com/watch?v=_gMix4qY1Cw&list=PLMJfpumszTDOsom1agKDj603nJHBljGer <BR>  <BR> VBA - Worksheets in Hindi :- https://www.youtube.com/watch?v=MRtR7aStVck&list=PLMJfpumszTDMX-cGlgEqUM8eLJgiZhpWu <BR>  <BR> VBA - Sorting in Hindi :- https://www.youtube.com/watch?v=4FAT48smqZs&list=PLMJfpumszTDPukJFlvyyVveI31KVQH88W <BR>  <BR> VBA - Filter in Hindi :- https://www.youtube.com/watch?v=RVO_tEEiI-k&list=PLMJfpumszTDM_zeesRjwV4FtkOVn6YKpn <BR>  <BR> Excel VBA Projects in Hindi :- https://www.youtube.com/watch?v=RVO_tEEiI-k&list=PLMJfpumszTDM_zeesRjwV4FtkOVn6YKpn <BR>  <BR> #Vba <BR> #ExcelVba <BR> #Macro <BR> #VbaMacro <BR> #VbaExcel <BR> #VbaDeleteSheet <BR> #ExcelVbaDeleteSheet <BR> #VbaHowToDeleteSheet <BR> #ExcelVbaHowToDeleteSheet <BR> #VbaDeleteMultiSheets <BR> #ExcelVbaTutorialsInHindi <BR> #VbaDeleteWorksheets <BR> #ExcelVbaTutorialsinHindi <BR> #Deleteaworksheet <BR> #LearnVba <BR> #Howtodeleteasheetinvba <BR> #howtodeleteasheetinexcelvba <BR> #Deleteasheetinhindi <BR> #Howtodeletemultiplesheetsinvba <BR> #automationfever <BR> #excelvbatutorialsforbeginners <BR> #howtodeleteworksheetinvba <BR> #macrocodetodeletesheets
                                    </p>
                        </ul>
                    </div>
                    </div>
                    <div class="published">
                    <div class="load_more"> 
                        <ul id="text-description" data-description="text-description" data-video_id="kXMbkcK3OjM">
                            
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
                      <input type="hidden" id="video_id" name="video_id" value="kXMbkcK3OjM" />
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
