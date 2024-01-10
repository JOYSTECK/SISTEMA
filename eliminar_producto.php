<?php
// Eliminar un producto según el ID proporcionado en la URL
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Conexión a la base de datos (reemplaza con tus propios detalles)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "productos";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Eliminar el producto de la base de datos
    $sql = "DELETE FROM productos WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Producto eliminado con éxito.";
    } else {
        echo "Error al eliminar el producto: " . $conn->error;
    }

    $conn->close();
}

// Redirigir a la página principal
header("Location: P.php");
exit();
?>
