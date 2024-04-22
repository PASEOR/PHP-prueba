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

    <!--entrono local y de produccion -->
    <!-- .env cambiar el entorno de local a production-->
    @env('local')
        <p>Estamos en el entorno local</p>
    @endenv

    <!--env('production')
        <p>Estamos en el entorno de produccion</p>
    endenv -->

    @production
        <p>Estamos en el entorno de produccion</p>
    @endproduction

</body>
</html>