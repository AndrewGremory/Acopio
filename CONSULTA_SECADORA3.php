<!DOCTYPE html>
<html lang="es">
<?php session_start();
require('CONEXION.PHP');
?>
<head>
<meta charset="utf-8">

</head>
<body>
<?php  

 $accion = $_POST['accion'];

 if($accion == 1)
{  ?> 
        
    <table id="cesar" class="display" style="width:100%">
        <thead>
            <tr>
                
                <th>LOTE</th>
                <th>CANTIDAD</th>      
                <th>CONSULTAR</th>           
                <?php 
                if ($_SESSION['rol'] == "administrador" || $_SESSION['rol'] == "gerente") 
                {?>
                <th>ELIMINAR</th>
                <?php } ?>
            </tr>
        </thead>      	
		 	
		 <tbody>
         <?php
           $resul = mysqli_query($conexion,"select codigo_secadora, lote, sum(cantidad_secadora) as cantidad from secadora group by (lote)");
           while($consul = mysqli_fetch_array($resul))
           {  
            ?>
			 <tr>				 
				         <td><?php echo$consul['lote']?></td>		 		
                 <td><?php echo $consul['cantidad']?></td>	
                 <td><input type="button" class="btn btn-primary" id="codigo_secadora" value="Consultar" onclick="consultar(<?php echo $consul['codigo_secadora']?>);"></td>
                 <?php 
                 if ($_SESSION['rol'] == "administrador" || $_SESSION['rol'] == "gerente") 
                 {?>
                 <td><input type="button" class="btn btn-primary" id="codigo_secadora" value="Eliminar" onclick="eliminar(<?php echo $consul['codigo_secadora']?>);"></td>
                 <?php } ?>			 
			 </tr>	
             <?php
            }	
            ?>	 
		 </tbody>			
        
       <tfoot>
         <tr>
                <th>LOTE</th>
                <th>CANTIDAD</th>  
                <th>CONSULTAR</th>  
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
if($accion == 2)
{ 
  mysqli_query($conexion, "delete FROM secadora where codigo_secadora = $_POST[eliminar]");
  mysqli_query($conexion, "delete FROM controlsecadora where cod_secadora = $_POST[eliminar]");

?>        
  <table id="cesar" class="display" style="width:100%">
        <thead>
            <tr>
                
                <th>LOTE</th>
                <th>CANTIDAD</th>      
                <th>CONSULTAR</th>           
                <?php 
                if ($_SESSION['rol'] == "administrador" || $_SESSION['rol'] == "gerente") 
                {?>
                <th>ELIMINAR</th>
                <?php } ?>
            </tr>
        </thead>      	
		 	
		 <tbody>
         <?php
           $resul = mysqli_query($conexion,"select codigo_secadora, lote, sum(cantidad_secadora) as cantidad from secadora group by (lote)");
           while($consul = mysqli_fetch_array($resul))
           {  
            ?>
			 <tr>				 
				         <td><?php echo$consul['lote']?></td>		 		
                 <td><?php echo $consul['cantidad']?></td>	
                 <td><input type="button" class="btn btn-primary" id="codigo_secadora" value="Consultar" onclick="consultar(<?php echo $consul['codigo_secadora']?>);"></td>
                 <?php 
                 if ($_SESSION['rol'] == "administrador" || $_SESSION['rol'] == "gerente") 
                 {?>
                 <td><input type="button" class="btn btn-primary" id="codigo_secadora" value="Eliminar" onclick="eliminar(<?php echo $consul['codigo_secadora']?>);"></td>
                 <?php } ?>			 
			 </tr>	
             <?php
            }	
            ?>	 
		 </tbody>			
        
       <tfoot>
         <tr>
                <th>LOTE</th>
                <th>CANTIDAD</th>  
                <th>CONSULTAR</th>  
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
 ?>
        
        <table id="cesar" class="display" style="width:100%">
        <thead>
            <tr>
                <th>CODIGO</th>
                <th>PRODUCTO</th>
                <th>CANTIDAD</th>
                <th>LOTE</th>
                <?php 
                if ($_SESSION['rol'] == "administrador" || $_SESSION['rol'] == "gerente") 
                {?>
                <th>ELIMINAR</th>
                <?php } ?>
            </tr>
        </thead>      
		
		 	
		 <tbody>
         <?php
           $resul = mysqli_query($conexion,"select *from secadora");
           while($consul = mysqli_fetch_array($resul))
           {  
            ?>
			 <tr>				 
				 <td><?php echo$consul['codigo_producto']?></td>
         <td><?php echo$consul['producto']?></td>
				 <td><?php echo$consul['cantidad_secadora']?></td>		 		
                 <td><?php echo $consul['lote']?></td>		
                 <?php 
                 if ($_SESSION['rol'] == "administrador" || $_SESSION['rol'] == "gerente") 
                 {?>
                 <td><input type="button" class="btn btn-primary" id="numero" value="Eliminar" onclick="eliminar2(<?php echo $consul['numero']?>);"></td>
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
                <th>CANTIDAD</th>
                <th>LOTE</th>
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
if($accion == 4)
{ 
  mysqli_query($conexion, "delete FROM secadora where numero = $_POST[eli]");
  ?>        
    <table id="cesar" class="display" style="width:100%">
        <thead>
            <tr>
                <th>CODIGO</th>
                <th>PRODUCTO</th>
                <th>CANTIDAD</th>
                <th>LOTE</th>
                <?php 
                if ($_SESSION['rol'] == "administrador" || $_SESSION['rol'] == "gerente") 
                {?>
                <th>ELIMINAR</th>
                <?php } ?>
            </tr>
        </thead>      
		
		 	
		 <tbody>
         <?php
           $resul = mysqli_query($conexion,"select *from secadora");
           while($consul = mysqli_fetch_array($resul))
           {  
            ?>
			 <tr>				 
				 <td><?php echo$consul['codigo_producto']?></td>
         <td><?php echo$consul['producto']?></td>
				 <td><?php echo$consul['cantidad_secadora']?></td>		 		
                 <td><?php echo $consul['lote']?></td>		
                 <?php 
                 if ($_SESSION['rol'] == "administrador" || $_SESSION['rol'] == "gerente") 
                 {?>
                 <td><input type="button" class="btn btn-primary" id="numero" value="Eliminar" onclick="eliminar2(<?php echo $consul['numero']?>);"></td>
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
                <th>CANTIDAD</th>
                <th>LOTE</th>
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