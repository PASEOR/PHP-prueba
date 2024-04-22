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

    <script>
        //let Posts = {!! json_encode($posts) !!};
        let Posts = @json($posts);
        console.log(Posts);
    </script>

</body>
</html>