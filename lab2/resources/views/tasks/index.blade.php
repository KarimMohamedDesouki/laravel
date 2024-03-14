<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    @include("navbar")
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
</body>

</html>