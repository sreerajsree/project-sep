<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Blog;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function contacts () {

        $data = Contact::all();

        return view('admin.contact', compact('data'));
    }

    public function blogs()
    {
        $data = Blog::all();
        return view('admin.blog.index', compact('data'));
    }

    public function blogCreate()
    {
        return view('admin.blog.create');
    }

    public function blogStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('blog'), $imageName);

        $blog = new Blog;
        $blog->name = $request->name;
        $blog->body = $request->body;
        $blog->slug = Str::slug($request->name);
        $blog->image = $imageName;
        $blog->save();

        return redirect()->route('admin.blogs')->with('success', 'Blog created successfully.');
    }

    public function blogEdit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.edit', compact('blog'));
    }
    
    public function blogUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'body' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $blog = Blog::find($id);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('blog'), $imageName);
            $blog->image = $imageName;
        }

        $blog->name = $request->name;
        $blog->body = $request->body;
        $blog->slug = Str::slug($request->name);
        $blog->save();

        return redirect()->route('admin.blogs')->with('success', 'Blog updated successfully.');
    }
    public function blogDelete($id)
    {
        $blog = Blog::find($id);
        $image_path = "blog/".$blog->image; 
        if (file_exists($image_path)) {
            @unlink($image_path);
        }
        $blog->delete();
        return redirect()->route('admin.blogs')->with('success', 'Blog deleted successfully.');
    }
}
