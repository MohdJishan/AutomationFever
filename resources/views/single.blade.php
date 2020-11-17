@extends('master-layout.master')

@section('application-title','Video')

@section('content')
<div class="col-sm-12 col-md-12 main">
    <div class="show-top-grids">
        <div class="col-sm-8 single-left">
            <div class="song">
                <div class="video-grid">
                    <iframe src="https://www.youtube.com/embed/{{$video_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="song-info">
                    <h3>{{$video_details->video_title}} 
                        @if ($video_details->file1_url!=null)
                        <BR>
                            <a href="{{ asset('vba_codes/'. $video_details->file1_url)}}">Download Code</a>    
                        @endif
                    </h3>	
                </div>
            </div>
            <div class="clearfix"> </div>
            <div class="published">
                <script src="{{ asset('jquery.min.html')}}"></script>
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
                            <li>
                                <h4>Published on {{\Carbon\Carbon::parse($video_details->published_datetime)->format('d F Y')}}</h4>
                                    <p>{{$video_details->description}}</p>
                            </li>
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
                    <div class="single-right-grids">
                        <div class="col-md-4 single-right-grid-left">
                            <a href="{{route('single',['video_id'=>$item->video_id])}}"><img src="{{ asset('images/'. $item->thumbnail.'')}}" alt="" /></a>
                        </div>
                        <div class="col-md-8 single-right-grid-right">
                            <a href="{{route('single',['video_id'=>$item->video_id])}}" class="title"> {{$item->video_title}}</a>
                            <p class="author"><a href="#" class="author">{{$item->channel_title}}</a></p>
                            <p class="views">{{$item->view_count}} views</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                @endforeach 
            </div>
        </div>
        <div class="clearfix"> </div>
    </div> {{--  <div class="show-top-grids">--}}
</div>    
@endsection