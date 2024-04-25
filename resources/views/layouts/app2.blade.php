<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    {{--herencia de plantilla no existen los slot - los slot son propios de los componentes
    contenido variable -> puntos de insercion 
    --}}

    @yield('content')


</body>
</html>