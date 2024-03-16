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
                    </tr>

                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->enabled ? 'enable' : 'disable' }}</td>
                        <td>{{ $task->published_at }}</td>
                    </tr>

                </table>
                <h1></h1>
            </div>
        </div>
    </div>
@endsection