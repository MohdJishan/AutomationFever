@extends('master-layout.master')
@section('application-title')
  <title>{{$video_details->video_title}}</title>    
@endsection


@section('fevicon')
    <link rel="icon" href="{{ asset('images/AutomationFever_icon.png')}}" type="image/gif" sizes="16x16">
@endsection


@section('meta_data')
<meta name="keywords" content="{{$video_details->meta_data}}" />
<meta name="description" content="{{$video_details->meta_description}}" />
<meta name="robots" content="noodp"/>
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{$video_details->video_title}}" />
<meta property="og:description" content="{{$video_details->meta_description}}" />
<meta property="og:url" content="http://www.automationfever.com/" />
<meta property="og:site_name" content="AutomationFever" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="{{$video_details->meta_description}}" />
<meta name="twitter:title" content="{{$video_details->video_title}}" />
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
<div class="col-sm-12 col-md-12 main">
    <div class="show-top-grids">
        <div class="col-sm-8 single-left">
            <div class="song">
                <div class="video-grid">
                    <iframe src="https://www.youtube.com/embed/{{$video_id}}?autoplay=1&rel=0&modestbranding=1&mute=0&controls=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    
                </div>
                <div class="song-info">
                    <h3>{{$video_details->video_title}} 
                        @if ($next_video_id)
                            <a href="{{route('single',['video_id'=>$next_video_id->video_id])}}"><img src="{{asset('images/next.png')}}" style="margin-top: -6px;"></a>  
                        @endif
                        
                        @if ($video_details->file1_url!=null AND $video_details->file1_url!=' ' )
                    <a href="{{ asset('vba_codes/'. $video_details->file1_url)}}"><img src="{{asset('images/downloa_code.jpg')}}" width="60" height="35" alt="Download code files" class="float-right" /></a>    
                        @endif
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
                        <ul id="myLista">
                            
                                <h4>Published on {{\Carbon\Carbon::parse($video_details->published_datetime)->format('d F Y')}}</h4>
                                    <p>
                                        {{$video_details->description}}
                                    </p>
                        </ul>
                    </div>
					</div>
					<div class="published">
					<div class="load_more">	
                        <ul id="text-description" data-description="text-description" data-video_id="{{$video_id}}">
                        </ul>
                    </div>
            </div>
            <div class="all-comments">
                {{-- <div class="all-comments-info">
                    <a href="#">All Comments ({{$video_details->comment_count}})</a>
                    <div class="box">
                        <form>
                          <div class="row">
                            <div class="col-md-6">
                              <input type="text" placeholder="Name" required=" ">
                            </div>
                            <div class="col-md-6">
                              <input type="email" placeholder="Email" required=" ">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                                <textarea placeholder="Add a comment.." required=" "></textarea>
                            </div>
                          </div>
                          <input type="submit" value="Comment" style="float:right">
                            <div class="clearfix"> </div>
                        </form>
                    </div>
                    <div class="all-comments-buttons">
                        <ul>
                            <li><a href="#" class="top">Top Comments</a></li>
                            <li><a href="#" class="top newest">Newest First</a></li>
                            <li><a href="#" class="top my-comment">My Comments</a></li>
                        </ul>
                    </div>
                </div> --}}
                {{-- <div class="media-grids">
                    <div class="media">
                        <h5>Tom Brown</h5>
                        <div class="media-left">
                            <a href="#">
                                
                            </a>
                        </div>
                        <div class="media-body">
                            <p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
                            <span>View all posts by :<a href="#"> Admin </a></span>
                        </div>
                    </div>
                    <div class="media">
                        <h5>Mark Johnson</h5>
                        <div class="media-left">
                            <a href="#">
                                
                            </a>
                        </div>
                        <div class="media-body">
                            <p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
                            <span>View all posts by :<a href="#"> Admin </a></span>
                        </div>
                    </div>
                    <div class="media">
                        <h5>Steven Smith</h5>
                        <div class="media-left">
                            <a href="#">
                                
                            </a>
                        </div>
                        <div class="media-body">
                            <p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
                            <span>View all posts by :<a href="#"> Admin </a></span>
                        </div>
                    </div>
                    <div class="media">
                        <h5>Marry Johne</h5>
                        <div class="media-left">
                            <a href="#">
                                
                            </a>
                        </div>
                        <div class="media-body">
                            <p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
                            <span>View all posts by :<a href="#"> Admin </a></span>
                        </div>
                    </div>
                    <div class="media">
                        <h5>Mark Johnson</h5>
                        <div class="media-left">
                            <a href="#">
                                
                            </a>
                        </div>
                        <div class="media-body">
                            <p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
                            <span>View all posts by :<a href="#"> Admin </a></span>
                        </div>
                    </div>
                    <div class="media">
                        <h5>Mark Johnson</h5>
                        <div class="media-left">
                            <a href="#">
                                
                            </a>
                        </div>
                        <div class="media-body">
                            <p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
                            <span>View all posts by :<a href="#"> Admin </a></span>
                        </div>
                    </div>
                    <div class="media">
                        <h5>Peter Johnson</h5>
                        <div class="media-left">
                            <a href="#">
                                
                            </a>
                        </div>
                        <div class="media-body">
                            <p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
                            <span>View all posts by :<a href="#"> Admin </a></span>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="col-md-4 single-right">
            <h3>Up Next</h3>
            <div class="single-grid-right">
                @foreach ($up_next_videos as $item)
                  @if ($item->video_id != $video_id)
                        <div class="single-right-grids">
                            <div class="col-md-4 single-right-grid-left">
                                <a href="{{route('single',['video_id'=>$item->video_id])}}"><img src="{{ asset('images/'. $item->thumbnail.'')}}" alt="" /></a>
                            </div>
                            <div class="col-md-8 single-right-grid-right">
                                <a href="{{route('single',['video_id'=>$item->video_id])}}" class="title"> {{$item->video_title}}</a>
                                <p class="author"><a href="#" class="author">Automation Fever</a></p>
                                <p class="views">{{$item->view_count}} views</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                  @else
                        <div class="single-right-grids" style="border-left: 5px solid #F46001; font-weight:900; opacity:.4; background-color:#ffffff">
                            <div class="col-md-4 single-right-grid-left">
                                <a href="{{route('single',['video_id'=>$item->video_id])}}"><img src="{{ asset('images/'. $item->thumbnail.'')}}" alt="" /></a>
                            </div>
                            <div class="col-md-8 single-right-grid-right">
                                <a href="{{route('single',['video_id'=>$item->video_id])}}" class="title"> {{$item->video_title}}</a>
                                <p class="author"><a href="#" class="author">Automation Fever</a></p>
                                <p class="views">{{$item->view_count}} views</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div> 
                  @endif
                    
                @endforeach 
            </div>
        </div>
        <div class="clearfix"> </div>
    </div> {{--  <div class="show-top-grids">--}}
</div>



  <script>
        $(document).ready(function(){
            //Ajax token setup for the post requests. 
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
            }); //$.ajaxSetup({



            //Load Text description
            var video_id="{{$video_id}}";
            $.post("{{URL::route('get-video-text-description') }}",{video_id:video_id},function(data){
                $('#text-description').html(data.html);     
            });    
        });
  </script>

@endsection