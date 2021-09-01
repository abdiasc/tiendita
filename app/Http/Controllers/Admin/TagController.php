<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;


class TagController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tags = Tag::all();
        return view('admin.tags.index', compact('tags'));
    }


    public function create()
    {
        return view('admin.tags.create');
    }


    public function store(Request $request)
    {
        Tag::create($request->all());
        return redirect()->route('admin.tags.index');
    }


    public function show($id)
    {
        //
    }


    public function edit(Tag $tag)
    {
        
        return view('admin.tags.edit', compact('tag'));
    }


    public function update(Request $request, Tag $tag)
    {
        $tag->update($request->all());
        return redirect()->route('admin.tags.index');
    }


    public function destroy($id)
    {
        //
    }
}
