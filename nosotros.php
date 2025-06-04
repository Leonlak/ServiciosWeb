<?php


require 'includes/funciones.php';
 incluirTemplate('header');
 ?>

<main class="contenedor seccion">
        <h1>Habilidades de programacion</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros1.webp" type="image/webp">
                    <source srcset="build/img/nosotros1.png" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    Vision 
                </blockquote>

                <p>Nuestra visión es convertirnos en una referencia global en el desarrollo de soluciones tecnológicas innovadoras, accesibles y sostenibles, que impulsen la transformación digital de empresas, instituciones y comunidades. Buscamos crear tecnologías que no solo resuelvan problemas actuales, sino que también anticipen las necesidades del futuro, mejorando la calidad de vida de las personas y optimizando los procesos en todos los sectores.</p>

                <p>Aspiramos a construir un entorno tecnológico inclusivo, ético y centrado en el ser humano, donde la innovación esté al servicio del progreso social y económico. Nos proyectamos como una empresa comprometida con el conocimiento, la creatividad y el impacto positivo, liderando el cambio hacia un mundo más conectado, eficiente y consciente.</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/security.png" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati molestiae dolorem natus dolores reiciendis tempore, explicabo cum nobis laudantium. Voluptates?</p>
            </div>
            <div class="icono">
                <img src="build/img/buscar.png" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati molestiae dolorem natus dolores reiciendis tempore, explicabo cum nobis laudantium. Voluptates?</p>
            </div>
            <div class="icono">
                <img src="build/img/calendario.png" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati molestiae dolorem natus dolores reiciendis tempore, explicabo cum nobis laudantium. Voluptates?</p>
            </div>
        </div>
    </section>

<?php
incluirTemplate('footer') ;
 ?>

   