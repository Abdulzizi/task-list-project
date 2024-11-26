@extends('layout.app')

@section('web_title', $task->title)

@section('title', $task->title)

@section('content')
    <p>{{ $task->description }}</p>

    @if ($task->long_description)
        <p>{{ $task->long_description }}</p>
    @endif

    <div>
        <form method="POST" action="{{ route('task.destroy', ['task' => $task->id]) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endsection
