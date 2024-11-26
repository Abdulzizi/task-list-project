@extends('layout.app')

@section('web_title', 'Create Task Page')

@section('title', isset($task) ? 'Edit Task' : 'New Task')


@section('content')
    <form method="POST" action="{{ isset($task) ? route('task.update', ['task' => $task->id]) : route('task.store') }}">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div class="space-y-4">
            <div class="mb-4">
                <label for="title" class="block">
                    Title
                </label>
                <input type="text" name="title" id="title" @class(['border-red-500 text-red-500' => $errors->has('title')])
                    value="{{ $task->title ?? old('title') }}" />
                @error('title')
                    <p class="error-message text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block">
                    Description
                </label>
                <textarea name="description" id="description" @class(['border-red-500 text-red-500' => $errors->has('description')]) rows="5">{{ $task->description ?? old('description') }}</textarea>
                @error('description')
                    <p class="error-message text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="long_description" class="block">
                    Long Description
                </label>
                <textarea name="long_description" id="long_description" @class([
                    'border-red-500 text-red-500' => $errors->has('long_description'),
                ]) rows="10">{{ $task->long_description ?? old('long_description') }}</textarea>
                @error('long_description')
                    <p class="error-message text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center gap-2">
                <button type="submit" class="btn">
                    @isset($task)
                        Update Task
                    @else
                        Add Task
                    @endisset
                </button>
                <a href="{{ route('task.index') }}" class="link">Cancel</a>
            </div>
        </div>
    </form>
@endsection
