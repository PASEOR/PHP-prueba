<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Free</title>
</head>
<body>
    <h1>listado de Posts</h1>

    <!-- iterar el array, recuperar de la base de datos  -->
    <ul>
    @forelse ($posts as $item)
        <li>
            <h2>
                {{$item['title']}}
            </h2>

            <p>
                {{$item['content']}}
            </p>
        </li>
    @empty
        <li>No hay posts para mostrar</li>
    @endforelse
    </ul>

</body>
</html>