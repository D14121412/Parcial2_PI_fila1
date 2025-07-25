<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Agregar nuevo libro</h2>
    <form action="insert_libros.php" method="post">
        <label for="">Titulo</label>
        <input type="text" name="titulo">
        <br>
        <label for="">Autor</label>
        <input type="text" name="autor">
        <br>
        <label for="">Año</label>
        <input type="text" name="anio">
        <br>
        <label for="">Categoria</label>
        <select name="categoria_id" id="">
            <option value="1">Ficcion</option>
            <option value="2">No ficcion</option>
            <option value="3">Ciencia</option>
            <option value="4">Historia</option>
        </select>
        <br>
        <label for="">Stock</label>
        <input type="text" name="stock">
        <br>
        <button>Guardar</button>
        <a href='../index.php'>Cancelar</a>
    </form>
</body> 
</html>