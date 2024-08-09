<?php include('includes/header.php'); ?>

<section id="contacto">
    <h2>Contacto</h2>
    <p>Solicita más información sin compromiso.</p>
    <form>
        <label for="nombre">Nombre y Apellidos *</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Email *</label>
        <input type="email" id="email" name="email" required>

        <label for="mensaje">Cuerpo del mensaje</label>
        <textarea id="mensaje" name="mensaje"></textarea>

        <input type="checkbox" id="privacidad" name="privacidad" required>
        <label for="privacidad">He leído y acepto el aviso legal y la Política de Privacidad.</label>

        <button type="submit">Enviar</button>
    </form>
</section>

<?php include('includes/footer.php'); ?>
