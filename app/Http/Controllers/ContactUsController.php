<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact_Us;

class ContactUsController extends Controller
{
    public function GetContactUsPage()
    {
        return view('contact');
    }

    public function ContactUsPost(Request $request){
        $full_name=$request->input('full_name');
        $mail_address=$request->input('mail_address');
        $subject=$request->input('subject');
        $mobile_number=$request->input('mobile_number');
        $user_comment=$request->input('user_comment');

        $contact_us=new Contact_Us();
        $contact_us->full_name=$full_name;
        $contact_us->mail_address=$mail_address;
        $contact_us->subject=$subject;
        $contact_us->mobile_number=$mobile_number;
        $contact_us->user_comment=$user_comment;

        $contact_us->save();
        $request->session()->flash('post-contact-us','Details saved successfully');
        return redirect('/');
    }
}
