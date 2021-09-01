<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }


    public function create()
    {
        $categories = Category::pluck('name','id');
        $tags = Tag::all();
        return view('admin.products.create',compact('categories', 'tags'));
    }

    public function store(ProductRequest $request)
    {
        $product = Product::create($request->all());
        if($request->file('file')){
            $img = $request->file('file')->store('public/products');
            $url = Storage::url($img);
            //$url = Storage::put('posts', $request->file('file'));
            $product->image()->create([
                'url'=>$url
            ]);
        }
        if($request->tags){
            $product->tags()->attach($request->tags);
        }
        return redirect()->route('admin.products.index');
    }


    public function show($id)
    {
        //
    }

    public function edit(Product $product)
    {
        $categories = Category::pluck('name');
        $tags = Tag::all();
        return view('admin.products.edit', compact('product','categories', 'tags'));
    }

    public function update(Request $request, $id)
    {
        dd('Estas aqui');
    }

    public function destroy($id)
    {
        //
    }
}
