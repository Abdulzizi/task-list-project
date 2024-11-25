@extends('layout.app')

@section('web_title', 'Create Task Page')

@section('title', 'Create New Task')

@section('content')
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('task.store') }}" method="post">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" required>
        <br>
        <label for="long_description">Long Description</label>
        <textarea name="long_description" id="long_description"></textarea>
        <br>
        <input type="submit" value="Create">
    </form>
@endsection
