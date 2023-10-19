<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact.index');
    }

    public function send(ContactRequest $request)
    {
        return Redirect::route('contact.send')->with('success-message', 'Message sent!');
    }
}
