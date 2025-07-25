<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Agregar nuevo libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow p-4" style="width: 100%; max-width: 500px;">
        <h2 class="text-center mb-4">Agregar nuevo libro</h2>
        <form action="insert_libros.php" method="post">

            <div class="mb-3">
                <label class="form-label" for="titulo">Título</label>
                <input type="text" id="titulo" name="titulo" class="form-control" required />
            </div>

            <div class="mb-3">
                <label class="form-label" for="autor">Autor</label>
                <input type="text" id="autor" name="autor" class="form-control" required />
            </div>

            <div class="mb-3">
                <label class="form-label" for="anio">Año</label>
                <input type="number" id="anio" name="anio" class="form-control" required />
            </div>

            <div class="mb-3">
                <label class="form-label" for="categoria_id">Categoría</label>
                <select id="categoria_id" name="categoria_id" class="form-select" required>
                    <option value="">Seleccionar categoría</option>
                    <option value="1">Ficción</option>
                    <option value="2">No ficción</option>
                    <option value="3">Ciencia</option>
                    <option value="4">Historia</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label" for="stock">Stock</label>
                <input type="number" id="stock" name="stock" class="form-control" required min="0" />
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
