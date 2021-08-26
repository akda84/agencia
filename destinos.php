<?php
session_start();//inicio de sesion
?>
<!DOCTYPE html>
<html>
<title>Turismo W5-Destinos</title>
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
<!-- Contenedor de Paquetes turisticos, contiene imagen, descripcion de los paquetes -->
  <div class="w3-row-padding w3-padding-16">
    <div class="w3-third w3-margin-bottom">
      <img src="https://gifincas.blog/wp-content/uploads/2020/04/madrid.jpg" alt="españa" style="width:100%">
      <div class="w3-container w3-white">
        <h3>RINCONES DE ESPAÑA</h3>
        <h6 class="w3-opacity">Desde 109</h6>
        <p>Descubre los rincones de España con estas originales propuestas por el país. Disfrutarás de experiencias gastronómicas, contacto con la naturaleza en estado puro y artesanía inigualable.</p>
        
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">Mas Info</button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="https://concepto.de/wp-content/uploads/2012/03/turismo-e1552499811477.jpg" alt="experiencia" style="width:100%">
      <div class="w3-container w3-white">
        <h3>VUELOS Y ESTANCIA</h3>
        <h6 class="w3-opacity">Desde 149</h6>
        <p>No pienses más y prepárate para desconectar y vivir una experiencia única con esta oferta que incluye vuelos y estancia en régimen de Todo Incluido. ¡Un paraíso que descubrir!</p>
        
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">Mas Info</button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="https://static.hosteltur.com/app/public/uploads/img/releases/2021/03/11/L_172405_adobestock-370189767.jpg" alt="tenerife" style="width:100%">
      <div class="w3-container w3-white">
        <h3>TENERIFE</h3>
        <h6 class="w3-opacity">Desde 299</h6>
        <p>Relájate en sus playas, suelta adrenalina en Siam Park, diviértete en el Loro Parque, pasea por el Parque Natural de Anaga o siéntete en la luna subiendo al Teide.¡Un paraíso que descubrir!</p>
        
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">Mas Info</button>
      </div>
    </div>
  </div>
<!-- fin Contenedor de Paquetes turisticos, contiene imagen, descripcion de los paquetes -->
    
      <!-- Imagen de localizacion -->
      <div class="w3-row-padding w3-large w3-center" style="margin:32px 0">
    <div class="w3-third"><i class="fa fa-map-marker w3-text-red"></i> Santa Cruz de tenerife, n 123</div>
    <div class="w3-third"><i class="fa fa-phone w3-text-red"></i> Telefono: +00 151515</div>
    <div class="w3-third"><i class="fa fa-envelope w3-text-red"></i> Email: mail@mail.com</div>
</div>

  <div class="w3-panel w3-red w3-center w3-padding-32">
  <img src="https://www.w3schools.com/w3images/map.jpg" class="w3-image w3-greyscale" style="width:50%;">
    <h6><i class="fa fa-info w3-deep-orange w3-padding w3-margin-right"></i> Nos encontramos en una zona centrica.</h6>
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