<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
form {
    text-align: center;
    margin-top: 20px;
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
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.button:hover {
    background-color: #45a049;
}
</style>
<body>
<br><br><br>
<form action="buscar_cliente.php" method="post">
            <label for="busqueda">Buscar:</label>
            <input type="text" id="busqueda" name="busqueda" required>
            <button type="submit">Buscar</button>
        </form>
        <a href="reporte.php"><h3>Imprimir reporte</h3></a>     
<center><h3>Clientes Deudores</h3></center>
<?php
// Conexión a la base de datos (reemplaza con tus propios detalles)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clientes_d";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta para obtener todos los productos
$sql = "SELECT * FROM deudores";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Direccion</th><th>Telefono</th><th>Monto</th><th>Fecha inicial</th><th>Fecha limite</th><th>Acciones</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["N_C"] . "</td>";
        echo "<td>" . $row["D_C"] . "</td>";
        echo "<td>" . $row["NT"] . "</td>";
        echo "<td>" . $row["MONTO"] . "</td>";
        echo "<td>" . $row["F_I"] . "</td>";
        echo "<td>" . $row["F_F"] . "</td>";
        echo "<td><a href='eliminar_producto.php?id=" . $row["id"] . "'>Eliminar</a></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No hay productos disponibles.";
}

$conn->close();
?>

</body>
</html>