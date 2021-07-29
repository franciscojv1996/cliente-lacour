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
    
      $a = new menu;
      $a -> navn();
  ?> <br>

    <div class="container">
      <div class="row justify-content-around" style="background-color: #dd0">
        <div class="col-lg-5 text-center" style="background-color: #ccc">
          <h4>Tallas</h4>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="1" id="checka" onchange="javascript:adulto()">
            <label class="form-check-label" for="inlineCheckbox1">Adulto</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="2" id="checkj" onchange="javascript:juvenil()">
            <label class="form-check-label" for="inlineCheckbox2">Juvenil</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" data-toggle="modal" data-target="#exampleModal">
            <label class="form-check-label" for="inlineCheckbox3">Infantil</label>
              <?php 
                $b = new modal;
                $b -> Ventana();
              ?>
          </div>
        </div>

        <div class="col-lg-5 text-center" style="background-color: #ccc">
          <h4>Tipo de pedido</h4>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="opc" value="1" onchange="mostrar(this.value);">
            <label class="form-check-label" for="inlineRadio1">Curva</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="opc" value="2" onchange="mostrar(this.value);" >
            <label class="form-check-label" for="inlineRadio2">Cantidad</label>
          </div>
        </div>
      </div>
    </div>

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

      <div class="container" id="btnCurva" style="display: none;"> <input type="button" class="btn btn-warning btn-lg btn-block btn-sm h5" value="curva" onclick="curva()"> <br> </div>

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
  
</body>
</html>