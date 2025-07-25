<?php
require '../conexion.php';

$libros = $mysqli->query("SELECT id, titulo FROM libros");
$usuarios = $mysqli->query("SELECT id, nombre_usuario FROM usuarios");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Préstamo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow p-4" style="width: 100%; max-width: 500px;">
        <h2 class="text-center mb-4">Registrar Préstamo</h2>

        <form action="insert_prestamos.php" method="POST">
            <div class="mb-3">
                <label for="libro_id" class="form-label">Libro</label>
                <select name="libro_id" class="form-select" required>
                    <option value="">Seleccionar libro</option>
                    <?php while($libro = $libros->fetch_assoc()) { ?>
                        <option value="<?php echo $libro['id']; ?>"><?php echo $libro['titulo']; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="usuario_id" class="form-label">Usuario</label>
                <select name="usuario_id" class="form-select" required>
                    <option value="">Seleccionar usuario</option>
                    <?php while($usuario = $usuarios->fetch_assoc()) { ?>
                        <option value="<?php echo $usuario['id']; ?>"><?php echo $usuario['nombre_usuario']; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="fecha_prestamo" class="form-label">Fecha de Préstamo</label>
                <input type="date" name="fecha_prestamo" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="fecha_devolucion" class="form-label">Fecha de Devolución</label>
                <input type="date" name="fecha_devolucion" class="form-control" required>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="../index.php" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
