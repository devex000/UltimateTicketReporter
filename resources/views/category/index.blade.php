@extends('layout.main')
@section('content')
    <form action="{{ route('category.store') }}" method="post">
        @method('POST')
        @csrf
        <div style="border: 1px solid black;">
            <h2>Create new category</h2>
            <div>
                <label for="name">Name</label>
                <br>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="description">Description</label>
                <br>
                <input type="text" name="description" id="description">
            </div>
            <div>
                <button type="submit">Create</button>
            </div>
        </div>
    </form>
    <div>
        <h1>Categories</h1>
        @foreach ($categories as $category)
            <div style="margin: 10px;">
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
                <div style="margin-left: 100px;">
                    <h1>Subcategories for {{$category->name}}</h1>
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
                            <div style="margin: 10px; margin-left: 100px;">
                                <h1>Topics for {{$subcategory->name}}</h1>
                                @foreach ($subcategory->topics as $topic)
                                    <div>
                                        <form action="{{ route('topic.update', ['topic' => $topic]) }}" method="post">
                                            <input type="text" name="name" value="{{ $topic->name }}">
                                            <input type="text" name="description" value="{{ $topic->description }}">
                                            @method('PUT')
                                            @csrf
                                            <button type="submit">Update</button>
                                        </form>
                                        <form action="{{ route('topic.delete', ['topic' => $topic]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>
                                    </div>
                                @endforeach
                                <form action="{{ route('topic.store') }}" method="post">
                                    @method('POST')
                                    @csrf
                                    <div style="border: 1px solid black;">
                                        <h2>Create new topic</h2>
                                        <div>
                                            <label for="name">Name</label>
                                            <br>
                                            <input type="text" name="name" id="name">
                                        </div>
                                        <div>
                                            <label for="description">Description</label>
                                            <br>
                                            <input type="text" name="description" id="description">
                                        </div>
                                        <div>
                                            <button type="submit">Create</button>
                                        </div>
                                        <input type="hidden" name="subcategory_id" value="{{$subcategory->id}}">
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                    <form action="{{ route('subcategory.store') }}" method="post">
                        @method('POST')
                        @csrf
                        <div style="border: 1px solid black;">
                            <h2>Create new subcategory</h2>
                            <div>
                                <label for="name">Name</label>
                                <br>
                                <input type="text" name="name" id="name">
                            </div>
                            <div>
                                <label for="description">Description</label>
                                <br>
                                <input type="text" name="description" id="description">
                            </div>
                            <input type="hidden" name="category_id" value="{{$category->id}}">
                            <div>
                                <button type="submit">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        @endforeach
        <hr>
    </div>
@endsection