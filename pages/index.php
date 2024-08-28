<?php include('../includes/header.php'); ?>

<section id="intro">
    <div id="carousel-large">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/banner1.webp" class="d-block w-100" alt="...">
                    <p>
                        ¿Noches
                        <br>en vela
                        <br>pensando
                        <br>en los
                        <br>problemas de
                        <br>tu empresa?
                    </p>
                </div>
                <div class="carousel-item">
                    <img src="../img/banner2.webp" class="d-block w-100" alt="...">
                    <p>
                        Tu empresa
                        <br>siempre en
                        <br>marcha.
                    </p>
                </div>
                <div class="carousel-item">
                    <img src="../img/banner3.webp" class="d-block w-100" alt="...">
                    <p>Financiación,
                        <br>gestión de
                        <br>activos,
                        <br>control de
                        <br>gastos...
                    </p>
                </div>
                <div class="carousel-item">
                    <img src="../img/banner4.webp" class="d-block w-100" alt="...">
                    <p>
                        En la
                        <br>empresa,
                        <br>prevenir es
                        <br>curar.
                    </p>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
<!--  CARRUSEL ALTERNATIVO PARA PANTALLAS MENORES -->
    <div id="carousel-small">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/banner1-sm.webp" class="d-block w-100" alt="...">
                    <p>¿Noches
                        <br>en vela
                        <br>pensando
                        <br>en los
                        <br>problemas de
                        <br>tu empresa?
                    </p>
                </div>
                <div class="carousel-item">
                    <img src="../img/banner2-sm.webp" class="d-block w-100" alt="...">
                    <p>Tu empresa
                        <br>siempre en
                        <br>marcha.
                    </p>
                </div>
                <div class="carousel-item">
                <img src="../img/banner3-sm.webp" class="d-block w-100" alt="...">
                    <p>Financiación,
                        <br>gestión de
                        <br>activos,
                        <br>control de
                        <br>gastos...
                    </p>
                </div>
                <div class="carousel-item">
                    <img src="../img/banner4-sm.webp" class="d-block w-100" alt="...">
                    <p>En la
                        <br>empresa,
                        <br>prevenir es
                        <br>curar.
                    </p>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
<!-- FIN DE CARRUSEL ALTERNATIVO --> 
</section>
<section id="servicios">
    <div class="servicios__title">
        <h5>SERVICIOS</h5>
        <hr><!-- 
        <img src="../img/detalle.png" alt=""> -->
    </div>
    <div class="servicios__subtitle">
        <h2>Huimos de los 
            <br>estándares, 
            <br>trabajamos 
            <br>planes 
            <br>personalizados 
            <br>para cada 
            <br>negocio.
        </h2>
    </div>
    <div class="servicios__example">
        <p>
            En Casas & Asociados somos expertos en asesorar a grandes empresas, 
            pymes y autónomos sobre lo que realmente necesitan. Conocemos a cada cliente y le brindamos las
            soluciones más eficaces para las necesidades de gestión de su empresa.
        </p>
        <div class="servicios__points">
            <p>Estos son los servicios que podemos prestarte:</p>
            <div>
                <ul>
                    <li>Fiscal</li>
                    <li>Contable</li>
                    <li>Laboral</li>
                </ul>
                <ul>
                    <li>Mercantil</li>
                    <li>Administrativo</li>
                    <li>Consultoría</li>
                    <li>Otros</li>
                </ul>
            </div>
        </div>
        <button class="btn servicios__btn"><a href="#">Ver Más</a></button>
    </div>
</section>
<section id="plan">
    <div>
        <div class="plan__title">
            <h5>EL PLAN</h5>
            <hr>
            <img src="../img/detalle.png" alt="">
        </div>
        <div class="plan__subtitle">
            <h2>
                El Plan Casas
                <br>& Asociados
                <br>es el estilo de
                <br>vida a seguir
                <br>para tener una
                <br>empresa sana
                <br>con futuro.
            </h2>
        </div>
        <div class="plan__example">
            <p>
                Somos especialistas en dar soluciones
                eficaces a grandes empresas, pymes y
                autónomos. 
            </p>
            <p>
                Descubre el Plan Casas & Asociados y vive
                centrado en lo que realmente importa, tu
                negocio.
            </p>
            <p>
                Ofrecemos servicios óptimos que aporten
                rentabilidad a tus gestiones.
            </p>
            <p>
                Desde el control y optimización de impuestos,
                gestión del gasto empresarial, servicios
                de nóminas y personal, hasta servicios
                jurídicos de la empresa, nuestros diferentes
                departamentos aportan una cobertura integral
                a la empresa.
            </p>
        </div>
    </div>
    <div class="plan__points">
        <div>
            <div class="plan__points__box">
                <img class="plan__points__img" src="../img/impactacom_light_ambiant_first_plane_of_business_woman_hands_us_f352cc89-9ff4-4e70-96ff-9f678d9fa2a4.png" alt="">
                <div class="plan__points__text">
                    <h3>Tu empresa
                    en marcha</h3>
                    <p>
                        Realizamos todos los trámites
                        en materia laboral, fiscal
                        y contable de tu empresa
                        para que todo funcione
                        correctamente.
                    </p>
                </div>
            </div>
            <div class="plan__points__box">
                <img class="plan__points__img" src="../img/impactacom_Caucasian_athlete_dressed_in_a_business_suit_partici_c775b6db-e7fd-4269-aa53-b21e04e0ec3d.png" alt="">
                <div class="plan__points__text">
                    <h3>
                        Financiación,
                        activos, gastos...
                    </h3>
                    <p>
                        Medimos y analizamos en todo
                        momento tu situación y la del
                        sector para que mantengas
                        el ritmo, superes posibles
                        obstáculos y llegues a la meta.
                    </p>
                </div>
            </div>
        </div>
        <div>
            <div class="plan__points__box">
                <img class="plan__points__img" src="../img/impactacom_Handsome_man_sleeping_in_bed_eyes_closed_and_smiling_4a9bb171-8899-4348-9e16-e1a6456996cc.png" alt="">
                <div class="plan__points__text">
                    <h3>Te ayudamos a
                    conciliar el sueño</h3>
                    <p>
                        Coordinamos todas las tareas
                        laborales y estamos a la última
                        de los nuevos procedimientos
                        y normas para que descanses
                        tranquilo, sin preocupaciones.
                    </p>
                </div>
            </div>
            <div class="plan__points__box">
                <img class="plan__points__img" src="../img/impactacom_Closeup_of_beautiful_elegant_35_years_woman_business_8933c13a-0dc2-49d7-a574-5fef1c10076c.png" alt="">
                <div class="plan__points__text">
                    <h3>Concentrate 
                        en lo importante</h3>
                    <p>
                        Te guiamos en la estrategia
                        empresarial, económicofinanciera
                        y corporate de tu
                        empresa para que te sientes
                        seguro y cuidado.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<?php include('../includes/form.php'); ?>
<?php include('../includes/footer.php'); ?>
