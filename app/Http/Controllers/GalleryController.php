<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $galleriesmodel = Gallery::all();
        return view('admin.gallerydir.gallery', compact('galleriesmodel'));
    }


    public function create()
    {
        return view('admin.gallerydir.gallery-create');
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


    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        if ($gallery->path && Storage::disk('public')->exists($gallery->path)) {
            Storage::disk('public')->delete($gallery->path);
        };

        $gallery->delete();

        return redirect()->route('galleries-admin.index');
    }


    public function edit($id) {
        $gallery = Gallery::findOrFail($id);

        return view('admin.gallerydir.gallery-edit', compact('gallery'));
    }

    public function update(Request $request, $id) {
        $gallery = Gallery::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:51200',
            'description' => 'required|string|max:255'
        ]);

        #kalau dia nambahin foto
        if ($request->hasFile('image')) {
            if ($gallery->path && Storage::disk('public')->exists($gallery->path)) {
                Storage::disk('public')->delete($gallery->path);
            };

            $gallery->path = $request->file('image')->store('galleries', 'public');
        }

        $gallery->title = $request->title;
        $gallery->description = $request->description;
        $gallery->save();

        return redirect()->route('galleries-admin.index');


    }
}
