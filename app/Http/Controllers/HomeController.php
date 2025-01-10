<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Blog;
use App\Models\Press;
use App\Models\Gallery;
use App\Models\Career;
use App\Models\Product;
use App\Models\Partnership;
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

    public function products()
    {
        $data = Product::all();
        return view('admin.products.index', compact('data'));
    }

    public function blogCreate()
    {
        return view('admin.blog.create');
    }

    public function productsCreate()
    {
        return view('admin.products.create');
    }

    public function blogStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:webp,jpeg,png,jpg,gif,svg|max:2048',
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

    public function productsStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:webp,jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('products'), $imageName);
        $product = new Product;
        $product->category = $request->category;
        $product->name = $request->name;
        $product->brand = $request->brand;
        $product->composition = $request->composition;
        $product->manufacturer = $request->manufacturer;
        $product->description = $request->description;
        $product->slug = Str::slug($request->name);
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->image = $imageName;
        $product->save();

        return redirect()->route('admin.products')->with('success', 'Product created successfully.');
    }

    public function blogEdit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.edit', compact('blog'));
    }
    
    public function productsEdit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit', compact('product'));
    }

    public function blogUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'body' => 'required',
            'image' => 'image|mimes:webp,jpeg,png,jpg,gif,svg|max:2048',
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

    public function productsUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:webp,jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product = Product::find($id);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('products'), $imageName);
            $product->image = $imageName;
        }

        $product->category = $request->category;
        $product->name = $request->name;
        $product->brand = $request->brand;
        $product->composition = $request->composition;
        $product->manufacturer = $request->manufacturer;
        $product->description = $request->description;
        $product->slug = Str::slug($request->name);
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->save();

        return redirect()->route('admin.products')->with('success', 'Product updated successfully.');
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

    public function productsDelete($id)
    {
        $product = Product::find($id);
        $image_path = "products/".$product->image; 
        if (file_exists($image_path)) {
            @unlink($image_path);
        }
        $product->delete();
        return redirect()->route('admin.products')->with('success', 'Product deleted successfully.');
    }

    public function press()
    {
        $data = Press::all();
        return view('admin.press.index', compact('data'));
    }

    public function pressCreate()
    {
        return view('admin.press.create');
    }

    public function pressStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:webp,jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('press'), $imageName);

        $press = new Press;
        $press->name = $request->name;
        $press->body = $request->body;
        $press->slug = Str::slug($request->name);
        $press->image = $imageName;
        $press->save();

        return redirect()->route('admin.press')->with('success', 'Press Release created successfully.');
    }

    public function pressEdit($id)
    {
        $press = Press::find($id);
        return view('admin.press.edit', compact('press'));
    }
    
    public function pressUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'body' => 'required',
            'image' => 'image|mimes:webp,jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $press = Press::find($id);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('press'), $imageName);
            $press->image = $imageName;
        }

        $press->name = $request->name;
        $press->body = $request->body;
        $press->slug = Str::slug($request->name);
        $press->save();

        return redirect()->route('admin.press')->with('success', 'Press Release updated successfully.');
    }
    public function pressDelete($id)
    {
        $press = Press::find($id);
        $image_path = "press/".$press->image; 
        if (file_exists($image_path)) {
            @unlink($image_path);
        }
        $press->delete();
        return redirect()->route('admin.press')->with('success', 'Press Release deleted successfully.');
    }

    public function gallery()
    {
        $data = Gallery::all();
        return view('admin.gallery.index', compact('data'));
    }

    public function galleryCreate()
    {
        return view('admin.gallery.create');
    }

    public function galleryStore(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:webp,jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('gallery'), $imageName);

        $gallery = new Gallery;
        $gallery->image = $imageName;
        $gallery->save();

        return redirect()->route('admin.gallery')->with('success', 'Image created successfully.');
    }

    public function galleryEdit($id)
    {
        $gallery = Gallery::find($id);
        return view('admin.gallery.edit', compact('gallery'));
    }
    
    public function galleryUpdate(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:webp,jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $blog = Blog::find($id);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('gallery'), $imageName);
            $blog->image = $imageName;
        }

        $blog->save();

        return redirect()->route('admin.gallery')->with('success', 'Image updated successfully.');
    }

    public function galleryDelete($id)
    {
        $gallery = Gallery::find($id);
        $image_path = "gallery/".$gallery->image;
        if (file_exists($image_path)) {
            @unlink($image_path);
        }
        $gallery->delete();
        return redirect()->route('admin.gallery')->with('success', 'Image deleted successfully.');
    }


    public function careers()
    {
        $data = Career::all();
        return view('admin.careers.index', compact('data'));
    }

    public function careerCreate()
    {
        return view('admin.careers.create');
    }

    public function careerStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $career = new Career;
        $career->name = $request->name;
        $career->location = $request->location;
        $career->salary = $request->salary;
        $career->time = $request->time;
        $career->description = $request->description;
        $career->save();

        return redirect()->route('admin.careers')->with('success', 'Job added successfully.');
    }

    public function careerEdit($id)
    {
        $careers = Career::find($id);
        return view('admin.careers.edit', compact('careers'));
    }

    public function careerUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $career = Career::find($id);
        $career->name = $request->name;
        $career->location = $request->location;
        $career->salary = $request->salary;
        $career->time = $request->time;
        $career->description = $request->description;
        $career->save();

        return redirect()->route('admin.careers')->with('success', 'Job updated successfully.');
    }

    public function careerDelete($id)
    {
        $career = Career::find($id);
        $career->delete();
        return redirect()->route('admin.careers')->with('success', 'Job deleted successfully.');
    }


    public function partnership()
    {
        $data = Partnership::all();
        return view('admin.partnerships.index', compact('data'));
    }

    public function partnershipDelete($id) {
        $partnership = Partnership::find($id);
        $partnership->delete();
        return redirect()->route('admin.partnership')->with('success', 'Partnership deleted successfully.');}
}
