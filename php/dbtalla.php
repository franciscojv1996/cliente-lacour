<?php
$piezasaA = $_REQUEST["piezasaA"];



if ($piezasaA >= 100) {
  $u = $_REQUEST["u"];
$xs = $_REQUEST["xs"];
$s = $_REQUEST["s"];
$m = $_REQUEST["m"];
$l = $_REQUEST["l"];
$xl = $_REQUEST["xl"];
$xxl = $_REQUEST["xxl"];
$xl3 = $_REQUEST["xl3"];
$xl4 = $_REQUEST["xl4"];

echo "total de piezas a producir " . $piezasaA . '<br>';
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
  echo "hola";
}else{
 
  echo "no hola ";
}




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