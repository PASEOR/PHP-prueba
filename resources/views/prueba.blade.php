<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <h1>Usuarios</h1>

    <ul>

        @foreach ($users as $user)

            <li>
                {{ $user->name }}
            </li>
            
        @endforeach

        {{$users->links()}}

    </ul>
    
</body>
</html>