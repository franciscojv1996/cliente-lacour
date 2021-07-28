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
    include "php/texto.php";
      $h = new inicio;
      $h ->Modal();

      $a = new menu;
      $a -> navn();
  ?> <br>

    <?php
      $d = new submenu;
      $d -> selector();
    ?><br>

    <div class="container" style="background-color: #ccc">
      
      <div class="col-lg-12" id="contentA" style="display: none;" ><!--Adulto-->
        <?php
          $e = new cont;
          $e-> Adulto();
        ?> 
      </div> 

      <div class="col-lg-12" id="contentJ" style="display: none;"> <!--Juvenil-->
        <?php
          $c = new conte;
          $c -> Juvenil(); 
        ?>
      </div>

      <div class="container"> <!-- Titulo de tallas infantiles -->
        <?php 
          $g = new conten;
          
          $g -> Texto();
          $g -> InfantilC();          
          $g -> InfantilD();
          $g -> InfantilM();
        ?>
      </div>

      <div class="container" id="btnCantidad"  style="display: none;"> <input type="button" class="btn btn-primary btn-lg btn-block btn-sm h5" value="cantidad" onclick="cantidad()" > <br>  </div>

      <div class="container" id="btnCurva" style="display: none;"> <input type="button" class="btn btn-warning btn-lg btn-block btn-sm h5" value="curva" onclick="curva()"disabled> <br> </div>

    </div> <br>
      <?php 
        $m = new aleta;
        $m -> Mensaje();
      ?>
    
  <!-- Optional JavaScript -->
    <script type="text/javascript" src="js\curva.js"></script>
    <script type="text/javascript" src="js\tabla.js"></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS-->
    <script src="js\jquery-3.3.1.slim.min.js"></script>
    <script src="js\popper.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
    
    <script>
      $(document).ready(function()  {
      $("#Modal").modal("show");  });
    </script>

</body>
</html>