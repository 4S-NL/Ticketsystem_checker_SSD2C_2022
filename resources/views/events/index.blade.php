<h1>All events</h1>
<ul>
    @foreach($events as $event)
        <li><a href="{{ route('events.show', $event) }}">{{$event->name}}</a></li>
    @endforeach
</ul>
