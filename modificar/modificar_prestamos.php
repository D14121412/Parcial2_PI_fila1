<?php
$id = $_GET['id'];

require '../conexion.php';

$libros = $mysqli->query("SELECT id, titulo FROM libros");
$usuarios = $mysqli->query("SELECT id,nombre_usuario FROM usuarios");
$consulta = "SELECT * FROM prestamos WHERE id = $id";

$result = $mysqli->query($consulta);

$datos = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Modificar registro</h2>
    <form action="update_prestamo.php" method="post">
        <label for="libro_id">Libro</label>
        <select name="libro_id" value = "<?php echo $datos['libro_id'] ?>">
            <option value="">Seleccionar libro</option>
            <?php while($libro = $libros->fetch_assoc()) {?>
                <option value="<?php echo $libro['id']; ?>"><?php echo $libro['titulo']; ?></option>
            <?php } ?>
        </select>
        <br>
        <label for="usuario_id">Usuario:</label>
        <select name="usuario_id" value = "<?php echo $datos['usuario_id']; ?>">
            <option value="">Seleccionar usuario</option>
            <?php while($usuario = $usuarios->fetch_assoc()) { ?>
                <option value="<?php echo $usuario['id']; ?>"><?php echo $usuario['nombre_usuario']; ?></option>
            <?php } ?>
        </select>
        <br>
        <label for="fecha_prestamo">Fecha de prestamo:</label>
        <input type="date" name="fecha_prestamo" value="<?php echo $datos['fecha_prestamo']; ?>">
        <br>
        <label for="fecha_devolucion">Fecha de devolucion:</label>
        <input type="date" name="fecha_devolucion" value="<?php echo $datos['fecha_devolucion']; ?>">
        <br>
        <button type="submit">Guardar</button>
        <a href="../index.php">Cancelar</a>
          <input type="hidden" name ="id" value = "<?php echo $datos['id']; ?>">
    </form>
    
</body>
</html>