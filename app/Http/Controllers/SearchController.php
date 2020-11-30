<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videos_lists;

class SearchController extends Controller
{
    public function SearchVideos(Request $request){
        $search_string=$request->input('search_string');

        $videos_list=Videos_lists::select(
                                                'video_id',
                                                'channel_title',
                                                'video_title',
                                                'thumbnail',
                                                'view_count',
                                                'duration',
                                                'description',
                                            )
                                        ->where('video_title','like','%'.$search_string.'%')
                                        ->orderBy('published_datetime')
                                        ->get();
        
        return view('search_result',[
                        'videos_list' => $videos_list,             
        ]);
    }
}
