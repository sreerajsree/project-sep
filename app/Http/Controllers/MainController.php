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

    public function privacy()
    {
        return view('pages.privacy');
    }
    public function terms()
    {
        return view('pages.terms');
    }
    public function disclaimer()
    {
        return view('pages.disclaimer');
    }
    public function company()
    {
        return view('pages.company');
    }
    public function management()
    {
        return view('pages.management');
    }
    public function quality()
    {
        return view('pages.quality');
    }
    public function gallery()
    {
        return view('pages.media-gallery');
    }
}
