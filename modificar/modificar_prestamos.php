<?php
// Obtener el ID del préstamo a modificar desde la URL (método GET)
$id = $_GET['id'];

// Conexión a la base de datos
require '../conexion.php';

// Obtener la lista de libros disponibles
$libros = $mysqli->query("SELECT id, titulo FROM libros");

// Obtener la lista de usuarios registrados
$usuarios = $mysqli->query("SELECT id, nombre_usuario FROM usuarios");


// Consultar los datos actuales del préstamo que se quiere modificar
$consulta = "SELECT * FROM prestamos WHERE id = $id";
$result = $mysqli->query($consulta);

// Guardar los datos del préstamo en una variable asociativa
$datos = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Préstamo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Cargar Bootstrap desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow p-4" style="width: 100%; max-width: 500px;">
        <h2 class="text-center mb-4">Modificar Préstamo</h2>
          <!-- Formulario para modificar el préstamo -->
        <form action="update_prestamo.php" method="POST">
            
            <!-- Selector de libro -->
            <div class="mb-3">
                <label for="libro_id" class="form-label">Libro</label>
                <select name="libro_id" class="form-select" required>
                    <option value="">Seleccionar libro</option>
                    <?php while($libro = $libros->fetch_assoc()) { ?>
                        <option value="<?php echo $libro['id']; ?>" 
                            <?php if($libro['id'] == $datos['libro_id']) echo 'selected'; ?>>
                            <?php echo $libro['titulo']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <!-- Selector de usuario -->
            <div class="mb-3">
                <label for="usuario_id" class="form-label">Usuario</label>
                <select name="usuario_id" class="form-select" required>
                    <option value="">Seleccionar usuario</option>
                    <?php while($usuario = $usuarios->fetch_assoc()) { ?>
                        <option value="<?php echo $usuario['id']; ?>" 
                            <?php if($usuario['id'] == $datos['usuario_id']) echo 'selected'; ?>>
                            <?php echo $usuario['nombre_usuario']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            
            <!-- Campo para la fecha del préstamo -->
            <div class="mb-3">
                <label for="fecha_prestamo" class="form-label">Fecha de Préstamo</label>
                <input type="date" name="fecha_prestamo" class="form-control" value="<?php echo $datos['fecha_prestamo']; ?>" required>
            </div>
            
            <!-- Campo para la fecha de devolución -->
            <div class="mb-3">
                <label for="fecha_devolucion" class="form-label">Fecha de Devolución</label>
                <input type="date" name="fecha_devolucion" class="form-control" value="<?php echo $datos['fecha_devolucion']; ?>" required>
            </div>

            <!-- Campo oculto para enviar el ID del préstamo -->
            <input type="hidden" name="id" value="<?php echo $datos['id']; ?>">

            <!-- Botones para guardar o cancelar -->
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                <a href="../index.php" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
