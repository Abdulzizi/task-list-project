<?php

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/tasks');
});

Route::get('/tasks', function () {
    $tasks = Task::latest()->get();

    return view('index', [
        'tasks' => $tasks
    ]);
})->name('task.index');

Route::get('/task/create', function () {
    return view('create');
})->name('task.create');

Route::get('/task/{task}', function (Task $task) {

    if (!$task) {
        abort(Response::HTTP_NOT_FOUND);
    }

    return view('show', ['task' => $task]);
})->name('task.show');

Route::get('/task/{task}/edit', function (Task $task) {

    if (!$task) {
        abort(Response::HTTP_NOT_FOUND);
    }

    return view('edit', ['task' => $task]);
})->name('task.edit');

Route::post('/tasks', function (TaskRequest $req) {
    // dd('Request reached successfully');

    $newTask = Task::create($req->validated());
    return redirect()->route('task.show', ['task' => $newTask->id])
        ->with('success', 'Task created successfully!');
})->name('task.store');


Route::put('/task/{task}', function (TaskRequest $req, Task $task) {
    $task->update($req->validated());
    return redirect()->route('task.show', ['task' => $task->id])
        ->with('success', 'Task updated successfully!');
})->name('task.update');

Route::delete('/task/{task}', function (Task $task) {
    $task->delete();

    return redirect()->route('task.index')
        ->with('success', 'Task deleted successfully!');
})->name('task.destroy');
