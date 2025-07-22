<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
</head>
<body>
    <h2>Registrarse</h2>
    <form action="singup.php" method="POST">
        <label for="usuario">Nombre de usuario:</label>
        <input type="text" name="nombre_usuario" required>
        <br><br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" name="contrasenia" required>
        <br><br>
        <button>Registrar</button>
        <br>
        <a href="login.php">¿Ya tienes cuenta? Iniciar sesión</a>
    </form>
</body>
</html>