<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
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
            <button type="submit">Submit</button>
        </div>

    </form>
</body>

</html>