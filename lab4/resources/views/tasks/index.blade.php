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
                    <th>User</th>
                    <th>Actions</th>
                </tr>
                @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->enabled ? 'enable' : 'disable' }}</td>
                    <td>{{ $task->published_at }}</td>
                    <td>{{ $task->User->name }}</td>
                    <td>
                        @if($task->user_id == Auth::id())
                        <a href="{{(route('tasks.edit',$task->id))}}">edit</a>
                        <a href="{{(route('tasks.show',$task->id))}}">show</a>
                        <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit">delete</button>
                        </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </table>
            <div class="d-flex  justify-content-end">
                {{$tasks->links()}}
            </div>
        </div>
    </div>
</div>
@endsection