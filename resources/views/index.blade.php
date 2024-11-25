@extends('layout.app')

@section('web_title', 'Home Page')

@section('title', 'Tasks List')

@section('content')
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('task.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
        <p>no tasks</p>
    @endforelse
@endsection
