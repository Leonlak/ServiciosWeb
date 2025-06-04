 <?php


require 'includes/funciones.php';
 incluirTemplate('header');
 ?><main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog0.1.webp" type="image/webp">
                    <source srcset="build/img/blog0.1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Servicios Web SOAP</h4>
                    <p>Escrito el: <span>02/06/2025</span> por: <span>Admin</span> </p>

                    <p>
                        Es un protocolo basado en XML que define reglas escritas para estructurar mensajes entre sistemas 
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.1.webp" type="image/webp">
                    <source srcset="build/img/blog2.1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Servicios Web REST</h4>
                    <p>Escrito el: <span>02/06/2025</span> por: <span>Admin</span> </p>

                    <p>
                      Es un estilo arquitectonico, no un protocolo que se basa en operaciones HTTP estandar 
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.1.webp" type="image/webp">
                    <source srcset="build/img/blog3.1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog3.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Servicios Web gRPC</h4>
                    <p>Escrito el: <span>02/06/2025</span> por: <span>Admin</span> </p>

                    <p>
                        gRPC es un sistema de comunicacion moderno de llamadas a procedimientos remotos (RPC) desarrollado po Google
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog4.1.webp" type="image/webp">
                    <source srcset="build/img/blog4.1.png" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog4.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Servicios Web GraphQL</h4>
                    <p>Escrito el: <span>02/06/2025</span> por: <span>Admin</span> </p>

                    <p>
                        GraphQL es un lenguaje de consultas desarrollado por Facebook para APIs, que permite al cliente
                    </p>
                </a>
            </div>
        </article>
    </main>
    
<?php

incluirTemplate('footer');
 ?>
