<?php
$destino="jaimemarcial420@aragon.unam.mx";
$nombre=$_Post["Nombre"];
$apellido=$_Post["Apellido"];
$email=$_Post["Email"];
$telefono=$_Post["Telefono"];
$empresa=$_Post["Empresa"];
$mensaje=$_Post["Mensaje"];
$contenido= "Nombre: " .$nombre .$apellido."\nCorreo:" . $correo ."\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;

mail($destino,"Contacto",$contenido);
header(Location:"../Carton/gracias.html" ");
 ?>
