<?php
$conexion = new mysqli("localhost", "root", "", "registro");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];

    $sql = "INSERT INTO usuarios (nombre, correo) VALUES ('$nombre', '$correo')";

    if ($conexion->query($sql) === TRUE) {
        echo "Usuario registrado correctamente.";
    } else {
        echo "Error: " . $conexion->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro</title>
</head>
<body>
    <h2>Registrar Usuario</h2>
    <form method="POST" action="">
        Nombre: <input type="text" name="nombre" required><br><br>
        Correo: <input type="email" name="correo" required><br><br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
