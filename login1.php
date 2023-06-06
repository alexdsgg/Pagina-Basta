<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"> 
  <link rel="stylesheet" href="loginStyle1.css">
  <title>Login Page</title>
</head>
<body>

    <script>
        function ingresar() {
            window.location.href = "index.html";
        }
    </script>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $correo = $_POST["correo"];
        $pass = $_POST["pass"];

        if (empty($correo)) {
            echo "Ingrese su correo";
        } elseif (empty($pass)) {
            echo "Ingrese su contraseña.";
        } else {         
            echo "Iniciando sesión";
        }
    }
    ?>

    <section>
        <div class="Contenedor">
            <div>
                <form method="POST">
                    <h2>Iniciar Sesión</h2>
                    <div class="CajaEmail">                
                        <input type="email" name="correo" required>
                        <label>Correo Electrónico</label>
                    </div>
                    <div class="CajaContra">
                        <input type="password" name="pass" required>
                        <label>Contraseña</label>
                    </div>
                    <button  id="Ingresar" onclick="ingresar()">Ingresar</button>
                    <div class="RegisInferior">
                        <p>¿No tienes una cuenta? <a href="register1.php">Registrate</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>

</body>
</html>