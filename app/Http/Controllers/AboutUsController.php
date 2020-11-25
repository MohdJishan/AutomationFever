<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videos_lists;

class AboutUsController extends Controller
{
    public function GetAboutUs()
     {
          return view('about-us');
     }
}
