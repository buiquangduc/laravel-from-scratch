<?php

namespace App\Http\Controllers;

use App\Notifications\Contact;
use App\Events\ContactSent;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        return view('contact');
    }

    public function store()
    {
        request()->user()->notify(new Contact('Hello World'));

        ContactSent::dispatch(request()->user()->name);
    }
}
