<?php

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

Route::get('/task/{id}', function ($id) {
    $task = Task::findOrFail($id);

    if (!$task) {
        abort(Response::HTTP_NOT_FOUND);
    }

    return view('show', ['task' => $task]);
})->name('task.show');

Route::post('/task/create', function (Request $req) {
    // dd($req->all());

    $data = $req->validate([
        'title' => 'required|string|max:255|min:3',
        'description' => 'required|string|min:3',
        'long_description' => 'nullable|string',
    ]);

    $newTask = new Task();
    $newTask->title = $data['title'];
    $newTask->description = $data['description'];
    $newTask->long_description = $data['long_description'];
    $newTask->save();

    return redirect()->route('task.show', ['id' => $newTask->id]);
})->name('task.store');
