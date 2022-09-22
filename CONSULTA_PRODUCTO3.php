<!DOCTYPE html>
<html lang="es">
<?php session_start();
require('CONEXION.PHP');
?>
<head>
	<meta charset="utf-8">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"></script>
<script src="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
</head>	
<body>
<?php

 $accion = 1;

if($accion == 1)
{  
 ?>
         <h1 class="text-center" style="margin-left:450px;">CENTRO DE ACOPIO ANEI</h1>
		<hr>
		<h2 class="text-center" style="margin-left:510px;">HISTORIAL DE PRECIOS</h2>         
        <table id="cesar" class="display" style="width:100%">
        <thead>
            <tr>                
                <th>NOMBRE</th>
                <th>TIPO</th>
                <th>PRECIO</th>
                <th>PRIMA</th>
                <th>POLITICA</th>
                <th>DESCRIPCION</th>
                <th>FECHA</th>
               
            </tr>
        </thead>
     
		<tbody>
            <?php
            $resul = mysqli_query($conexion,"select *from producto2");
		    while($consul = mysqli_fetch_array($resul))
		    { 
          
            ?>
			 <tr>			 
				 <td><?php echo $consul['nombre']?></td>
                 <td><?php echo $consul['tipo']?></td>
                 <td><?php echo $consul['precio']?></td>
                 <td><?php echo$consul['prima_producto']?></td>
                 <td><?php echo $consul['politica']?></td>
                 <td><?php echo $consul['descripcion']?></td>    
                 <td><?php echo $consul['fecha']?></td>         
		 <?php 
		 }
         ?>
		 </tbody>       
     <tfoot>
         <tr>         
         <th>NOMBRE</th>
         <th>TIPO</th>
         <th>PRECIO</th>
         <th>PRIMA</th>
         <th>POLITICA</th>
         <th>DESCRIPCION</th>        
         <th>FECHA</th>
         </tr>
     </tfoot>
 </table>
 <script type="application/javascript">
    $(document).ready( function () {
    $('#cesar').DataTable();
    } );
</script>
 <?php 
}
?>
</body>
</html>