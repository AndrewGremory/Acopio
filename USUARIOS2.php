<!DOCTYPE html>
<html lang="es">
<?php session_start();
require('CONEXION.PHP');
?>
<head>
	<meta charset="utf-8">
	<script type="text/javascript">    
</script>
</head>
<body>
<?php
 
 $accion = $_POST['accion'];

 if($accion == 23)
	   {  $resultado = mysqli_query($conexion," SELECT  *FROM usuario where cedula=$_POST[cedula]");
		 
      if ($consulta = mysqli_fetch_array($resultado))
			{ echo "<script> alert('Este Usuario ya fue Registrado');</script>";
      }
			else 
			{
			  mysqli_query($conexion,"insert into usuario (nombres, correo, telefono, municipio, cedula, usuario, clave, rol) values ('$_POST[nombres]','$_POST[correo]',$_POST[telefono],'$_POST[municipio]',$_POST[cedula],'$_POST[usuario]','$_POST[clave]','$_POST[rol]')");  
			  echo "<script> bueno();</script>";
        echo "<script> alert('Registro Exitoso');</script>";
			}	
		}     
     ?>
</body>
</html>