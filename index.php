<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
  <style> #cuerpoT{  display: none;  }  </style>
<body>
  <?php 
    include "php/menu.php";
    include "php/contAdulto.php";
    include "php/contJuvenil.php";
    include "php/contInfantil.php";
    include "php/modal.php";
      $a = new menu;
      $a -> navn();
  ?> <br>
  
  <div class="container">
    
    <div class="row justify-content-center" style="background-color: #dd0">

      <div class="col-lg-6">
        
        <input type="checkbox" id="checka" onchange="javascript:adulto()">
        <label> Tallas de Adultos</label> <br>
        
        <input type="checkbox" id="checkj" onchange="javascript:juvenil()">
        <label> Tallas Juveniles</label>  <br>

        <input type="checkbox" data-toggle="modal" data-target="#exampleModal"/>
        <label> Tallas Infantiles</label> 
          <?php 
            $b = new modal;
            $b -> Ventana();
          ?>
      </div>

      <div class="col-lg-6">
        <h2 >lista de curvas y cantidad</h2>
      </div>
      
    </div>

  </div> <br>

    <div class="container" style="background-color: #ccc">
      
      <div class="col-lg-12" id="contentA" style="display: none;"><!--Adulto-->
        <?php
          $c = new cont;
          $c-> Adulto();
        ?>
      </div> 

      <div class="col-lg-12" id="contentJ" style="display: none;"> <!--Juvenil-->
        <?php
          $c = new conte;
          $c -> Juvenil(); 
        ?>
      </div>

      <div class="container" id="cuerpoT" style=""> <!-- Titulo de tallas infantiles -->
        <h2 class="text-center">Tallas Infantiles</h2> 
        <?php 
          $g = new conten;

          $g -> InfantilC();          
          $g -> InfantilD();
          $g -> InfantilM();
        ?>
      </div>

    </div>

  

  <script>

    window.addEventListener("load",tituloInfantil);
    function tituloInfantil() {
      var x = document.getElementById('cuerpoT');
      if (x.style.display === 'none') {
          x.style.display = 'block';
      } else {
          x.style.display = 'none';
      }
    }

  </script>

  <!-- Optional JavaScript -->
  <script type="text/javascript" src="js\tabla.js"></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS-->
  <script src="js\jquery-3.3.1.slim.min.js"></script>
  <script src="js\popper.min.js"></script>
  <script src="js\bootstrap.min.js"></script>

</body>
</html>