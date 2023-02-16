@extends('admin.base.app')

@section('title', 'Create Post')

@push('scripts')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

<script>
    var simplemde = new SimpleMDE({ element: document.getElementById("editor") });
</script>
@endpush

@section('content')
<div class='row justify-content-center'>
    <div class="col-8">
        <h3>Create Post</h3>
        <form action="{{route('posts.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="editor" name="body" class='form-control'></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</div>

