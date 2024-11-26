@extends('layout.app')

@section('web_title', 'Create Task Page')

@section('title', 'Create New Task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection

@section('content')
    <form action="{{ route('task.store') }}" method="post">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}" required>
        @error('title')
            <p class="error-message">{{ $message }}</p>
        @enderror
        <br>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" value="{{ old('description') }}" required>

        @error('description')
            <p class="error-message">{{ $message }}</p>
        @enderror
        <br>
        <label for="long_description">Long Description</label>
        <textarea name="long_description" id="long_description">{{ old('long_description') }}</textarea>
        @error('long_description')
            <p class="error-message">{{ $message }}</p>
        @enderror
        <br>
        <input type="submit" value="Create">
    </form>
@endsection
