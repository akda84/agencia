<?php
session_start();
if(empty($_SESSION["usuario"])){ //pregunto si las variables superglobales $_SESSION estan vacias, para que me las cree en vacio
    $_SESSION["usuario"]= "";
    $_SESSION["clave"]= "";
}
?>
<!DOCTYPE html>
<html>
<title>Turismo W5</title>
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
<!-- Header --><!-- Aqui describe todo el contenedor de disponibilidad donde se verifica fechas de entrada y salida ; y la cantidad de personas (adultos y nilños)  -->
<header class="w3-display-container w3-content" style="max-width:1500px;">
  <img class="w3-image" src="https://www.w3schools.com/w3images/hotel.jpg" alt="The Hotel" style="min-width:1000px" width="1500" height="800">
  <div class="w3-display-left w3-padding w3-col l6 m8">
    <div class="w3-container w3-red"> 
      <h2><i class="fa fa-bed w3-margin-right"></i>Turismo W5</h2>
    </div> 
  <div class="w3-container w3-white w3-padding-16">
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-calendar-o"></i> Entrada</label>
            <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="entrada" required>
          </div>
          <div class="w3-half">
            <label><i class="fa fa-calendar-o"></i> Salida</label>
            <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="salida" required>
          </div>
        </div>
        <div class="w3-row-padding" style="margin:8px -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-male"></i> Adultos</label>
            <input class="w3-input w3-border" type="number" value="1" name="adultos" min="1" max="6">
          </div>
          <div class="w3-half">
            <label><i class="fa fa-child"></i> Niños</label>
          <input class="w3-input w3-border" type="number" value="0" name="niños" min="0" max="6">
          </div>
        </div>
        <button class="w3-button w3-dark-grey" type="submit"><i class="fa fa-search w3-margin-right"></i>Disponibilidad</button>
      </form>
    </div>
  </div>
</header>
<!--fin Header -->
      <!-- Imagen de mapa --><!-- Datos de Contacto -->
      <div class="w3-row-padding w3-large w3-center" style="margin:32px 0">
    <div class="w3-third"><i class="fa fa-map-marker w3-text-red"></i> Santa Cruz de Tenerife, n123</div>
    <div class="w3-third"><i class="fa fa-phone w3-text-red"></i> Telefono: +00 151515</div>
    <div class="w3-third"><i class="fa fa-envelope w3-text-red"></i> Email: mail@mail.com</div>
  </div>
  <div class="w3-panel w3-red w3-center w3-padding-32">
  <img src="https://www.w3schools.com/w3images/map.jpg" class="w3-image w3-greyscale" style="width:50%;">
    <h6><i class="fa fa-info w3-deep-orange w3-padding w3-margin-right"></i> Nos encontramos en una zona centrica.</h6>
  </div>
  </div>
</div>

<!-- Footer --><!-- Agrego el include del pie de pagina-->
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