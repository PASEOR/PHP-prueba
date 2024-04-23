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

    <!-- continue y break -->
    
    {{--
    @for ($i = 0; $i < $count; $i++)
        <!--@if ($i % 3 == 0)
            @continue
        @endif--}
        @continue($i % 3 == 0)

        <p>{{ $i }}</p>
        
    @endfor--}}

    @for ($i = 0; $i < $count; $i++)

        @break($i == 8)

        <p>{{ $i }}</p>
    
    @endfor
    
    <p>
        <b>
            saliste del bucle
        </b>
    </p>

</body>
</html>