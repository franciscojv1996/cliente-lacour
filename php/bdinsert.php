<?php
$piezasaA = $_REQUEST["piezasaA"];
$piezasaJ = $_REQUEST["piezasaJ"];
$piezasaIM = $_REQUEST["piezasaIM"];
$piezasaID = $_REQUEST["piezasaID"];
$piezasaIC = $_REQUEST["piezasaIC"];

$fecha = date('d/m/Y');
$hora = date('h:i:s a');
echo $fecha . '<br>' . $hora . '<br>';
$codDis = $_REQUEST["codDis"];
echo "Codigo de diseño: " . $codDis . '<br>' . '<br>';

$sumaA = 0;
$sumaJ = 0;
$sumaIM = 0;
$sumaID = 0;
$sumaIC = 0;

if ($piezasaA >= 100) {

    //talla adulto
    $u = $_REQUEST["u"];
    $xs = $_REQUEST["xs"];
    $s = $_REQUEST["s"];
    $m = $_REQUEST["m"];
    $l = $_REQUEST["l"];
    $xl = $_REQUEST["xl"];
    $xxl = $_REQUEST["xxl"];
    $xl3 = $_REQUEST["xl3"];
    $xl4 = $_REQUEST["xl4"];

    if ($u > 0) {
        $sumaA += $u;
    }
    if ($xs > 0) {
        $sumaA += $xs;
    }
    if ($s > 0) {
        $sumaA += $s;
    }
    if ($m > 0) {
        $sumaA += $m;
    }
    if ($l > 0) {
        $sumaA += $l;
    }
    if ($xl > 0) {
        $sumaA += $xl;
    }
    if ($xxl > 0) {
        $sumaA += $xxl;
    }
    if ($xl3 > 0) {
        $sumaA += $xl3;
    }
    if ($xl4 > 0) {
        $sumaA += $xl4;
    }

    echo "TALLA DE ADULTO" . '&nbsp; &nbsp;' . "piezas a producir: " . $piezasaA . '<br>';
    echo "CURVAS" . '<br>';
    echo "talla unica: " . $u . '<br>';
    echo "talla xs: " . $xs . '<br>';
    echo "talla s: " . $s . '<br>';
    echo "talla m: " . $m . '<br>';
    echo "talla l: " . $l . '<br>';
    echo "talla xl: " . $xl . '<br>';
    echo "talla xxl: " . $xxl . '<br>';
    echo "talla xl3: " . $xl3 . '<br>';
    echo "talla xl4: " . $xl4 . '<br>';
    echo "total de las curvas: " . $sumaA . '<br>';

    $panoAdulto = $piezasaA / $sumaA;
    $panoA = bcdiv($panoAdulto, '1', 0);
    $sumaToatlA = 0;

    echo "paño con desimales: " . $panoAdulto . '&nbsp; &nbsp;' . "paño sin decimales: " . $panoA . '<br>' . '<br>';

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

    echo "CANTIDAD" . '<br>';
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

if ($piezasaJ >= 100) {

    $t12 = $_REQUEST["t12"];
    $t14 = $_REQUEST["t14"];
    $t16 = $_REQUEST["t16"];

    if ($t12 > 0) {
        $sumaJ += $t12;
    }
    if ($t14 > 0) {
        $sumaJ += $t14;
    }
    if ($t16 > 0) {
        $sumaJ += $t16;
    }

    echo "TALLA DE JUVENIL" . '&nbsp; &nbsp;' . "piezas a producir: " . $piezasaJ . '<br>';
    echo "talla 12: " . $t12 . '<br>';
    echo "talla 14: " . $t14 . '<br>';
    echo "talla 16: " . $t16 . '<br>';
    echo "total de las curvas: " . $sumaJ . '<br>';
    $sumaToatlJ = 0;
    $panoJuvenil = $piezasaJ / $sumaJ;
    $panoJ = bcdiv($panoJuvenil, '1', 0);

    echo "paño con desimales: " . $panoJuvenil . '&nbsp; &nbsp;' . "paño sin decimales: " . $panoJ . '<br>' . '<br>';

    if ($t12 > 0) {
        $resT12 = $panoJ * $t12;
        $sumaToatlJ += $resT12;
    } else {
        $t12 = 0;
        $resT12 = 0;
    }

    if ($t14 > 0) {
        $resT14 = $panoJ * $t14;
        $sumaToatlJ += $resT12;
    } else {
        $t14 = 0;
        $resT12 = 0;
    }

    if ($t16 > 0) {
        $resT16 = $panoJ * $t16;
        $sumaToatlJ += $resT16;
    } else {
        $t16 = 0;
        $resT16 = 0;
    }

    $sumaResJ = $resT12 + $resT14 + $resT16;

    echo "CANTIDAD" . '<br>';
    echo "talla 12: " . $resT12 . '<br>';
    echo "talla 14: " . $resT14 . '<br>';
    echo "talla 16: " . $resT16 . '<br>';
    echo "suma con acumulador: " . $sumaToatlJ . '<br>' . "suma sin acumulador: " . $sumaResJ . '<br>';
}

if ($piezasaIM >= 100 || $piezasaID >= 100 || $piezasaIC >= 100) {

    if ($piezasaIM >= 100) {
        $m3 = $_REQUEST["m3"];
        $m6 = $_REQUEST["m6"];
        $m9 = $_REQUEST["m9"];
        $m12 = $_REQUEST["m12"];
        $m18 = $_REQUEST["m18"];
        $m24 = $_REQUEST["m24"];

        if ($m3 > 0) {
            $sumaIM += $m3;
        }
        if ($m6 > 0) {
            $sumaIM += $m6;
        }
        if ($m9 > 0) {
            $sumaIM += $m9;
        }
        if ($m12 > 0) {
            $sumaIM += $m12;
        }
        if ($m18 > 0) {
            $sumaIM += $m18;
        }
        if ($m24 > 0) {
            $sumaIM += $m24;
        }


        echo "tallas juvenil" . '<br>';
        echo "total de piezas a producir " . $piezasaIM . '<br>';
        echo "curvas" . '<br>';
        echo "talla 3M: " . $m3 . '<br>';
        echo "talla 6M: " . $m6 . '<br>';
        echo "talla 9M: " . $m9 . '<br>';
        echo "talla 12M: " . $m12 . '<br>';
        echo "talla 18M: " . $m18 . '<br>';
        echo "talla 24M: " . $m24 . '<br>';
    }/*

    if ($piezasaID >= 100) {
        $t23 = $_REQUEST["t23"];
        $t45 = $_REQUEST["t45"];
        $t67 = $_REQUEST["t67"];
        $t89 = $_REQUEST["t89"];
        $t1011 = $_REQUEST["t1011"];

        echo "tallas doble" . '<br>';
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

        echo "tallas completa" . '<br>';
        echo "total de piezas a producir " . $piezasaID . '<br>';
        echo "curvas" . '<br>';
        echo "talla 2: " . $t2 . '<br>';
        echo "talla 4: " . $t4 . '<br>';
        echo "talla 6: " . $t6 . '<br>';
        echo "talla 8: " . $t8 . '<br>';
        echo "talla 10: " . $t10 . '<br>';
    } */
}
