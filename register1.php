<!DOCTYPE html>
<html>
   <head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="register1Style.css">
   <title>Register Page</title>
   </head>
   <body>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $correo = $_POST["correo"];
            $pass = $_POST["pass"];
            $confirm_pass = $_POST["confirm_pass"];
            if (empty($nombre)) {
                echo "Ingrese su nombre";
            } elseif (empty($apellido)) {
                echo "Ingrese su apellido";
            } elseif (empty($correo)) {
                echo "Ingrese su correo";
            } elseif (empty($pass)) {
                echo "Ingresa su contraseña";
            } elseif ($pass != $confirm_pass) {
                echo "Verifique que sus contraseñas coincidan";
            } else {
                echo "Registro exitoso";
            }
        }
        ?>

      <section>
         <div class="Contenedor">
              <div>
                  <form method="POST">
                     <h2>Regístrese</h2>
                     <div class="CajaNombre">                
                        <input type="text" name="nombre" required>
                        <label>Nombre</label>
                     </div>
                     <div class="CajaApellido">                
                        <input type="text" name="apellido" required>
                        <label>Apellido</label>
                     </div>                     
                     <div class="CajaEmail">                
                        <input type="email" name="correo" required>
                        <label>Correo Electrónico</label>
                     </div>
                     <div class="CajaContra">                
                        <input type="password" name="pass" required>
                        <label>Contraseña</label>
                     </div>                     
                     <div class="CajaConfirmPass">
                        <input type="password" name="confirm_pass" required>
                        <label>Confirmar Contraseña</label>
                     </div>
                     <button>Registrar</button>
                     <div class="RegisInferior">
                        <p>¿Ya tienes una cuenta? <a href="login1.php">Inicia sesión</a></p>
                     </div>
                  </form>
             </div>
         </div>
      </section>
  </body>
</html>