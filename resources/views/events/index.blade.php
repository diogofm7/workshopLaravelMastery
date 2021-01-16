<h2>Eventos</h2>

<hr>

<ul>
    @foreach($events as $event)
        <li><a href="{{ route('event.show', $event) }}">{{ $event->name }}</a></li>
    @endforeach
</ul>
