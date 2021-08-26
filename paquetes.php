<?php
session_start();//inicio de sesion
if (($_SESSION["usuario"]!="") and ($_SESSION["contrasena"]<>"")){
print <<<AQUI
<!DOCTYPE html>
<html>
<title>Turismo W5-paquetes</title>
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


<!-- Contenido de la pagina -->
<div class="w3-content" style="max-width:1532px;">
  <div class="w3-container w3-margin-top" id="paquetes">
    <h3>Paquetes</h3>
    <p>Seas el tipo de viajero que seras, encontrarás descuentos para unas vacaciones perfectas. ¡Es tu momento!</p>
  </div>
  <!-- Contenedor de la busqueda de la disponibilidad -->
  <div class="w3-row-padding">
    <div class="w3-col m3">
      <label><i class="fa fa-calendar-o"></i> Entrada</label>
      <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY">
    </div>
    <div class="w3-col m3">
      <label><i class="fa fa-calendar-o"></i> Salida</label>
      <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY">
    </div>
    <div class="w3-col m2">
      <label><i class="fa fa-male"></i> Adultos</label>
      <input class="w3-input w3-border" type="number" placeholder="1">
    </div>
    <div class="w3-col m2">
      <label><i class="fa fa-child"></i> Niños</label>
      <input class="w3-input w3-border" type="number" placeholder="0">
    </div>
    <div class="w3-col m2">
      <label><i class="fa fa-search"></i> Buscar</label>
      <button class="w3-button w3-block w3-black">Buscar</button>
    </div>
  </div>
  <!--fin Contenedor de la busqueda de la disponibilidad -->
<!-- Contenedor de Paquetes turisticos, contiene imagen, descripcion de los paquetes -->
  <div class="w3-row-padding w3-padding-16">
    <div class="w3-third w3-margin-bottom">
      <img src="https://media.tacdn.com/media/attractions-splice-spp-674x446/07/03/1c/9c.jpg" alt="paris" style="width:100% ; height:50%">
      <div class="w3-container w3-white">
        <h3>Paquete Simple</h3>
        <h6 class="w3-opacity">Desde $99</h6>
        <p>Un día en París: ticket reservado para el Louvre</p>
        <p>Disfruta de un día perfecto en París con un ticket que combina la reserva de una entrada al Museo del Louvre y un billete para un crucero por el Sena donde podrás contemplar la ciudad desde sus históricos canales.</p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">Escoger</button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="https://nypost.com/wp-content/uploads/sites/2/2020/04/gs-manhattan-skyline.jpg?quality=80&strip=all&w=600&h=400&crop=1" alt="estatualibertad" style="width:100% ; height:50%">
      <div class="w3-container w3-white">
        <h3>Paquete Doble</h3>
        <h6 class="w3-opacity">Desde $149</h6>
        <p>NYC: Estatua de la Libertad, isla Ellis, tour antes de ferry</p>
        <p>Haz un tour con guía en vivo en inglés de 30' a Battery Park y visita la Estatua de la Libertad y Ellis Island.Explora con las audioguías o añade la opción del acompañamiento total a la isla de la Libertad y Ellis.</p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">Escoger</button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="https://images.musement.com/cover/0002/15/amsterdam_header-114429.jpeg?w=600&h=400&q=95&fit=crop" alt="canalamsterdam" style="width:100% ; height:50%">
      <div class="w3-container w3-white">
        <h3>Paquete Deluxe</h3>
        <h6 class="w3-opacity">Desde $199</h6>
        <p>Ámsterdam: crucero por el canal al atardecer</p>
        <p>Sube a bordo de un exclusivo crucero de 90 min con audioguía disponible en múltiples idiomas. Goza de vistas nocturnas de los edificios y puentes de la ciudad iluminados,e.ncuentra las mejores experiencias de la capital</p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">Escoger</button>
      </div>
    </div>
  </div>
<!-- fin Contenedor de Paquetes turisticos, contiene imagen, descripcion de los paquetes -->
<!-- Barra de fondo naranja con cualquier escrito -->
  <div class="w3-panel w3-red w3-leftbar w3-padding-32">
    <h6>Si te gusta la libertad que da alojarte en un apartamento, no dudes en conocer todas las opciones de alojamiento que hemos seleccionado para ti. ¡Siéntete como en casa!</h6>
  </div>
</div>
</div>
</div>

<!-- Footer -->
<?php include("include/pie.php"); ?>
<!--fin Footer -->
<!--Scrip de la Add Google Maps -->
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
AQUI;
}
?>