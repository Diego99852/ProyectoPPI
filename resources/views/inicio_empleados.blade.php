<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <form action="{{ url('/empleados/show') }}" method="GET"> 
            <div class="sub">
                <label for="id">Buscar empleado por ID:</label>
                <input class="cuadro-buscar" type="id" id="id" name="id" placeholder="12" autofocus="">
            </div><br><br>
            <label for="enviar"></label>
            <input type="submit" id="enviar" name="enviar">
            </form>
</body>
</html>