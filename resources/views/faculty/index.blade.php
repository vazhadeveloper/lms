<a href="{{ route('faculties.create') }}">Create</a>
<ul>
    @foreach($faculties as $fac)
    <li><a href="{{ route('faculties.show', $fac->id) }}">{{ $fac->name }}</a></li>
    @endforeach
</ul>
