<?php

require '../conexion.php';

$libros = $mysqli->query("SELECT id, titulo FROM libros");
$usuarios = $mysqli->query("SELECT id,nombre_usuario FROM usuarios");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Registrar prestamo</h2>
    <form action="insert_prestamos.php" method="post">
        <label for="libro_id">Libro</label>
        <select name="libro_id">
            <option value="">Seleccionar libro</option>
            <?php while($libro = $libros->fetch_assoc()) {?>
                <option value="<?php echo $libro['id']; ?>"><?php echo $libro['titulo']; ?></option>
            <?php } ?>
        </select>
        <br>
        <label for="usuario_id">Usuario:</label>
        <select name="usuario_id" id="">
            <option value="">Seleccionar usuario</option>
            <?php while($usuario = $usuarios->fetch_assoc()) { ?>
                <option value="<?php echo $usuario['id']; ?>"><?php echo $usuario['nombre_usuario']; ?></option>
            <?php } ?>
        </select>
        <br>
        <label for="fecha_prestamo">Fecha de prestamo:</label>
        <input type="date" name="fecha_prestamo" id="">
        <br>
        <label for="fecha_devolucion">Fecha de devolucion:</label>
        <input type="date" name="fecha_devolucion" id="">
        <br>
        <button type="submit">Guardar</button>
        <a href="../index.php">Cancelar</a>
    </form>
    
</body>
</html>