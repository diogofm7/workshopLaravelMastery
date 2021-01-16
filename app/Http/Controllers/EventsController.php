<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{

    public function index()
    {
        return '<h1>Lista de Eventos</h1>';
    }

    public function show(Event $event)
    {
        return $event;
    }

}
