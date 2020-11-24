<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videos_lists;

class AddDescription extends Controller
{
    public function LoadVideosDetails(){
        $videos_list=Videos_lists::all();

        return view('add_description',['videos_list'=>$videos_list]);
    }


    public function InsertVideoDescription(Request $request){
        return $request->all();
    }
}
