<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Free</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <!--  componente de clase-->

    @php
        $type = 'error';  // :type="info"
    @endphp

    <div class="container mx-auto py-12">
    
        <x-alert type="info"> {{--atributos--}}

            <x-slot name="title"> {{--slot datos largos--}}
                Error 
            </x-slot>
            
                    Hola Mundo {{--slot principal--}}
        </x-alert>

        <p>
            hola mundo
        </p>
    
    </div>
</body>
</html>