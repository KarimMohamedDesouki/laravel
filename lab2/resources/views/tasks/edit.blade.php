<!-- form for editing -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    @include('navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <form method="POST" action="{{ route('tasks.update',$id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" value="{{$task->title}}" id="title" name="title" required>
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Body</label>
                        <textarea class="form-control" value="{{$task->body}}" id="body" name="body" rows="5" required></textarea>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" value="{{$task->enabled}}" type="checkbox" id="enabled" name="enabled" value="1">
                        <label class="form-check-label" for="enabled">Enabled</label>
                    </div>

                    <div class="mb-3">
                        <label for="published_at" class="form-label">Published At</label>
                        <input type="datetime-local" value="{{$task->published_at}}" class="form-control" id="published_at" name="published_at">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>