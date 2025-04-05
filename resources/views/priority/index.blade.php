@extends('layout.main')
@section('content')
    <div>
        @foreach ($priorities as $priority)
            <div>
                <form action="{{ route('priority.update', ['priority' => $priority]) }}" method="post">
                    <input type="text" name="name" value="{{ $priority->name }}">
                    @method('PUT')
                    @csrf
                    <button type="submit">Update</button>
                </form>
                <form action="{{ route('priority.delete', ['priority' => $priority]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
            <hr>
        @endforeach
    </div>

    <form action="{{ route('priority.store') }}" method="post">
        @method('POST')
        @csrf
        <div>
            <label for="name">Name</label>
            <br>
            <input type="text" name="name" id="name">
            <label for="description">Description</label>
            <br>
            <input type="text" name="description" id="description">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection