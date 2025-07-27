<?php
// Obtener el ID del libro desde la URL con GET
$id = $_GET['id'];

// Conexión a la base de datos
require '../conexion.php';

// Consulta para obtener los datos del libro a modificar
$consulta = "SELECT * FROM libros WHERE id = $id";
$result = $mysqli->query($consulta);

// Guardar los datos del libro en un array asociativo
$datos = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Libro</title>

    <!-- Bootstrap para estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow p-4" style="width: 100%; max-width: 500px;">
        <h2 class="text-center mb-4">Modificar Libro</h2>

        <!-- Formulario que envía los datos modificados a update_libro.php -->
        <form action="update_libro.php" method="POST">

            <!-- Campo para editar el título -->
            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="titulo" class="form-control" value="<?php echo $datos['titulo']; ?>" required>
            </div>

            <!-- Campo para editar el autor -->
            <div class="mb-3">
                <label class="form-label">Autor</label>
                <input type="text" name="autor" class="form-control" value="<?php echo $datos['autor']; ?>" required>
            </div>
            
             <!-- Campo para editar el año -->
            <div class="mb-3">
                <label class="form-label">Año</label>
                <input type="number" name="anio" class="form-control" value="<?php echo $datos['anio']; ?>" required>
            </div>

            <!-- Selector de categoría del libro -->
            <div class="mb-3">
                <label class="form-label">Categoría</label>
                <select name="categoria_id" class="form-select" required>
                    <option value="1" <?php if($datos['categoria_id'] == 1) echo 'selected'; ?>>Ficción</option>
                    <option value="2" <?php if($datos['categoria_id'] == 2) echo 'selected'; ?>>No Ficción</option>
                    <option value="3" <?php if($datos['categoria_id'] == 3) echo 'selected'; ?>>Ciencia</option>
                    <option value="4" <?php if($datos['categoria_id'] == 4) echo 'selected'; ?>>Historia</option>
                </select>
            </div>

            <!-- Campo para modificar el stock disponible -->
            <div class="mb-3">
                <label class="form-label">Stock</label>
                <input type="number" name="stock" class="form-control" value="<?php echo $datos['stock']; ?>" required>
            </div>

            <!-- Campo oculto para enviar el ID del libro -->
            <input type="hidden" name="id" value="<?php echo $datos['id']; ?>">

            <!-- Botones para guardar o cancelar -->
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="../index.php" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
