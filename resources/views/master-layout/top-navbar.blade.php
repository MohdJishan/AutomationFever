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
          <a class="nav-link" href="#" style="color:#ccc6c6"> UiPath </a>
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
          <form class="navbar-form navbar-right" style="display: flex;">
              <input type="text" class="form-control" placeholder="Search..." style="font-size: smaller;">
              <input type="submit" value=" ">
              <span style="display: flex;padding-left: 15px;">
              <a href="#small-dialog2" class="play-icon popup-with-zoom-anim  float-right" style="text-decoration:none; color:white">Sign&nbsp;Up</a>
              <a href="#small-dialog" class="play-icon popup-with-zoom-anim  float-right" style="text-decoration:none; color:white">Sign&nbsp;In</a>
              </span>
          </form>
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
                      <a href="#">Connect with Facebook</a>
                    </div>
                    <div class="chrome-button">
                      <a href="#">Connect with Google</a>
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
                      <a href="#">Connect with Facebook</a>
                    </div>
                    <div class="chrome-button">
                      <a href="#">Connect with Google</a>
                    </div>
                    <div class="button-bottom">
                      <p>Already have an account? <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Login</a></p>
                    </div>
                  </div>
                  <div class="signup">
                    <form>
                      <input type="text" class="email" placeholder="Email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="Enter a valid email"/>
                      <input type="password" placeholder="Password" required="required" pattern=".{6,}" title="Minimum 6 characters required" autocomplete="off" />
                      <input type="text" class="email" placeholder="Mobile Number" maxlength="10" pattern="[1-9]{1}\d{9}" title="Enter a valid mobile number" />
                      <input type="submit"  value="Sign Up"/>
                    </form>
                  </div>
                  <div class="clearfix"> </div>
                </div>	
                <div id="small-dialog7" class="mfp-hide">
                  <h3>Create Account</h3> 
                  <div class="social-sits">
                    <div class="facebook-button">
                      <a href="#">Connect with Facebook</a>
                    </div>
                    <div class="chrome-button">
                      <a href="#">Connect with Google</a>
                    </div>
                    <div class="button-bottom">
                      <p>Already have an account? <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Login</a></p>
                    </div>
                  </div>
                  <div class="signup">
                    <form action="https://demo.w3layouts.com/demos_new/template_demo/02-05-2020/my_play-demo_Free/236948122/web/upload.php">
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
                  <h3>Help</h3> 
                    <div class="help-grid">
                      <p>Suspendisse tristique magna ut urna pellentesque, ut egestas velit faucibus. Nullam mattis lectus ullamcorper dui dignissim, sit amet egestas orci ullamcorper.</p>
                    </div>
                    <div class="help-grids">
                      <div class="help-button-bottom">
                        <p><a href="#small-dialog4" class="play-icon popup-with-zoom-anim">Feedback</a></p>
                      </div>
                      <div class="help-button-bottom">
                        <p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Lorem ipsum dolor sit amet</a></p>
                      </div>
                      <div class="help-button-bottom">
                        <p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Nunc vitae rutrum enim</a></p>
                      </div>
                      <div class="help-button-bottom">
                        <p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Mauris at volutpat leo</a></p>
                      </div>
                      <div class="help-button-bottom">
                        <p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Mauris vehicula rutrum velit</a></p>
                      </div>
                      <div class="help-button-bottom">
                        <p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Aliquam eget ante non orci fac</a></p>
                      </div>
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
              <a href="#">Connect with Facebook</a>
            </div>
            <div class="chrome-button">
              <a href="#">Connect with Google</a>
            </div>
            <div class="button-bottom">
              <p>New account? <a href="#small-dialog2" class="play-icon popup-with-zoom-anim">Signup</a></p>
            </div>
          </div>
          <div class="signup">
            <form>
              <input type="text" class="email" placeholder="Enter email / mobile" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?"/>
              <input type="password" placeholder="Password" required="required" pattern=".{6,}" title="Minimum 6 characters required" autocomplete="off" />
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
