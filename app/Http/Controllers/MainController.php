<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Career;
use App\Models\Press;
use App\Models\Product;
use App\Models\Partnership;

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
    public function initiatives()
    {
        return view('pages.initiatives');
    }

    public function accapsules()
    {
        $products = Product::where('category', 'Anti Cancer Capsules')->orderBy('id', 'desc')->get();
        return view('pages.accapsules', compact('products'));
    }

    public function actablets()
    {
        $products = Product::where('category', 'Anti Cancer Tablets')->orderBy('id', 'desc')->get();
        return view('pages.actablets', compact('products'));
    }

    public function viewProduct($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('pages.view', compact('product'));
    }

    public function gallery()
    {
        $data = Gallery::orderBy('id', 'desc')->get();
        return view('pages.media-gallery', compact('data'));
    }
    public function careers()
    {
        $data = Career::orderBy('id', 'desc')->get();
        return view('pages.careers', compact('data'));
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
    public function partnership()
    {
        return view('pages.partnership');
    }
    public function environment()
    {
        return view('pages.environment');
    }
    public function manufacturing()
    {
        return view('pages.manufacturing');
    }
    public function ourProduct()
    {
        return view('pages.our-product');
    }
    public function ourBrand()
    {
        return view('pages.brand');
    }

    public function partnershipStore(Request $request) {

        $partnership = new Partnership();
        $partnership->companyname = $request->companyname;
        $partnership->subject = $request->subject;
        $partnership->address = $request->address;
        $partnership->country = $request->country;
        $partnership->department = $request->department;
        $partnership->contactperson = $request->contactperson;
        $partnership->telephone = $request->telephone;
        $partnership->email = $request->email;
        $partnership->website = $request->website;
        $partnership->brief = $request->brief;
        $partnership->save();

        flash()->success('We will get back to you');

        return redirect()->route('partnership');
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

    public function press()
    {
        $data = Press::orderBy('id','desc')->get();

        return view('pages.press', compact('data'));
    }

    public function blogDetail($slug){
       
        $data = Blog::where('slug', $slug)->first();

        return view('pages.blogview', compact('data'));
    }

    public function pressDetail($slug){
       
        $data = Press::where('slug', $slug)->first();

        return view('pages.pressview', compact('data'));
    }
}
