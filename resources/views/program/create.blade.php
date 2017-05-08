<form action="{{ route('programs.store') }}" method="post">
    {{ csrf_field() }}
    <p>
    {{ $errors->first('name') }}
    Name:
    <input type="text" name="name" value="{{ old('name') }}">
    </p>
    <p>
    {{ $errors->first('faculty_id') }}
    Faculty:
    <select name="faculty_id">
        @foreach($faculties as $faculty)
        <option
            value="{{ $faculty->id }}"
            @if (old('faculty_id') == $faculty->id)
            selected
            @endif
        >
            {{ $faculty->name }}
        </option>
        @endforeach
    </select>
    </p>
    <p>
    {{ $errors->first('mandatorty_credits') }}
    Mandatory Credits:
    <input type="number" name="mandatorty_credits" value="{{ old('mandatorty_credits') }}">
    </p>
    <p>
    {{ $errors->first('optional_credits') }}
    Optional Credits:
    <input type="number" name="optional_credits" value="{{ old('optional_credits') }}">
    </p>
    <button type="submit">Save</button>
</form>
