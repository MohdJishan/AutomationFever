<!DOCTYPE HTML>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    
@yield('application-title')    
@yield('fevicon')

<meta name="csrf-token" content="{{ csrf_token() }}">	
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
@yield('meta_data')

<meta name="author" content="Shaan Ansari">
<meta name="robots" content="noindex">


@yield('JsAndCss')


</head>
<body>
{{-- <script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script> --}}
<!--<script>(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "//a.vdo.ai/core/w3layouts_V2/vdo.ai.js?vdo=34");</script>-->
{{-- <div id="codefund"><!-- fallback content --></div> --}}
{{-- <script src="../../../../../../../codefund.io/properties/441/funder.js" async="async"></script> --}}
  
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>


    @include('master-layout.top-navbar')

    <div class="col-sm-12 col-md-12 main">
                <div class="main-grids">
                    @yield('content')
                </div>

                @include('master-layout.footer')
    </div>    

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        {{-- <script src="js/bootstrap.min.js"></script> --}}
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  </body>
</html>