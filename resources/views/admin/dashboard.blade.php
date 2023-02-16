@extends('admin.base.app')

@section('title', 'Admin Page')

@section('content')
    <h3>Hello, {{Auth::user()->name}}</h3>
    <p>Here you can manage your blog posts.</p>

    <h4>Recent Posts</h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                    <td>
                        <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">Edit</a>
                        <form action="{{route('posts.destroy', $post->id)}}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

@endsection
