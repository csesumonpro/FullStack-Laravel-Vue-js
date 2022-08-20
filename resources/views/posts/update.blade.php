<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/post-update" method="post">
    @csrf
        <input type="text" name="title" placeholder="Title" value="{{$post->title}}">
        <textarea name="description">{{$post->description}}</textarea>
        <input type="hidden" name="id" value="{{$post->id}}">
        <input type="submit" value="Submit">
    </form>
</body>
</html>