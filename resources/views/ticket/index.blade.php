@extends('layout.main')
@section('content')
    <table>
        <tr>
            <th>Id</th>
            <th>Problem since</th>
            <th>Ticket create date</th>
            <th>Ticket update date</th>
            <th>Priority</th>
            <th>Category</th>
            <th>Subcategory</th>
            <th>Description</th>
        </tr>
        @foreach ($tickets as $ticket)
            <tr>
                <td>{{ $ticket->id }}</td>
                <td>{{ $ticket->problem_since }}</td>
                <td>{{ $ticket->created_at }}</td>
                <td>{{ $ticket->updated_at }}</td>
                <td>{{ $ticket->priority->name }}</td>
                <td>{{ $ticket->category->name }}</td>
                <td>{{ $ticket->subcategory->name ?? '' }}</td>
                <td>{{ $ticket->description }}</td>
            </tr>
        @endforeach
    </table>
@endsection