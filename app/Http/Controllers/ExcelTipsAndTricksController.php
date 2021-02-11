<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExcelTipsAndTricksController extends Controller
{
    protected function LoadCopyFromClipboardExcelTipsTricks(){
        return view('excel_tips_and_tricks/copy-from-clipboard-excel-tips-tricks');
        }

    protected function LoadAddBulletPointExcelTipsTricks(){
        return view('excel_tips_and_tricks/add-bullet-point-excel-tips-tricks');
        }
}
