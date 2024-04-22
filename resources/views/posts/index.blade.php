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

    <!-- directiva de blade condicionales, if -->

    @if(false)
        <p>Esto se va a mostrar si la condicion es verdadera</p>

    @else

        <p>Esto se va a mostrar si la condicion es falsa</p>

    @endif

    <!-- directiva de blade condicionales unless contraria a if -->
    @unless (true)
        <p>le has pasado el valor de false a la directiva unless </p>
    @endunless

    <!-- directiva de blade condicionales isset -->
    @isset($record)
        <p>la variable $record esta definida y no es null</p>    
        
    @else
        <p>la variable no existe o no tiene un valor asignado</p>

    @endisset

    <!-- directiva de blade condicionales empty --> 
    @empty($valor_null)        
        <p>la variable no existe o no tiene un valor asignado </p>
        
    @endempty

</body>
</html>