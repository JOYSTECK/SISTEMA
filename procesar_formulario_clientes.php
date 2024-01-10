<?php
// Procesar el formulario de añadir producto
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $N_C = $_POST["N_C"];
    $D_C = $_POST["D_C"];
    $NT = $_POST["NT"];
    $MONTO = $_POST["MONTO"];
    $F_I = $_POST["F_I"];
    $F_F = $_POST["F_F"];


    // Conexión a la base de datos (reemplaza con tus propios detalles)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "clientes_d";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Insertar el nuevo producto en la base de datos
    $sql = "INSERT INTO `deudores`(`id`, `N_C`, `D_C`, `NT`, `MONTO`, `F_I`, `F_F`) VALUES ('$id','$N_C','$D_C','$NT','$MONTO','$F_I','$F_F')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Cliente añadido con éxito.";
    } else {
        echo "Error al añadir el cliente: " . $conn->error;
    }

    $conn->close();
}

// Redirigir a la página principal
header("Location: pruebas.html");
exit();
?>
