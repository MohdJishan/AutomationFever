@extends('master-layout.master')

@section('application-title',$playlist_name)

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
									<p class="author"><a href="{{route('single',['video_id'=>$item->video_id])}}" class="author">{{$item->channel_title}}</a></p>
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