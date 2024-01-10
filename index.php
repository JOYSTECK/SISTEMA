<?php

require_once("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    $sql = "SELECT * FROM usuarios2 WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION["usuario"] = $row["usuario"];
        $_SESSION["rol"] = $row["rol"];

        if ($row["rol"] == "admin") {
            header("Location: pruebas.html");
        } elseif ($row["rol"] == "usuario_normal") {
            header("Location: Añadir_clientes.php");
        }elseif ($row["rol"] == "ad_p") {
            header("Location: actualizar_inventario.php");
        }
         else {
            // Redirigir a una página predeterminada si el rol no coincide
            header("Location: index.php");
        }
    } else {
        header("Location: rechazo.html");
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Iniciar Sesión - Sistema de Administración</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;

        }

        .login-container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            width: 300px;
            text-align: center;
        }

        .logo {
            padding: 20px;
            background-color: rgb(242, 11, 11);
            color: #070707;
            font-size: 24px;
            font-weight: bold;
        }

        .form-container {
            padding: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #f76161;
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

.social-icons {
    display: flex;
    list-style: none;
}


.social-icons li a:hover i {
    transform: scale(4.3);
}


.fa-facebook {
    color: #1877f2;
    filter: drop-shadow(20px 20px 20px #1877f2);
}

.fa-instagram {
    color: #c32aa3;
    filter: drop-shadow(10px 10px 10px #c32aa3);
}

.fa-whatsapp {
    color: #25d366;
    filter: drop-shadow(10px 10px 10px #25d366);
}

    </style>
   </head>
<body bgcolor="red">

    <div class="login-container">
        <div class="logo"><img src="AD_2.jpg" height="150" width="150">Adfincont "Administrando tu futuro" </div>
        <div class="form-container">
            <form action="" method="post">
                <input type="text" name="usuario" placeholder="Usuario" required>
                <input type="password" name="contraseña" placeholder="Contraseña" required>
                <button type="submit">Iniciar Sesión</button>

            </form>
            <br>
            Este sistema fue creado por JOYSTECK
            <br><br>
            <div class="main center">
                <ul class="social-icons">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li><a href="https://www.facebook.com/profile.php?id=100093428237725&mibextid=ZbWKwL"><i class="fab fa-facebook"></i></a></li>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li><a href="https://instagram.com/joysteck_joys?igshid=MzMyNGUyNmU2YQ=="><i class="fab fa-instagram"></i></a></li>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li><a href="https://wa.me/+2481644758"><i class="fab fa-whatsapp"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
</body>
</html>
