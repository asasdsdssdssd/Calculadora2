<?php
    include('conexion.php');
    $nombre = $_POST ['nombre'];
     $ap1 = $_POST ['ap1'];
      $ap2 = $_POST ['ap2'];
       $edad = $_POST ['edad'];
        $fechaNacimiento = $_POST ['fechaNacimiento'];
         $linkRedes = $_POST ['linkRedes'];
          $email = $_POST ['email'];
           $telefono = $_POST ['telefono'];

     $sql1 = "INSERT INTO usuarios(nombre, ap1, ap2, edad, fechaNacimiento, linkRedes, email, telefono) VALUES ('$nombre','$ap1','$ap2','$edad','$fechaNacimiento','$linkRedes','$email','$telefono')";

    if (mysqli_query($con2,$sql1)) {
        header('Location: index.php');
    }
    else{
        echo "No se pudo";
    }