<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Free</title>

    <style>
        .color{
            color: red;
        }

        .color2{
            color: blue;
        }
    </style>

</head>
<body>
    <h1>listado de Posts</h1>

    <!-- Class -->
    
    <ul>
        @foreach ($posts as $post)
        <li @class([
            "color" => $loop->first,
            "color2" => $loop->last
        ])>
            <h2>
                {{ $post['title']}}

            </h2>
            <p>
                {{ $post["content"]}}
            </p>
        </li>
        @endforeach
        </li>
    </ul>

</body>
</html>