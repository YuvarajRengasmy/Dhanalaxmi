@extends('layout')

@section('content')
    <h1>Create New Post</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>Title:</label>
        <input type="text" name="title">
        <label>Content:</label>
        <textarea name="content"></textarea>
        <button type="submit">Save</button>
    </form>
@endsection
