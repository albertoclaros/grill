<?php 

$active = "index";

include("header.php"); ?>


<div class="hero">
    <div class="contenido-hero">

        <div class="bloque-titulo-hero">
            <h2 class="titulo-hero">PASIÓN POR</h2>
            <h2 class="titulo-hero titulo-borde">LA PARRILLA</h2>
        </div>

        <div class="divisor"></div>

        <div class="bloque-texto">
            <p class="texto-hero">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet ipsum vel
                risus fermentum aliquam a sit amet quam. </p>

            <div class="botones-hero">
                <a href="#" class="boton-hero">
                    <div>
                        <p>Reservar</p>
                    </div>
                </a>
                <a href="#" class="boton-hero">
                    <div>
                        <p>Carta</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="espatula"><img src="img/icono-espatula.svg"></div>

    </div>

    <img src="img/fondo-grill.jpg">

</div>

<div class="separador"></div>
<div class="contenedor">


    <div class="carta" id="carta">
        <div class="titulo-carta">
            <h2 class="titulo-hero">NUESTRA</h2>
            <h2 class="titulo-hero titulo-borde">CARTA</h2>
        </div>

        <img class="imagen-carta" src="img/imagen-carta.jpg">
        <p class="texto-carta">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet ipsum vel risus
            fermentum aliquam a sit amet quam. </p>
        <a href="#" class="boton-hero">
            <div>
                <p>Carta</p>
            </div>
        </a>
    </div>

    <div class="titulo-galeria" id="galeria">
        <h2 class="titulo-hero">NUESTRA</h2>
        <h2 class="titulo-hero titulo-borde">GALERIA</h2>
    </div>

    <div class="galeria">
        <div><img src="img/galeria-1.jpg"></div>
        <div><img src="img/galeria-2.jpg"></div>
        <div><img src="img/galeria-3.jpg"></div>
        <div><img src="img/galeria-4.jpg"></div>
        <div><img src="img/galeria-5.jpg"></div>
        <div><img src="img/galeria-6.jpg"></div>
    </div>

    <div class="contacto" id="contacto">
        <div class="titulo-contacto">
            <h2 class="titulo-hero">CONTACTO</h2>
            <h2 class="titulo-hero titulo-borde-oscuro">CONTACTO</h2>
        </div>

        <div class="contacto-izquierda">
            <ol class="contacto-lista">
            <li><a href="#">Av. Plutarco, 12 | 29001, Málaga</a></li>
            <li><a href="#">contacto@grill.com</a></li>
            <li><a href="#">+34 666 666 666</a></li>
            </ol>

            <div class="reseñas">

            <a class="reseñas-imagen google" href="#">
                <img src="img/google-blanco.svg" alt="">
                <span><img src="img/google-color.svg" alt=""></span>
            </a>

            <a class="reseñas-imagen tripadvisor" href="#">
                <img src="img/tripadvisor-blanco.svg" alt="">
                <span><img src="img/tripadvisor-color.svg" alt=""></span>
            </a>

            </div>
        </div>
        

        <form class="formulario" method="post">

            <input type="text" required="" id="nombre" name="nombre" placeholder="Nombre">
            <input type="email" required="" id="email" name="email" placeholder="Email">
            <textarea type="textarea" required="" id="texto" name="texto" placeholder="Escríbenos"></textarea>


            <a href="#" class="boton-contacto">
                <div>  
                    <p>ENVIAR</p>
                </div>
            </a>

        </form>


    </div>

</div>















<?php include("footer.php"); ?>