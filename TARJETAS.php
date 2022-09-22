<?php session_start();
require('CONEXION.PHP');
?>
<!DOCTYPE html>
<html>
<head>
<title>Retiro</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"></head>
<body>
<?php 

$dtz = new DateTimeZone("America/Bogota");
$dt = new DateTime("now", $dtz);
$fecha = $dt->format("Y-m-d");	
$hora = $dt->format("h:i:s");
$anio = $dt->format("Y");

$regi = mysqli_query($conexion, "select municipio_liquidacion, producto_liquidacion, kilos_liquidacion, fecha_liquidacion  from liquidacion") or die ("Problemas en el select:" . mysqli_error($conexion));
$suma1 = 0; $suma2 = 0; $suma3 = 0; $suma4 = 0; $suma5 = 0; $suma6 = 0; $suma7 = 0; $suma8 = 0; $suma9 = 0; $suma10 = 0; $suma11 = 0; $suma12 = 0; $cacaoseco = "cacao seco"; $cacaobaba = " cacao en baba"; $cafeseco = " cafe pergamino seco"; $cafemojado = " cafe mojado"; $valledupar = "valledupar"; $codazzi = "codazzi"; $pbello = "pueblo bello";
while ($consu = mysqli_fetch_array($regi)) 
{ 
  $x = date("Y", strtotime( $consu['fecha_liquidacion']));
    if($consu['municipio_liquidacion'] == "codazzi" and $consu['producto_liquidacion'] == "cafe pergamino seco" and $anio == $x) 
    {
        $suma1 = $suma1 + $consu['kilos_liquidacion']; $municipio = $consu['municipio_liquidacion']; $cafeseco = $consu['producto_liquidacion'];
    }
    if($consu['municipio_liquidacion'] == "codazzi" and $consu['producto_liquidacion'] == "cafe mojado" and $anio == $x) 
    {
        $suma2 = $suma2 + $consu['kilos_liquidacion']; $municipio = $consu['municipio_liquidacion']; $cafemojado = $consu['producto_liquidacion'];
    }
    if($consu['municipio_liquidacion'] == "codazzi" and $consu['producto_liquidacion'] == "cacao seco" and $anio == $x) 
    {
        $suma3 = $suma3 + $consu['kilos_liquidacion']; $municipio = $consu['municipio_liquidacion']; $cacaoseco = $consu['producto_liquidacion'];
    }
    if($consu['municipio_liquidacion'] == "codazzi" and $consu['producto_liquidacion'] == "cacao en baba" and $anio == $x) 
    {
        $suma4 = $suma4 + $consu['kilos_liquidacion']; $municipio = $consu['municipio_liquidacion']; $cacaobaba = $consu['producto_liquidacion'];
    }
    if($consu['municipio_liquidacion'] == "valledupar" and $consu['producto_liquidacion'] == "cafe pergamino seco" and $anio == $x) 
    {
        $suma1 = $suma1 + $consu['kilos_liquidacion']; $valledupar = $consu['municipio_liquidacion']; $cafeseco = $consu['producto_liquidacion'];
    }
    if($consu['municipio_liquidacion'] == "valledupar" and $consu['producto_liquidacion'] == "cafe mojado" and $anio == $x) 
    {
        $suma2 = $suma2 + $consu['kilos_liquidacion']; $valledupar = $consu['municipio_liquidacion']; $cafemojado = $consu['producto_liquidacion'];
    }
    if($consu['municipio_liquidacion'] == "valledupar" and $consu['producto_liquidacion'] == "cacao seco" and $anio == $x) 
    {
        $suma3 = $suma3 + $consu['kilos_liquidacion']; $valledupar = $consu['municipio_liquidacion']; $cacaoseco = $consu['producto_liquidacion'];
    }
    if($consu['municipio_liquidacion'] == "valledupar" and $consu['producto_liquidacion'] == "cacao en baba" and $anio == $x) 
    {
        $suma4 = $suma4 + $consu['kilos_liquidacion']; $valledupar = $consu['municipio_liquidacion']; $cacaobaba = $consu['producto_liquidacion'];
    }
    if($consu['municipio_liquidacion'] == "pueblo bello" and $consu['producto_liquidacion'] == "cafe pergamino seco" and $anio == $x) 
    {
        $suma1 = $suma1 + $consu['kilos_liquidacion']; $pbello = $consu['municipio_liquidacion']; $cafeseco = $consu['producto_liquidacion'];
    }
    if($consu['municipio_liquidacion'] == "pueblo bello" and $consu['producto_liquidacion'] == "cafe mojado" and $anio == $x) 
    {
        $suma2 = $suma2 + $consu['kilos_liquidacion']; $pbello = $consu['municipio_liquidacion']; $cafemojado = $consu['producto_liquidacion'];
    }
    if($consu['municipio_liquidacion'] == "pueblo bello" and $consu['producto_liquidacion'] == "cacao seco" and $anio == $x) 
    {
        $suma3 = $suma3 + $consu['kilos_liquidacion']; $pbello = $consu['municipio_liquidacion']; $cacaoseco = $consu['producto_liquidacion'];
    }
    if($consu['municipio_liquidacion'] == "pueblo bello" and $consu['producto_liquidacion'] == "cacao en baba" and $anio == $x) 
    {
        $suma4 = $suma4 + $consu['kilos_liquidacion']; $pbello= $consu['municipio_liquidacion']; $cacaobaba = $consu['producto_liquidacion'];
    }
}
?>
<div class="grey-bg container-fluid">
  <section id="minimal-statistics">
    <div class="row">
      <div class="col-12 mt-3 mb-1">
        <h1 class="text-uppercase" style="margin-left:350px;">CENTRO DE ACOPIO ANEI</h1>
        <hr>
        <h4 style="margin-left:400px;">REPORTE DE COMPRAS</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-3 col-sm-6 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                <img src="CAFE.PNG" alt="Bootstrap" width="60" height="60">
                </div>
                <div class="media-body text-right">
                  <h3 style="color: #F71D08"><?php echo $suma1.' '."Kilos" ?></h3>
                  <span><?php echo $cafeseco ?></span>
                  <p style="color: #DAD40B"><?php echo $municipio ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                <img src="CAFE.PNG" alt="Bootstrap" width="60" height="60">
                </div>
                <div class="media-body text-right">
                  <h3 style="color: #F71D08"><?php echo $suma2.' '."Latas" ?></h3>
                  <span><?php echo $cafemojado ?></span>
                  <p style="color: #DAD40B"><?php echo $municipio ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                <img src="CACAO.PNG" alt="Bootstrap" width="60" height="60">
                </div>
                <div class="media-body text-right">
                  <h3 style="color: #F71D08"><?php echo $suma3.' '."Kilos" ?></h3>
                  <span><?php echo $cacaoseco ?></span>
                  <p style="color: #DAD40B"><?php echo $municipio ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                <img src="CACAO.PNG" alt="Bootstrap" width="60" height="60">
                </div>
                <div class="media-body text-right">
                  <h3 style="color: #F71D08"><?php echo $suma4. ' '."Latas" ?></h3>
                  <span><?php echo $cacaobaba ?></span>
                  <p style="color: #DAD40B"><?php echo $municipio ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="row">
      <div class="col-xl-3 col-sm-6 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                <img src="CAFE.PNG" alt="Bootstrap" width="60" height="60">
                </div>
                <div class="media-body text-right">
                  <h3 style="color: #F71D08"><?php echo $suma5.' '."Kilos" ?></h3>
                  <span><?php echo $cafeseco ?></span>
                  <p style="color: #DAD40B"><?php echo $valledupar ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                <img src="CAFE.PNG" alt="Bootstrap" width="60" height="60">
                </div>
                <div class="media-body text-right">
                  <h3 style="color: #F71D08"><?php echo $suma6.' '."Latas" ?></h3>
                  <span><?php echo $cafemojado ?></span>
                  <p style="color: #DAD40B"><?php echo $valledupar ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                <img src="CACAO.PNG" alt="Bootstrap" width="60" height="60">
                </div>
                <div class="media-body text-right">
                  <h3 style="color: #F71D08"><?php echo $suma7.' '."Kilos" ?></h3>
                  <span><?php echo $cacaoseco ?></span>
                  <p style="color: #DAD40B"><?php echo $valledupar ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                <img src="CACAO.PNG" alt="Bootstrap" width="60" height="60">
                </div>
                <div class="media-body text-right">
                  <h3 style="color: #F71D08"><?php echo $suma8. ' '."Latas" ?></h3>
                  <span><?php echo $cacaobaba ?></span>
                  <p style="color: #DAD40B"><?php echo $valledupar ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="row">
      <div class="col-xl-3 col-sm-6 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                <img src="CAFE.PNG" alt="Bootstrap" width="60" height="60">
                </div>
                <div class="media-body text-right">
                  <h3 style="color: #F71D08"><?php echo $suma9.' '."Kilos" ?></h3>
                  <span><?php echo $cafeseco ?></span>
                  <p style="color: #DAD40B"><?php echo $pbello ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                <img src="CAFE.PNG" alt="Bootstrap" width="60" height="60">
                </div>
                <div class="media-body text-right">
                  <h3 style="color: #F71D08"><?php echo $suma10.' '."Latas" ?></h3>
                  <span><?php echo $cafemojado ?></span>
                  <p style="color: #DAD40B"><?php echo $pbello ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                <img src="CACAO.PNG" alt="Bootstrap" width="60" height="60">
                </div>
                <div class="media-body text-right">
                  <h3 style="color: #F71D08"><?php echo $suma11.' '."Kilos" ?></h3>
                  <span><?php echo $cacaoseco ?></span>
                  <p style="color: #DAD40B"><?php echo $pbello ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                <img src="CACAO.PNG" alt="Bootstrap" width="60" height="60">
                </div>
                <div class="media-body text-right">
                  <h3 style="color: #F71D08"><?php echo $suma12. ' '."Latas" ?></h3>
                  <span><?php echo $cacaobaba ?></span>
                  <p style="color: #DAD40B"><?php echo $pbello ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
</body>
</html>