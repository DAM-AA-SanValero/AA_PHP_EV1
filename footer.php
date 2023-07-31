<?php
echo '<link rel="stylesheet" type="text/css" href="css/estilo.css">';
?>

<footer>
    <div id="formulario">
        <h2>Contacta con nosotros para cualquier duda:</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <label for="name">Nombre:</label><br>
            <input type="text" name="name" id="name"><br>
            <label for="email">Correo electrónico:</label><br>
            <input type="email" name="email" id="email"><br>
            <label for="message">Mensaje:</label><br>
            <textarea name="message" id="message"></textarea><br>
            <input type="submit" value="Enviar">
        </form>
    </div>

    <p>Aviso legal | Cookies | Política de privacidad</p>
</footer>
</body>
</html>

<style>
    footer p {
        color: #fff;
        text-align: center;
    }
</style>