<?php 

include "../tools/conexion.php";
include "../header.php";

?>
<script type="text/javascript">

</script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/alertify.min.css">
  <link rel="stylesheet" href="css/style.css">
  <section class="container" id="opciones-iniciales">
    <div class="row">
          <h4 class="text-center my-5">Selecciona tu candidato favorito</h4>
          <div class="d-flex justify-content-center">
            <div class="p-1">
              <img src="img/candidatos/candidato-1.png" class="candidato-op" alt="1" width="100%" id="cand-1">
              <h4 class="nombreyapellidos text-center">Erik julio</h4>
              <h4 class="nombreyapellidos text-center">11-A</h4>
              <h3 class="nombreyapellidos text-center">#01</h3>

            </div>
            <div class="p-1">
              <img src="img/candidatos/candidato-2.png" class="candidato-op" alt="2" width="100%" id="cand-2">
              <h4 class="nombreyapellidos text-center">Luisa Ferrer</h4>
              <h4 class="nombreyapellidos text-center">11-A</h4>
              <h2 class="nombreyapellidos text-center">#02</h2>
            </div>
            <div class="p-1">
              <img src="img/candidatos/candidato-3.png" class="candidato-op" alt="3" width="100%" id="cand-3">
              <h4 class="nombreyapellidos text-center">Maria Perez</h4>
              <h4 class="nombreyapellidos text-center">11-A</h4>
              <h2 class="nombreyapellidos text-center">#03</h2>
            </div>
            <div class="p-1">
              <img src="img/candidatos/candidato-4.png" class="candidato-op" alt="4" width="100%" id="cand-4">
              <h4 class="nombreyapellidos text-center">Pello Torrez</h4>
              <h4 class="nombreyapellidos text-center">11-A</h4>
              <h2 class="nombreyapellidos text-center">#04</h2>
            </div>
            <div class="p-1">
              <img src="img/candidatos/candidato-5.png" class="candidato-op" alt="5" width="100%" id="cand-5">
              <h4 class="nombreyapellidos text-center">Laura Roncon</h4>
              <h4 class="nombreyapellidos text-center">11-A</h4>
              <h2 class="nombreyapellidos text-center">#05</h2>

              <!--<div style="text-align: center; width: 100%;">
                <div style="margin: 0 auto; width:100px; text-align:center;">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                </div>
            </div>-->
              
            </div>
            <div class="p-1">
              <img src="img/candidatos/candidato-6.png" class="candidato-op" alt="6" width="100%" id="cand-6">
              <h4 class="nombreyapellidos text-center">Voto en Blanco</h4><br><br>
            </div>
          </div>
    </div>
    <br><br><br>
    <!--<div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <button class="btn btn-outline-dark" type="button">Votar</button>&nbsp;&nbsp;
      <button class="btn btn-outline-success" type="button">Guardar</button>
      
    </div>-->
  </section>
  <script src="js/jQuery.js" charset="utf-8"></script>
  <script src="js/popper.min.js" charset="utf-8"></script>
  <script src="js/bootstrap.min.js" charset="utf-8"></script>
  <script src="js/alertify.min.js" charset="utf-8"></script>
  <script src="js/script.js" charset="utf-8"></script>
</body>
</html>
