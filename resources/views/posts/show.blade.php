<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHOW</title>
</head>
<body>
    <main>
        <h1>{{$post['title']}}</h1>
        <p>{{$post['subtitle']}}</p>
        <p>{{$post['content']}}</p>
        <p><a href="{{$post['url']}}"></a></p>

        <a href="{{route('posts.index')}}">Torna alla home</a>
    </main>
</body>
</html>