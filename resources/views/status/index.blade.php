@extends('layout.main')
@section('content')
    <div>
        @foreach ($statuses as $status)
            <div>
                @if($status->new)
                {!! "&#x2606;" !!} 
                @endif
                <form action="{{ route('status.update', ['status' => $status]) }}" method="post" style="display: inline">
                    <input type="text" name="name" value="{{ $status->name }}">
                    @method('PUT')
                    @csrf
                    <button type="submit">Update</button>
                </form>
                <form action="{{ route('status.delete', ['status' => $status]) }}" method="post" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                @if(!$status->new)
                <form action="{{ route('status.set_as_new', ['status' => $status]) }}" method="post" style="display: inline">
                    @csrf
                    @method('PUT')
                    <button type="submit">Set as new &#x2606;</button>
                </form>
                @endif
            </div>
        @endforeach
    </div>

    <form action="{{ route('status.store') }}" method="post">
        @method('POST')
        @csrf
        <div>
            <label for="name">Name</label>
            <br>
            <input type="text" name="name" id="name">
            <input type="hidden" name="new" value="0">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection