@extends('layout.main')
@section('content')
    <form action="{{ route('ticket.store') }}" method="post">
        @method('POST')
        @csrf
        <div>
            <label for="problem_since">Problem since</label>
            <br>
            <input type="datetime-local" name="problem_since" id="problem_since">
        </div>
        <div>
            <label for="description">Description</label>
            <br>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="priority_id">Priority</label>
            <br>
            <select name="priority_id" id="priority_id">
                @foreach ($priorities as $priority)
                    <option value="{{ $priority->id }}">{{ $priority->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="category_id">Category</label>
            <br>
            <select name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>

    </form>
@endsection