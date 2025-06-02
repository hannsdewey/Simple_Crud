<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Posts</title>
</head>
<body>
    <h1>All Posts</h1>

    <a href="{{ route('post.create') }}">Create New Post</a>

    @if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
    @endif

    <ul>
        @foreach($posts as $post)
        <li>
            <strong>{{ $post->title }}</strong><br>
             <a href="{{ route('post.show', $post->id) }}">View</a> |
            <a href="{{ route('post.edit', $post->id) }}">Edit</a> |
                <form action="{{ url('/post/' . $post->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
            @endforeach
    </ul>
</body>
</html>
