<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvancedVbaController extends Controller
{
    protected function LoadSendOutlookMail(){
        return view('advanced_vba/send-outlook-mail');
        }
        
        protected function LoadFormatEmailBodyOutlookAutomation(){
        return view('advanced_vba/format-email-body-outlook-automation');
        }
        
        protected function LoadAddSignatureOutlookAutomation(){
        return view('advanced_vba/add-signature-outlook-automation');
        }
        
        protected function LoadAddAttachmentInMailOutlookAutomation(){
        return view('advanced_vba/add-attachment-in-mail-outlook-automation');
        }
        
        protected function LoadInsertImageInMailOutlookAutomation(){
        return view('advanced_vba/insert-image-in-mail-outlook-automation');
        }
        
        protected function LoadAddListOnMailOutlookAutomation(){
        return view('advanced_vba/add-list-on-mail-outlook-automation');
        }
        
        protected function LoadAddUnorderedListOnMailOutlookAutomation(){
        return view('advanced_vba/add-unordered-list-on-mail-outlook-automation');
        }
        
        protected function LoadUsingRtfPropertyOutlookAutomation(){
        return view('advanced_vba/using-rtf-property-outlook-automation');
        }
        
}
