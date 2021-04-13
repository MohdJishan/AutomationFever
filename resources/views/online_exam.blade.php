


        @extends('master-layout.master')

        @section('application-title')
          <title>Play List</title>    
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
        <link rel="stylesheet" href= 
        "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <div class="col-sm-12 col-md-9">
        <div class="main-grids" style="padding: 0 0 0 2px;">
        <div class="recommended">
          <!-- playlist section start --->
          <h1 style="font-size: xx-large;">VBA <span style="font-weight:700">Q/A</span></h1>
                        <hr class="hrr">
                        <hr class="hrrr">
        </div>
          <!-- container -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="https://www.automationfever.com"><i class="fa fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Advanced Excel, Macros and VBA </a></li>
                </ol>
          </nav>
         
            <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-8 test-name">
                    <span class="text-uppercase">Macro and VBA</span>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-4 time-left">
                    
                                            <div class="text-uppercase"><span>Time Left :</span>&nbsp;Mins<input id="txt" type="text" name="timeoftest" readonly="" style="width: 38px;"> <input type="hidden" name="txtpause" id="txtpause">
                    </div>
                                        <input type="hidden" value="231099" name="ass_atmt_id" id="ass_atmt_id">	
                        
                   <!-- <div class="text-uppercase"><span>Time Left :</span> Mins 30:00</div>-->
                    </div>
                </div>
            </div>
            
            </header><!--/header-->
            <div id="question_area">
                    <input type="hidden" id="qstn_id" name="qstn_id" value="598">
            <input type="hidden" id="sq_id" name="sq_id" value="1">
            <input type="hidden" id="next_mgr_id" name="next_mgr_id" value="4665630">
            <input type="hidden" id="mgr_id" name="mgr_id" value="4665629">
            <input type="hidden" id="next_qstn_id" name="next_qstn_id" value="604">
            <input type="hidden" id="ass_atmt_id" name="ass_atmt_id" value="231099">
            <input type="hidden" id="tot_qst" name="tot_qst" value="20">
            <div class="question_section_block">
            <div style="display:none;" class="error_box" id="error_msg"><div class="error_msg_q"> Please Select An Option.
            </div></div>
        
            <div class="text-q-panel">
                <div class="container">
                    <div class="row">
                    <div class="t-que">
                        <div class="col-md-10 col-sm-10 col-xs-12">
                        <span>1.</span>
                            <p>Macro is a  <input type="hidden" id="txttimein" name="txttimein" value=""></p>
                            </div>
                    
                         <div class="col-md-2 col-sm-2 col-xs-12">
                         <div class="t-que-mark inline-block pull-right">Marks 1</div>
                         </div>
                     </div>
                                  <div class="col-md-12 col-sm-12">
                     <div class="t-que-option">
                        <ul>
                        
                        <li> 
        <span class="t-radio"><input type="radio" class="radio1" name="answers" value="2336">   
           </span> A)  A macro is a series of steps that is grouped together as a single step and then executed when necessary. </li>
        
        <li> 
        <span class="t-radio"><input type="radio" class="radio1" checked="" name="answers" value="2337">   
           </span> B)  A macro is not a series of steps that is grouped together as a single step and then executed when necessary. </li>
        
        <li> 
        <span class="t-radio"><input type="radio" class="radio1" name="answers" value="2338">   
           </span> C)  A macro is a series of steps but not together as a single step and then executed when necessary. </li>
        
        <li> 
        <span class="t-radio"><input type="radio" class="radio1" name="answers" value="2339">   
           </span> D)  All above false </li>
        
        </ul>
                     </div>
                     </div>      
                        
                    </div>
                </div>
            </div>
         
         
         <div id="sticky-button">
                <div class="sticky-button">
                <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-2">
                        <div class="no-count">
                        <span>1</span>/20                </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-6 text-center">
                        <a onclick="save('question_area','save','4665629','231099',1,0,'');" class="btn btn-lg btn-orange take_test_button1">Next</a><div style="display:none;" class="take_test_button_disable">Next</div>
                                        <span class="btn btn-lg btn-default" disabled="disabled">Skip</span>    		</div>
                    
                    <div class="col-md-2 col-sm-2 col-xs-4 text-right">
                    <a class="btn btn-lg btn-black" onclick="javascript:if(confirm('Hello! Do you want to continue or exit? Click Ok to exit.')){save('question_area','save','4665629','231099',1,1,'');}">Save &amp; Exit</a>
                    </div>
                </div>    
                </div>
                </div>
            </div>
         </div>
         </div>
        <script type="application/javascript">
        var pausetime='';
        var resumetime='';
        var pause_diff_time=0; 
        var timer = document.getElementById("txt");
        var pause = document.getElementById("pause");
        var resume = document.getElementById("resume");
        var id;
        var value1 = "00:00";
        
        function startTimer(m, s) {
            if(s<10){s="0"+s;}
            timer.value = m + ":" + s;
            
            if (s == 0) {
                if (m == 0) {
                    return;
                } else if (m != 0) {
                    m = m - 1;
                    s = 60;
                }
            }
            
            s = s - 1;
            id = setTimeout(function () {
                startTimer(m, s)
            }, 1000);
            
            if(m <= 0)
             {
                  if(s <= 0 || m < 0)
                  {  
                   document.getElementById("txt").value = "0:00";		
        var mgr_id_te=$('#mgr_id').val();		   
                    save('question_area','save',mgr_id_te,'231099',1,1,'te');
                    
                  //window.location.href='/index.php?ms=ass_rep_conf&courseid=&ucrsId=&ass_id=&nextassqsid=&ass_atmt_id=&cAsId=';
                 // index.php?ms=ass_rep_conf&courseid=$courseid&ucrsId=$ucrsId&ass_id=$ass_id&nextassqsid=$nextassqsid&ass_atmt_id=$ass_atmt_id&cAsId=$cassId
                  
                   }
             }	   
            
            
        }
        
        /////////show remaining time//////////
        var timer2 = document.getElementById("timerdiv");
        var id2;
        var value2 = "00:00";
        
        function remainingTime(m, s) {
            timer2.value = m + ":" + s;
            if (s == 0) {
                if (m == 0) {
                    return;
                } else if (m != 0) {
                    m = m - 1;
                    s = 60;
                }
            }
            
            s = s - 1;
            id2 = setTimeout(function () {
                remainingTime(m, s)
            }, 1000);
            
            if(m <= 0)
             {
                  if(s <= 0 || m < 0)
                  {  
                   document.getElementById("timerdiv").value = "0:00";		   
                    //resumeTimer();			
                    
                   }
             }	   
            
            
        }
        ////////////end remaining time////////////
        function pauseTimer() {
            pausetime= new Date();
            //alert(pausetime);
            clearTimeout(id2); 
            remainingTime(03, 00);
            document.getElementById("pausediv").style.display="block";
            value1 = timer.value;
            clearTimeout(id);    
            resume.style.display='block';
            pause.style.display='none';	
            window.setTimeout("resumeTimer()",180000);//resume timer after 3 minutes
            //alert('dfgdsg');	
        }
        
        function resumeTimer() {
            resumetime=new Date();
            pause_diff_time +=Math.round((resumetime-pausetime)/1000);
            //alert(pause_diff_time);
            document.getElementById("pausediv").style.display="none";
            
            var t = value1.split(":");
            
            startTimer(parseInt(t[0], 10), parseInt(t[1], 10));
            pause.style.display='block';
            resume.style.display='none';
        }
        
            var end_time = "1801"; // Get end time from session variable (total time in seconds).
            var total_time=end_time;
            /* var dt = new Date(); // Create date object.
            var time_stamp =(dt.getTime()/1000);  	
            var total_time = end_time - Math.round(time_stamp); */
            //alert(end_time+'--'+Math.round(time_stamp));
            var mins = Math.floor(total_time / 60); // Extract minutes from seconds remaining.
            var secs = total_time - (mins * 60); // Extract remainder seconds if any.
             if(secs < 10){secs = "0" + secs;} // Check if seconds are less than 10 and add a 0 in front.
            startTimer(mins, secs);////call start timer function
        
        
            
         
         function save(div1,act_type,mgrid,atmt_id,reattempt,exit1,exittype)
         { 
            // alert(reattempt);exit(0);
            //alert(mgrid);
            var opt_result;
            if(exit1){ 
                            opt_result=opt_validate();
                             if(opt_result && act_type=='save')
                              {
                                act_type='save';  
                                  
                              }
                              else if(opt_result && act_type=='skip')
                              {
                                act_type='skip';  
                                  
                              }
                              else
                              {
                                act_type='skip';  
                                  
                              }
                        }
                        else
                        {
                            act_type=act_type;
                            if(act_type=='save'){
                         opt_result=opt_validate();	
                            }
                        }
                    
            if(act_type=='save' && opt_result)
            {		 
                    
                    var qstnid1=$("#qstn_id").val();			
                    var sq_id1=$("#sq_id").val();						
                    var tot_qst=$("#tot_qst").val();			
                    var testid='30';	
                    var accessid='macro-and-vba-practice-exam';	
                    var next_sq_id1=parseInt(sq_id1)+1;	
                    var next_qstnid1=$("#next_qstn_id").val();
                    //alert(sq_id1);			
                                
                         
                    var opt_val1=$('input[name=answers]:checked').val();
                                        
                        if(exittype=='')
                        {	
                            if(sq_id1==tot_qst)
                                {
                                exittype='sq';	
                                }
                                else
                                {
                                exittype='ui';		
                                }	
                                
                        }	
                            
                            if(sq_id1==tot_qst)
                        {
                        
                            next_sq_id1='_';
                            //$(".take_test_button1").css("display","none");
                            $(".take_test_button1").attr("disabled","true");
                            
                        /*next_qstnid1=$("#qn_1").val();
                        next_sq_id1=1;*/
                        }
                                    
                            
                            //exit(0);
                                
                            $.ajax({ url: 'ass_pass.php?action=save_user_ass_qstn_optn', //type response file name here
                         type: "POST", //method get/post
                         dataType: "html",
                         data :{qstn_id:qstnid1,opt_val1:opt_val1,next_qstnid:next_qstnid1,next_sq_id:next_sq_id1,sq_id:sq_id1,mgrid:mgrid,atmtid:atmt_id,test_id:testid,reattempt:reattempt,tot_qstn:tot_qst,accessid:accessid,exittype:exittype,exit1:exit1} , 
                         beforeSend: function (){
                            $(".take_test_button1").attr("disabled","true");
                            
                            },
                        success: function (data, textStatus, xhr){
                               $("#"+div1).html(data);//get response on given div id
                            
                            $(".take_test_button1").removeAttr("disabled");					
                            
                            },
                            error: function(xhr,textStatus,errorThrown){
                            //alert(data);
                            $("#"+div1).html(textStatus); }
                            });	
                        
                        
                        
                    }
                   
                
            
            else if(act_type=='skip')
            {
                
                    var qstnid1=$("#qstn_id").val();			
                    var sq_id1=$("#sq_id").val();		
                    var tot_qst=$("#tot_qst").val();
                    var testid='30';
                    var accessid='macro-and-vba-practice-exam';	
                    var next_sq_id1=parseInt(sq_id1)+1;	
                    var next_qstnid1=$("#next_qstn_id").val();		
                        
                        if(exittype!='te')
                        {	
                            if(sq_id1==tot_qst)
                                {
                                exittype='sq';	
                                }
                                else
                                {
                                exittype='ui';		
                                }	
                                
                        }
                    
                            var opt_val1='_';
                            
                         if(sq_id1==tot_qst || mgrid=='')
                        {
                            next_sq_id1='_';
                            
                        /*next_qstnid1=$("#qn_1").val();
                        next_sq_id1=1;*/
                        $(".take_test_button1").attr("disabled","true");
                        //$(".take_test_button_disable_next").css("display","block");
                        }			
                        
                                
                         $.ajax({ url: 'ass_pass.php?action=save_user_ass_qstn_optn', //type response file name here
                         type: "POST", //method get/post
                         dataType: "html",
                         data :{qstn_id:qstnid1,opt_val1:opt_val1,next_qstnid:next_qstnid1,next_sq_id:next_sq_id1,sq_id:sq_id1,mgrid:mgrid,atmtid:atmt_id,test_id:testid,reattempt:reattempt,tot_qstn:tot_qst,accessid:accessid,exittype:exittype,exit1:exit1} , 
                         beforeSend: function (){
                        $(".take_test_button1").attr("disabled","true");
                        
                        },
                        success: function (data, textStatus, xhr){
                               $("#"+div1).html(data);//get response on given div id
                            $(".take_test_button1").removeAttr("disabled");						
                            
                            },
                        error: function(xhr,textStatus,errorThrown){
                        //alert(data);
                        $("#"+div1).html(textStatus); }
                        });	
                        
                        
                        
            
            }
        
        } 
         
         </script>
         
            <script type="text/javascript">
            
        
            function last_qstn(exittype){
                let c_url = document.URL;	//alert(c_url);
                // GET URL VALUE JVD
                var url = new URL(c_url);
                var test_type = url.searchParams.get("test_type");
                //alert(test_type);	//console.log(c);
                if(test_type && test_type=='promotion') {
                    if(exittype=='te'){alert("The time is up.");}
                      window.location.href='test_report.php?accessid=macro-and-vba-practice-exam&ass_atmt_id=231099&test_type=promotion';
                      return true;
                }else{
                    if(exittype=='te'){alert("The time is up.");}
                      window.location.href='test_review.php?accessid=macro-and-vba-practice-exam&ass_atmt_id=231099';
                      return true;
                }
        
            }	
            
            
            function opt_validate()
        {
        
        if($('input[name=answers]:checked').length<=0)
                                {
                                $('#error_msg').show();
                                if($('input[name=answers]').attr('type')=='checkbox'){var err_str=' single/multiple option(s) ';}else{var err_str=' an option ';}
                                $('#error_msg').html('<div class="error_msg_q">Please select '+err_str+'</div>');
                    setTimeout(function() {$('#error_msg').hide()},2000);
                                /*$('html, body').animate({
                                        'scrollTop' : $("#move_top").position().top
                                    },1000);*/
                                // alert("No radio checked")var testid='';
                                return false;
                                }
        
        return true;
        }
            </script>
         
        
          <!-- //container -->
        </div>
        
        
        <!--    End playlist Section --->
        
        
            <div class="clearfix"> </div>
              </div>
        
              <div class="col-sm-12 col-md-3">
                <div class="main-grids" style="padding: 0 0 0 2px;">
                    <div class="recommended">
                      <!-- playlist section start --->
                      <h1 style="font-size: xx-large;">VBA <span style="font-weight:700">Topic</span></h1>
                                    <hr class="hrr">
                                    <hr class="hrrr">
                    </div>
        
                        <dd>
                            <dl><i class="fa fa-caret-right" style="font-size: initial; color:#E96429;"></i><span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="font-size: medium;color:#2D545E; text-decoration:none;">String Functions in Hindi</a></span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                            <dl><i class="fa fa-caret-right" style="font-size: initial; color:#E96429;"></i><span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="font-size: medium;color:#2D545E; text-decoration:none;">Advanced Filter in Hindi </a></span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                            <dl><i class="fa fa-caret-right" style="font-size: initial; color:#E96429;"></i><span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="font-size: medium;color:#2D545E; text-decoration:none;">Hyperdlnks in Hindi (Part-IV)</a></span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                            <dl><i class="fa fa-caret-right" style="font-size: initial; color:#E96429;"></i><span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="font-size: medium;color:#2D545E; text-decoration:none;">Hyperdldlnks in Hindi (Part-III) </a></span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                            <dl><i class="fa fa-caret-right" style="font-size: initial; color:#E96429;"></i><span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="font-size: medium;color:#2D545E; text-decoration:none;">String Functions in Hindi</a></span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                            <dl><i class="fa fa-caret-right" style="font-size: initial; color:#E96429;"></i><span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="font-size: medium;color:#2D545E; text-decoration:none;">Advanced Filter in Hindi</a> </span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                            <dl><i class="fa fa-caret-right" style="font-size: initial; color:#E96429;"></i><span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="font-size: medium;color:#2D545E; text-decoration:none;">Hyperdlnks in Hindi (Part-IV)</a></span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                            <dl><i class="fa fa-caret-right" style="font-size: initial; color:#E96429;"></i><span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="font-size: medium;color:#2D545E; text-decoration:none;">Hyperdlnks in Hindi (Part-III)</a> </span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                            <dl><i class="fa fa-caret-right" style="font-size: initial; color:#E96429;"></i><span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="font-size: medium;color:#2D545E; text-decoration:none;">String Functions in Hindi</a></span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                            <dl><i class="fa fa-caret-right" style="font-size: initial; color:#E96429;"></i><span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="font-size: medium;color:#2D545E; text-decoration:none;">Advanced Filter in Hindi </a></span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                            <dl><i class="fa fa-caret-right" style="font-size: initial; color:#E96429;"></i><span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="font-size: medium;color:#2D545E; text-decoration:none;">Hyperdlnks in Hindi (Part-IV)</a></span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                            <dl><i class="fa fa-caret-right" style="font-size: initial; color:#E96429;"></i><span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="font-size: medium;color:#2D545E; text-decoration:none;">Hyperdlnks in Hindi (Part-III)</a> </span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                            <dl><i class="fa fa-caret-right" style="font-size: initial; color:#E96429;"></i><span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="font-size: medium;color:#2D545E; text-decoration:none;">String Functions in Hindi</a></span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                            <dl><i class="fa fa-caret-right" style="font-size: initial; color:#E96429;"></i><span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="font-size: medium;color:#2D545E; text-decoration:none;">Advanced Filter in Hindi </a></span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                            <dl><i class="fa fa-caret-right" style="font-size: initial; color:#E96429;"></i><span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="font-size: medium;color:#2D545E; text-decoration:none;">Hyperdlnks in Hindi (Part-IV)</a></span></dl><hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">
                            <dl><i class="fa fa-caret-right" style="font-size: initial; color:#E96429;"></i><span style="padding: 0px 0px 0px 10px !important;"><a href="#" style="font-size: medium;color:#2D545E; text-decoration:none;">Hyperdlnks in Hindi (Part-III) </a></span></dl>
        
                        </dd>
                </div>
        
              </div>
        
        
              <div class="clearfix"> </div>
        
          <!-- jquery-validation -->
          <script src="{{ asset('js/jquery-validation/jquery.validate.min.js') }}"></script>
          <script src="{{ asset('js/jquery-validation/additional-methods.min.js') }}"></script>
         
        @endsection