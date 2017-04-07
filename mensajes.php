<?php
  $destino= "karen01912@gmail.com";
  $nombre= $_POST["nombre"];
  $correo= $_POST["correo"];
  $mensaje= $_POST["mensaje"];
  $contenido = "Nombre: " . $nombre . "\nCorreo: ". $correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;
  mail($destino, "Contacto", $contenido);
  header("Location:gracias.html");
 ?>

