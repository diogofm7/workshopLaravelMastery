<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventsController extends Controller
{

    public function index()
    {
        $events = Event::all();

        return view('events.index', [
            'events' => $events
        ]);
    }

    public function show(Event $event)
    {
        return view('events.edit', [
            'event' => $event
        ]);
    }

}
