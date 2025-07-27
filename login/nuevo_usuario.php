<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>

      <!-- Bootstrap para estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <h2 class="text-center mb-4">Registrarse</h2>

        <!-- Formulario que envía los datos a singup.php por POST -->
        <form action="singup.php" method="POST">

             <!-- Campo para el nombre de usuario -->
            <div class="mb-3">
                <label for="usuario" class="form-label">Nombre de usuario</label>
                <input type="text" name="nombre_usuario" class="form-control" id="usuario" required>
            </div>

            <!-- Campo para la contraseña -->
            <div class="mb-3">
                <label for="contraseña" class="form-label">Contraseña</label>
                <input type="password" name="contrasenia" class="form-control" id="contraseña" required>
            </div>
            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-success">Registrar</button>
            </div>

            <!-- Enlace para redirigir al login si ya tiene cuenta -->
            <div class="text-center">
                <a href="login.php">¿Ya tenés cuenta? Iniciar sesión</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
