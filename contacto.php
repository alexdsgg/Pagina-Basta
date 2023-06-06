<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Page</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/88/88450.png">
    <link rel="stylesheet" href="ContactStylePHP.css">
</head>
<body>
<section>
    <form class="form-contact" id="contact-form" method="POST" action="validar_formulario.php">
        <h1>Contáctenos</h1>
        <div class="form-group">
            <input class="input-field" type="text" name="nombres" id="nombres" required>
            <label for="nombres">Nombres</label>
        </div>
        <div class="form-group">
            <input class="input-field" type="text" name="apellidos" id="apellidos" required>
            <label for="apellidos">Apellidos</label>
        </div>
        <div class="form-group">
            <input class="input-field" type="tel" name="telefono" id="telefono" required>
            <label for="telefono">Teléfono</label>
        </div>
        <div class="form-group">
            <input class="input-field" type="email" name="correo" id="correo" required>
            <label for="correo">Correo</label>
        </div>
        <div class="form-group">
            <input class="input-field" type="text" name="asunto" id="asunto" required>
            <label for="asunto">Asunto</label>
        </div>
        <div class="form-group">
            <textarea class="input-field" name="msj" id="msj" required></textarea>
            <label for="msj">Mensaje</label>
        </div>
        <div class="form-group">
            <input type="checkbox" name="aceptacion" id="aceptacion" required>
            <label for="aceptacion">Estoy de acuerdo con los  <a href="https://policies.google.com/terms?hl=es" target="_blank">  términos y condiciones</a></label>
        </div>
        <div class="button-group">
            <input class="boton boton-reset" type="reset" name="reiniciar" value="Resetear">
            <input class="boton boton-enviar" type="submit" name="enviar" value="Enviar">
        </div>
        <p class="contact-info">Otras vías de comunicación</p>
        <p class="contact-info"><i class="fa-solid fa-phone"></i> 0800-1-3332</p>
        <p class="contact-info"><i class="fa-regular fa-envelope"></i> businessBasta@gmail.com</p>
        <p class="contact-info"><i class="fa-solid fa-location-dot"></i> Av. Petit Thouars 5356</p>
    </form>
</section>
</body>
</html>
