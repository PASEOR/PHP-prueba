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

    <!-- for, whie  -->
    
    {{--@for ($i = 1; $i <= $count; $i++)  
    <p>
        @for ($j = 1; $j <= $i; $j++)
            *
        @endfor        
    </p>
    @endfor--}}

    @php
        $i = 1;
    @endphp
    @while ($i <= $count)
        <p>
            *
        </p>
        
        @php
            $i++;
        @endphp
        
    @endwhile
    

</body>
</html>