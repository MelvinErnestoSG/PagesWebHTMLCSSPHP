<?php
  $hombre=$_POST['txtNombre'];
  $para=$_POST['txtPara'];
  $apellido=$_POST['txtApellido'];
  $edad=$_POST['txtEdad'];
  $mensaje=$_POST['txtMensaje'];

  $asunto='Prueba de SMIP local';
  $cabeceras='From: remitente@dominio.com' . "\r\n".'Reply-To:remitente@dominio.com' . "\r\n".'X-Mailer: PHP/' .phpversion();
  
  if(mail($para, $asunto, $mensaje, $cabeceras)){
    echo "Su nombre es: ".$nombre." ".$apellido.",Correo a ".$para;
  }else{
    echo 'Error al enviar mensaje';
  }
?>