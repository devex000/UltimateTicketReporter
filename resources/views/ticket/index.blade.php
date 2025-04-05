<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Problem since</th>
            <th>Ticket create date</th>
            <th>Ticket update date</th>
            <th>Priority</th>
            <th>Description</th>
        </tr>
        @foreach ($tickets as $ticket)
            <tr>
                <td>{{ $ticket->id }}</td>
                <td>{{ $ticket->problem_since }}</td>
                <td>{{ $ticket->created_at }}</td>
                <td>{{ $ticket->updated_at }}</td>
                <td>{{ $ticket->priority->name }}</td>
                <td>{{ $ticket->description }}</td>
            </tr>
        @endforeach
    </table>
</body>


</html>