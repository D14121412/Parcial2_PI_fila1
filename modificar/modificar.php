 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $id = $_GET['id'];

    require '../conexion.php';

    $consulta = "SELECT * FROM libros WHERE id = $id";

    $result = $mysqli->query($consulta);

    $datos = mysqli_fetch_assoc($result);

    ?>
    <h2>Modificar</h2>
    <form action="update.php" method="post">
        <label for="">Titulo</label>
        <input type="text" name="titulo" value = "<?php echo $datos['titulo']; ?>">
        <br>
        <label for="">Autor</label>
        <input type="text" name="autor" value = "<?php echo $datos['autor']; ?>">
        <br>
        <label for="">Año</label>
        <input type="text" name="anio" value = "<?php echo $datos['anio']; ?>">
        <br>
        <label for="">Categoria</label>
        <select name="categoria_id" id="" value = "<?php echo $datos['categoria_id']; ?>">
            <option value="1">Ficcion</option>
            <option value="2">No ficcion</option>
            <option value="3">Ciencia</option>
            <option value="4">Historia</option>
        </select>
        <br>
        <label for="">Stock</label>
        <input type="text" name="stock" value = "<?php echo $datos['stock']; ?>">
        <br>
        <button>Guardar</button>
        <button><a href='../index.php'>Cancelar</a></button>
        <input type="hidden" name ="id" value = "<?php echo $datos['id']; ?>">
</body>
</html>