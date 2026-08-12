<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$newsies = News::latest()->get();
        $newsies = News::all();
        return view('admin.newsdir.news', compact('newsies'));
    }

    public function create(News $news)
    {
        return view('admin.newsdir.news-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255',
            'thumbnail' => 'required|image|mimes:jpg,png,webp,jpeg|max:4096',
        ]);

        $thumbnailpath = null;
        if ($request->hasfile('thumbnail')) {
            $thumbnailpath = $request->file('thumbnail')->store('news', 'public');
        };

        News::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'thumbnail' => $thumbnailpath,
        ]);

        return redirect()->route('news-admin.index');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.newsdir.news-edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpg,png,webp,jpeg|max:4096',
        ]);

        if ($request->hasfile('thumbnail')) {
            #$thumbnailpath = $request->file('thumbnail')->store('news', 'public');
            if ($news->thumbnail && Storage::disk('public')->exists($news->thumbnail)) {
                Storage::disk('public')->delete($news->thumbnail);
            };

            $news->thumbnail = $request->file('thumbnail')->store('newsies', 'public');
        };

        $news->title = $request->title;
        $news->slug = Str::slug($request->description);
        $news->content = $request->content;
        $news->save();

        return redirect()->route('news-admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);

        if ($news->thumbnail && Storage::disk('public')->exists($news->thumbnail)) {
            Storage::disk('public')->delete($news->thumbnail);
        };

        $news->delete();

        return redirect()->route('news-admin.index');
    }
}
