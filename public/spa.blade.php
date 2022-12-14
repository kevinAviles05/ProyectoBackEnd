<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SPA</title>

    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="estilos_desktop.css" />
    <link rel="stylesheet" href="movil.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="fancybox/jquery.fancybox.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script
      src="https://kit.fontawesome.com/2ee0245f3d.js"
      crossorigin="anonymous"
    ></script>
    <script src="wow.min.js"></script>
    <script src="responsiveslides.min.js"></script>
    <script src="fancybox/jquery.fancybox.js"></script>
  </head>
  <body>
    <i class="ir_arriba fa-solid fa-circle-arrow-up"></i>
    <!-- <script src="wow.min.js"></script> -->
    <script>
    new WOW().init();
    </script>
    <script>
      $(function() {
        $(".rslides").responsiveSlides();
      });
    </script>
    <header>
      <div class="ancho contenedor_cabecera">
        <picture>
          <img src="imagenes/logocabecera.jpg" alt="logo_spa_lupita" />
        </picture>
        <aside class="iconoredes">
          <a class="uno" href="https://www.facebook.com"
            ><i class="fa-brands fa-facebook-square"></i
          ></a>
          <a class="dos" href="https://www.instagram.com"
            ><i class="fa-brands fa-instagram-square"></i
          ></a>
          <a class="tres" href="https://www.twitter.com"
            ><i class="fa-brands fa-twitter-square"></i
          ></a>
        </aside>
      </div>
      <nav class="ancho">
        <div class="contenedor_iconomenu">
          <i id="iconomenu" class="fa-solid fa-bars"></i>
        </div>
        <ul class="contenedor_menu">
          <li><a href="#">INCIO</a></li>
          <li><a href="#">EMPLEOS</a></li>
          <li><a href="#trat">TRATAMIENTOS</a></li>
          <li><a href="#galeria">INSTALACIONES</a></li>
        </ul>
      </nav>
    </header>
    <section class="slidefotos wow animate__animated animate__backInRight">

      <ul class="rslides">
        <li><img src="imagenes/slide1.jpg" alt=""></li>
        <li><img src="imagenes/slide2.jpg" alt=""></li>
        <li><img src="imagenes/slide3.jpg" alt=""></li>
        <li><img src="imagenes/slide4.jpg" alt=""></li>
      </ul>

      <div class="infoslide">
        <h1>PROMOCIONES DE MARZO</h1>
        <p>
          Se acerca la epoca de playa y por eso preparamos estas dos promociones
          ideales para ti
        </p>
        <div class="contenedorbotones">
          <a href="#" class="btn_rosado">Solicitar Promoci??n</a>
          <a href="#" class="btn_borde">Ver video</a>
        </div>
      </div>
    </section>
    <section class="beauty ancho">
      <article>
        <h2>Los productos Science of Reauty</h2>
        <br />
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti
          eligendi distinctio saepe quasi, molestiae incidunt possimus eveniet
          praesentium. Facilis nobis consequuntur itaque autem exercitationem
          atque, eum totam eveniet expedita explicabo.
        </p>
      </article>
      <picture>
        <img src="imagenes/fotovelas.jpg" alt="" />
      </picture>
    </section>
    <section class="colorDiferente">
      <h1>Buscamos talento para integrarlos a nuestro equipo</h1>
      <div class="padre_buscamostalento ancho">
        <picture>
          <img src="imagenes/fotoaromatizante.jpg" alt="" />
        </picture>
        <div class="texto_buscamosT">
          <article>
            <h2>Puesto de trabajo para Recepcionista</h2>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Explicabo molestias eum fugiat repudiandae sint, quaerat nulla.
              Atque, sapiente. Accusamus tempore illo doloribus perferendis
              quidem explicabo minima enim optio fugit blanditiis.
            </p>
          </article>
          <article>
            <h2>Puesto de trabajo para Masajista</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat
              soluta ut dicta iure, earum maiores, provident recusandae tempora
              perferendis atque repellat officia quas dolorum? Assumenda animi
              ducimus cumque numquam eveniet.
            </p>
          </article>
          <article>
            <h2>Puesto de trabajo para Nutriologo</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam
              sequi necessitatibus quam explicabo, animi ipsa consectetur,
              consequuntur sed laudantium quos voluptas! Delectus voluptatem
              eaque minus iste aliquam magni mollitia fuga.
            </p>
          </article>
        </div>
      </div>
    </section>
    <br>
    <h2 id="trat" class="tit">TRATAMIENTOS</h2>
    <section class="colorDiferente">
      <article class="mtm ancho">
        <div class="secciones">
          <picture>
            <img class="wow animate__animated animate__heartBeat animate__delay-1s" src="imagenes/fotocircular1.jpg" alt="" />
          </picture>
          <h2>MASAJES CORPORALES</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
            nostrum dignissimos similique obcaecati, consectetur recusandae et
            quisquam rerum harum, praesentium nisi aut itaque, aliquam dolorum
            quidem incidunt ipsa eius tempore!
          </p>
          <br />
          <a href="#">ver mas</a>
        </div>
        <div class="secciones">
          <picture>
            <img class="wow animate__animated animate__heartBeat animate__delay-1s"  src="imagenes/fotocircular2.jpg" alt="" />
          </picture>
          <h2>TRATAMIENTOS CON PIEDRAS</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
            nostrum dignissimos similique obcaecati, consectetur recusandae et
            quisquam rerum harum, praesentium nisi aut itaque, aliquam dolorum
            quidem incidunt ipsa eius tempore!
          </p>
          <br />
          <a href="#">ver mas</a>
        </div>
        <div class="secciones">
          <picture>
            <img class="wow animate__animated animate__heartBeat animate__delay-1s"  src="imagenes/fotocircular3.jpg" alt="" />
          </picture>
          <h2>MASCARILLA ANTIARRUGAS</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
            nostrum dignissimos similique obcaecati, consectetur recusandae et
            quisquam rerum harum, praesentium nisi aut itaque, aliquam dolorum
            quidem incidunt ipsa eius tempore!
          </p>
          <br />
          <a href="#">ver mas</a>
        </div>
      </article>
    </section>
    <br>
      <h2 id="galeria" class="tit">INSTALACIONES</h2>
      <br>
    <section class="instalaciones">
      <figure class="foto1">
        <a class="fancybox" rel="gallery" href="imagenes/galeria1.jpg" title="FOTO 1"><img src="imagenes/galeria1.jpg" alt=""></a>
      </figure>
      <figure class="foto2">
        <a class="fancybox" rel="gallery" href="imagenes/galeria2.jpg" title="FOTO 2"><img src="imagenes/galeria2.jpg" alt=""></a>
      </figure>
      <figure class="foto3">
        <a class="fancybox" rel="gallery" href="imagenes/galeria3.jpg" title="FOTO 3" href="#"><img src="imagenes/galeria3.jpg" alt=""></a>
      </figure>
      <figure class="foto4">
        <a class="fancybox" rel="gallery" href="imagenes/galeria4.jpg" title="FOTO 4" href="#"><img src="imagenes/galeria4.jpg" alt=""></a>
      </figure>
      <figure class="foto5">
        <a class="fancybox" rel="gallery" href="imagenes/galeria5.jpg" title="FOTO 5" href="#"><img src="imagenes/galeria5.jpg" alt=""></a>
      </figure>
    </section>
    <footer>
      <picture>
        <img src="imagenes/logo_abajo.jpg" alt="" />
      </picture>
      <a href="#">www.spasalon.com</a>
    </footer>

    <!--funciones de javascript-->

    <script src="funciones.js"></script>
  </body>
</html>
