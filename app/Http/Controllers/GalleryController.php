<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $galleriesmodel = Gallery::all();
        return view('admin.gallery', compact('galleriesmodel'));
    }


    public function create()
    {
        return view('admin.gallery-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:51200',
            'description' => 'nullable|string|max:255'
        ]);

        $image_path = $request->file('image')->store('galleries', 'public');

        Gallery::create([
            'title' => $request->title,
            'path' => $image_path,
            'description' => $request->description,
        ]);

        return redirect()->route('galleries-admin.index');
    }
}
