use Illuminate\Pagination\Paginator;
@extends('app')
@section('title', 'User')

@section('body')
    <div class="container mt-5">
        <h1 class="mb-4">User List</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Post Count</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->posts_count == 0 ? 'no posts' : $user->posts_count }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex  justify-content-end">
                {{$users->links()}}
            </div>
    </div>
@endsection
