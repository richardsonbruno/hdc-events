<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $eventos = Event::all();
        return view('home', ['events' => $eventos]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        if ($request->hasFile('image') && $request->image->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . Carbon::now()) . '.' . $extension;
            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }

        $event->save();

        return redirect()->route('home')->with('msg', 'Evento criado com sucesso!');
    }

    public function show($id) {
        try {
            $event = Event::findOrFail($id);
            return view('events.show', ['event' => $event]);
        } catch (Exception $e) {
            return redirect()->route('home')->with('msg', 'O Evento não existe');;
        }

    }
}
