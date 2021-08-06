<?php
//adultos
$piezasaA = $_REQUEST["piezasaA"];
$u = $_REQUEST["u"];
$sx = $_REQUEST["xs"];
$s = $_REQUEST["s"];
$m = $_REQUEST["m"];
$l = $_REQUEST["l"];
$xl = $_REQUEST["xl"];
$xxl = $_REQUEST["xxl"];
$xl3 = $_REQUEST["xl3"];
$xl4 = $_REQUEST["xl4"];

echo $piezasaA . '<br>';
echo "tallas adultos" . '<br>';
echo "curvas" . '<br>';
echo "talla unica: " . $u . '<br>';
echo "talla xs: " . $sx . '<br>';
echo "talla s: " . $s . '<br>';
echo "talla m: " . $m . '<br>';
echo "talla l: " . $l . '<br>';
echo "talla xl: " . $xl . '<br>';
echo "talla xxl: " . $xxl . '<br>';
echo "talla xl3: " . $xl3 . '<br>';
echo "talla xl4: " . $xl4 . '<br>';

//juvenil
$piezasaJ = $_REQUEST["piezasaJ"];
$t12 = $_REQUEST["t12"];
$t14 = $_REQUEST["t14"];
$t16 = $_REQUEST["t16"];

echo "tallas juvenil";
echo "total de piezas a producir " . $piezasaJ . '<br>';
echo "curvas" . '<br>';
echo "talla 12: " . $t12 . '<br>';
echo "talla 14: " . $t14 . '<br>';
echo "talla 16: " . $t16 . '<br>';

//infantil
//meses
$piezasaIM = $_REQUEST["piezasaIM"];
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


//dobles
$piezasaID = $_REQUEST["piezasaID"];
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

//completa
$piezasaIC = $_REQUEST["piezasaIC"];
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
