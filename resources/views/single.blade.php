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
{{-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> --}}

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
                    <a href="{{ asset('vba_codes/'. $video_details->file1_url)}}"><img src="{{asset('images/download_code.png')}}" width="50" height="30" alt="Download code files" class="float-right" /></a>    
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
            <div class="all-comments-info">
                <a href="#">All Comments ({{$total_video_comments}})</a>
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
                      <input type="hidden" id="video_id" name="video_id" value="{{$video_id}}" />
                      <button type="button" id="add_comment" name="add_comment" style="float:right">Comment</button>
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
                @foreach ($comments as $item)
                        <div class="media">
                            <h5>{{$item->user_name}}</h5>
                            <div class="media-left">
                                {{-- <a href="#">    
                                </a> --}}
                            </div>
                            <div class="media-body">
                                <p>
                                    {{$item->comment_body}}
                                  <div>
                                    @if ($item->is_reply_found)
                                        @if ($item->reply_count==1)
                                          <button class="btn btn-link btn-view-comment" data-view-count="0"  data-comment-id="{{$item->id}}"> View Reply </button>
                                        @else
                                          <button class="btn btn-link btn-view-comment" data-view-count="0"  data-comment-id="{{$item->id}}"> View {{$item->reply_count}} replies </button> 
                                        @endif
                                      @endif
                                   </div>
                                    <div data-view-comment-div="{{$item->id}}">
                                    </div> 
                                </p>
							                  	<a href="#small-dialog5" class="play-icon popup-with-zoom-anim btn btn-warning btn-reply-comment" data-video-id="{{$video_id}}" data-comment-id="{{$item->id}}" style="float:right">
                                    Reply
                                </a>
                            </div>
                        </div> 
                @endforeach
            </div>
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
			</div>
			


      <!-- jquery-validation -->
      <script src="{{ asset('js/jquery-validation/jquery.validate.min.js') }}"></script>
      <script src="{{ asset('js/jquery-validation/additional-methods.min.js') }}"></script>
	  
	  



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

           //Add comment throgh ajax request
            $("#add_comment").on('click',function(data){
              var user_name_comment=$('#user_name_comment').val();
              var user_email_comment=$('#user_email_comment').val();
              var user_comment=$('#user_comment').val();
              var video_id=$('#video_id').val();
              
              $.post("{{URL::route('post.comment') }}",{
                          user_name_comment:user_name_comment,
                          user_email_comment:user_email_comment,
                          user_comment:user_comment,
                          video_id:video_id,
                     },function(data){
                       $('#user_comment').val('');
                       $('#comments_area').prepend(data.html);
               });
            });

            

            

            //Show comment Reply
               $('.btn-view-comment').on('click',function(){
                   var comment_id=$(this).attr('data-comment-id');
                   var txt=$("div[data-view-comment-div='"+comment_id+"']").html();
                   var view_count=$(this).attr('data-view-count');
            
                    if(view_count==1){
                      $(this).html('View Reply'); 
                      $("div[data-view-comment-div='"+comment_id+"']").slideToggle(700);                     
                    }else{
                      $(this).html('Hide Reply');
                      $(this).attr('data-view-count','1');
                    $("div[data-view-comment-div='"+comment_id+"']").slideUp(300);
                    $.post("{{URL::route('view-comment-replies') }}",{comment_id:comment_id},function(data){        
                            $("div[data-view-comment-div='"+comment_id+"']").html(data.html);
                            $("div[data-view-comment-div='"+comment_id+"']").slideDown(700);
                      });    
                    } //else
               });


            $('#post_comment_form').validate({
                rules:{
                  user_name_comment:{
                    required:true,
                    normalizer: function(user_name_comment) {
                           return $.trim(user_name_comment);
                      },
                  },
                  user_email_comment:{
                    required:true,
                    normalizer: function(user_email_comment) {
                           return $.trim(user_email_comment);
                      },
                    email:true,  
                  },
                  user_comment:{
                      require:true,
                      normalizer: function(user_comment) {
                           return $.trim(user_comment);
                      },
                  }
                },
                messages:{
                      user_name_comment:{
                        required:'Name is required',
                      },
                      user_email_comment:{
                        required:'Email is required',
                        email: "Invalid mail address",
                      },
                    user_comment:{
                        required : 'Comment is required'
                    }  
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



              //Reply Validation
              // $('#post_comment_reply').validate({
              //   rules:{
              //       user_name_reply:{
              //       required:true,
              //       normalizer: function(user_name_reply) {
              //              return $.trim(user_name_reply);
              //         },
              //     },
              //     user_email_reply:{
              //       required:true,
              //       normalizer: function(user_email_reply) {
              //              return $.trim(user_email_reply);
              //         },
              //       email:true,  
              //     },
              //     user_comment_reply:{
              //         require:true,
              //         normalizer: function(user_comment_reply) {
              //              return $.trim(user_comment_reply);
              //         },
              //     }
              //   },
              //   messages:{
              //         user_name_reply:{
              //           required:'Name is required',
              //         },
              //         user_email_reply:{
              //           required:'Email is required',
              //           email: "Invalid mail address",
              //         },
              //       user_comment_reply:{
              //           required : 'Comment is required'
              //       }  
              //   },
              //     submitHandler: function (form) {
              //       form.submit();
              //     },
              //     errorElement: 'span',
              //     errorPlacement: function (error, element) {
              //       error.addClass('invalid-feedback');
              //       element.closest('.form-group').append(error);
              //     },
              //     highlight: function (element, errorClass, validClass) {
              //       $(element).addClass('is-invalid');
              //     },
              //     unhighlight: function (element, errorClass, validClass) {
              //       $(element).removeClass('is-invalid');
              //     }
              // }); //end of user sign up validation

              $('.btn-reply-comment').on('click',function(){
                    $("#video_id_reply").val($(this).attr('data-video-id'));
                    $("#comment_id_reply").val($(this).attr('data-comment-id'));                 
                });     
        });
  </script>
@endsection
