<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Posts</title>
</head>
<body>
    <h1>Lista de Posts</h1>
    <ul>
        @foreach($posts as $post)
            <li>{{ $post->titulo }}</li>
        @endforeach
    </ul>
</body>
</html>
