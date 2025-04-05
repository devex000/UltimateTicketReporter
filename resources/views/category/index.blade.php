<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        @foreach ($categories as $category)
            <div>
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
            </div>
            <hr>
        @endforeach
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
</body>

</html>