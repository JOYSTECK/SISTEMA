<?php
// Conectar a la base de datos (ajusta según tu configuración)
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "productos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Verificar si se ha enviado un ID válido por la URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar el producto con el ID especificado
    $sql = "DELETE FROM inventario WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // Redirigir a la página de lista de productos después de la eliminación
        header("Location: actualizar_inventario.php");
        exit;
    } else {
        echo "Error al eliminar el producto: " . $conn->error;
        exit;
    }
} else {
    echo "ID de producto no válido";
    exit;
}


?>
