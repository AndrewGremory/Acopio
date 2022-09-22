<?php session_start();
require('CONEXION.PHP');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
	$accion = $_POST['accion'];
    
	$dtz = new DateTimeZone("America/Bogota");
    $dt = new DateTime("now", $dtz);
    $fecha= $dt->format("Y-m-d");
    $hora= $dt->format("h:i:s");


if($accion == 20)
{      
   mysqli_query($conexion,"insert into controlsecadora (fecha_secadora, hora_secadora, municipio) values ('$fecha','$hora', '$_SESSION[municipio]')");      
}

if($accion == 21)
{  
   $resultados = mysqli_query($conexion,"select *from controlsecadora  where municipio = '$_SESSION[municipio]'");
   $suma = 0; $ultimo = 0; 
   while($consulta = mysqli_fetch_array($resultados))
   { $ultimo = $consulta['cod_secadora']; $suma = $suma +1;}   

   if ($ultimo == 0) 
   {  echo "<script>alert('LA SECADORA NO ESTA LISTA')</script>"; }   
   else 
   {
                 if($_SESSION['municipio']=="codazzi")
		         {$muni="AC";} 
		         if($_SESSION['municipio']=="pueblo bello")
		         {$muni="PB";}
		         if($_SESSION['municipio']=="valledupar")
		         {$muni="VP";} 
     mysqli_query($conexion,"insert into secadora (codigo_secadora, codigo_producto, cantidad_secadora, lote, producto) values ($ultimo,'$_POST[codigo_producto]', $_POST[cantidad_secadora], 'LOTE - $muni - $fecha - $suma','$_POST[producto]')"); 
   }

   $accion =99;  
 }

 if($accion == 22)
{ 
    $mi_busqueda = $_POST['mi_busqueda'];
    $r = mysqli_query($conexion,"select *from secadora where codigo_secadora LIKE '%$mi_busqueda%'");
    if ($c = mysqli_fetch_array($r)) 
    { echo " <script> alert('Este producto ya se registro')</script>"; }
    else 
    {   
    $resultado = mysqli_query($conexion," SELECT  *FROM liquidacion where codigo_liquidacion LIKE '%$mi_busqueda%' ");
    if($consulta = mysqli_fetch_array($resultado))
    {
    ?>
        <h2 class="text-center">CREAR LOTES</h2><br>
        <div class="form-group row">
        <div class="col-lg-4">
        <div class="input-group mb-3 form-floating">
        <input type="text" class="form-control" id="codigo_producto" name="codigo_producto" value="<?php echo $consulta['codigo_liquidacion']?>" readonly><br>
        <span class="input-group-text">📄</span>
        <label for="codigo" class="form-label">Codigo:</label>  
        </div>
        </div>

        <div class="col-lg-5">
		<div class="input-group mb-3 form-floating">
		<input type="text" class="form-control" id="producto" name="producto" value="<?php echo $consulta['producto_liquidacion']?>" readonly><br>
	    <span class="input-group-text">📄</span>
		<label for="producto" class="form-label">Producto:</label>
		</div>
	    </div>

        <div class="col-lg-3">
	    <div class="input-group mb-3 form-floating">
		<input type="number" class="form-control" id="cantidad_secadora" name="catidad_secadora" value="<?php echo $consulta['kilos_liquidacion']?>" readonly><br>
		<span class="input-group-text">📄</span>
		<label for="kilos_netos" class="form-label">Kilos/Latas:</label>
	    </div>
	    </div>
        </div>  

        <div class="form-group row ">
		<div class="offset-lg-4 col-lg-8">
		<button class="btn btn-secondary btn-lg" onclick="secadora();">Guardar</button>
		</div> 
		</div>
		</form>
<?php  } 
} 
}

 if($accion == 99)
 {  $ultimo=0;
    $resultado = mysqli_query($conexion,"select *from controlsecadora");
    while($consulta = mysqli_fetch_array($resultado))
    { $ultimo = $consulta['cod_secadora']; }
  $resul = mysqli_query($conexion,"select *from secadora where codigo_secadora = $ultimo");
  ?>
 
  <h2 class="text-center">CREAR LOTES</h2><br>
  <table id="cesar" class="table table-striped table-bordered" style="width:100%">
  <thead>
      <tr>
          <th>CODIGO</th>
          <th>PRODUCTO</th>
          <th>CANTIDAD</th>
      </tr>
  </thead>  
   
   <tbody>
   <?php 
  while($consul = mysqli_fetch_array($resul))
  {  ?> 
       <tr>
           <td><?php echo $consul['codigo_producto']?> </td>
           <td><?php echo $consul['producto']?> </td>
           <td><?php echo $consul['cantidad_secadora']?> </td>          
       </tr>  
    <?php 
  }
  ?>     
   </tbody>  
    
  
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