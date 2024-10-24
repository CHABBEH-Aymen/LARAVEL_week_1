<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    function send(Request $request)
    {
        $data = $request->validate([
            'name'=>"required",
            'email'=>"required",
            'message'=>"required",
        ]);
        Try
        {
            Mail::to('chabbehaymensolicode@gmail.com')->send(new SendMail($data['message']));
            return redirect()->back()->with('success', "done");
        }
        catch(Exception $e)
        {return redirect()->back()->with('err', $e->getMessage());}
    }
}
