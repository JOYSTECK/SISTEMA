<?php
// Procesar el formulario de añadir producto
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];

    // Conexión a la base de datos (reemplaza con tus propios detalles)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "productos";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Insertar el nuevo producto en la base de datos
    $sql = "INSERT INTO productos (nombre, precio) VALUES ('$nombre', '$precio')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Producto añadido con éxito.";
    } else {
        echo "Error al añadir el producto: " . $conn->error;
    }

    $conn->close();
}

// Redirigir a la página principal
header("Location: P.php");
exit();
?>
