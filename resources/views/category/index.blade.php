@extends('layout.main')
@section('content')
    <div>
        @foreach ($categories as $category)
            <div style="border: 1px solid black; margin: 10px; background-color:rgb(84, 144, 255);">
                <form action="{{ route('category.update', ['category' => $category]) }}" method="post">
                    <input type="text" name="name" value="{{ $category->name }}">
                    <input type="text" name="description" value="{{ $category->description }}">
                    @method('PUT')
                    @csrf
                    <button type="submit">Update</button>
                </form>
                <form action="{{ route('category.delete', ['category' => $category]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                <div style="border: 1px solid black; margin: 10px; background-color:rgb(49, 104, 255);">
                    @foreach ($category->subcategories as $subcategory)
                        <div>
                            <form action="{{ route('subcategory.update', ['subcategory' => $subcategory]) }}" method="post">
                                <input type="text" name="name" value="{{ $subcategory->name }}">
                                <input type="text" name="description" value="{{ $subcategory->description }}">
                                @method('PUT')
                                @csrf
                                <button type="submit">Update</button>
                            </form>
                            <form action="{{ route('subcategory.delete', ['subcategory' => $subcategory]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </div>
                    @endforeach
                    <form action="{{ route('subcategory.store') }}" method="post">
                        @method('POST')
                        @csrf
                        <div>
                            <label for="name">Name</label>
                            <br>
                            <input type="text" name="name" id="name">
                            <label for="description">Description</label>
                            <br>
                            <input type="text" name="description" id="description">
                            <input type="hidden" name="category_id" value="{{ $category->id }}">
                            <button type="submit">Create</button>
                        </div>
                    </form>
                </div>
            </div>

        @endforeach
        <hr>
    </div>

    <form action="{{ route('category.store') }}" method="post">
        @method('POST')
        @csrf
        <div>
            <label for="name">Name</label>
            <br>
            <input type="text" name="name" id="name">
            <label for="description">Description</label>
            <br>
            <input type="text" name="description" id="description">
            <button type="submit">Create</button>
        </div>
    </form>
@endsection