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
                    <option value="{{ $category->id }}" data-description="{{ $category->description }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
    <hr>
    <p>Info</p>
    <p id="category_description" style="font-style: italic; color: #555;"></p>
@endsection

@section('additional-js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const select = document.getElementById('category_id');
            const descriptionSpan = document.getElementById('category_description');

            function updateDescription() {
                const selectedOption = select.options[select.selectedIndex];
                const description = selectedOption.getAttribute('data-description');
                descriptionSpan.textContent = description || '';
            }

            updateDescription();

            select.addEventListener('change', updateDescription);
        });
    </script>

@endsection