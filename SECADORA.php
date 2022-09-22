<?php session_start();
require('CONEXION.PHP');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Probando</title>
	<script src="jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

<link href = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel = "hoja de estilo" >  
<script src = "http://code.jquery.com/jquery-2.0.3.min.js" > </script>  
<script src = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js" > </script>

<link href = "bootstrap-editable / css / bootstrap-editable.css" rel = "stylesheet" >  
<script src = "bootstrap-editable / js / bootstrap-editable.js" > </script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"></script>
<script src="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css"></script>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">


</head>
<body>

<div class="container text-center">
		<h1 class="text-center">CENTRO DE ACOPIO ANEI</h1>
		<hr>
		<div class="row text-left">

       <div class="col"><input type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevafactura" value="Nuevo Secado"  onclick="con_secadora();"></div>                    
  <!-- <div class="col"><input type="button" class="btn btn-primary" data-toggle="modal" data-target="#prosecadora" value="Agregar Productos" ></div>   -->	                 
       <hr>
    </div>
       <input type="text" id="cuadro_buscar" onkeyup="mi_busqueda();" class="form-control" list="listanavegadores" placeholder="Buscar...">
       <datalist id="listanavegadores">
       <?php      
       $regi = mysqli_query($conexion, "select  *from liquidacion A where Not exists (select * from secadora B where A.codigo_liquidacion = B.codigo_producto) and A.municipio_liquidacion = '$_SESSION[municipio]' and A.producto_liquidacion='cafe mojado'") or die("Problemas en el select:" . mysqli_error($conexion));
       while ($consu = mysqli_fetch_array($regi)) 
       {                           
       ?>        
         <option label="<?php echo $consu['producto_liquidacion'].' '. $consu['kilos_liquidacion']?>" value="<?php echo $consu['codigo_liquidacion']?>" >
       <?php } ?>
       </datalist>     
    </div><br>
		
		
  <div class="row justify-content-md-center">		
    <div class="col-md-7">
     <div id="mostrar_mensaje"></div>    
    </div>
  </div>
</div>
    
			<!-- -----------------CAFE --------------------------------->	
            <div class="modal fade" id="prosecadora">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content row-1 col-md-6">
    
      
      
            <!-- cabecera del diálogo -->
            <div class="modal-header">
              <h4 class="modal-title">PRODUCTOS A SECAR</h4>
             <button type="button" class="close" data-dismiss="modal">X</button>
            </div>
      
            <!-- cuerpo del diálogo -->
            <div class="modal-body">
                <div class="container-fluid">   
                <form>       
                        
                
                        <div class="form-group row ">
                          CODIGO:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="codigo_producto" name="codigo_producto" ><br>
                          </div>
                        </div>

                        <div class="form-group row ">
                          CANTIDAD:
                          <div class="col-lg-7">
                            <input type="number" class="form-control" id="cantidad_secadora" name="cantidad_secadora" placeholder="0" min="0"><br>
                          </div>
                        </div>

                         <div class="form-group row">
                          <div class="offset-lg-1 col-lg-8">
                          
                            <button  onclick="produ_secadora();">Guardar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal" >Cerrar</button>
                          </div> 
                         </div>
                        </form>
                   </div>            
               </div>
        

              
          </div>
        </div>
      </div>
     
<!-- ----------------- EMPIEZA CODIGO AJAX ---------------------------------> 
</body>
</html>
<script type="text/javascript">
 
 $(document).ready(function () {
    $('#example').DataTable();
});
<!-- ----------------- CONTROL SECADORA--------------------------------->  
function con_secadora()
    { 
        
      var parametros = 
      {
        
        "accion":"20"
      };

      $.ajax({
        data: parametros,
        url: 'ANEI3.php',
        type: 'POST',
        
        beforesend: function()
        { 
          $('#mostrar_mensaje').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {     
            Swal.fire
            ({
             
              icon: 'success',
              title: 'Secadora Preparada',
              showConfirmButton: false,
              timer: 1500
            })
            
           $('#mostrar_mensaje').html(mensaje);
          
        }
      });
      return false;
    }  
     
<!-- ----------------- AGREGAR A LA SECADORA--------------------------------->  

function secadora()
    {
         
      var parametros = 
      {
        "codigo_producto" : $("#codigo_producto").val(),
        "cantidad_secadora" : $("#cantidad_secadora").val(),
        "producto" : $("#producto").val(),
        "accion":"21"
      };

      $.ajax({
        data: parametros,
        url: 'ANEI3.php',
        type: 'POST',
        
        beforesend: function()
        { 
          $('#mostrar_mensaje').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {                
           $('#mostrar_mensaje').html(mensaje);          
        }
      });
      return false;
    }
    <!-- ----------------- BUSQUEDA BONIFICACION--------------------------------->  
     
    var parametros = 
      {        
        "accion":"99"
      };

      $.ajax({
        data: parametros,
        url: 'ANEI3.php',
        type: 'POST',
        
        beforesend: function()
        { 
          $('#mostrar_mensaje').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {     
                      
           $('#mostrar_mensaje').html(mensaje);
          
        }
      });
<!-- ----------------- BUSQUEDA--------------------------------->  

function mi_busqueda()
{ 
    buscar = document.getElementById('cuadro_buscar').value;
 
  var parametros = 
  {
    "mi_busqueda" : buscar,
    
    "accion" : "22"
  };

  $.ajax({
    data: parametros,
    url: 'ANEI3.php',
    type: 'POST',
    
    beforesend: function()
    {
      $('#mostrar_mensaje').html("Mensaje antes de Enviar");
    },

    success: function(mensaje)
    {
      $('#mostrar_mensaje').html(mensaje);
    }
  });
}        
   
    
<!-- ----------------- BUSQUEDA BONIFICACION--------------------------------->
</script>
<!-- ----------------- TERMINA CODIGO AJAX ---------------------------------> 
