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

    <!-- loop -->
    
    <ul>

        @foreach ($posts as $post)
        <li>
            <h2>
                {{ $post['title']}}

                (Indice restantes: {{$loop->remaining}})

            </h2>
            <p>
                {{ $post["content"]}}
            </p>
            <ul>
                @foreach ($post["tags"] as $tag)
                    <li>{{ $tag }}
                        
                        @if ($loop->parent->first)
                            (este es el primer tag del post)
                        @endif
                    </li>
                @endforeach
            </ul>

        @endforeach
        </li>
    </ul>
</body>
</html>