<?php 

include "../tools/conexion.php";
include "../header.php";

?>
<script type="text/javascript">

</script>
  <link href="css/style.bundle.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/alertify.min.css">
  <link rel="stylesheet" href="css/style.css">
  <section class="container" id="opciones-iniciales">
    <div class="row">
      <div class="col-lg-12 my-5">
        <img src="img/logo-mundo.jpg" width="10%" class="mx-auto d-block" alt="">
        <h1 class="text-center">Sistema de Electoral personero</h1>
        <h5 class="text-center">Colegio Mundo de Ilusiones</h5>
      </div>
      
    </div>
  </section>
  <section class="container" id="resultados-sec">
    <h2 class="text-center">Resultados</h2>
    <div class="row">
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/candidatos/candidato-1.png" width="80%" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Erik julio</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary" id="candidat-1"></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/candidatos/candidato-2.png" width="80%" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Luisa Ferrer</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary" id="candidat-2"></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/candidatos/candidato-3.png" width="80%" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Gianella Lastra</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary" id="candidat-3"></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/candidatos/candidato-4.png" width="80%" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Pello Torrez</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary" id="candidat-4"></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/candidatos/candidato-5.png" width="80%" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Laura Roncon</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary" id="candidat-5"></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/candidatos/candidato-6.png" width="80%" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Voto en Blanco</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary" id="candidat-6"></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="js/jQuery.js" charset="utf-8"></script>
  <script src="js/popper.min.js" charset="utf-8"></script>
  <script src="js/bootstrap.min.js" charset="utf-8"></script>
  <script src="js/alertify.min.js" charset="utf-8"></script>
  <script src="js/script.js" charset="utf-8"></script>
  
<?php echo $endheader;?>  
