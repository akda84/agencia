<!DOCTYPE html>
<html>
<title>Turismo W5-Contac</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Link de para los css del template de W3 y style -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<body class="w3-light-grey">

<!-- Barra de  navegacion -->
<?php include("include/encabezado.php"); ?>
<!-- fin Barra de  navegacion -->
<br><br>
<!-- Apartado de Contacto -->
  <div class="w3-row-padding" id="about">
    <div class="w3-col l4 12">
      <h3>Nosotros</h3>
      <h6>Queremos hacer que todos tus viajes sean extraordinarios. Somos tu guía personal: con nosotros encontrarás cosas que hacer sea cual sea tu destino, desde visitas imprescindibles hasta experiencias exclusivas. Vivir momentos inolvidables nunca ha sido tan fácil como con GetYourGuide. Millones de viajeros ya han confiado en GetYourGuide para cumplir sus sueños de viaje, y este es solo el principio. Estamos cambiando la forma en la que las personas conectan con sus destinos para que puedan vivir unas vacaciones de ensueño. Crea viajes a tu medida.</h6>
    <p>Aceptamos: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> <i class="fa fa-cc-amex w3-large"></i> <i class="fa fa-cc-cc-visa w3-large"></i><i class="fa fa-cc-paypal w3-large"></i></p>
    </div>
    <div class="w3-col l8 12">
      <!-- Imagen de localizacion -->
      <img src="https://www.w3schools.com/w3images/map.jpg" class="w3-image w3-greyscale" style="width:100%;">
    </div>
  </div>
  <!-- Datos de Contacto -->
  <div class="w3-row-padding w3-large w3-center" style="margin:32px 0">
    <div class="w3-third"><i class="fa fa-map-marker w3-text-red"></i> Santa Cruz de Tenerife, n123</div>
    <div class="w3-third"><i class="fa fa-phone w3-text-red"></i> Telefono: +00 151515</div>
    <div class="w3-third"><i class="fa fa-envelope w3-text-red"></i> Email: mail@mail.com</div>
  </div>
<!-- Barra de fondo naranja con cualquier escrito -->
  <div class="w3-panel w3-red w3-leftbar w3-padding-32">
    <h6></i> No pienses más y prepárate para desconectar y vivir una experiencia única con esta oferta que incluye vuelos y estancia en régimen de Todo Incluido. ¡Un paraíso que descubrir!</h6>
  </div>
<!-- Contenedor de galeria de imagenes de otros destinos -->
  <div class="w3-container">
    <h3>Nuestros Destinos</h3>
    <h6></h6>
  </div>
  
  <div class="w3-row-padding w3-padding-16 w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <img src="https://www.w3schools.com/w3images/cinqueterre.jpg" alt="Cinque Terre" style="width:100%">
        <span class="w3-display-bottomleft w3-padding">Cinque Terre</span>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://www.w3schools.com/w3images/newyork2.jpg" alt="New York" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">New York</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://www.w3schools.com/w3images/sanfran.jpg" alt="San Francisco" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">San Francisco</span>
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://www.w3schools.com/w3images/pisa.jpg" alt="Pisa" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Pisa</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://www.w3schools.com/w3images/paris.jpg" alt="Paris" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Paris</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</div>

<!-- Footer -->
<?php include("include/pie.php"); ?>
<!-- fin Footer -->
<!-- Scrip de la Add Google Maps -->
<script>
function myMap() {
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key Desde Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>