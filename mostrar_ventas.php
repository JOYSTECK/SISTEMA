<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
</head>
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

form {
    margin-top: 20px;
}
h3 {
  color: red; /* Color del texto */
  font-family: 'Arial', sans-serif; /* Tipo de fuente */
  font-size: 2em; /* Tamaño de la fuente */
  font-weight: bold; /* Grosor de la fuente */
  margin-bottom: 5px; /* Espaciado inferior */
}
</style>
<body>
<center><a href="pruebas.html"><h3>INICIO 🏠</h3></a></center>
<br><br><br>
<center><h3>Ventas</h3></center>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "productos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta para obtener todos los productos
$sql = "SELECT * FROM inventario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Stock</th><th>Cantidad de producto en tienda</th><th>Cantidad de producto vendido</th><th>Acciones</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["Stock"] . "</td>";
        echo "<td>" . $row["C_T"] . "</td>";
        echo "<td>" . $row["C_V"] . "</td>";
        echo "<td><a href='eliminar_producto.php?id=" . $row["id"] . "'>Eliminar</a></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No hay productos disponibles.";
}


?>
 
</body>
</html>
