<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VbaProjectsController extends Controller
{
    protected function LoadVba_ProjectsSplitDataIntoMultipleSheets(){
        return view('vba_projects/split-data-into-multiple-sheets');
        }

        protected function LoadVba_ProjectsUploadInsertImages(){
        return view('vba_projects/upload-insert-images');
        }

	
		


}
