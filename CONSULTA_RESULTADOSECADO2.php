<?php session_start();
require('CONEXION.PHP');
?>
<!DOCTYPE html>
<html lang="es">

<head>
 <meta charset="utf-8">
</head>	

<body>
<?php 

 $accion = $_POST['accion'];
 
if($accion == 1)
{  
 ?>
        <table id="cesar" class="display" style="width:100%">
        <thead>
            <tr>
                <th>CODIGO</th>
                <th>PRODUCTO</th>
                <th>TIPO GRANO</th>
                <th>N. LATAS</th>
                <th>KILOS NETOS</th>                
                <th>VALOR</th>
                <th>TOTAL</th>
                <th>TIPO DE PAGO</th>
                <th>N. SACOS</th>
                <th>K. SOBRANTES</th>
                <th>FECHA</th>
                <th>OBSERVACIONES</th>
                <?php 
                if ($_SESSION['rol'] == "administrador" || $_SESSION['rol'] == "gerente") 
                {?>
                <th>ELIMINAR</th>
                <?php } ?>
              
            </tr>
        </thead>
       		
		 <tbody>
          <?php
          $resul = mysqli_query($conexion,"select *from resultadosecado");
		  while($consul = mysqli_fetch_array($resul))
		  { 

            $datos=$consul[0]."||".
            $consul[1]."||".
            $consul[2]."||".
            $consul[3]."||".
            $consul[4]."||".
            $consul[5]."||".
            $consul[6]."||".
            $consul[7];
         ?>
			 <tr>
				 <td><?php echo $consul['codigo_resultado']?></td>
                 <td><?php echo $consul['producto']?></td>
                 <td><?php echo $consul['tipograno_resultado']?></td>
                 <td><?php echo $consul['latas']?></td>
				 <td><?php echo $consul['cantidad_resultado']?></td>                 
                 <td><?php echo $consul['costo_resultado']?></td>
				 <td><?php echo $consul['costo_total_resultado']?></td>
				 <td><?php echo $consul['tipo_pago']?></td>
                 <td><?php echo $consul['sacos']?></td>
                 <td><?php echo $consul['kilos_sobrantes']?></td>
				 <td><?php echo $consul['fecha_resultado']?></td>
				 <td><?php echo $consul['observaciones_resultado']?></td>
                 <?php 
                 if ($_SESSION['rol'] == "administrador" || $_SESSION['rol'] == "gerente") 
                 {?>
                 <td><input type="button" class="btn btn-primary" id="numero" value="Eliminar" onclick="eliminar(<?php echo $consul['numero']?>);"></td>
                 <?php } ?>
             </tr>
			 
            <?php
            }
            ?> 
		 </tbody>
		        
     <tfoot>
         <tr>
                <th>CODIGO</th>
                <th>PRODUCTO</th>
                <th>TIPO GRANO</th>
                <th>N. LATAS</th>
                <th>KILOS NETOS</th>                
                <th>VALOR</th>
                <th>TOTAL</th>
                <th>TIPO DE PAGO</th>
                <th>N. SACOS</th>
                <th>K. SOBRANTES</th>
                <th>FECHA</th>
                <th>OBSERVACIONES</th>
         <?php 
         if ($_SESSION['rol'] == "administrador" || $_SESSION['rol'] == "gerente") 
         {?>
         <th>ELIMINAR</th>
         <?php } ?>
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
if($accion == 3)
{
 $resultados= mysqli_query($conexion,"update resultadosecado set cantidad_resultado=$_POST[cantidad_resultado], costo_resultado=$_POST[costo_resultado], costo_total_resultado=$_POST[costo_total_resultado], observaciones_resultado='$_POST[observaciones_resultado]', tipo_pago='$_POST[tipo_pago]' where codigo_resultado='$_POST[codigo_resultado]'");
}   
if($accion == 4)
{
    $resul= mysqli_query($conexion,"select *FROM resultadosecado where numero=$_POST[eli]");  
    if($consul = mysqli_fetch_array($resul))
    {mysqli_query($conexion,"delete FROM compra where marca='$consul[codigo_resultado]'");  
     mysqli_query($conexion,"delete FROM resultadosecado where numero=$_POST[eli]");
    }
 ?>
 <table id="cesar" class="display" style="width:100%">
        <thead>
            <tr>
                <th>CODIGO</th>
                <th>PRODUCTO</th>
                <th>TIPO GRANO</th>
                <th>N. LATAS</th>
                <th>KILOS NETOS</th>                
                <th>VALOR</th>
                <th>TOTAL</th>
                <th>TIPO DE PAGO</th>
                <th>N. SACOS</th>
                <th>K. SOBRANTES</th>
                <th>FECHA</th>
                <th>OBSERVACIONES</th>
                <?php 
                if ($_SESSION['rol'] == "administrador" || $_SESSION['rol'] == "gerente") 
                {?>
                <th>ELIMINAR</th>
                <?php } ?>
              
            </tr>
        </thead>
       		
		 <tbody>
          <?php
          $resul = mysqli_query($conexion,"select *from resultadosecado");
		  while($consul = mysqli_fetch_array($resul))
		  { 

            $datos=$consul[0]."||".
            $consul[1]."||".
            $consul[2]."||".
            $consul[3]."||".
            $consul[4]."||".
            $consul[5]."||".
            $consul[6]."||".
            $consul[7];
         ?>
			 <tr>
                 <td><?php echo $consul['codigo_resultado']?></td>
                 <td><?php echo $consul['producto']?></td>
                 <td><?php echo $consul['tipograno_resultado']?></td>
                 <td><?php echo $consul['latas']?></td>
				 <td><?php echo $consul['cantidad_resultado']?></td>                 
                 <td><?php echo $consul['costo_resultado']?></td>
				 <td><?php echo $consul['costo_total_resultado']?></td>
				 <td><?php echo $consul['tipo_pago']?></td>
                 <td><?php echo $consul['sacos']?></td>
                 <td><?php echo $consul['kilos_sobrantes']?></td>
				 <td><?php echo $consul['fecha_resultado']?></td>
				 <td><?php echo $consul['observaciones_resultado']?></td>
                 <?php 
                 if ($_SESSION['rol'] == "administrador" || $_SESSION['rol'] == "gerente") 
                 {?>
                 <td><input type="button" class="btn btn-primary" id="numero" value="Eliminar" onclick="eliminar(<?php echo $consul['numero']?>);"></td>
                 <?php } ?>
                </tr>
			 
            <?php
            }
            ?> 
		 </tbody>
		 
		
		
       
     <tfoot>
         <tr>
                <th>CODIGO</th>
                <th>PRODUCTO</th>
                <th>TIPO GRANO</th>
                <th>N. LATAS</th>
                <th>KILOS NETOS</th>                
                <th>VALOR</th>
                <th>TOTAL</th>
                <th>TIPO DE PAGO</th>
                <th>N. SACOS</th>
                <th>K. SOBRANTES</th>
                <th>FECHA</th>
                <th>OBSERVACIONES</th>
         <?php 
         if ($_SESSION['rol'] == "administrador" || $_SESSION['rol'] == "gerente") 
         {?>
         <th>ELIMINAR</th>
         <?php } ?>
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