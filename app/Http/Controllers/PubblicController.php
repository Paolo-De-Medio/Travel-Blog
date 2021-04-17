<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PubblicController extends Controller
{
    
    public function home(){

        return view('welcome');
    }

    public function contactForm(){

        return view('contacts');
    }

    public function submit(Request $req){

        $user = $req->input('user');
        $message = $req->input('message');
        $email = $req->input('email');

        $contact = compact('user', 'message');

        Mail::to($email)->send(new ContactMail($contact));

        return redirect(route('homepage'))->with('message','La tua richiesta è stata inoltrata!');

    }
}
