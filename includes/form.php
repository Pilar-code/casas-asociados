<section id="contacto">
    <div class="contacto__title">
        <h5>CONTACTO</h5>
        <hr>
    </div>
    <div class="contacto__subtitle">
        <h2>Solicita más 
            <br>información sin 
            <br>compromiso.
        </h2>
        <div>
            <img width="25" height="25" src="./img/icons8-marcador-48.png" alt=""/>
            <p>    
                Paseo de la Constitución, 24
                <br>50001 Zaragoza
            </p>
        </div>
        <div>
            <img width="25" height="25" src="./img/icons8-teléfono-desconectado-48.png" alt=""/>
            <p>    
                +34 976 000 000
            </p>
        </div>
        <div>
            <img width="25" height="25" src="./img/icons8-nuevo-post-48.png" alt=""/>
            <p>
                info@casasasesores.com
            </p>
        </div>
    </div>
    <div class="contacto__form">
        <form action="process.php" method="POST">
            <label for="name">Nombre y Apellidos *</label>
            <input type="text" id="name" name="name" placeholder="Nombre y apellidos" required>

            <label for="email">Email *</label>
            <input type="email" id="email" name="email" placeholder="nombre@mail.com" required>

            <label for="phone">Teléfono</label>
            <input type="tel" id="phone" name="phone" placeholder="(+34) 000 000 000" pattern="\(\+\d{2}\) \d{3} \d{3} \d{3}">

            <label for="message">Cuerpo del mensaje</label>
            <textarea id="message" name="message" placeholder="Cuerpo del mensaje..."></textarea>

            <div class="contacto__form__checkbox">
                <div>
                    <p>* Campos obligatorios</p>
                </div>
                <div class="polityconditions">
                    <input type="checkbox" id="legal" name="legal" required>
                    <label for="legal">He leído y acepto el <a href="#">aviso legal</a> y la <a href="#">Política de Privacidad</a>.</label>
                </div>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
</section>