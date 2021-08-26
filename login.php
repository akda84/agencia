<?php
session_start();//inicio de sesion
?>
<!DOCTYPE html>
<html>
<title>Turismo W5-login</title>
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

<!-- Contenedor del formulario de login -->
  <div class="w3-container w3-black w3-padding-32" id="login">
    <h2>Iniciar Sesion</h2>
    <p>(para reservar es necesario iniciar sesion)</p>
    <form action="" method="POST">
        <div class="form-group">
           <label>Usuario</label>
           <input type="text" class="w3-input w3-border" name="usuario" placeholder="introducir nombre de usuario">
        </div>
        <div class="form-group">
           <label>Clave</label>
           <input type="password" class="w3-input w3-border" name="clave" placeholder="introducir clave de usuario">
        </div>
        
        <button type="submit" class="w3-button w3-red w3-margin-top" name="submit">Logearse</button>
        
     </form>
     </div>
     <!-- fin Contenedor del formulario de login -->
     <?php
ini_set('display_errors',0);
if(isset($_POST["submit"])){ //no se va a ejecutar hasta que no pulse el boton de logearse en ese caso
  
    $u=htmlspecialchars($_POST["usuario"]);
    $c=htmlspecialchars($_POST["clave"]);
//     $exitou=false;
//     $exitoc=false;
//     $i=$j=-1;
    
//     echo "<br>";
//     foreach ($_SESSION["usuario"] as $tapa => $contenido) {  //busco el usuario que estoy ingresando en los input, y guardo el valor de la tapa
//         if($contenido==$u){
//             $exitou=true;
//             $i=$tapa;
//         }
//     }
    
//     foreach ($_SESSION["clave"] as $tapa => $contenido) { //busco la clave que estoy ingresando en los input, y guardo el valor de la tapa
//         if($contenido==$c){
//             $exitoc=true;
//             $j=$tapa;
//         }
//     }

//     if((($exitou)and($exitoc))and($i==$j)){ //si existe y son los valores de las tapas iguales, doy la bienvenida al sistema (y va al apartado de paquetes), de los contrario se le dice usuario invalido y va al apartado de login
//     
// Conecta con la BD
include 'include/conexionbd.php';

// sql para consultar una tabla
  $sql = "SELECT usuario, contrasena FROM usuarios where usuario='$u' and contrasena='$c' ";
  $resultado = mysqli_query($conexion, $sql);  

if (mysqli_num_rows($resultado) > 0) {
  // Salida de datos para cada fila
  $_SESSION["usuario"]=$u;
  $_SESSION["contrasena"]=$c;

  echo "<br><h1>Bienvenido: $u</h1>";
      print <<<AQUI
     <form action="paquetes.php" method="POST">
     <button type="submit" class="w3-button w3-red w3-margin-top" name="submit">Aceptar</button>
    </form>
 AQUI;
   }else{
   echo "<br><h1>Usuario o clave incorrecta</h1>";
  print <<<AQUI
  <form action="login.php" method="POST">
 <button type="submit" class="w3-button w3-red w3-margin-top" name="submit">Aceptar</button>
 </form>
 AQUI;
  session_destroy();
}

//cierra la conexión con la BD
mysqli_close($conexion);
}
?>

<!-- Datos de Contacto -->

  <div class="w3-panel w3-red w3-center w3-padding-32" style="margin:32px 0">
  
      <h3>Nosotros</h3>
      <h6>Queremos hacer que todos tus viajes sean extraordinarios. Somos tu guía personal: con nosotros encontrarás cosas que hacer sea cual sea tu destino, desde visitas imprescindibles hasta experiencias exclusivas. Vivir momentos inolvidables nunca ha sido tan fácil como con GetYourGuide. Millones de viajeros ya han confiado en GetYourGuide para cumplir sus sueños de viaje, y este es solo el principio. Estamos cambiando la forma en la que las personas conectan con sus destinos para que puedan vivir unas vacaciones de ensueño. Crea viajes a tu medida.</h6>
    <p>Aceptamos: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> <i class="fa fa-cc-amex w3-large"></i> <i class="fa fa-cc-cc-visa w3-large"></i><i class="fa fa-cc-paypal w3-large"></i></p>
    </div>
   <!--fin  Datos de Contacto -->
<!-- Contenedor de galeria de imagenes de otros destinos -->
  <div class="w3-container">
    <h3>Destinos</h3>
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