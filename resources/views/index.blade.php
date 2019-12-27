<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Nueva pagina</title>
</head>
<body>
<h2>{{$title}}</h2>

    <ul>
        @foreach($users as $user)
    <li>{{$user}}</li>
     @endforeach
</ul>
    cuerpo

</body>
<footer>
    pie de pagina
</footer>
</html>
