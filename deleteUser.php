<?php
    include('conexion.php');
    $id = $_GET ['id'];
     $sql1 = "DELETE FROM usuarios WHERE id= '$id'";

    if (mysqli_query($con2,$sql1)) {
       header('Location: index.php');
    }
    else{
        echo "No se pudo";
    }