<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="background-color:#2d545e!important; border-radius: 0px;margin-bottom: 0px;border: 0px;font-size: medium;">
    <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png ')}}" height="45" alt="CoolBrand"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto" style="margin-left: auto;text-transform: uppercase; font-family: revert;">
        <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}" style="color:#ffff;"> Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color:#ccc6c6"> About </a>
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
          <a class="nav-link" href="#" style="color:#ccc6c6">Contact</a>
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
  </nav>
