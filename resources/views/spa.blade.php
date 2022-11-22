<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SPA</title>

    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="{{ asset('css/estilos_desktop.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
    <link rel="stylesheet" href="movil.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="fancybox/jquery.fancybox.css">

    <script></script>

    <script src="funciones.js"></script>
    <script src="script.js" ></script>

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script
      src="https://kit.fontawesome.com/2ee0245f3d.js"
      crossorigin="anonymous"
    ></script>
    <script src="wow.min.js"></script>
    <script src="responsiveslides.min.js"></script>
    <script src="fancybox/jquery.fancybox.js"></script>

    <script>
      function iniciarMap(){
    var coord={lat: 20.9682779, lng: -89.8835747};
    var map = new google.maps.Map(document.getElementById('map'),{
        zoom: 10,
        center: coord
    })
    var marker = new google.maps.Marker({
        position: coord,
        map: map
    });
}
    </script>

    <script>
      window.addEventListener('load', ()=> {
    let lon
    let lat
    const kelvin = 273.15


    let temperaturaValor = document.getElementById('temperatura-valor')  
    let temperaturaDescripcion = document.getElementById('temperatura-descripcion')  
    
    let ubicacion = document.getElementById('ubicacion')  
    let iconoAnimado = document.getElementById('icono-animado') 

    let vientoVelocidad = document.getElementById('viento-velocidad') 


    if(navigator.geolocation){
       navigator.geolocation.getCurrentPosition( posicion => {
           //console.log(posicion.coords.latitude)
           lon = posicion.coords.longitude
           lat = posicion.coords.latitude
            //ubicación actual    
           const url = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=56350e7b893b544cac45440e8b2e4b5c`

           //ubicación por ciudad
           //const url = `https://api.openweathermap.org/data/2.5/weather?q=Kanasin&lang=es&units=metric&appid=$56350e7b893b544cac45440e8b2e4b5c`

           //console.log(url)
           fetch(url)
           .then( response => { return response.json()})
           .then( datos => {
            //console.log(datos.main.temp)
            let temp = Math.round(datos.main.temp - kelvin)
            temperaturaValor.textContent = `${temp} °C`
            //console.log(datos.weather[0].description)
            let desc = datos.weather[0].description
            temperaturaDescripcion.textContent = desc.toUpperCase()
            //console.log(datos.name)
            ubicacion.textContent = datos.name
           // console.log(datos.wind.speed)
            vientoVelocidad.textContent = `${datos.wind.speed} m/s`

            //para iconos dinámicos
            console.log(datos.weather[0].main)
            switch (datos.weather[0].main) {
                case 'Thunderstorm':
                  iconoAnimado.src='ani////mated/thunder.svg'
                  console.log('TORMENTA');
                  break;
                case 'Drizzle':
                  iconoAnimado.src='animated/rainy-2.svg'
                  console.log('LLOVIZNA');
                  break;
                case 'Rain':
                  iconoAnimado.src='animated/rainy-7.svg'
                  console.log('LLUVIA');
                  break;
                case 'Snow':
                  iconoAnimado.src='animated/snowy-6.svg'
                    console.log('NIEVE');
                  break;                        
                case 'Clear':
                    iconoAnimado.src='animated/day.svg'
                    console.log('LIMPIO');
                  break;
                case 'Atmosphere':
                   iconoAnimado.src='animated/weather.svg'
                    console.log('ATMOSFERA');
                    break;  
                case 'Clouds':
                    iconoAnimado.src='animated/cloudy-day-1.svg'
                    console.log('NUBES');
                    break;  
                default:
                  iconoAnimado.src='animated/cloudy-day-1.svg'
                  console.log('por defecto');
              }
           })
           .catch( error => {
            console.log(error)
           })
       })
          
    }
})
    </script>
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
        <div class="contenedor_clima">
        <div id="caja">
            <h1 id="temperatura-valor"></h1>
            <h1 id="temperatura-descripcion"></h1>
        </div>
        <div id="caja">
            <h2 id="ubicacion"></h2>
        </div>
        <div id="caja">
            <h3>Veloc. del Viento</h3>
            <h1 id="viento-velocidad"></h1>
        </div>
    </div>
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
          <a id="iniciospa" href="{{ url('usuario/')}}">Iniciar Sesión</a>
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
          <a href="#" class="btn_rosado">Solicitar Promoción</a>
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

    <div id="map">
      <h1 class="prueba">UBICACION DE MUESTRA</h1>

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.554143082198!2d-89.62478453588867!3d21.01050219377913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5676a62e74551d%3A0xfa87b7045b382a6!2zVGVjbm9sw7NnaWNvLCA5NzEyMCBNw6lyaWRhLCBZdWMu!5e0!3m2!1ses!2smx!4v1669153338264!5m2!1ses!2smx" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
    

    <script>
      function iniciarMap(){
    var coord={lat: 20.9682779, lng: -89.8835747};
    var map = new google.maps.Map(document.getElementById('map'),{
        zoom: 10,
        center: coord
    })
    var marker = new google.maps.Marker({
        position: coord,
        map: map
    });
}
    </script>
    <br>
    

    <section>
      <h1>Video de muestra</h1>
      <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
    <div id="player"></div>

<script>
  // 2. This code loads the IFrame Player API code asynchronously.
  var tag = document.createElement('script');

  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // 3. This function creates an <iframe> (and YouTube player)
  //    after the API code downloads.
  var player;
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
      height: '360',
      width: '640',
      videoId: 'QZbuj3RJcjI',
      events: {
        'onReady': onPlayerReady,
        'onStateChange': onPlayerStateChange
      },
      playerVars: {
        'autoplay': 1
      }
    });
  }

  // 4. The API will call this function when the video player is ready.
  function onPlayerReady(event) {
    event.target.playVideo();
  }

  // 5. The API calls this function when the player's state changes.
  //    The function indicates that when playing a video (state=1),
  //    the player should play for six seconds and then stop.
  var done = false;
  function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING && !done) {
      setTimeout(stopVideo, 6000);
      done = true;
    }
  }
  function stopVideo() {
    player.stopVideo();
  }
</script>
    </section>

    <script>
      window.addEventListener('load', ()=> {
    let horaHTML = document.getElementById('hora')
    let minutoHTML = document.getElementById('minuto')
    let segundoHTML = document.getElementById('segundo')

     const mostrarHora = () => {
         let fecha = new Date()
         let hora = fecha.getHours()
         let minuto = fecha.getMinutes()
         let segundo = fecha.getSeconds()

         horaHTML.textContent =  String(hora).padStart(2, "0")
         minutoHTML.textContent = String(minuto).padStart(2, "0")
         segundoHTML.textContent = String(segundo).padStart(2, "0")

         setTimeout(mostrarHora, 1000)
     }
     mostrarHora()
})
    </script>

    <section>
      <h1>Muestra de la hora</h1>
    <div id="contenedor">
        <div id="caja1">
            <label id="hora"></label>
        </div>
        <div id="caja2">
            <label id="minuto"></label>
        </div>
        <div id="caja3">
            <label id="segundo"></label>
        </div>
    </div>
    </section>


    <footer>
      <picture>
        <img src="imagenes/logo_abajo.jpg" alt="" />
      </picture>
      <a href="#">www.spasalon.com</a>
    </footer>

  </body>
</html>