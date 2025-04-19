@extends('layout.main')
@section('content')
<form action="{{ route('snapshot.export_gen') }}" method="post">
    @method('POST')
    @csrf
    <div>
        <p>Select models to export</p>
        <div>
            <input type="checkbox" name="category" id="category"> 
            <label for="category">Categories</label>
        </div>
        <div style="margin-left: 20px;">
            <input type="checkbox" name="subcategory" id="subcategory"> 
            <label for="subcategory">Subcategories</label>
        </div>
        <div style="margin-left: 40px;">
            <input type="checkbox" name="topic" id="topic"> 
            <label for="topic">Topics</label>
        </div>
        <div>
            <input type="checkbox" name="status" id="status"> 
            <label for="status">Statuses</label>
        </div>
        <div>
            <input type="checkbox" name="priority" id="priority"> 
            <label for="priority">Priorities</label>
        </div>
        <div>
            <input type="checkbox" name="ticket" id="ticket"> 
            <label for="ticket">Tickets</label>
        </div>
        <div>
            <input type="submit" value="Export">
        </div>
    </form>
@endsection