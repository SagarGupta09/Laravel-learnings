<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Post</h2>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary mb-3">Back</a>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="Name" class="form-control" value="{{ old('Name', $post->Name) }}">
        </div>

        <div class="mb-3">
            <label>Role</label>
            <textarea name="Role" class="form-control">{{ old('description', $post->Role) }}</textarea>
        </div>

        <div class="mb-3">
            <label>Current Image</label><br>
            @if($post->image)
                <img src="{{ asset('images/'.$post->image) }}" width="150" height="150" class="mb-2">
            @else
                N/A
            @endif
        </div>

        <div class="mb-3">
            <label>Change Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
