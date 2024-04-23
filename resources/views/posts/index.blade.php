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

    <!-- especial -->

    <form action="">

        <div>
            <label for="">
                <input type="checkbox" name="paises[]" id= "">
                peru
            </label>
            <label for="">
                <input type="checkbox" @checked(true) name="paises[]" id= "">
                chile
            </label>
            <label for="">
                <input type="checkbox" name="paises[]" id= "">
                argentina
            </label>
            <label for="">
                <input type="checkbox" name="paises[]" id= "">
                brasil
            </label>

        </div>

        <div>
            <select name="ciudad" >
                <option value="1">
                    lima
                </option>
                <option value="2">
                    santiago    
                </option>
                <option value="3">
                    buenos aires
                </option>
                <option value="4" @selected(true)>
                    brasilia
                </option>
            </select>
        </div>

        <div>
            <input type="text" @readonly(true)>
        </div>

        <div>
            <input type="text" @required(true)>
        </div>
        <button @disabled(true)>
            Enviar
        </button>

    </form>
    
    

</body>
</html>