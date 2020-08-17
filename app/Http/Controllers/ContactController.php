<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store()
    {
        request()->validate(['email' => 'required|email']);

        $data = array('name'=>"Sam Jose", "body" => "Test mail");

        Mail::to(request('email'))
            ->send(new ContactMe($data['name']));

        return redirect('/contact')
            ->with('message', 'Email send!');
    }
}
