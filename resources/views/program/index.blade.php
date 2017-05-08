<a href="{{ route('programs.create') }}">Create</a>
<ul>
    @foreach($programs as $program)
    <li><a href="{{ route('programs.show', $program->id) }}">{{ $program->name }} ({{ $program->faculty->name }})</a></li>
    @endforeach
</ul>
