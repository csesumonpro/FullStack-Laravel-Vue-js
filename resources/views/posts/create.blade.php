<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/post-create" method="post">
    @csrf
        <input type="text" name="title" placeholder="Title">
        <textarea name="description"></textarea>
        <input type="submit" value="Submit">
    </form>
</body>
</html>