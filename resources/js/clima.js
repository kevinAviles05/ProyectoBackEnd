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
           console.log(posicion.coords.latitude)
           lon = posicion.coords.longitude
           lat = posicion.coords.latitude
            //ubicación actual    
           const url = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=56350e7b893b544cac45440e8b2e4b5c`

           //ubicación por ciudad
           //const url = `https://api.openweathermap.org/data/2.5/weather?q=Kanasin&lang=es&units=metric&appid=$56350e7b893b544cac45440e8b2e4b5c`

           console.log(url)
           /////////////////fetch(url)
           /////////////////.then( response => { return response.json()})
           /////////////////.then( datos => {
            //console.log(datos.main.temp)
           ///////////////// let temp = Math.round(datos.main.temp - kelvin)
           ///////////////// temperaturaValor.textContent = `${temp} °C`
            //console.log(datos.weather[0].description)
           ///////////////// let desc = datos.weather[0].description
           ///////////////// temperaturaDescripcion.textContent = desc.toUpperCase()
            //console.log(datos.name)
           ///////////////// ubicacion.textContent = datos.name
           ///////////////// console.log(datos.wind.speed)
           ///////////////// vientoVelocidad.textContent = `${datos.wind.speed} m/s`

            //para iconos dinámicos
            //////console.log(datos.weather[0].main)
            //////switch (datos.weather[0].main) {
              //////  case 'Thunderstorm':
               //////   iconoAnimado.src='ani////mated/thunder.svg'
               //////   console.log('TORMENTA');
               //////   break;
               ////// case 'Drizzle':
               //////   iconoAnimado.src='animated/rainy-2.svg'
                //////  console.log('LLOVIZNA');
               //////   break;
               ////// case 'Rain':
                 //// iconoAnimado.src='animated/rainy-7.svg'
                  ////console.log('LLUVIA');
                 //// break;
                ////case 'Snow':
                 //// iconoAnimado.src='animated/snowy-6.svg'
                 ////   console.log('NIEVE');
                 //// break;                        
                ////case 'Clear':
                ////    iconoAnimado.src='animated/day.svg'
                 ////   console.log('LIMPIO');
                 //// break;
                ////case 'Atmosphere':
                 //// iconoAnimado.src='animated/weather.svg'
                 ////   console.log('ATMOSFERA');
                 ////   break;  
                ////case 'Clouds':
                  ////  iconoAnimado.src='animated/cloudy-day-1.svg'
                  ////  console.log('NUBES');
                  ////  break;  
                ////default:
                 //// iconoAnimado.src='animated/cloudy-day-1.svg'
                 //// console.log('por defecto');
              ////}
           ////})
           ////.catch( error => {
           //// console.log(error)
           ////})
       })
          
    }
})
/////////////////