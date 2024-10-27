<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            "name"=>"required",
            "lastName"=>"required",
            "email"=>"required",
            "phone"=>"required",
            "msg"=>"required"
        ]);

        try {
            Mail::to("chabbehaymensolicode@gmail.com")->send(new ContactMail($data));
            return redirect('/');
        } catch (Exception $e) {
            return redirect()->back()->withErrors($data)->withInput();
        }
    }
}
