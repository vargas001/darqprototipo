
<?php
$destino= "proyectos@darq.mx";
$nombre= $_POST ["nombre"];
$correo= $_POST ["correo"];
$asunto= $_POST ["asunto"];
$mensaje= $_POST ["mensaje"];
$contenido= "Nombre: " . $nombre . "\nCorreo: "  . $correo . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;
mail($destino, "Contacto", $contenido);
header("Location:index.html");
?>