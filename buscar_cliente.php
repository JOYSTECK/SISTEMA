<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
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

.resultados {
    margin-top: 30px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 12px;
    text-align: left;
}

th {
    background-color: #4caf50;
    color: white;
}

</style>
<body>

<?php
// Conexión a la base de datos (ajusta los valores según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clientes_d";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesar la búsqueda
if (isset($_POST['busqueda'])) {
    $busqueda = $_POST['busqueda'];

    // Consulta SQL (ajusta la consulta según tu base de datos y necesidades)
    $sql = "SELECT * FROM deudores WHERE N_C LIKE '%$busqueda%'";
    $result = $conn->query($sql);

    // Mostrar resultados en una tabla
    if ($result->num_rows > 0) {
        echo "<table>
        <tr><th>ID</th><th>Nombre</th><th>Direccion</th><th>Telefono</th><th>Monto</th><th>Fecha inicial</th><th>Fecha limite</th></tr>";


        while ($row = $result->fetch_assoc()) {
            echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['N_C'] . "</td>
            <td>" . $row['D_C'] . "</td>
            <td>" . $row['NT'] . "</td>
            <td>" . $row['MONTO'] . "</td>
            <td>" . $row['F_I'] . "</td>
            <td>" . $row['F_F'] . "</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontraron resultados.";
    }
}

$conn->close();
?>
</body>
</html>
