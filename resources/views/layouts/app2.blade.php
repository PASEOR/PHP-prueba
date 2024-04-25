<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @stack('meta')

    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    {{--directiva stack     
        diferencia de stack y yield, stack permite apilar el contenido a traves de los push 
        nota: la herencia es para laravel de7 para abajo conteiner es un componente de laravel 8 y superior  
    --}}
   

    @yield('content')


</body>
</html>