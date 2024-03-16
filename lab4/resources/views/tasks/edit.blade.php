@extends('app')
@section('title', 'Create New Post')

@section('body')
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
                        <input class="form-check-input" value="{{$task->enabled}}" type="checkbox" id="enabled" name="enabled">
                        <label class="form-check-label" for="enabled">Enabled</label>
                    </div>

                    <div class="mb-3">
                        <label for="published_at" class="form-label">Published At</label>
                        <input type="datetime-local" value="{{$task->published_at}}" class="form-control" id="published_at" name="published_at">
                    </div>
                    <button type="submit">save</button>

                </form>
            </div>
        </div>
    </div>
@endsection