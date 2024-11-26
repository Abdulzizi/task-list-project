@extends('layout.app')

@section('web_title', 'Home Page')

@section('title', 'Tasks List')

@section('content')

    <!-- Navigation -->
    <nav class="mb-4">
        <a href="{{ route('task.create') }}" class="link">
            Add Task
        </a>
    </nav>

    <!-- Task List -->
    @forelse ($tasks as $task)
        <div class="mb-2">
            <a href="{{ route('task.show', ['task' => $task->id]) }}" @class([
                'text-gray-500 line-through' => $task->is_completed,
                'text-black hover:underline' => !$task->is_completed,
            ])>
                {{ $task->title }}
            </a>
        </div>
    @empty
        <p class="text-gray-500 italic">No tasks available</p>
    @endforelse

    <!-- Pagination -->
    @if ($tasks->count())
        <nav class="mt-4">
            {{ $tasks->links() }}
        </nav>
    @endif

@endsection
