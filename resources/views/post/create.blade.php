<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Posts</title>
</head>
<body>
    <h1>Create a New Post</h1>
    <!----Show Erros----->
    @if($errors->any())
    <div style="color:red">
        <ul>
            @foreach ($errors->all() as $error)
            <li> {{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!---form---->
    <form action="{{ url('/post') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ old ('title')}}" required>
        </div>
        <div>
            <label for="body">Body:</label>
            <textarea name="body">{{ old('body') }}</textarea>
        </div>
        <button type="submit">Create Post</button>
    </form>
    <br>
    <a href="{{ url('/') }}">Back to All Posts</a>
</body>
</html>
