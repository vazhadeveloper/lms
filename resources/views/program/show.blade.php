<link rel="stylesheet" type="text/css" href="/css/app.css">
<h1>{{ $program->name }}</h1>
<p>
    {{ $program->faculty->name }}
</p>
<p>
    {{ $program->mandatorty_credits }}
</p>
<p>
    {{ $program->optional_credits }}
</p>
<a href="{{ route('programs.edit', $program->id) }}">Edit</a>
