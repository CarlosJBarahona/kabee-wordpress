<?php get_header(); 

$nombre = $_POST['nombre'];
$email = $_POST['mail'];
$mensaje = $_POST['mensaje'];
$para = 'ingbarahonacarlos@hotmail.com';
$titulo = 'Kabee';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://TUSITIOWEB.COM';
</script>";
} else {
echo 'Falló el envio';
}
}
?>

  <div class="contenidocontac "><!--contenedor-->
    <div class="headermscontacto">

      <div class="contmensajecontactos col-xs-push-1 col-xs-10 col-sm-push-3 col-sm-6   col-md-push-3 col-lg-push-3 col-md-6 col-lg-6 ">

        <div class="mensajeqcontactos col-md-12 col-lg-12">

          <h5 class="titulomensaje">¡CONTACTANOS!</h5>
          <h5 class="infomensaje">Lorem ipsum dolor sit amet, consectetuer adipiscing elit
          . Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et </h5>

        </div>

      </div>

    </div>

     <div class="col-sm-push-1 col-md-push-2 col-lg-push-2  col-sm-8 col-md-7 col-lg-8 contformulario">

<div class="formcont">

       <div class="conttextdatos">
        <div class="textdatos ">
          <div class="datos">NOMBRE</div>
          <div class="datos">E-MAIL</div>
          <div class="datos">ASUNTO</div>
          <div class="datos">MENSAJE</div>
        </div><!--conttextdatos-->
     </div>
    
    <div class="formulario">

      <form metod="POST" action="">
            <input class="nombre" type="text" name="nombre" id="nombre">
            <input class="mail" type="text" name="email" id="email">
            <input class="asunto" type="text" name="asunto" id="asunto">  
            <textarea class="mensajeform" name="mensaje" ></textarea>
            <input class="enviarbtn" type="submit" value="ENVIAR" id="botonenviar">
        </form>

    </div>

</div>



  </div><!--contformulario-->




</div><!--contenedor-->

<?php get_footer(); ?>