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
    <div class="main-grids about-main-grids">
        <div class="recommended-info">
            <div class="about-grids">
            <form id="contact-us-form" name="contact-us-form" action="send-contact-us" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Full Name</label>
                  <input type="text" class="form-control form-control-sm" id="full_name" name="full_name" placeholder="Full Name">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Email</label>
                  <input type="email" class="form-control form-control-sm" id="mail_address" name="mail_address" placeholder="Email">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-9">
                  <label for="inputCity">Subject</label>
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                </div>
                <div class="form-group col-md-3">
                  <label for="inputZip">Mobile Number</label>
                  <input type="text" class="form-control" id="mobile_number" name="mobile_number">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputCity">Comment</label>
                  <textarea class="form-control" id="user_comment" name="user_comment" placeholder="Comment" rows="3"></textarea>
                </div>
              </div>
              <input type="submit" class="btn btn-primary" value="Send" />
            </form>
            </div>
        </div>
    </div>
</div>

    <!-- jquery-validation -->
    <script src="{{ asset('js/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/jquery-validation/additional-methods.min.js') }}"></script>


    <script>
          {{-- Form Validation --}}
          $(document).ready(function(){        
                $('#contact-us-form').validate({
                  rules:{
                    full_name:{
                      required:true,
                      normalizer: function(full_name) {
                             return $.trim(full_name);
                        },
                    },
                    mail_address:{
                      required:true,
                      normalizer: function(mail_address) {
                             return $.trim(mail_address);
                        },
                      email:true,  
                    },
                    subject:{
                      required:true,
                      normalizer: function(subject) {
                             return $.trim(subject);
                        },
                    },
                    mobile_number:{
                        digits: true,
                        minlength:10,
                        maxlength:10,

                    },
                    user_comment:{
                      required:true,
                      normalizer: function(user_comment) {
                             return $.trim(user_comment);
                        },
                    },
                  },
                  messages:{
                        full_name:{
                          required:'Name is required',
                        },
                        mail_address:{
                          required:'Email is required',
                          email: "Invalid mail address"
                        },
                        subject:{
                          required:'Subject is required'
                        },
                        user_comment:{
                          required:'Comment is required'
                        },
                  },
                    submitHandler: function (form) {
                      form.submit();
                    },
                    errorElement: 'span',
                    errorPlacement: function (error, element) {
                      error.addClass('invalid-feedback');
                      element.closest('.form-group').append(error);
                    },
                    highlight: function (element, errorClass, validClass) {
                      $(element).addClass('is-invalid');
                    },
                    unhighlight: function (element, errorClass, validClass) {
                      $(element).removeClass('is-invalid');
                    }
                }); //end of validation
        }); //end of ready function    
      </script>   
@endsection