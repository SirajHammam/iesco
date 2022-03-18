<?php

namespace App\Http\Controllers;

use App\Models\Doc;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DocController extends Controller
{
    public function index()
    {
        $doc = Doc::query();
        return view('content.doc.index',[
            'title' => 'Blog',
            'doc' => $doc->latest()->paginate(10)
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'date' => 'required',
            'content' => 'required|max:255',
            'gambar' => 'required'
        ]); 
        
        $slug = Str::slug($request->input('name'));
        $img = $request->file('gambar')->store('public/gallery');
        Doc::create([
            'name' => $request->input('name'),
            'date' => $request->input('date'),
            'content' => $request->input('content'),
            'gambar' => $img,
            'slug' => $slug
        ]);

        return back()->with('success', 'Data berhasil ditambahkan');
    }

    public function show2(Request $request, $slug)
    {
        
        $doc = Doc::query()->where('slug', $slug)->first();
        return view('content.doc.show2', [
            "title" => "Detail Event",
        ],compact('doc'));
    }

    public function hapus($id)
    {
        $blog = Doc::findOrFail($id);
        $blog->delete();
        return redirect('/doc')->with('deleted', 'Blog berhasil dihapus');
    }
}