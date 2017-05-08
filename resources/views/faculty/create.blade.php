<form action="{{ route('faculties.store') }}" method="post">
    {{ csrf_field() }}
    <p>
    {{ $errors->first('name') }}
    Name:
    <input type="text" name="name" value="{{ old('name') }}">
    </p>
    <button type="submit">Save</button>
</form>
