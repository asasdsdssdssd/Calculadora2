<?php
   include('conexion.php')
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	<title>Proyecto Final</title>
</head>
<body style="max-width: 80%; margin: auto;" class="p-3 mb-2 bg-success-subtle text-emphasis-success">
<h1>Formulario</h1>
<table class="table table-dark table-borderless">
     <thead>
       <tr class="table-info">
         <th scope="col">id</th>
         <th scope="col">Nombre</th>
         <th scope="col">Apellido Materno</th>
         <th scope="col">Apellido Paterno</th>
         <th scope="col">Edad</th>
         <th scope="col">Fecha de Nacimiento</th>
         <th scope="col">Redes</th>
         <th scope="col">Telefono</th>
         <th scope="col">Email</th>
         <th scope="col">Opciones</th>
       </tr>
     </thead>
     <tbody>
      <?php
           foreach ($resultado as $r) { ?>
            <tr>
               <td><?php echo $r['id']; ?></td>
               <td><?php echo $r['nombre']; ?></td>
               <td><?php echo $r['ap1']; ?></td>
               <td><?php echo $r['ap2']; ?></td>
               <td><?php echo $r['edad']; ?></td>
               <td><?php echo $r['fechaNacimiento']; ?></td>
               <td><?php echo $r['linkRedes']; ?></td>
               <td><?php echo $r['telefono']; ?></td>
               <td><?php echo $r['email']; ?></td>
               <td>
               	<a href="editUser.php" type="button" class="btn btn-outline-secondary">Editar🖊</a>
               	<a href="<?php echo 'deleteUser.php?id='.$r['id'];?>" type="button" class="btn btn-outline-secondary">Eliminar🗑</a>
               </td> 
            </tr>  
            <?php }?>
   </table>
    <div class="row">
	 	<div class="col-4"></div>
	 	<div class="col-8">
	 		<button type="button" class="btn btn-success" onclick="agregar()">Agregar más Usuarios✔</button>
	 	</div>
	 </div>

<script type="text/javascript">
	function agregar(){
		window.location.replace("addUser.php");

	}


</script>
</body>
</html>