@extends('layout.main')
@section('content')
    <form action="{{ route('snapshot.import_gen') }}" method="post" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <div>
            <label for="file">File</label>
            <br>
            <input type="file" name="file" id="file">
        </div>
        <div>
            <button type="submit">Import</button>
        </div>
    </form>
@endsection
