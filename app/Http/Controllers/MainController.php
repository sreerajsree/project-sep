<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Blog;

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
    public function careers()
    {
        return view('pages.careers');
    }
    public function researchDevelopment()
    {
        return view('pages.research-development');
    }
    public function activePharmaceuticalIngredients()
    {
        return view('pages.active-pharmaceutical-ingredients');
    }
    public function analyticalResearchDevelopment()
    {
        return view('pages.analytical-research-development');
    }
    public function formulationResearchDevelopment()
    {
        return view('pages.formulation-research-development');
    }
    public function ipr()
    {
        return view('pages.ipr');
    }
    public function blog()
    {
        $data = Blog::orderBy('id','desc')->get();

        return view('pages.blog', compact('data'));
    }

    public function blogDetail($slug){
       
        $data = Blog::where('slug', $slug)->first();

        return view('pages.blogview', compact('data'));
    }
}
