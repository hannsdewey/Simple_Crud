<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>
<body>
    <h1>View Post</h1>
    <br>

    <label for="title"><h1>Title: </h1></label>
    <p>{{ $post->title }}</p>
    <label for="body"><h1>Body: </h1></label>
    <p>{{ $post->body }}</p>

   <a href="{{ route('post.index') }}">Back to All Posts</a>
</body>
</html>
