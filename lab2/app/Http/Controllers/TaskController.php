<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view("tasks.index",["tasks"=>$tasks]);
    }

    public function show(string $id){
        $task =  Task::find($id);
        return view("tasks.show",["task"=>$task]);
    }

    public function edit(string $id){
        $task = Task::find($id);
        return view('tasks.edit', ['task'=> $task , 'id'=> $id]);
    }

    public function update(Request $request,string $id){
        //excute
    }
    public function destroy(string $id){
        Task::find($id)->delete();
        return redirect()->action([TaskController::class, 'index']);
    }
}
