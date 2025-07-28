<?php
require 'conexion.php';

// Consultas
$consultaLibros = "SELECT * FROM libros";
$consultaPrestamos = "SELECT * FROM prestamos";
$consultaUsuarios = "SELECT * FROM usuarios";
$consultaVista = "SELECT p.id, l.titulo AS libro, u.nombre_usuario AS usuario, p.fecha_prestamo, p.fecha_devolucion
                  FROM prestamos p
                  JOIN libros l ON p.libro_id = l.id
                  JOIN usuarios u ON p.usuario_id = u.id";

// Resultados
$resultLibros = $mysqli->query($consultaLibros);
$resultPrestamos = $mysqli->query($consultaPrestamos);
$resultUsuarios = $mysqli->query($consultaUsuarios);
$resultVista = $mysqli->query($consultaVista);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">

    <h2 class="mb-4 text-primary">Listado desde Vista: Préstamos</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Libro</th>
                <th>Usuario</th>
                <th>Fecha Préstamo</th>
                <th>Fecha Devolución</th>
            </tr>
        </thead>
        <tbody>
        <?php while($fila = $resultVista->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $fila['id']; ?></td>
                <td><?php echo $fila['libro']; ?></td>
                <td><?php echo $fila['usuario']; ?></td>
                <td><?php echo $fila['fecha_prestamo']; ?></td>
                <td><?php echo $fila['fecha_devolucion']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <br><br>

    <h2 class="mb-3">Listado de Préstamos (IDs)</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Libro ID</th>
                <th>Usuario ID</th>
                <th>Fecha Préstamo</th>
                <th>Fecha Devolución</th>
                <th colspan="2">Editar</th>
            </tr>
        </thead>
        <tbody>
        <?php while($prestamos = mysqli_fetch_array($resultPrestamos)) { ?>
            <tr>
                <td><?php echo $prestamos[1]; ?></td>
                <td><?php echo $prestamos[2]; ?></td>
                <td><?php echo $prestamos[3]; ?></td>
                <td><?php echo $prestamos[4]; ?></td>
                <td><a href="modificar/modificar_prestamos.php?id=<?php echo $prestamos['id']; ?>" class="btn btn-warning btn-sm">Modificar</a></td>
                <td><a href="eliminar/delete.php?id=<?php echo $prestamos['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <a href="insertar/nuevo_prestamo.php" class="btn btn-success mb-4">Agregar nuevo préstamo</a>
    <br><br>

    <h2 class="mb-3">Listado de Usuarios</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
        <?php while($usuarios = mysqli_fetch_array($resultUsuarios)) { ?>
            <tr>
                <td><?php echo $usuarios[0]; ?></td>
                <td><?php echo $usuarios[1]; ?></td>
                <td><a href="eliminar/delete.php?id=<?php echo $usuarios['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <br><br>

    <h2 class="mb-3">Listado de Libros</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Año</th>
                <th>Categoría</th>
                <th>Stock</th>
                <th colspan="2">Editar</th>
            </tr>
        </thead>
        <tbody>
        <?php while($libros = mysqli_fetch_array($resultLibros)) { ?>
            <tr>
                <td><?php echo $libros[0]; ?></td>
                <td><?php echo $libros[1]; ?></td>
                <td><?php echo $libros[2]; ?></td>
                <td><?php echo $libros[3]; ?></td>
                <td><?php echo $libros[4]; ?></td>
                <td><?php echo $libros[5]; ?></td>
                <td><a href="modificar/modificar_libros.php?id=<?php echo $libros['id']; ?>" class="btn btn-warning btn-sm">Modificar</a></td>
                <td><a href="eliminar/delete.php?id=<?php echo $libros['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <a href="insertar/nuevo_libro.php" class="btn btn-success mb-3">Agregar nuevo libro</a>
    <br>
    <a href="login/inicio_sesion.php" class="btn btn-secondary">Cerrar sesión</a>
    <br>

</div>
</body>
</html>
