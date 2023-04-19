<?php 
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Editar Registro</title>
</head>
<body style="max-width: 80%; margin: auto;" class="p-3 mb-2 bg-success-subtle text-emphasis-success">

    <form  id="form1" name="form1" method="POST" action="editUser1.php">
        <div class="row" >
            <div class="col-2"> </div>
            <div class="col-8">
                <h1>Editar Registro</h1>
                <br>
        <div class="row">
             <div class="col-3">
            <?php
              $sql = "select id  from usuarios";

                $resultado = mysqli_query($con2,$sql);
                
                
                if(mysqli_num_rows($resultado)!=0)
                {
                }
              ?>
                <label for="">id:</label>
                <select name="id" id="id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <?php
                    while($row = mysqli_fetch_array($resultado))
                        {
                            $rfc1 = $row['id'];
                            echo "<option> $rfc1 </option>";
                            
                        }
                  ?>
                </select>
            </div>

            <div class="col-3">
                <label for="">Nombre:</label>
                <input  type="text"  class="form-control" id="nombre" name="nombre" required value="">
            </div>
            <div class="col-3">
                <label for="">Apellido Paterno:</label>
                <input  type="text"  class="form-control" id="ap1" name="ap1" required value="">
            </div>
            <div class="col-3">
                <label for="">Apellido Materno:</label>
                <input  type="text"  class="form-control" id="ap2" name="ap2" required value="">
            </div>
        </div>
      <br>
        <div class="row">
            <div class="col-6">
                <label for="">Edad:</label>
                <input  type="text"  class="form-control" id="edad" name="edad" required value="">
            </div>
            <div class="col-6">
                <label for="">Fecha de Nacimiento:</label>
                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value="2018-07-22" >
            </div>
        </div>
      <br>
        <div class="row">
            <div class="col-4">
                <label for="">linkRedes:</label>
                <input  type="text"  class="form-control" id="linkRedes" name="linkRedes" required value="">
            </div>
            <div class="col-4">
                <label for="">Email:</label>
                <input  type="text"  class="form-control" id="email" name="email" required value="">
            </div>
            <div class="col-4">
                <label for="">Telefono:</label>
                <input  type="text"  class="form-control" id="telefono" name="telefono" required value="">
            </div>
        </div>
      <br>
        <div class="row">
        <div class="col-5"></div>
        <div class="col-7">
            <button type="submit" class="btn btn-success">Editar Registro✏</button>
        </div>
     </div>
            </div>
        </div>  
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</html>