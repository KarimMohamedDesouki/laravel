@extends('app')
@section('title', 'Create New Post')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <form method="POST" action="{{ route('tasks.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" class="form-control" value="{{old("title")}}" id="title" name="title">
                    </div>
                    @error('title')
                    <p>{{$message}}</p>
                    @enderror
                    <div class="mb-3">
                        <label for="body" class="form-label">Body:</label>
                        <input type="text" class="form-control" value="{{old("body")}}" id="body" name="body" >
                    </div>
                    @error('body')
                    <p>{{$message}}</p>
                    @enderror
                    <div class="form-check mb-3">
                                <input class="form-check-input" value="{{ old("enabled") }}" type="checkbox" id="enabled"
                                    name="enabled">
                                <label class="form-check-label" for="enabled">Enabled</label>
                            </div>
                    @error('enabled')
                    <p>{{$message}}</p>
                    @enderror
                    <div class="mb-3">
                        <label for="published_at" class="form-label">Published_at:</label>
                        <input type="date" class="form-control" value="{{old("published_at")}}" id="published_at" name="published_at" >
                    </div>
                    @error('published_at')
                    <p>{{$message}}</p>
                    @enderror
                    <button type="submit">save</button>
                </form>
            </div>
        </div>
    </div>


@endsection