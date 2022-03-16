<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::query();
        return view('content.publisher.event.index',[
            'title' => 'Event',
            'events' => $events->latest()->paginate(10)
        ]);
        
    }

    //  V I E W    D E T A I L
    public function show(Request $request, $slug)
    {
        
        $event = Event::query()->where('slug', $slug)->first();
        return view('content.publisher.event.show', [
            "title" => "Detail Event",
        ],compact('event'));
    }

    // H A P U S
    public function hapus($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect('/event')->with('deleted', 'Event berhasil dihapus');
    }

    public function edit($slug)
    {
        $event = Event::query()->where('slug', $slug)->first();
        return view('content.publisher.event.edit',[
            'title' => 'Event',
            'event' => $event
        ]);
    
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'date' => 'required',
            'syarat' => 'required|max:255',
            'gambar' => 'required'
        ]);
        $event = Event::find($id);
        $slug = Str::slug($request->input('name'));
        dd($validatedData);


        $event = Event::where('id',$event->id)->update([
            'name' => $request->input('name'),
            'date' => $request->input('date'),
            'syarat' => $request->input('syarat'),
            'gambar' => $request->input('gambar'),
            'slug' => $slug
        ]);
        return back()->with('update', 'Event berhasil diubah');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'date' => 'required',
            'syarat' => 'required|max:255',
            'gambar' => 'required'
        ]); 
        
        $slug = Str::slug($request->input('name'));
        $img = $request->file('gambar')->store('public/gallery');
        Event::create([
            'name' => $request->input('name'),
            'date' => $request->input('date'),
            'syarat' => $request->input('syarat'),
            'gambar' => $img,
            'slug' => $slug
        ]);

        return back()->with('success', 'registrasi berhasil harap login');
    }
}
