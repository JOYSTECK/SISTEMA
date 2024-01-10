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

// Consulta SQL para obtener todos los productos
$sql = "SELECT id, producto, mercancia, vendido, stock FROM inventario";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Productos</title>
    <style>
        body {
        background-image: url('AD_2.jpg');
      background-size: cover;
      background-position: center;
      backdrop-filter: blur(10px);
      color: #fff;
      font-family: 'Arial', sans-serif;
      padding: 20px;
}
    table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 2px double white;
}

th, td {
    padding: 12px;
    text-align: center;
    color: white;
}

th {
    background-color: red;
    color: white;
}
        .editar, .eliminar {
            padding: 6px 10px;
            text-decoration: none;
            display: inline-block;
            margin-right: 5px;
            cursor: pointer;
        }
        .editar {
            background-color: #4CAF50;
            color: white;
        }
        .eliminar {
            background-color: #f44336;
            color: white;
        }
        h3 {
  color: red; /* Color del texto */
  font-family: 'Arial', sans-serif; /* Tipo de fuente */
  font-size: 2em; /* Tamaño de la fuente */
  font-weight: bold; /* Grosor de la fuente */
  margin-bottom: 5px; /* Espaciado inferior */
  text-align: center;
}
label {
    font-weight: bold;
}

input {
    padding: 8px;
    margin-right: 10px;
}

button {
    padding: 8px 16px;
    background-color: red;
    color: black;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.button:hover {
    background-color: yellow;
}
    </style>
</head>
<body>
        <br><br><br>
        <a href="formulario_inventario.html"><h3>Ir al formulario </h3></a>
        <br><br><br>
        <form action="buscar.php" method="post">
            <label for="busqueda">Buscar:</label>
            <input type="text" id="busqueda" name="busqueda" required>
            <button type="submit">Buscar</button>
        </form>
    <h3>Lista de Productos</h3>

    <table>
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Mercancía en Tienda</th>
            <th>Vendido</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["producto"] . "</td>";
                echo "<td>" . $row["mercancia"] . "</td>";
                echo "<td>" . $row["vendido"] . "</td>";
                echo "<td>" . $row["stock"] . "</td>";
                echo "<td>";
                echo "<a class='editar' href='editar_producto.php?id=" . $row["id"] . "'>Editar</a>";
                echo "<a class='eliminar' href='eliminar_productos.php?id=" . $row["id"] . "'>Eliminar</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No hay productos registrados</td></tr>";
        }
        ?>
    </table>

    <?php
    // Cerrar la conexión
    $conn->close();
    ?>
</body>
</html>
