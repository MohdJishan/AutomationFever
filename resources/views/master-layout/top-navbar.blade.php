<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="background-color:#2d545e!important; border-radius: 0px;margin-bottom: 0px;border: 0px;font-size: medium;">
    <a class="navbar-brand" href="/"><img src="{{ asset('images/logo.png ')}}" height="45" alt="CoolBrand"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto" style="margin-left: auto;text-transform: uppercase; font-family: revert;">
        <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}" style="color:#ffff;"> Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('about-us')}}" style="color:#ccc6c6"> About </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color:#ccc6c6"> VBA </a>
        </li>
        <li class="nav-item">
          {{-- <a class="nav-link" href="#" style="color:#ccc6c6"> UiPath </a> --}}
        </li>
        <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>-->
        <li class="nav-item">
          <a class="nav-link" href="{{route('contact-us')}}" style="color:#ccc6c6">Contact</a>
        </li>
      </ul>
        <div class="top-search">
          <form class="navbar-form navbar-right" style="display: inline-block;" name="search_form" id="search_form" method="POST" action="{{ route('videos-search') }}">
            @csrf
              <input type="text" class="form-control" name="search_string" id="search_string" required="required" placeholder="Search..." style="font-size: smaller;">
              <input type="submit" value=" ">
          </form>
                <span style="display: inline-block;margin-top: 10px;">
              @if (Session::get('name'))
                <a href="{{ route('logout')}}" class="float-right" style="text-decoration:none; color:white">Logout</a>
                  <a href="#" class=" float-right" style="text-decoration:none; color:white">{{\Illuminate\Support\Str::limit(Session::get('name'),$limit=20,$end='..')}}</a>  
                @else
                  <a href="#small-dialog3" class="play-icon popup-with-zoom-anim  float-right" style="text-decoration:none; color:white">Sign&nbsp;Up</a>
                  <a href="#small-dialog" class="play-icon popup-with-zoom-anim  float-right" style="text-decoration:none; color:white">Sign&nbsp;In</a>              
                @endif
            </span>
      </div>       
    </div>

    <div class="header-top-right">
      <div class="signin">
        {{-- <a href="#small-dialog2" class="play-icon popup-with-zoom-anim">Sign Up</a> --}}
        <!-- pop-up-box -->
                <script type="{{ asset('text/javascript') }}" src="js/modernizr.custom.min.js"></script>    
                <link href="{{ asset('css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all" />
                <script src="{{ asset('js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
                <!--//pop-up-box -->
                <div id="small-dialog2" class="mfp-hide">
                  <h3>Create Account</h3> 
                  <div class="social-sits">
                    <div class="facebook-button">
                      {{-- <a href="{{ route('login.facebook') }}">Login with Facebook</a> --}}
                    </div>
                    <div class="chrome-button">
                      <a href="{{ route('login.google') }}">Login with Google</a>
                    </div>
                    <div class="button-bottom">
                      <p>Already have an account? <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Login</a></p>
                    </div>
                  </div>
                  <div class="signup">
                    <form>
                      <input type="text" class="email" placeholder="Mobile Number" maxlength="10" pattern="[1-9]{1}\d{9}" title="Enter a valid mobile number" />
                    </form>
                    <div class="continue-button">
                      <a href="#small-dialog3" class="hvr-shutter-out-horizontal play-icon popup-with-zoom-anim">CONTINUE</a>
                    </div>
                  </div>
                  <div class="clearfix"> </div>
                </div>	
                <div id="small-dialog3" class="mfp-hide">
                  <h3>Create Account</h3> 
                  <div class="social-sits">
                    <div class="facebook-button">
                      {{-- <a href="{{ route('login.facebook') }}">Login with Facebook</a> --}}
                    </div>
                    <div class="chrome-button">
                      <a href="{{ route('login.google') }}">Login with Google</a>
                    </div>
                    <div class="button-bottom">
                      <p>Already have an account? <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Login</a></p>
                    </div>
                  </div>
                  <div class="signup">
                    <form name="create_user" id="create_user" method="POST" action="{{ route('user-sign-up') }}" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <input type="text" placeholder="Name" class="email form-control form-control-sm" name="user_name"  id="user_name" autocomplete="off" />
                      </div>

                      <div class="form-group">
                        <input type="text" class="email form-control form-control-sm" id="user_email" name="user_email" placeholder="Email" autocomplete="off" />
                      </div>

                      <div class="form-group">
                        <input type="password" class="form-control form-control-sm" placeholder="Password" id="user_password" name="user_password" autocomplete="off" />
                      </div>

                      <div class="form-group">
                        <input type="text" class="email form-control form-control-sm" placeholder="Mobile Number" id="mobile_number" name="mobile_number" autocomplete="off"  />
                      </div>
                                               
                        <input type="submit"  value="Sign Up"/>
                    </form>
                  </div>
                  <div class="clearfix"> </div>
                </div>	
                <div id="small-dialog7" class="mfp-hide">
                  <h3>Create Account</h3> 
                  <div class="social-sits">
                    <div class="facebook-button">
                      {{-- <a href="{{ route('login.facebook') }}">Login with Facebook</a> --}}
                    </div>
                    <div class="chrome-button">
                      <a href="{{ route('login.google') }}">Login with Google</a>
                    </div>
                    <div class="button-bottom">
                      <p>Already have an account? <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Login</a></p>
                    </div>
                  </div>
                  <div class="signup">
                    <form>
                      <input type="text" class="email" placeholder="Email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="Enter a valid email"/>
                      <input type="password" placeholder="Password" required="required" pattern=".{6,}" title="Minimum 6 characters required" autocomplete="off" />
                      <input type="submit"  value="Sign In"/>
                    </form>
                  </div>
                  <div class="clearfix"> </div>
                </div>		
                <div id="small-dialog4" class="mfp-hide">
                  <h3>Feedback</h3> 
                  <div class="feedback-grids">
                    <div class="feedback-grid">
                      <p>Suspendisse tristique magna ut urna pellentesque, ut egestas velit faucibus. Nullam mattis lectus ullamcorper dui dignissim, sit amet egestas orci ullamcorper.</p>
                    </div>
                    <div class="button-bottom">
                      <p><a href="#small-dialog" class="play-icon popup-with-zoom-anim">Sign in</a> to get started.</p>
                    </div>
                  </div>
                </div>

                <div id="small-dialog5" class="mfp-hide">
                  <h3>Reply</h3> 
                    <div class="help-grid">
                      <form id="post_comment_reply" name="post_comment_reply" method="POST" action="{{ route('post.comment.reply')}}" enctype="multipart/form-data">
                        @csrf
                          <div class="row">
                          <div class="col-md-6 form-group">
  
                              @if (Session::get('name'))
                                  <input type="hidden" id="user_name_reply" value="{{Session::get('name')}}" name="user_name_reply" class="form-control form-control-sm" placeholder="Name" required="required" />
                              @else
                                  <input type="text" id="user_name_reply" name="user_name_reply" class="form-control form-control-sm" placeholder="Name" required="required" />
                              @endif
  
                            </div>
                          <div class="col-md-6 form-group">
                              @if (Session::get('email'))
                              <input type="hidden" id="user_email_reply" value="{{Session::get('email')}}" name="user_email_reply" class="form-control form-control-sm" placeholder="Email"  required="required" />        
                              @else
                              <input type="email" id="user_email_reply" name="user_email_reply" class="form-control form-control-sm" placeholder="Email"  required="required" />
                              @endif
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 form-group">
                              <textarea id="user_comment_reply" name="user_comment_reply" placeholder="Add a comment.." class="form-control form-control-sm"  required="required"></textarea>
                          </div>
                        </div>
                        <input type="hidden" id="video_id_reply" name="video_id_reply" value="" />
                        <input type="hidden" id="comment_id_reply" name="comment_id_reply" value="" />
                        <input type="submit" class="btn btn-warning" value="Comment" style="float:right" />
  
                          <div class="clearfix"> </div>
                      </form>
                    </div>
                </div>

                <div id="small-dialog6" class="mfp-hide">
                  <div class="video-information-text">
                    <h4>Video information & settings</h4>
                    <p>Suspendisse tristique magna ut urna pellentesque, ut egestas velit faucibus. Nullam mattis lectus ullamcorper dui dignissim, sit amet egestas orci ullamcorper.</p>
                    <ol>
                      <li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum tincidunt.</li>
                      <li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum tincidunt.</li>
                      <li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum tincidunt.</li>
                      <li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum tincidunt.</li>
                      <li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum tincidunt.</li>
                    </ol>
                  </div>
                </div>
                <script>
                    $(document).ready(function() {
                        $('.popup-with-zoom-anim').magnificPopup({
                          type: 'inline',
                          fixedContentPos: false,
                          fixedBgPos: true,
                          overflowY: 'auto',
                          closeBtnInside: true,
                          preloader: false,
                          midClick: true,
                          removalDelay: 300,
                          mainClass: 'my-mfp-zoom-in'
                        });
                    });
                </script>	
      </div>
      <div class="signin">
        {{-- <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Sign In</a> --}}
        <div id="small-dialog" class="mfp-hide">
          <h3>Login</h3>
          <div class="social-sits">
            <div class="facebook-button">
              {{-- <a href="{{ route('login.facebook') }}">Login with Facebook</a> --}}
            </div>
            <div class="chrome-button">
                <a href="{{ route('login.google') }}">Login with Google</a>
            </div>
            <div class="button-bottom">
              <p>New account? <a href="#small-dialog3" class="play-icon popup-with-zoom-anim">Signup</a></p>
            </div>
          </div>
          <div class="signup">
            <form id="user_sign_in" name="user_sign_in" method="POST" action="user-sign-in" enctype="multipart/form-data">
              @csrf

              <div class="form-group">
                <input type="text" class="email form-control form-control-sm" name="login_user_email" id="login_user_email" placeholder="Enter email" autocomplete="off" />
              </div>
             
              <div class="form-group">
                <input type="password" class="form-control form-control-sm" name="login_user_password" id="login_user_password" placeholder="Password"  autocomplete="off" />
              </div>
              
              <input type="submit"  value="LOGIN"/>
            </form>
            <div class="forgot">
              <a href="#">Forgot password ?</a>
            </div>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
  </nav>

      <!-- jquery-validation -->
      <script src="{{ asset('js/jquery-validation/jquery.validate.min.js') }}"></script>
      <script src="{{ asset('js/jquery-validation/additional-methods.min.js') }}"></script>

      <script>
        {{-- Form Validation --}}
        $(document).ready(function(){        
              $('#create_user').validate({
                rules:{
                  user_name:{
                    required:true,
                    normalizer: function(user_name) {
                           return $.trim(user_name);
                      },
                    email:false,  
                  },
                  user_email:{
                    required:true,
                    normalizer: function(user_email) {
                           return $.trim(user_email);
                      },
                    email:true,  
                    remote:{
                                        url: "{{ URL::route('is-user-available') }}",
                                        type:"GET",
                                        data: {
                                          user_email: function() {
                                              return $( "#user_email").val();
                                            }
                                          }
                                      },
                  },
                  user_password:{
                      required: true,
                      minlength:6,
                  },
                  mobile_number:{
                      digits: true,
                      minlength:10,
                      maxlength:10,
                      email:false,

                  },
                },
                messages:{
                      user_name:{
                        required:'Name is required',
                      },
                      user_email:{
                        required:'Email is required',
                        email: "Invalid mail address",
                        remote: 'An account already existed with this mail.'
                      },
                      user_password:{
                        required:'Password is required',
                        minlength: 'Minimum 16 characters required',
                      },
                      mobile_number:{
                        digits: 'Only digits allowed',
                        minlength: 'Minimum 10 digits required',
                        minlength: 'Maximum 10 digits required'
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
              }); //end of user sign up validation




              $('#user_sign_in').validate({
                rules:{
                  login_user_email:{
                    required:true,
                    normalizer: function(user_email) {
                           return $.trim(user_email);
                      },
                    email:true,  
                    remote:{
                                        url: "{{ URL::route('user_existance') }}",
                                        type:"GET",
                                        data: {
                                          login_user_email: function() {
                                              return $( "#login_user_email").val();
                                            },
                                            login_user_password: function() {
                                              return $( "#login_user_password").val();
                                            }
                                          }
                                      },
                  },
                  login_user_password:{
                      required: true,
                      minlength:6,
                      remote:{
                                        url: "{{ URL::route('user_existance') }}",
                                        type:"GET",
                                        data: {
                                          login_user_email: function() {
                                              return $( "#login_user_email").val();
                                            },
                                            login_user_password: function() {
                                              return $( "#login_user_password").val();
                                            }
                                          }
                                      },
                  },
                },
                messages:{
                      login_user_email:{
                        required:'Email is required',
                        email: "Invalid mail address",
                        remote:'User credentials are incorrect',
                      },
                      login_user_password:{
                        required:'Password is required',
                        remote:'User credentials are incorrect',
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
              }); //end of user sign in validation
      }); //end of ready function    
    </script>   