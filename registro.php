<?php
session_start();//inicio de sesion
?>
<!DOCTYPE html>
<html>
<title>Turismo W5-Registro</title>
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
<!-- Contenedor del formulario de Registro -->
  <div class="w3-container w3-padding-32 w3-black w3-opacity w3-card w3-hover-opacity-off" style="margin:32px 0;">
    <h2>Registro de Usuario</h2>
    <p>(para reservar es necesario registrar usuario)</p>
    
        <form action="" method="POST">
            <div class="form-group">
               <label>Usuario</label>
               <input type="text" class="w3-input w3-border" name="usuario" placeholder="introducir usuario">
            </div>
            <div class="form-group">
               <label>Clave</label>
               <input type="password" class="w3-input w3-border" name="clave" placeholder="introducir clave">
            </div><br><br>
            <div class="form-group">
               <label>Nombres</label>
               <input type="text" class="w3-input w3-border" name="nombre" placeholder="introducir nombres">
            </div>
            <div class="form-group">
               <label>Apellidos</label>
               <input type="text" class="w3-input w3-border" name="apellido" placeholder="introducir apellidos">
            </div>
            <div class="form-group">
               <label>DNI</label>
               <input type="text" class="w3-input w3-border" name="dni" placeholder="introducir DNI sin -">
            </div>
            <div class="form-group">
               <label>Email</label>
               <input type="email" class="w3-input w3-border" name="email" placeholder="Ej:example@example.com">
            </div>
            <div class="form-group">
               <label>Edad</label>
               <input type="number" class="w3-input w3-border" name="edad" min="18" max="100" >
            </div><br><br>
            <div class="form-group">
               <label>Sexo</label>
               <input type="radio" name="gender" value="hombre" class="w3-input w3-border" > Masculino <br>
                        <input type="radio" name="gender" value="mujer" class="w3-input w3-border"> Femenino<br>
                        <input type="radio" name="gender" value="no" class="w3-input w3-border"> Prefiero no decirlo<br>
            </div><br><br>
            <div class="form-group">
               <label>Fecha de Nacimiento</label>
               <input type="date" class="w3-input w3-border" name="date">
            </div>
            <div class="form-group">
               <label for="phone">Telefono</label>
               <input type="tel" class="w3-input w3-border" name="telefono" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
            </div>
            <div class="form-group">
               <label>Direccion</label>
               <textarea rows="4" cols="16" placeholder="introducir direccion" class="w3-input w3-border"></textarea><br>
            </div>
            <div class="form-group">
               <label>Codigo Postal</label>
               <input type="text" class="w3-input w3-border" name="codigo" placeholder="Ej:38108">
            </div>
            
            <button type="submit" class="w3-button w3-red w3-margin-top" name="submit">Registrarse</button>
            
         </form>
         </div> 
   <!-- fin Contenedor del formulario de Registro --> 
   <!-- PHP donde recoge los valores del formulario y los guarda en $_SESSION correspondiente usuario y clave -->     
<?php
ini_set('display_errors',0);
if(isset($_POST["submit"])){    // esperando al botón
    $u=htmlspecialchars($_POST["usuario"]);
    $c=htmlspecialchars($_POST["clave"]);

    include 'include/conexionbd.php';
    $sql = "SELECT usuario FROM usuarios where usuario='$u'";
    $resultado = mysqli_query($conexion, $sql); 
    $sql1 = "INSERT INTO usuarios (usuario, contrasena) VALUES ( '$u', '$c')";
    if (mysqli_num_rows($resultado) > 0) {
    echo "Usuario ya existe, intente con otro";
  }
 else if (mysqli_query($conexion, $sql1)) {
   echo "<br><h1>Bienvenido: $u</h1>"; //una vez que es registrado da la bienvenida al usuario y manda al usuario al apartado de login
   print <<<AQUI
   <form action="login.php" method="POST">
   <button type="submit" class="w3-button w3-red w3-margin-top" name="submit">Aceptar</button>
   </form>
AQUI;
  } else {
    echo "Error insertando usuario: " . mysqli_error($conexion);
  }
    
    

    
        mysqli_close($conexion);
    
    }  
    
    

?>
<!-- Datos de Contacto --> 
  <div class="w3-row-padding w3-large w3-center" style="margin:32px 0">
    <div class="w3-third"><i class="fa fa-map-marker w3-text-red"></i> Santa Cruz de tenerife, n123</div>
    <div class="w3-third"><i class="fa fa-phone w3-text-red"></i> Telefono: +00 151515</div>
    <div class="w3-third"><i class="fa fa-envelope w3-text-red"></i> Email: mail@mail.com</div>
  </div>
<!-- Barra de fondo naranja con cualquier escrito -->
  <div class="w3-panel w3-red w3-leftbar w3-padding-32">
    <h6><i class="fa fa-info w3-deep-orange w3-padding w3-margin-right"></i> Elige el destino de tus próximas vacaciones, el vuelo o tren que necesites, el alojamiento que tú quieras y móntate el viaje a medida. ¡Inspírate en nuestra sección de viajes pensados para ti!</h6>
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