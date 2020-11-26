@extends('master-layout.master')

@section('application-title')
  <title>{{$playlist_name}}</title>    
@endsection


@section('fevicon')
    <link rel="icon" href="{{ asset('images/AutomationFever_icon.png')}}" type="image/gif" sizes="16x16">
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
				<div class="col-md-12 single-right">
					<h3>{{$playlist_name}}</h3>
					<div class="single-grid-right">
						@php
							$indx=0;
						@endphp
					   @foreach ($all_video_list as $item)
							<div class="single-right-grids">
								<div class="col-md-3 single-right-grid-left">
									<a href="{{route('single',['video_id'=>$item->video_id])}}"><img src="{{ asset('images/'. $item->thumbnail.'')}}" alt="" /></a>
								</div>
								<div class="col-md-9 single-right-grid-right">
									<a href="{{route('single',['video_id'=>$item->video_id])}}" class="title">{{'('. ++$indx. ').' }} {{$item->video_title}}</a>
									<p class="author"><a href="{{route('single',['video_id'=>$item->video_id])}}" class="author">Automation Fever</a></p>
									<p class="views">{{$item->view_count}} views</p>
									<p>{{\Illuminate\Support\Str::limit($item->description,$limit=500,$end='.....')}}</p>
								</div>
								<div class="clearfix"> </div>
							</div>						   
					   @endforeach	
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
    @endsection