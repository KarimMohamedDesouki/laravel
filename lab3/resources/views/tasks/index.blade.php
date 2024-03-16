@extends('app')
@section('title', 'Create New Post')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Enabled</th>
                        <th>Published At</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->enabled ? 'enable' : 'disable' }}</td>
                        <td>{{ $task->published_at }}</td>
                        <td>
                        <a href="{{(route('tasks.edit',$task->id))}}">edit</a>
                        <a href="{{(route('tasks.show',$task->id))}}">show</a>
                        <form action="{{ route('tasks.destroy',$task->id) }}" method="POST"> 
                        @csrf
                        @method("DELETE")
                            <button type="submit">delete</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @endsection