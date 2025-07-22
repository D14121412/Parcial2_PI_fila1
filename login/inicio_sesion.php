<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form action="login.php" method="POST">
        <label>Usuario:</label>
        <input type="text" name="usuario" required>
        <br>
        <label>Contraseña:</label>
        <input type="password" name="contrasenia" required>
        <br>
        <button type="submit">Ingresar</button>
        <a href="nuevo_usuario.php">Crear cuenta</a>
    </form>
</body>
</html>