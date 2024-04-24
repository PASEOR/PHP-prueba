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
    <!--  componentes anonimos solo componente de vista-->
    <x-container width="7xl">
    
        <x-alert class="mb-32" type="danger">   <!--atributos-->

            <x-slot name="title"> {{--slot datos largos--}}
                Titulo de prueba 
            </x-slot>

            change a few things up and try submitting again. {{--slot principal--}}
        </x-alert>

        <p>
            hola mundos
        </p>
    
    </x-container>
</body>

</html>