<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir cliente</title>
</head>
<style>
    body {
      background-image: url('AD_2.jpg');
      background-size: cover;
      background-position: center;
      backdrop-filter: blur(5px);
      color: #fff;
      font-family: 'Arial', sans-serif;
      padding: 20px;
    }

    .container {
    width: 20%;
    margin: auto;
    margin-top: 100px;
}
input {
            width: 100%;
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
}

</style>
<body>
<a href="mostrar_clientes.php"><h3>Datos de clientes</h3></a>
<div class="container">
        <!-- Formulario para añadir un nuevo producto -->
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <h3>Añadir Cliente Deudor</h3>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <br><br><br>
        <form action="procesar_formulario_clientes.php" method="post">
            <b><label for="nombre">Nombre completo:</label></b>
            <b><input type="text" name="N_C" required></b>
<br><br>
            <b><label for="precio">Dirección:</label></b>
            <b><input type="text" name="D_C" required></b>
<br><br>
            <b><label for="precio">Número de telefono:</label></b>
            <b><input type="text" name="NT" required></b>
<br><br>
<b><label for="precio">Monto:</label></b>
            <b><input type="text" name="MONTO" required></b>
<br><br>
<b><label for="precio">Fecha de inicio :</label></b>
            <b><input type="date" name="F_I" required></b>
<br><br>
<b><label for="precio">Fecha limite:</label></b>
            <b><input type="date" name="F_F" required></b>
<br><br>

            <button type="submit"><b>Añadir cliente</b></button>
        </form>
        <br><br><br>
    </div>
</body>
</html>