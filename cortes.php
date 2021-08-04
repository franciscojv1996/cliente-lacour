<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>
  #cuerpoT {
    display: none;
  }
</style>

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
          <input class="form-check-input" type="radio" name="opc" value="1" onchange="mostrar(this.value);" checked>
          <label class="form-check-label" for="inlineRadio1">Curva</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="opc" value="2" onchange="mostrar(this.value);">
          <label class="form-check-label" for="inlineRadio2">Cantidad</label>
        </div>
      </div>
    </div> <br>

    <form action="" method="POST">
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

      <div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="aplicar" id="aplicar" value="option1">
          <label class="form-check-label font-weight-bold">APLICAR PARA SIGUIENTES REFERENCIAS</label>
        </div> <br> <br>

        <label class="form-check-label font-weight-bold">MUESTRA FISICA:&nbsp;</label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="muestra" id="muestra" value="option1">
          <label class="form-check-label">SI</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="muestra" id="muestra" value="option2">
          <label class="form-check-label">NO</label>
        </div>


      </div>

      <button type="submit" class="btn btn-success">Guardar</button>
    </form>
  </div>
  <!-- Optional JavaScript -->

  <script>
    // Curvas 
    function curva() {

      //
      var totalA = 0,
        panoA = 0,
        sumaA = 0,
        piezaA = 0;
      piezaA = document.getElementById("piezasaA").value;
      if (piezaA >= 100) {
        console.log("total de piezas por el cliente: " + piezaA);

        $(".montoA").each(function() {
          if (isNaN(parseInt($(this).val()))) {
            totalA += 0;
          } else {
            totalA += parseInt($(this).val());
          }
        });
        console.log("total de curvas de Adulto: " + totalA);

        panoA = parseFloat(piezaA) / parseFloat(totalA);
        console.log("resultado a multiplicar adulto: " + Math.round(panoA));

        var u = document.getElementById("u").value;
        var xs = document.getElementById("xs").value;
        var s = document.getElementById("s").value;
        var m = document.getElementById("m").value;
        var l = document.getElementById("l").value;
        var xl = document.getElementById("xl").value;
        var xxl = document.getElementById("xxl").value;
        var xl3 = document.getElementById("xl3").value;
        var xl4 = document.getElementById("xl4").value;

        console.log("talla adulto");

        if (u > 0) {
          console.log("tallas U: " + u);
          var resU = parseInt(panoA) * parseInt(u);
          console.log("Piezas a producir: " + resU);
          sumaA = parseFloat(sumaA) + parseFloat(resU);
          document.getElementById('TallaU').innerHTML = resU;
        } else {
          document.getElementById('TallaU').innerHTML = " ";
        }

        if (xs > 0) {
          console.log("tallas XS: " + xs);
          var resXS = parseInt(panoA) * parseInt(xs);
          console.log("Piezas a producir: " + resXS);
          sumaA = parseFloat(sumaA) + parseFloat(resXS);
          document.getElementById('TallaXS').innerHTML = resXS;
        } else {
          document.getElementById('TallaXS').innerHTML = " ";
        }

        if (s > 0) {
          console.log("tallas S: " + s);
          var resS = parseInt(panoA) * parseInt(s);
          console.log("Piezas a producir: " + resS);
          document.getElementById('TallaS').innerHTML = resS;
          sumaA = parseFloat(sumaA) + parseFloat(resS);
        } else {
          document.getElementById('TallaS').innerHTML = " ";
        }

        if (m > 0) {
          console.log("tallas M: " + m);
          var resM = parseInt(panoA) * parseInt(m);
          console.log("Piezas a producir: " + resM);
          document.getElementById('TallaM').innerHTML = resM;
          sumaA = parseFloat(sumaA) + parseFloat(resM);
        } else {
          document.getElementById('TallaM').innerHTML = " ";
        }

        if (l > 0) {
          console.log("tallas L: " + l);
          var resL = parseInt(panoA) * parseInt(l);
          console.log("Piezas a producir: " + resL);
          sumaA = parseFloat(sumaA) + parseFloat(resL);
          document.getElementById('TallaL').innerHTML = resL;
        } else {
          document.getElementById('TallaL').innerHTML = " ";
        }

        if (xl > 0) {
          console.log("tallas XL: " + xl);
          var resXL = parseInt(panoA) * parseInt(xl);
          console.log("Piezas a producir: " + resXL);
          sumaA = parseFloat(sumaA) + parseFloat(resXL);
          document.getElementById('TallaXL').innerHTML = resXL;
        } else {
          document.getElementById('TallaXL').innerHTML = " ";
        }

        if (xxl > 0) {
          console.log("tallas XXL: " + xxl);
          var resXXL = parseInt(panoA) * parseInt(xxl);
          console.log("Piezas a producir: " + resXXL);
          sumaA = parseFloat(sumaA) + parseFloat(resXXL);
          document.getElementById('TallaXXL').innerHTML = resXXL;
        } else {
          document.getElementById('TallaXXL').innerHTML = " ";
        }

        if (xl3 > 0) {
          console.log("tallas 3XL: " + xl3);
          var resXL3 = parseInt(panoA) * parseInt(xl3);
          console.log("Piezas a producir: " + resXL3);
          sumaA = parseFloat(sumaA) + parseFloat(resXL3);
          document.getElementById('TallaXL3').innerHTML = resXL3;
        } else {
          document.getElementById('TallaXL3').innerHTML = " ";
        }

        if (xl4 > 0) {
          console.log("tallas 4XL: " + xl4);
          var resXL4 = parseInt(panoA) * parseInt(xl4);
          console.log("Piezas a producir: " + resXL4);
          sumaA = parseFloat(sumaA) + parseFloat(resXL4);
          document.getElementById('TallaXL4').innerHTML = Math.round(resXL4);
        } else {
          document.getElementById('TallaXL4').innerHTML = " ";
        }

        var adultosuma = parseInt(resU) + parseInt(resXS) + parseInt(resS) + parseInt(resM) + parseInt(resL) + parseInt(resXL) + parseInt(resXXL) + parseInt(resXL3) + parseInt(resXL4);


        console.log("total de piezas " + sumaA + "   total de piezas " + adultosuma);
        document.getElementById('CcantidaA').innerHTML = sumaA;

      }

      if (adulto() == 1 && piezaA == 0) {
        alert(" Debes de agregar la cantidad de piezas a producir de talla adulto ");
        document.getElementById("piezasaA").style.border = "solid";
        var bordeAdulto = 10;

        if (bordeAdulto == 10) {
          document.getElementById("piezasaA").style.borderColor = "navy";
        } else {
          document.getElementById("piezasaA").style.borderColor = "white";
        }

      } else {
        document.getElementById("piezasaA").style.border = "none";
      }

      if (piezaA < 100 && piezaA >= 1) {
        alert(" la cantidad de piezas a producir debe de se mayor a 100");
      }

      //TALLAS JUVENIL

      var totalJ = 0,
        panoJ = 0,
        sumaJ = 0,
        piezaJ;

      piezaJ = document.getElementById("piezasaJ").value;

      if (piezaJ >= 100) {
        console.log("total de piezas por el cliente: " + piezaJ);

        $(".montoJ").each(function() {
          if (isNaN(parseInt($(this).val()))) {
            totalJ += 0;
          } else {
            totalJ += parseInt($(this).val());
          }
        });

        console.log("total de curvas de Adulto: " + totalJ);

        panoJ = parseFloat(piezaJ) / parseFloat(totalJ);
        console.log("resultado a multiplicar adulto: " + Math.round(panoJ));

        var t12 = document.getElementById('t12').value;
        var t14 = document.getElementById('t14').value;
        var t16 = document.getElementById('t16').value;

        console.log("talla juvenil");

        if (t12 > 0) {
          console.log("tallas T12: " + t12);
          var resT12 = parseInt(panoJ) * parseInt(t12);
          console.log("Piezas a producir: " + resT12);
          sumaJ = parseInt(sumaJ) + parseInt(resT12);
          document.getElementById('Talla12').innerHTML = Math.round(resT12);
        } else {
          document.getElementById('Talla12').innerHTML = " ";
        }

        if (t14 > 0) {
          console.log("tallas T14: " + t14);
          var resT14 = parseInt(panoJ) * parseInt(t14);
          console.log("Piezas a producir: " + resT14);
          sumaJ = parseInt(sumaJ) + parseInt(resT14);
          document.getElementById('Talla14').innerHTML = Math.round(resT14);
        } else {
          document.getElementById('Talla14').innerHTML = " ";
        }

        if (t16 > 0) {
          console.log("tallas T16: " + t16);
          var resT16 = parseInt(panoJ) * parseInt(t16);
          console.log("Piezas a producir: " + resT16);
          sumaJ = parseInt(sumaJ) + parseInt(resT16);
          document.getElementById('Talla16').innerHTML = Math.round(resT16);
        } else {
          document.getElementById('Talla16').innerHTML = " ";
        }

        var juvenilsuma = parseInt(resT12) + parseInt(resT14) + parseInt(resT16);
        console.log("total de piezas " + sumaJ + "   total de piezas " + juvenilsuma);
        document.getElementById('CcantidaJ').innerHTML = sumaJ;

      }

      if (juvenil() == 1 && piezaJ == 0) {
        alert(" Debes de agregar la cantidad de piezas a producir de talla juvenil ");
        document.getElementById("piezasaJ").style.border = "solid";
        var bordeJuvenil = 20;

        if (bordeJuvenil == 20) {
          document.getElementById("piezasaJ").style.borderColor = "navy";
        } else {
          document.getElementById("piezasaJ").style.borderColor = "white";
        }

      } else {
        document.getElementById("piezasaJ").style.border = "none";
      }

      if (piezaJ < 100 && piezaJ >= 1) {
        alert(" la cantidad de piezas a producir debe de se mayor a 100");
      }

      /*++++++++++++++++++++++++++++++++++++++++++++TALLAS INFANTILES+++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

      console.log("tallas infantiles");

      // TALLAS DE MESES
      var totalIM = 0,
        panoIM = 0,
        sumaIM = 0,
        piezaIM;

      piezaIM = document.getElementById("piezasaIM").value;

      if (piezaIM > 0) {
        console.log("total de piezas por el cliente: " + piezaIM);

        $(".montoIM").each(function() {
          if (isNaN(parseInt($(this).val()))) {
            totalIM += 0;
          } else {
            totalIM += parseInt($(this).val());
          }
        });

        console.log("total de curvas de Infantil Meses: " + totalIM);

        panoIM = parseFloat(piezaIM) / parseFloat(totalIM);
        console.log("resultado a multiplicar adulto: " + Math.round(panoIM));

        var m3 = document.getElementById('m3').value;
        var m6 = document.getElementById('m6').value;
        var m9 = document.getElementById('m9').value;
        var m12 = document.getElementById('m12').value;
        var m18 = document.getElementById('m18').value;
        var m24 = document.getElementById('m24').value;

        console.log("talla de meses");
        console.log("tallas M3: " + m3);
        console.log("tallas M6: " + m6);
        console.log("tallas M9: " + m9);
        console.log("tallas M12: " + m12);
        console.log("tallas M18: " + m18);
        console.log("tallas M24: " + m24);

        if (m3 > 0) {
          var resM3 = parseInt(panoIM) * parseInt(m3);
          console.log("Piezas a producir: " + resM3);
          sumaIM = parseInt(sumaIM) + parseInt(resM3);
          document.getElementById('Talla3M').innerHTML = Math.round(resM3);
        } else {
          document.getElementById('Talla3M').innerHTML = " ";
        }

        if (m6 > 0) {
          var resM6 = parseInt(panoIM) * parseInt(m6);
          console.log("Piezas a producir: " + resM6);
          sumaIM = parseInt(sumaIM) + parseInt(resM6);
          document.getElementById('Talla6M').innerHTML = Math.round(resM6);
        } else {
          document.getElementById('Talla6M').innerHTML = " ";
        }

        if (m9 > 0) {
          var resM9 = parseInt(panoIM) * parseInt(m9);
          console.log("Piezas a producir: " + resM9);
          sumaIM = parseInt(sumaIM) + parseInt(resM9);
          document.getElementById('Talla9M').innerHTML = Math.round(resM9);
        } else {
          document.getElementById('Talla9M').innerHTML = " ";
        }

        if (m12 > 0) {
          var resM12 = parseInt(panoIM) * parseInt(m12);
          console.log("Piezas a producir: " + resM12);
          sumaIM = parseInt(sumaIM) + parseInt(resM12);
          document.getElementById('Talla12M').innerHTML = Math.round(resM12);
        } else {
          document.getElementById('Talla12M').innerHTML = " ";
        }

        if (m18 > 0) {
          var resM18 = parseInt(panoIM) * parseInt(m18);
          console.log("Piezas a producir: " + resM18);
          sumaIM = parseInt(sumaIM) + parseInt(resM18);
          document.getElementById('Talla18M').innerHTML = Math.round(resM18);
        } else {
          document.getElementById('Talla18M').innerHTML = " ";
        }

        if (m24 > 0) {
          var resM24 = parseInt(panoIM) * parseInt(m24);
          console.log("Piezas a producir: " + resM24);
          sumaIM = parseInt(sumaIM) + parseInt(resM24);
          document.getElementById('Talla24M').innerHTML = Math.round(resM24);
        } else {
          document.getElementById('Talla24M').innerHTML = " ";
        }
        console.log("total de piezas " + sumaIM);
        document.getElementById('CcantidaIM').innerHTML = sumaIM;

      }

      if (meses() == 1 && piezaIM == 0) {
        alert(" Debes de agregar la cantidad de piezas a producir de talla infantil ");
        document.getElementById("piezasaIM").style.border = "solid";
        var bordeInfantilM = 31;

        if (bordeInfantilM == 31) {
          document.getElementById("piezasaIM").style.borderColor = "navy";
        } else {
          document.getElementById("piezasaIM").style.borderColor = "white";
        }

      } else {
        document.getElementById("piezasaIM").style.border = "none";
      }

      if (piezaIM < 100 && piezaIM >= 1) {
        alert(" la cantidad de piezas a producir debe de se mayor a 100");
      }

      // TALLAS DE DOBLES
      var totalID = 0,
        panoID = 0,
        sumaID = 0,
        piezaID;

      piezaID = document.getElementById("piezasaID").value;

      if (piezaID >= 100) {

        console.log("total de piezas por el cliente: " + piezaID);

        $(".montoID").each(function() {
          if (isNaN(parseInt($(this).val()))) {
            totalID += 0;
          } else {
            totalID += parseInt($(this).val());
          }
        });

        console.log("total de curvas de Infantil doble: " + Math.round(panoID));

        panoID = parseFloat(piezaID) / parseFloat(totalID);
        console.log("resultado a multiplicar adulto: " + panoID);

        var t23 = document.getElementById('t23').value;
        var t45 = document.getElementById('t45').value;
        var t67 = document.getElementById('t67').value;
        var t89 = document.getElementById('t89').value;
        var t1011 = document.getElementById('t1011').value;

        console.log("talla Doble");


        if (t23 > 0) {
          var resT23 = parseInt(panoID) * parseInt(t23);
          console.log("Piezas a producir: " + resT23);
          sumaID = parseInt(sumaID) + parseInt(resT23);
          document.getElementById('Talla23').innerHTML = Math.round(resT23);
        } else {
          document.getElementById('Talla23').innerHTML = " ";
        }

        if (t45 > 0) {
          var resT45 = parseInt(panoID) * parseInt(t45);
          console.log("Piezas a producir: " + resT45);
          sumaID = parseInt(sumaID) + parseInt(resT45);
          document.getElementById('Talla45').innerHTML = Math.round(resT45);
        } else {
          document.getElementById('Talla45').innerHTML = " ";
        }

        if (t67 > 0) {
          var resT67 = parseInt(panoID) * parseInt(t67);
          console.log("Piezas a producir: " + resT67);
          sumaID = parseInt(sumaID) + parseInt(resT67);
          document.getElementById('Talla67').innerHTML = Math.round(resT67);
        } else {
          document.getElementById('Talla67').innerHTML = " ";
        }

        if (t89 > 0) {
          var resT89 = parseInt(panoID) * parseInt(t89);
          console.log("Piezas a producir: " + resT89);
          sumaID = parseInt(sumaID) + parseInt(resT89);
          document.getElementById('Talla89').innerHTML = Math.round(resT89);
        } else {
          document.getElementById('Talla89').innerHTML = " ";
        }

        if (t1011 > 0) {
          var resT1011 = parseInt(panoID) * parseInt(t1011);
          console.log("Piezas a producir: " + resT1011);
          sumaID = parseInt(sumaID) + parseInt(resT1011);
          document.getElementById('Talla1011').innerHTML = Math.round(resT1011);
        } else {
          document.getElementById('Talla1011').innerHTML = " ";
        }

        console.log("total de piezas " + sumaID);
        document.getElementById('CcantidaID').innerHTML = sumaID

      }

      if (doble() == 1 && piezaID == 0) {
        alert(" Debes de agregar la cantidad de piezas a producir de talla infantil ");
        document.getElementById("piezasaID").style.border = "solid";
        var bordeInfantilD = 32;

        if (bordeInfantilD == 32) {
          document.getElementById("piezasaID").style.borderColor = "navy";
        } else {
          document.getElementById("piezasaID").style.borderColor = "white";
        }

      } else {
        document.getElementById("piezasaID").style.border = "none";
      }

      if (piezaID < 100 && piezaID >= 1) {
        alert(" la cantidad de piezas a producir debe de se mayor a 100");
      }


      // TALLAS COMPLETA
      var totalIC = 0,
        panoIC = 0,
        sumaIC = 0,
        piezaIC;

      piezaIC = document.getElementById("piezasaIC").value;

      if (piezaIC > 0) {

        console.log("total de piezas por el cliente: " + piezaIC);

        $(".montoIC").each(function() {
          if (isNaN(parseInt($(this).val()))) {
            totalIC += 0;
          } else {
            totalIC += parseInt($(this).val());
          }
        });

        console.log("total de curvas de Infantil completa: " + totalIC);

        panoIC = parseFloat(piezaIC) / parseFloat(totalIC);
        console.log("resultado a multiplicar adulto: " + Math.round(panoIC));

        var t2 = document.getElementById('t2').value;
        var t4 = document.getElementById('t4').value;
        var t6 = document.getElementById('t6').value;
        var t8 = document.getElementById('t8').value;
        var t10 = document.getElementById('t10').value;

        console.log("talla Doble");

        if (t2 > 0) {
          console.log("tallas 2: " + t2);
          var resT2 = parseInt(panoIC) * parseInt(t2);
          console.log("Piezas a producir: " + resT2);
          sumaIC = parseInt(sumaIC) + parseInt(resT2);
          document.getElementById('Talla2').innerHTML = Math.round(resT2);
        } else {
          document.getElementById('Talla2').innerHTML = " ";
        }

        if (t4 > 0) {
          console.log("tallas 4: " + t4);
          var resT4 = parseInt(panoIC) * parseInt(t4);
          console.log("Piezas a producir: " + resT4);
          sumaIC = parseInt(sumaIC) + parseInt(resT4);
          document.getElementById('Talla4').innerHTML = Math.round(resT4);
        } else {
          document.getElementById('Talla4').innerHTML = " ";
        }

        if (t6 > 0) {
          console.log("tallas 6: " + t6);
          var resT6 = parseInt(panoIC) * parseInt(t6);
          console.log("Piezas a producir: " + resT6);
          sumaIC = parseInt(sumaIC) + parseInt(resT6);
          document.getElementById('Talla6').innerHTML = Math.round(resT6);
        } else {
          document.getElementById('Talla6').innerHTML = " ";
        }

        if (t8 > 0) {
          console.log("tallas 8: " + t8);
          var resT8 = parseInt(panoIC) * parseInt(t8);
          console.log("Piezas a producir: " + resT8);
          document.getElementById('Talla8').innerHTML = Math.round(resT8);
        } else {
          document.getElementById('Talla8').innerHTML = " ";
        }

        if (t10 > 0) {
          console.log("tallas 10: " + t10);
          var resT10 = parseInt(panoIC) * parseInt(t10);
          console.log("Piezas a producir: " + resT10);
          sumaIC = parseInt(sumaIC) + parseInt(resT10);
          document.getElementById('Talla10').innerHTML = Math.round(resT10);
        } else {
          document.getElementById('Talla10').innerHTML = " ";
        }

        var infantilCsuma = parseInt(resT2) + parseInt(resT4) + parseInt(resT6) + parseInt(resT8) + parseInt(resT10);
        console.log("total de piezas " + sumaIC + "   total de piezas " + infantilCsuma);
        document.getElementById('CcantidaIC').innerHTML = sumaIC;

      }

      if (completa() == 1 && piezaIC == 0) {
        alert(" Debes de agregar la cantidad de piezas a producir de talla infantil ");
        document.getElementById("piezasaIC").style.border = "solid";
        var bordeInfantilD = 33;

        if (bordeInfantilD == 33) {
          document.getElementById("piezasaIC").style.borderColor = "navy";
        } else {
          document.getElementById("piezasaIC").style.borderColor = "white";
        }

      } else {
        document.getElementById("piezasaIC").style.border = "none";
      }

      if (piezaIC < 100 && piezaIC >= 1) {
        alert(" la cantidad de piezas a producir debe de se mayor a 100");
      }

    }
    // cantidad
    function cantidad() {

      // tallas adultos
      var totalAdulto = 0;
      $(".Adulto").each(function() {
        if (isNaN(parseInt($(this).val()))) {
          totalAdulto += 0;
        } else {
          totalAdulto += parseInt($(this).val());
        }
      });
      document.getElementById("adultoC").innerHTML = totalAdulto;
      console.log("total de pieazas a producir Adultos: " + totalAdulto);


      // tallas juveniles
      var totalJuvenil = 0;
      $(".Juvenil").each(function() {
        if (isNaN(parseInt($(this).val()))) {
          totalJuvenil += 0;
        } else {
          totalJuvenil += parseInt($(this).val());
        } //juvenilC infantilCC
      });
      document.getElementById("juvenilC").innerHTML = totalJuvenil;
      console.log("total de pieazas a producir Juvenil: " + totalJuvenil);

      // tallas infantiles

      // tallas meses
      var totalInfantileM = 0;
      $(".InfantilM").each(function() {
        if (isNaN(parseInt($(this).val()))) {
          totalInfantileM += 0;
        } else {
          totalInfantileM += parseInt($(this).val());
        }
      });

      document.getElementById("infantilMC").innerHTML = totalInfantileM;
      console.log("total de pieazas a producir Infantiles Meses: " + totalInfantileM);

      // tallas dobles
      var totalInfantileD = 0;
      $(".InfantilD").each(function() {
        if (isNaN(parseInt($(this).val()))) {
          totalInfantileD += 0;
        } else {
          totalInfantileD += parseInt($(this).val());
        }
      });
      document.getElementById("infantilDC").innerHTML = totalInfantileD;
      console.log("total de pieazas a producir Infantiles Dobles: " + totalInfantileD);


      // tallas completas
      var totalInfantileC = 0;
      $(".InfantilC").each(function() {
        if (isNaN(parseInt($(this).val()))) {
          totalInfantileC += 0;
        } else {
          totalInfantileC += parseInt($(this).val());
        }
      });

      document.getElementById("infantilCC").innerHTML = totalInfantileC;
      console.log("total de pieazas a producir Infantiles Completa: " + totalInfantileC);

    }

    //adulto
    function adulto() {
      cuerpoA = document.getElementById("contentA");
      checkA = document.getElementById("checka");
      if (checkA.checked) {
        cuerpoA.style.display = 'block';
        return 1;
      } else {
        cuerpoA.style.display = 'none';
      }
    }

    // juvenil
    function juvenil() {
      cuerpoJ = document.getElementById("contentJ");
      checkJ = document.getElementById("checkj");
      if (checkJ.checked) {
        cuerpoJ.style.display = 'block';
        return 1;
      } else {
        cuerpoJ.style.display = 'none';
      }
    }

    //Infantil
    function meses() {
      cuerpoIM = document.getElementById("cuerpoIM");
      cheIM = document.getElementById("cheIM");
      //texto cuerpo 
      cuerpoT = document.getElementById("cuerpoT");
      if (cheIM.checked) {
        cuerpoIM.style.display = "block";
        cuerpoT.style.display = "block";
        return 1;
      } else {
        cuerpoIM.style.display = "none";
        cuerpoT.style.display = "none";
      }
    }

    function doble() {
      cuerpoID = document.getElementById("cuerpoID");
      cheID = document.getElementById("cheID");
      //texto cuerpo 
      cuerpoT = document.getElementById("cuerpoT");
      if (cheID.checked) {
        cuerpoID.style.display = "block";
        cuerpoT.style.display = "block";
        return 1;
      } else {
        cuerpoID.style.display = "none";
        cuerpoT.style.display = "none";
      }
    }

    function completa() {
      cuerpoIC = document.getElementById("cuerpoIC");
      cheIC = document.getElementById("cheIC");
      //texto cuerpo 
      cuerpoT = document.getElementById("cuerpoT");
      if (cheIC.checked) {
        cuerpoIC.style.display = "block";
        cuerpoT.style.display = "block";
        return 1;
      } else {
        cuerpoIC.style.display = "none";
        cuerpoT.style.display = "none";
      }
    }

    // curva y cantidad
    function mostrar(dato) {
      //1=curva
      if (dato == "1") {
        //curva
        document.getElementById("curvAd").style.display = "block";
        document.getElementById("curvJu").style.display = "block";
        document.getElementById("curvaIM").style.display = "block";
        document.getElementById("curvaID").style.display = "block";
        document.getElementById("curvaIC").style.display = "block";
        //boton
        document.getElementById("btnCurva").style.display = "block";

        //cantidad 
        document.getElementById("CantidadAd").style.display = "none";
        document.getElementById("CantidadJu").style.display = "none";
        document.getElementById("CantidadIM").style.display = "none";
        document.getElementById("CantidadID").style.display = "none";
        document.getElementById("CantidadIC").style.display = "none";
        //boton
        document.getElementById("btnCantidad").style.display = "none";

        return 1;

      }

      //2=cantidad
      if (dato == "2") {
        //cantidad
        document.getElementById("CantidadAd").style.display = "block";
        document.getElementById("CantidadJu").style.display = "block";
        document.getElementById("CantidadIM").style.display = "block";
        document.getElementById("CantidadID").style.display = "block";
        document.getElementById("CantidadIC").style.display = "block";
        //boton
        document.getElementById("btnCantidad").style.display = "block";

        //curva
        document.getElementById("curvAd").style.display = "none";
        document.getElementById("curvJu").style.display = "none";
        document.getElementById("curvaIM").style.display = "none";
        document.getElementById("curvaID").style.display = "none";
        document.getElementById("curvaIC").style.display = "none";
        //boton
        document.getElementById("btnCurva").style.display = "none";

        return 2;
      }

    }

    function muestra(fisico){
      if(fisico == "1"){
        // realizar muestra
      }

      if(fisico == "2"){
        //no realizar muestra
      }
    }

    function aplicar(todo){
      if(todo = "1"){
        // dato que indique que aplique para todo 
      }else{
        // desplegra venta que especificque el genero de la curva 
        }
    }
  </script>

  <!-- <script type="text/javascript" src="js\curva.js"></script> 
  <script type="text/javascript" src="js\cantidad.js"></script> -->
  <script type="text/javascript" src="js\tabla.js"></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS-->
  <script src="js\jquery-3.3.1.slim.min.js"></script>
  <script src="js\popper.min.js"></script>
  <script src="js\bootstrap.min.js"></script>

</body>

</html>