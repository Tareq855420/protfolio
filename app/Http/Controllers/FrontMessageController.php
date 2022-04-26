<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\FrontMail;
use Illuminate\Support\Facades\Mail;

class FrontMessageController extends Controller
{
    public function frontMessage()
    {
        $contact_form = request()->all();
        Mail::to('khantareq539@gmail.com')->send(new FrontMail($contact_form));
        return redirect()->back('home', '/#contact')->with('message', 'Mail Sent Successfully.');
    }
}
