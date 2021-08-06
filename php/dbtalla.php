<?php
$piezasaA = $_REQUEST["piezasaA"];
$piezasaJ = $_REQUEST["piezasaJ"];
$piezasaIM = $_REQUEST["piezasaIM"];
$piezasaID = $_REQUEST["piezasaID"];
$piezasaIC = $_REQUEST["piezasaIC"];

//generico
$fecha = date('d/m/Y');
$hora = date('h:i:s a');
echo $fecha . '<br>' . $hora . '<br>';
$codDis = $_REQUEST["codDis"];
echo "Codigo de diseño: " . $codDis . '<br>';

//muestra fisica
if ($_REQUEST['valor'] == "si") {
  echo "realizar muestra fisica" . '<br>';
}

if ($_REQUEST['valor'] == "no") {
  echo "no realizar muestra fisica" . '<br>';
}

if ($piezasaA >= 100) {

  echo "talla de adulto";
  $sumaA=0;

  if(isset($_REQUEST["u"])){
    $u = $_REQUEST["u"];
    $sumaA += $u;
  }

  if(isset($_REQUEST["xs"])){
    $xs = $_REQUEST["xs"];
    $sumaA += $xs;
  }

  if(isset($_REQUEST["s"])){
    $s = $_REQUEST["s"];
    $sumaA += $s;
  }

  if(isset($_REQUEST["m"])){
    $m = $_REQUEST["m"];
    $sumaA += $m;
  }

  if(isset($_REQUEST["m"])){
    $m = $_REQUEST["m"];
    $sumaA += $m;
  }

  if(isset($_REQUEST["xl"])){
    $m = $_REQUEST["xl"];
    $sumaA += $xl;
  }

  if(isset($_REQUEST["xxl"])){
    $m = $_REQUEST["xxl"];
    $sumaA += $xxl;
  }

  if(isset($_REQUEST["xl3"])){
    $m = $_REQUEST["xl3"];
    $sumaA += $xl3;
  }

  if(isset($_REQUEST["xl4"])){
    $m = $_REQUEST["xl4"];
    $sumaA += $xl4;
  }

  $panoAdulto = $piezasaA / $sumaA;
  $panoA = bcdiv($panoAdulto, '1', 0);
  $sumaToatlA = 0;



  if ($u > 0) {
    $resU = $panoA * $u;
    $sumaToatlA += $resU;
  } else {
    $u = 0;
    $resU = 0;
  }

  if ($xs > 0) {
    $resXS = $panoA * $xs;
    $sumaToatlA += $resXS;
  } else {
    $xs = 0;
    $resXS = 0;
  }

  if ($s > 0) {
    $resS = $panoA * $s;
    $sumaToatlA += $resS;
  } else {
    $s = 0;
    $resS = 0;
  }

  if ($m > 0) {
    $resM = $panoA * $m;
    $sumaToatlA += $resM;
  } else {
    $m = 0;
    $resM = 0;
  }

  if ($l > 0) {
    $resL = $panoA * $l;
    $sumaToatlA += $resL;
  } else {
    $l = 0;
    $resL = 0;
  }

  if ($xl > 0) {
    $resXL = $panoA * $xl;
    $sumaToatlA += $resXL;
  } else {
    $xl = 0;
    $resXL = 0;
  }

  if ($xxl > 0) {
    $resXXL = $panoA * $xxl;
    $sumaToatlA += $resXXL;
  } else {
    $xxl = 0;
    $resXXL = 0;
  }

  if ($xl3 > 0) {
    $resXL3 = $panoA * $xl3;
    $sumaToatlA += $resXL3;
  } else {
    $xl3 = 0;
    $resXL3 = 0;
  }

  if ($xl4 > 0) {
    $resXL4 = $panoA * $xl4;
    $sumaToatlA += $resXL4;
  } else {
    $xl4 = 0;
    $resXL4 = 0;
  }

  $sumaResA = $resU + $resXS + $resS + $resM + $resL + $resXL + $resXXL + $resXL3 + $resXL4;

  echo "total de piezas a producir " . $piezasaA . '<br>';
  echo "curvas" . '<br>' . "suma total de las curas: " . $sumaA . '<br>' . "resultado a multiplicar: " . $panoAdulto . "  " . $panoA . '<br>';
  echo "talla u: " . $u . '<br>';
  echo "talla xs: " . $xs . '<br>';
  echo "talla s: " . $s . '<br>';
  echo "talla m: " . $m . '<br>';
  echo "talla l: " . $l . '<br>';
  echo "talla xl: " . $xl . '<br>';
  echo "talla xxl: " . $xxl . '<br>';
  echo "talla 3xl: " . $xl3 . '<br>';
  echo "talla 4xl: " . $xl4 . '<br>';
  echo "cantidad <br>";
  echo "talla u: " . $resU . '<br>';
  echo "talla xs: " . $resXS . '<br>';
  echo "talla s: " . $resS . '<br>';
  echo "talla m: " . $resM . '<br>';
  echo "talla l: " . $resL . '<br>';
  echo "talla xl: " . $resXL . '<br>';
  echo "talla xxl: " . $resXXL . '<br>';
  echo "talla 3xl: " . $resXL3 . '<br>';
  echo "talla 4xl: " . $resXL4 . '<br>';
  echo "suma con acumulador: " . $sumaToatlA . '<br>' . "suma sin acumulador: " . $sumaResA . '<br>';
}
/*
if ($piezasaJ >= 100) {

  echo "tallas juvenil";
  $t12 = $_REQUEST["t12"];
  $t14 = $_REQUEST["t14"];
  $t16 = $_REQUEST["t16"];

  $suma = $t12 + $t14 + $t16;
  $panoJuvenil = $piezasaJ / $sumaJ;
  $panoJ = bcdiv($panoJuvenil, '1', 0);
  $sumaToatlJ = 0;

  if ($t12 > 0) {
    $resT12 = $pano * $t12;
    $sumaToatlJ += $resT12;
  } else {
    $t12 = 0;
    $resT12 = 0;
  }

  if ($t14 > 0) {
    $resT14 = $pano * $t14;
    $sumaToatlJ += $resT14;
  } else {
    $t14 = 0;
    $resT14 = 0;
  }

  if ($t16 > 0) {
    $resT16 = $pano * $t16;
    $sumaToatlJ += $resT16;
  } else {
    $t16 = 0;
    $resT16 = 0;
  }
  $sumaResJ = $resT12 + $resT14 + $resT16;

  echo "total de piezas a producir " . $piezasaJ . '<br>';
  echo "curvas" . '<br>' . "suma total de las curvas: " . $sumaJ . '<br>' . "resultodo de la multipicacion: " . $panoJuvenil . "  " . $panoJ . '<br>';
  echo "talla u: " . $t12 . '<br>';
  echo "talla xs: " . $t14 . '<br>';
  echo "talla s: " . $t16 . '<br>';
  echo "cantidad <br>";
  echo "talla u: " . $resT12 . '<br>';
  echo "talla xs: " . $resT14 . '<br>';
  echo "talla s: " . $resT16 . '<br>';
  echo "suma con acumulador: " . $sumaToatlJ . '<br>' . "sin suma con acumulador:".  $sumaResJ;
}

if ($piezasaIM >= 100) {
  $m3 = $_REQUEST["m3"];
  $m6 = $_REQUEST["m6"];
  $m9 = $_REQUEST["m9"];
  $m12 = $_REQUEST["m12"];
  $m18 = $_REQUEST["m18"];
  $m24 = $_REQUEST["m24"];

  echo "total de piezas a producir " . $piezasaIM . '<br>';
  echo "curvas" . '<br>';
  echo "talla 3M: " . $m3 . '<br>';
  echo "talla 6M: " . $m6 . '<br>';
  echo "talla 9M: " . $m9 . '<br>';
  echo "talla 12M: " . $m12 . '<br>';
  echo "talla 18M: " . $m18 . '<br>';
  echo "talla 24M: " . $m24 . '<br>';
}

if ($piezasaID >= 100) {
  $t23 = $_REQUEST["t23"];
  $t45 = $_REQUEST["t45"];
  $t67 = $_REQUEST["t67"];
  $t89 = $_REQUEST["t89"];
  $t1011 = $_REQUEST["t1011"];

  echo "total de piezas a producir " . $piezasaID . '<br>';
  echo "curvas" . '<br>';
  echo "talla 2-3: " . $t23 . '<br>';
  echo "talla 4-5: " . $t45 . '<br>';
  echo "talla 6-7: " . $t67 . '<br>';
  echo "talla 8-9: " . $t89 . '<br>';
  echo "talla 10-11: " . $t1011 . '<br>';
}

if ($piezasaIC >= 100) {
  $t2 = $_REQUEST["t2"];
  $t4 = $_REQUEST["t4"];
  $t6 = $_REQUEST["t6"];
  $t8 = $_REQUEST["t8"];
  $t10 = $_REQUEST["t10"];

  echo "total de piezas a producir " . $piezasaID . '<br>';
  echo "curvas" . '<br>';
  echo "talla 2: " . $t2 . '<br>';
  echo "talla 4: " . $t4 . '<br>';
  echo "talla 6: " . $t6 . '<br>';
  echo "talla 8: " . $t8 . '<br>';
  echo "talla 10: " . $t10 . '<br>';
}

*/


/*


adultoCurva($_REQUEST["piezasaA"], $_REQUEST["u"], $_REQUEST["xs"], $_REQUEST["s"], $_REQUEST["m"], $_REQUEST["l"], $_REQUEST["xl"], $_REQUEST["xxl"], $_REQUEST["xl3"], $_REQUEST["xl4"]);

function adultoCurva($piezasaA, $u, $xs, $s, $m, $l, $xl, $xxl, $xl3, $xl4)
{
  $suma = $u + $xs + $s + $m + $l + $xl + $xxl + $xl3 + $xl4;
  $panoAdulto = $piezasaA / $suma;
  $pano = bcdiv($panoAdulto, '1', 0);
  $sumaToatl = 0;
  $fecha = date('d/m/Y');
  $hora = date('h:i:s a');

  if ($u > 0) {
    $resU = $pano * $u;
    $sumaToatl += $resU;
  } else {
    $u = 0;
    $resU = 0;
  }

  if ($xs > 0) {
    $resXS = $pano * $xs;
    $sumaToatl += $resXS;
  } else {
    $xs = 0;
    $resXS = 0;
  }

  if ($s > 0) {
    $resS = $pano * $s;
    $sumaToatl += $resS;
  } else {
    $s = 0;
    $resS = 0;
  }

  if ($m > 0) {
    $resM = $pano * $m;
    $sumaToatl += $resM;
  } else {
    $m = 0;
    $resM = 0;
  }

  if ($l > 0) {
    $resL = $pano * $l;
    $sumaToatl += $resL;
  } else {
    $l = 0;
    $resL = 0;
  }

  if ($xl > 0) {
    $resXL = $pano * $xl;
    $sumaToatl += $resXL;
  } else {
    $xl = 0;
    $resXL = 0;
  }

  if ($xxl > 0) {
    $resXXL = $pano * $xxl;
    $sumaToatl += $resXXL;
  } else {
    $xxl = 0;
    $resXXL = 0;
  }

  if ($xl3 > 0) {
    $resXL3 = $pano * $xl3;
    $sumaToatl += $resXL3;
  } else {
    $xl3 = 0;
    $resXL3 = 0;
  }

  if ($xl4 > 0) {
    $resXL4 = $panoAdulto * $xl4;
    $sumaToatl += $resXL4;
  } else {
    $xl4 = 0;
    $resXL4 = 0;
  }

  echo "total de piezas a producir" . $piezasaA . '<br>';
  echo "curvas" . '<br>';
  echo "talla u: " . $u . '<br>';
  echo "talla xs: " . $xs . '<br>';
  echo "talla s: " . $s . '<br>';
  echo "talla m: " . $m . '<br>';
  echo "talla l: " . $l . '<br>';
  echo "talla xl: " . $xl . '<br>';
  echo "talla xxl: " . $xxl . '<br>';
  echo "talla 3xl: " . $xl3 . '<br>';
  echo "talla 4xl: " . $xl4 . '<br>';
  echo "total de curvas: " . $suma . '<br>';
  echo "multiplicar: " . $pano . '<br>';
  echo "cantidad <br>";
  echo "talla u: " . $resU . '<br>';
  echo "talla xs: " . $resXS . '<br>';
  echo "talla s: " . $resS . '<br>';
  echo "talla m: " . $resM . '<br>';
  echo "talla l: " . $resL . '<br>';
  echo "talla xl: " . $resXL . '<br>';
  echo "talla xxl: " . $resXXL . '<br>';
  echo "talla 3xl: " . $resXL3 . '<br>';
  echo "talla 4xl: " . $resXL4 . '<br>';
  echo $fecha . '<br>';
  echo $hora . '<br>';
  echo $sumaToatl . '<br>';

  /*
  `id_ad`, `rif_tip`, `rif`, `cod_diseno`, 


  include '../config/conexion.php';
  $sentencia = "INSERT INTO talla_adulto (cantidad, ucuad, xscuad, scuad, mcuad, lcuad, xlcuad, xxlcuad, 3xlcuad, 4xlcuad, ucaad, xscaad, scaad, mcaad, lcaad, xlcaad, xxlcaad, 3xlcaad, 4xlcaad, total_cant) VALUES ('" . $piezasaA . "', '" . $u . "', '" . $xs . "', '" . $s . "', '" . $m . "', '" . $l . "', '" . $xl . "', '" . $xxl . "', '" . $xl3 . "', '" . $xl4 . "','" . $resU . "','" . $resXS . "','" . $resS . "','" . $resM . "','" . $resL . "','" . $resXL . "','" . $resXXL . "','" . $resXL3 . "','" . $resXL4 . "','" . $sumaToatl . "', '" . $fecha . "', '" . $hora . "') ";
  $conexion->query($sentencia) or die("Error al ingresar los datos" . mysqli_error($conexion));
}
*/