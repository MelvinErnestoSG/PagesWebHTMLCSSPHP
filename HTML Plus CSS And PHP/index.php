<?php>
    //conectamos Con el servidor
    $conectar=@mysql_connect('localhost','root','');
    if(!$conectar){
        echo"No Se Conectar Con El Servidor";
    }else{
        $base=mysql_select_bd('prueba');
        if(!$base){
            echo"No se Emcontro  La base De Datos";
        }
    }
    //recuperar las variables
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $mensaje=$_POST['mensaje'];
    //hacemos la sentencia de sql
    $sql="INSERT INTO datos VALUES('$nombre','$correo','$mensaje',)";
    //Hacemos la sentencia de sql
    $ejecutar=mysql_query($sql);
    //Verificamos la ejecucuon
    if(!$ejecutar){
        echo"Hubo Algun Error";
    }else{
        echo"Datos Guardados Correctamente<br><a href='index'.html>Volver</a>";
    }
?>