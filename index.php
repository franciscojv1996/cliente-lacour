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
    
    <div class="row justify-content-around" style="background-color: #dd0">

      <div class="col-lg-5 text-center" style="background-color: #ccc">
        <h4>Tallas</h4>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="checka" onchange="javascript:adulto()">
          <label class="form-check-label" for="inlineCheckbox1">Adulto</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="checkj" onchange="javascript:juvenil()">
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
          <input class="form-check-input" type="radio" name="opc" value="1" onchange="mostrar(this.value);" checked>
          <label class="form-check-label" for="inlineRadio1">Curva</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="opc" value="2" onchange="mostrar(this.value);" >
          <label class="form-check-label" for="inlineRadio2">Cantidad</label>
        </div>

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

      <input type="button" value="cantidad" onclick="cantidad()" >

      <input type="button" value="curva">
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

    
function cantidad() {

// tallas adultos
    var totalAdulto = 0;
        $(".Adulto").each(function(){
            if (isNaN(parseInt($(this).val()))) 
            {   totalAdulto += 0;   }
                else 
            {   totalAdulto += parseInt($(this).val());    }
        });
    console.log("total de pieazas a producir Adultos" + totalAdulto);

// tallas juveniles
    var totalJuvenil = 0;
        $(".Juvenil").each(function(){
            if (isNaN(parseInt($(this).val()))) 
            {   totalJuvenil += 0;   }
                else 
            {   totalJuvenil += parseInt($(this).val());    }
        });
    console.log("total de pieazas a producir Juvenil" + totalJuvenil);

// tallas infantiles
        
    // tallas meses
        var totalInfantileM = 0;
            $(".InfantilM").each(function(){
                if (isNaN(parseInt($(this).val()))) 
                {   totalInfantileM += 0;   }
                    else 
                {   totalInfantileM += parseInt($(this).val());    }
            });
        console.log("total de pieazas a producir Infantiles Meses" + totalInfantileM);
    
    // tallas dobles
        var totalInfantileD = 0;
        $(".InfantilD").each(function(){
            if (isNaN(parseInt($(this).val()))) 
            {   totalInfantileD += 0;   }
                else 
            {   totalInfantileD += parseInt($(this).val());    }
        });
    console.log("total de pieazas a producir Infantiles Dobles" + totalInfantileD);
    
    
    // tallas completas
        var totalInfantileC = 0;
            $(".InfantilC").each(function(){
                if (isNaN(parseInt($(this).val()))) 
                {   totalInfantileC += 0;   }
                    else 
                {   totalInfantileC += parseInt($(this).val());    }
            });
        console.log("total de pieazas a producir Infantiles Completa" + totalInfantileC);
    
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