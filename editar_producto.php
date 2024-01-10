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

    // Obtener datos del producto con el ID especificado
    $sql = "SELECT * FROM inventario WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Puedes utilizar los datos para prellenar un formulario de edición
        $producto = $row['producto'];
        $mercancia = $row['mercancia'];
        $vendido = $row['vendido'];
        $stock = $row['stock'];
    } else {
        echo "Producto no encontrado";
        exit;
    }
} else {
    echo "ID de producto no válido";
    exit;
}

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar datos del formulario
    $producto = $_POST["producto"];
    $mercancia = $_POST["mercancia"];
    $vendido = $_POST["vendido"];
    $stock = $mercancia - $vendido;

    // Actualizar datos en la base de datos
    $update_sql = "UPDATE inventario SET producto='$producto', mercancia=$mercancia, vendido=$vendido, stock=$stock WHERE id=$id";

    if ($conn->query($update_sql) === TRUE) {
        header("Location: actualizar_inventario.php");
        exit;   
    } else {
        echo "Error al actualizar el producto: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
    <!-- Estilos CSS aquí... -->
    <style>
             body {
      background-image: url('AD_2.jpg');
      background-size: cover;
      background-position: center;
      backdrop-filter: blur(5px);
      color: #fff;
      font-family: 'Arial', sans-serif;
      padding: 20px;
      text-align: center;
    }

    .container {
    width: 20%;
    margin: auto;
    margin-top: 100px;
}
input {
            width: 30%;
            padding: 10px;
            margin-bottom: 15px;
            border: 6px double #f76161;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #db5334;
            color: #0f0f0f;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2980b9;
        }
        label{
            color: yellowgreen;
        }
        h3 {
  color: red; /* Color del texto */
  font-family: 'Arial', sans-serif; /* Tipo de fuente */
  font-size: 2em; /* Tamaño de la fuente */
  font-weight: bold; /* Grosor de la fuente */
  margin-bottom: 5px; /* Espaciado inferior */
  text-align: center;
}

    </style>
</head>
<body>
    <h3>Editar Producto</h3>
    
    <form action="<?php echo $_SERVER["PHP_SELF"] . "?id=" . $id; ?>" method="post">
    <br><br>    
    <label for="producto">Producto:</label>
        <br><br>
        <input type="text" name="producto" value="<?php echo $producto; ?>" required>
<br><br>
        <label for="mercancia">Mercancía en Tienda:</label>
        <br><br>
        <input type="number" name="mercancia" value="<?php echo $mercancia; ?>" required>
<br><br>
        <label for="vendido">Vendido:</label>
        <br><br>
        <input type="number" name="vendido" value="<?php echo $vendido; ?>" required>
<br><br>
        <button type="submit"><b>Guardar cambios</b></button>
    </form>


</body>
</html>
