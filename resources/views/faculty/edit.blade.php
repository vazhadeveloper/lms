<form action="{{ route('faculties.update', $faculty->id) }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <p>
    {{ $errors->first('name') }}
    Name:
    <input type="text" name="name" value="{{ $faculty->name }}">
    </p>
    <button type="submit">Save</button>
</form>
