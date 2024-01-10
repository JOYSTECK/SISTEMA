<?php
// Verificar si se han enviado datos por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar datos del formulario
    $producto = $_POST["producto"];
    $mercancia = $_POST["mercancia"];
    $vendido = $_POST["vendido"];

    // Calcular el stock
    $stock = $mercancia - $vendido;

    // Conectar a la base de datos (puedes personalizar esto según tu configuración)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "productos";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    // Insertar datos en la tabla (puedes personalizar esto según tu esquema de base de datos)
    $sql = "INSERT INTO inventario (producto, mercancia, vendido, stock) VALUES ('$producto', $mercancia, $vendido, $stock)";

    if ($conn->query($sql) === TRUE) {
        header("Location: actualizar_inventario.php");
    } else {
        echo "Error al registrar datos: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
