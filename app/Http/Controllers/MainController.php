<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class MainController extends Controller
{
    public function contact()
    {
        return view('pages.contact');
    }

    public function contactPost()
    {
        $contact = new Contact();
        $contact->name = request('name');
        $contact->email = request('email');
        $contact->message = request('message');
        $contact->save();
        flash()->success('We will get back to you');
        return redirect()->route('contact');
    }
}
