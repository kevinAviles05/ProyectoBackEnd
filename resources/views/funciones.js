//funcion boton menu
$("#iconomenu").click(function(){
    $(".contenedor_menu").slideToggle();
});

//funcion para boton subir
$(document).ready(function(){
    $('.ir_arriba').click(function(){
        $('body, html').animate({
            scrollTop: '0px'
        }, 1000);
    });
});

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