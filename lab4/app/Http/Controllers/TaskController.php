<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\StoreTask;
use App\Http\Requests\UpdatePostRequest;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with('user')->paginate(8);
        return view("tasks.index", ["tasks" => $tasks]);
    }

    public function show(string $id)
    {
        $task =  Task::find($id);
        return view("tasks.show", ["task" => $task]);
    }

    public function edit(string $id)
    {
        $task = Task::find($id);
        return view('tasks.edit', ['task' => $task, 'id' => $id]);
    }

    public function update(UpdatePostRequest $request, string $id)
    {
        $task = Task::find($id);
        $task->title = $request->input('title');
        $task->body = $request->input('body');
        $task->enabled = $request->has('enabled');
        $task->published_at = $request->input('published_at');
        $task->save();
        return redirect()->action([TaskController::class, 'index']);
    }
    public function destroy(string $id)
    {
        Task::find($id)->delete();
        return redirect()->action([TaskController::class, 'index']);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(StoreTask $request)
    {
        // $data = $request ->validated();
        // $data['user_id'] = Auth::id();
        $task = new Task();
        $task->title = $request->input('title');
        $task->body = $request->input('body');
        $task->enabled = $request->has('enabled');
        $task->published_at = $request->input('published_at');
        $task->save();
        return redirect()->action([TaskController::class, 'index']);
    }
}
