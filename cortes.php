<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <?php
  include "php/menu.php";
  include "php/contAdulto.php";
  include "php/contJuvenil.php";
  include "php/contInfantil.php";
  include "php/modal.php";
  include "php/texto.php";

  $a = new menu;
  $a->navn();
  ?> <br>

  <div class="container" style="background-color: #ccc">
    <div class="row justify-content-around">
      <div class="col-lg-5 text-center">
        <h4>Tallas</h4>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" value="1" id="checka" onchange="javascript:adulto()" checked>
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
          $b->Ventana();
          ?>
        </div>
      </div>

      <div class="col-lg-5 text-center" style="background-color: #ccc">
        <h4>Tipo de pedido</h4>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="radio1" value="1" onchange="mostrar(this.value);" checked>
          <label class="form-check-label" for="inlineRadio1">Curva</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="radio1" value="2" onchange="mostrar(this.value);">
          <label class="form-check-label" for="inlineRadio2">Cantidad</label>
        </div>
      </div>
    </div> <br>

    <form action="php/bdinsert.php" method="POST">
      <div class="col-lg-12">

        <div class="form-group row">
          <label class="col-sm-2 font-weight-bold">Codigo de Diseño</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="codDis" name="codDis" placeholder="Ejemplo de Codigo de diseño">
          </div>
        </div>


      </div>

      <div class="col-lg-12" id="contentA">
        <!--Adulto  style="display: none;"-->
        <?php
        $e = new cont;
        $e->Adulto();
        ?>
      </div>

      <div class="col-lg-12" id="contentJ" style="display: none;">
        <!--Juvenil-->
        <?php
        $c = new conte;
        $c->Juvenil();
        ?>
      </div>

      <div class="container">
        <!-- Titulo de tallas infantiles -->
        <?php
        $g = new conten;

        $g->Texto();
        $g->InfantilC();
        $g->InfantilD();
        $g->InfantilM();
        ?>
      </div>

      <div class="container" id="btnCantidad" style="display: none;"> <input type="button" class="btn btn-primary btn-lg btn-block btn-sm h5" value="cantidad" onclick="cantidad()"> <br> </div>
      <div class="container" id="btnCurva"> <input type="button" class="btn btn-warning btn-lg btn-block btn-sm h5" value="curva" onclick="curva()"> <br> </div>

      <div class="row justify-content-around">
        <div class="col-lg-5">
          <center>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" value="1" name="aplicar" id="aplicar">
              <label class="form-check-label font-weight-bold">APLICAR PARA SIGUIENTES REFERENCIAS</label>
            </div>

          </center>
        </div>

        <div class="col-lg-5">
          <center>

            <label class="form-check-label font-weight-bold">MUESTRA FISICA:&nbsp;</label>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="valor" id="muestra" value="si">
              <label class="form-check-label">SI</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="valor" id="muestra" value="no">
              <label class="form-check-label">NO</label>
            </div>

          </center>
        </div>
      </div> <br>

      <button type="submit" class="btn btn-success">Guardar</button>
    </form>

  </div>
  <!-- Optional JavaScript -->
  <script type="text/javascript" src="js\curva.js"></script>
  <script type="text/javascript" src="js\cantidad.js"></script>
  <script type="text/javascript" src="js\tabla.js"></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS-->
  <script src="js\jquery-3.3.1.slim.min.js"></script>
  <script src="js\popper.min.js"></script>
  <script src="js\bootstrap.min.js"></script>

</body>

</html>