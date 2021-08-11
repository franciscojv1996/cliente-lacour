<?php
include "../config/conexion.php";

$fecha = date('d/m/Y');
$hora = date('h:i:s a');
echo $fecha . '<br>' . $hora . '<br>';
$codDis = $_REQUEST["codDis"];
echo "Codigo de diseño: " . $codDis . '<br>' . '<br>';

$piezasaA = $_REQUEST["piezasaA"];
$piezasaJ = $_REQUEST["piezasaJ"];
$piezasaIM = $_REQUEST["piezasaIM"];
$piezasaID = $_REQUEST["piezasaID"];
$piezasaIC = $_REQUEST["piezasaIC"];

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

    $sentenciaAdulto = "INSERT INTO talla_adulto (cod_diseno, cantidad, ucuad, xscuad, scuad, mcuad, lcuad, xlcuad, xxlcuad, 3xlcuad, 4xlcuad, ucaad, xscaad, scaad, mcaad, lcaad, xlcaad, xxlcaad, 3xlcaad, 4xlcaad, total_cant, fecha, hora) VALUE 
                                                ('" . $codDis . "', '" . $piezasaA . "', '" . $u . "', '" . $xs . "', '" . $s . "', '" . $m . "', '" . $l . "', '" . $xl . "', '" . $xxl . "', '" . $xl3 . "', '" . $xl4 . "', '" . $resU . "', '" . $resXS . "', '" . $resS . "', '" . $resM . "', '" . $resL . "', '" . $resXL . "', '" . $resXXL . "', '" . $resXL3 . "', '" . $resXL4 . "', '" . $sumaToatlA . "', '" . $fecha . "', '" . $hora . "')";
    $conexion->query($sentenciaAdulto) or die("Error al ingresar los datos" . mysqli_error($conexion));
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
        $sumaToatlJ += $resT14;
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

    $sentenciaJuvenil = "INSERT INTO talla_juvenil (cod_diseno, cantidad, 12cuju, 14cuju, 16cuju, 12caju, 14caju, 16aju, total_cant, fecha, hora) VALUE 
                                                    ('" . $codDis . "', '" . $piezasaJ . "', '" . $t12 . "', '" . $t14 . "', '" . $t16 . "', '" . $resT12 . "', '" . $resT14 . "', '" . $resT16 . "',  '" . $sumaToatlJ . "', '" . $fecha . "', '" . $hora . "')";
    $conexion->query($sentenciaJuvenil) or die("Error al ingresar los datos" . mysqli_error($conexion));
}

if ($piezasaIM >= 100 || $piezasaID >= 100 || $piezasaIC >= 100) {

    echo "TALLAS INFANTILES";

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

        echo "TALLA DE INFANTIL MESES " . '&nbsp; &nbsp;' . "piezas a producir: " . $piezasaIM . '<br>';
        echo "talla 3M: " . $m3 . '<br>';
        echo "talla 6M: " . $m6 . '<br>';
        echo "talla 9M: " . $m9 . '<br>';
        echo "talla 12M: " . $m12 . '<br>';
        echo "talla 18M: " . $m18 . '<br>';
        echo "talla 24M: " . $m24 . '<br>';
        echo "total de las curvas: " . $sumaIM . '<br>';
        $sumaToatlIM = 0;
        $panoInfantilM = $piezasaIM / $sumaIM;
        $panoIM = bcdiv($panoInfantilM, '1', 0);

        echo "paño con desimales: " . $panoInfantilM . '&nbsp; &nbsp;' . "paño sin decimales: " . $panoIM . '<br>' . '<br>';

        if ($m3 > 0) {
            $resM3 = $panoIM * $m3;
            $sumaToatlIM += $resM3;
        } else {
            $m3 = 0;
            $resM3 = 0;
        }

        if ($m6 > 0) {
            $resM6 = $panoIM * $m6;
            $sumaToatlIM += $resM6;
        } else {
            $m6 = 0;
            $resM6 = 0;
        }

        if ($m9 > 0) {
            $resM9 = $panoIM * $m9;
            $sumaToatlIM += $resM9;
        } else {
            $m9 = 0;
            $resM9  = 0;
        }

        if ($m12 > 0) {
            $resM12 = $panoIM * $m12;
            $sumaToatlIM += $resM12;
        } else {
            $m12 = 0;
            $resM12 = 0;
        }

        if ($m18 > 0) {
            $resM18 = $panoIM * $m18;
            $sumaToatlIM += $resM18;
        } else {
            $m18 = 0;
            $resM18 = 0;
        }

        if ($m24 > 0) {
            $resM24 = $panoIM * $m24;
            $sumaToatlIM += $resM24;
        } else {
            $m24 = 0;
            $resM24 = 0;
        }

        $sumaResIM = $resM3 + $resM6 + $resM9 + $resM12 + $resM18 + $resM24;

        echo "CANTIDAD" . '<br>';
        echo "talla 3M: " . $resM3 . '<br>';
        echo "talla 6M: " . $resM6 . '<br>';
        echo "talla 9M: " . $resM9 . '<br>';
        echo "talla 12M: " . $resM12 . '<br>';
        echo "talla 18M: " . $resM18 . '<br>';
        echo "talla 24M: " . $resM24 . '<br>';
        echo "suma con acumulador: " . $sumaToatlIM . '<br>' . "suma sin acumulador: " . $sumaResIM . '<br>';

        $sentenciaInfantilM = "INSERT INTO talla_infantilm (cod_diseno, can_tim, m3cutim, m6cutim, m9cutim, m12cutim, m18cutim, m24cutim, m3catim, m6catim, m9catim, m12catim, m18catim, m24catim, total_cantim) VALUE 
                                                    ('" . $codDis . "', '" . $piezasaIM . "', '" . $m3 . "', '" . $m6 . "', '" . $m9 . "', '" . $m12 . "', '" . $m18 . "', '" . $m24 . "', '" . $resM3 . "', '" . $resM6 . "', '" . $resM9 . "', '" . $resM12 . "', '" . $resM18 . "', '" . $resM24 . "', '" . $sumaToatlIM . "')";
        $conexion->query($sentenciaInfantilM) or die("Error al ingresar los datos" . mysqli_error($conexion));
    }

    if ($piezasaID >= 100) {
        $t23 = $_REQUEST["t23"];
        $t45 = $_REQUEST["t45"];
        $t67 = $_REQUEST["t67"];
        $t89 = $_REQUEST["t89"];
        $t1011 = $_REQUEST["t1011"];

        if ($t23 > 0) {
            $sumaID += $t23;
        }

        if ($t45 > 0) {
            $sumaID += $t45;
        }

        if ($t67 > 0) {
            $sumaID += $t67;
        }

        if ($t89 > 0) {
            $sumaID += $t89;
        }

        if ($t1011 > 0) {
            $sumaID += $t1011;
        }

        echo "TALLA DE INFANTIL DOBLE " . '&nbsp; &nbsp;' . "piezas a producir: " . $piezasaID . '<br>';
        echo "talla 2-3: " . $t23 . '<br>';
        echo "talla 4-5: " . $t45 . '<br>';
        echo "talla 6-7: " . $t67 . '<br>';
        echo "talla 8-9: " . $t89 . '<br>';
        echo "talla 10-11: " . $t1011 . '<br>';

        echo "total de las curvas: " . $sumaID . '<br>';
        $sumaToatlID = 0;
        $panoInfantilD = $piezasaID / $sumaID;
        $panoID = bcdiv($panoInfantilD, '1', 0);

        echo "paño con desimales: " . $panoInfantilD . '&nbsp; &nbsp;' . "paño sin decimales: " . $panoID . '<br>' . '<br>';

        if ($t23 > 0) {
            $resT23 = $panoID * $t23;
            $sumaToatlID += $resT23;
        } else {
            $t23 = 0;
            $resT23 = 0;
        }

        if ($t45 > 0) {
            $resT45 = $panoID * $t45;
            $sumaToatlID += $resT45;
        } else {
            $t45 = 0;
            $resT45 = 0;
        }

        if ($t67 > 0) {
            $resT67 = $panoID * $t67;
            $sumaToatlID += $resT67;
        } else {
            $t67 = 0;
            $resT67 = 0;
        }

        if ($t89 > 0) {
            $resT89 = $panoID * $t89;
            $sumaToatlID += $resT89;
        } else {
            $t89 = 0;
            $resT89 = 0;
        }

        if ($t1011 > 0) {
            $resT1011 = $panoID * $t1011;
            $sumaToatlID += $resT1011;
        } else {
            $t1011 = 0;
            $resT1011 = 0;
        }

        $sumaResID = $resT23 + $resT45 + $resT67 + $resT89 + $resT1011;

        echo "CANTIDAD" . '<br>';
        echo "talla 2-3: " . $resT23 . '<br>';
        echo "talla 4-5: " . $resT45 . '<br>';
        echo "talla 6-7: " . $resT67 . '<br>';
        echo "talla 8-9: " . $resT89 . '<br>';
        echo "talla 10-11: " . $resT1011 . '<br>';
        echo "suma con acumulador: " . $sumaToatlID . '<br>' . "suma sin acumulador: " . $sumaResID . '<br>';

        $sentenciaInfantilD = "INSERT INTO `talla_infantild`(`cod_diseno`, `can_tid`, `t23cutid`, `t45cutid`, `t67cutid`, `t89cutid`, `t1011cutid`, `t23catid`, `t45catid`, `t67catid`, `t89catid`, `t1011catid`, `total_cantid`) VALUES 
                                                            ('" . $codDis . "','" . $piezasaID . "','" . $t23 . "','" . $t45 . "','" . $t67 . "','" . $t89 . "','" . $t1011 . "','" . $resT23 . "','.$resT45.','" . $resT67 . "','" . $resT89 . "','" . $resT1011 . "','" . $sumaToatlID . "')";
        $conexion->query($sentenciaInfantilD) or die("Error al ingresar los datos" . mysqli_error($conexion));
    }

    if ($piezasaIC >= 100) {

        $t2 = $_REQUEST["t2"];
        $t4 = $_REQUEST["t4"];
        $t6 = $_REQUEST["t6"];
        $t8 = $_REQUEST["t8"];
        $t10 = $_REQUEST["t10"];

        if ($t2 > 0) {
            $sumaIC += $t2;
        }

        if ($t4 > 0) {
            $sumaIC += $t4;
        }

        if ($t6 > 0) {
            $sumaIC += $t6;
        }

        if ($t8 > 0) {
            $sumaIC += $t8;
        }

        if ($t10 > 0) {
            $sumaIC += $t10;
        }

        echo "TALLA DE INFANTIL COMPLETA " . '&nbsp; &nbsp;' . "piezas a producir: " . $piezasaIC . '<br>';
        echo "talla 2: " . $t2 . '<br>';
        echo "talla 4: " . $t4 . '<br>';
        echo "talla 6: " . $t6 . '<br>';
        echo "talla 8: " . $t8 . '<br>';
        echo "talla 10: " . $t10 . '<br>';


        echo "total de las curvas: " . $sumaIC . '<br>';
        $sumaToatlIC = 0;
        $panoInfantilC = $piezasaIC / $sumaIC;
        $panoIC = bcdiv($panoInfantilC, '1', 0);

        echo "paño con desimales: " . $panoInfantilC . '&nbsp; &nbsp;' . "paño sin decimales: " . $panoIC . '<br>' . '<br>';

        if ($t2 > 0) {
            $resT2 = $panoIC * $t2;
            $sumaToatlIC += $resT2;
        } else {
            $t2 = 0;
            $resT2 = 0;
        }

        if ($t4 > 0) {
            $resT4 = $panoIC * $t4;
            $sumaToatlIC += $resT4;
        } else {
            $t4 = 0;
            $resT4 = 0;
        }

        if ($t6 > 0) {
            $resT6 = $panoIC * $t6;
            $sumaToatlIC += $resT6;
        } else {
            $t6 = 0;
            $resT6 = 0;
        }

        if ($t8 > 0) {
            $resT8 = $panoIC * $t8;
            $sumaToatlIC += $resT8;
        } else {
            $t8 = 0;
            $resT8 = 0;
        }

        if ($t10 > 0) {
            $resT10 = $panoIC * $t10;
            $sumaToatlIC += $resT10;
        } else {
            $t10 = 0;
            $resT10 = 0;
        }

        $sumaResIC = $resT2 + $resT4 + $resT6 + $resT8 + $resT10;

        echo "CANTIDAD" . '<br>';
        echo "talla 2: " . $resT2 . '<br>';
        echo "talla 4: " . $resT4 . '<br>';
        echo "talla 6: " . $resT6 . '<br>';
        echo "talla 8: " . $resT8 . '<br>';
        echo "talla 10: " . $resT10 . '<br>';
        echo "suma con acumulador: " . $sumaToatlIC . '<br>' . "suma sin acumulador: " . $sumaResIC . '<br>';

        $sentenciaInfantilC = "INSERT INTO `talla_infantilc`(`cod_diseno`, `can_tic`, `t2cutic`, `t4cutic`, `t6cutic`, `t8cutic`, `t10cutic`, `t2catic`, `t4catic`, `t6catic`, `t8catic`, `t10catic`, `total_cantic`) VALUES 
                                                        ('" . $codDis . "', '" . $piezasaIC . "' ,'" . $t2 . "','" . $t4 . "','" . $t6 . "','" . $t8 . "','" . $t10 . "','" . $resT2 . "','" . $resT4 . "','" . $resT6 . "','" . $resT8 . "','" . $resT10 . "','" . $sumaToatlIC . "')";
        $conexion->query($sentenciaInfantilC) or die("Error al ingresar los datos" . mysqli_error($conexion));
    }
}

//adulto
$cu = $_REQUEST["CU"];
$cxs = $_REQUEST["CXS"];
$cs = $_REQUEST["CS"];
$cm = $_REQUEST["CM"];
$cl = $_REQUEST["CL"];
$cxl =  $_REQUEST["CXL"];
$cxxl = $_REQUEST["CXXL"];
$c3xl = $_REQUEST["C3XL"];
$c4xl = $_REQUEST["C4XL"];

if ($cu > 0 || $cxs > 0 || $cs > 0 || $cm > 0 || $cl > 0 || $cxl > 0 || $cxxl > 0 || $c3xl > 0 || $c4xl > 0) {
    $totalCantidadAdulto = 0;
    if ($cu > 0) {
        $totalCantidadAdulto += $cu;
    } else {
        $cu = 0;
    }
    if ($cxs > 0) {
        $totalCantidadAdulto += $cxs;
    } else {
        $cxs = 0;
    }
    if ($cs > 0) {
        $totalCantidadAdulto += $cs;
    } else {
        $cs = 0;
    }
    if ($cm > 0) {
        $totalCantidadAdulto += $cm;
    } else {
        $cm = 0;
    }
    if ($cl > 0) {
        $totalCantidadAdulto += $cl;
    } else {
        $cl = 0;
    }
    if ($cxl > 0) {
        $totalCantidadAdulto += $cxl;
    } else {
        $cxl = 0;
    }
    if ($cxxl > 0) {
        $totalCantidadAdulto += $cxxl;
    } else {
        $cxxl = 0;
    }
    if ($c3xl > 0) {
        $totalCantidadAdulto += $c3xl;
    } else {
        $c3xl = 0;
    }
    if ($c4xl > 0) {
        $totalCantidadAdulto += $c4xl;
    } else {
        $c4xl = 0;
    }

    echo "total de piezas a producir en tallas adultos" . $totalCantidadAdulto . '<br>';

    $cantidadAdulto = "INSERT INTO `talla_adulto`(`cod_diseno`, `ucaad`, `xscaad`, `scaad`, `mcaad`, `lcaad`, `xlcaad`, `xxlcaad`, `3xlcaad`, `4xlcaad`, `total_cant`) VALUES 
                                                ('" . $codDis . "', '" . $cu . "', '" . $cxs . "', '" . $cs . "', '" . $cm . "', '" . $cl . "', '" . $cxl . "', '" . $cxxl . "', '" . $c3xl . "', '" . $c4xl . "', '" . $totalCantidadAdulto . "' )";
    $conexion->query($cantidadAdulto) or die("Error al ingresar los datos" . mysqli_error($conexion));
}

//juvenil
$ct12 = $_REQUEST["ct12"];
$ct14 = $_REQUEST["ct14"];
$ct16 = $_REQUEST["ct16"];

if ($ct12 > 0 || $ct14 > 0 || $ct16 > 0) {
    $totalCantidadJuvenil = 0;
    if ($ct12 > 0) {
        $totalCantidadJuvenil += $ct12;
    } else {
        $ct12 = 0;
    }
    if ($ct14 > 0) {
        $totalCantidadJuvenil += $ct14;
    } else {
        $ct14 = 0;
    }
    if ($ct16 > 0) {
        $totalCantidadJuvenil += $ct16;
    } else {
        $ct16 = 0;
    }
    echo "total de piezas a producir en tallas juvenil" . $totalCantidadJuvenil . '<br>';

    $cantidadJuvenil = "INSERT INTO `talla_juvenil`(`cod_diseno`, `12caju`, `14caju`, `16aju`,`total_cant`) VALUES 
                                                ('" . $codDis . "', '" . $ct12 . "', '" . $ct14 . "', '" . $ct16 . "', '" . $totalCantidadJuvenil . "' )";
    $conexion->query($cantidadJuvenil) or die("Error al ingresar los datos" . mysqli_error($conexion));
}

// infantil Meses
$ct3m = $_REQUEST["ct3m"];
$ct6m = $_REQUEST["ct6m"];
$ct9m = $_REQUEST["ct9m"];
$ct12m = $_REQUEST["ct12m"];
$ct18m = $_REQUEST["ct18m"];
$ct24m = $_REQUEST["ct24m"];

if ($ct3m > 0 || $ct6m > 0 || $ct9m > 0 || $ct12m > 0 || $ct18m > 0 || $ct24m > 0) {
    $totalCantidadInfantilM = 0;
    if ($ct3m > 0) {
        $totalCantidadInfantilM += $ct3m;
    } else {
        $ct3m = 0;
    }
    if ($ct6m > 0) {
        $totalCantidadInfantilM += $ct6m;
    } else {
        $ct6m = 0;
    }
    if ($ct9m > 0) {
        $totalCantidadInfantilM += $ct9m;
    } else {
        $ct9m = 0;
    }
    if ($ct12m > 0) {
        $totalCantidadInfantilM += $ct12m;
    } else {
        $ct12m = 0;
    }
    if ($ct18m > 0) {
        $totalCantidadInfantilM += $ct18m;
    } else {
        $ct18m = 0;
    }
    if ($ct24m > 0) {
        $totalCantidadInfantilM += $ct24m;
    } else {
        $ct24m = 0;
    }

    echo "total de piezas a producir en tallas infantil meses" . $totalCantidadInfantilM . '<br>';

    $cantidadJuvenil = "INSERT INTO `talla_infantilm`(`cod_diseno`, `m3catim`, `m6catim`, `m9catim`,`m12catim`,`m18catim`,`m24catim`,`total_cantim`) VALUES 
                                                ('" . $codDis . "', '" . $ct3m . "', '" . $ct6m . "', '" . $ct9m . "', '" . $ct12m . "', '" . $ct18m . "' , '" . $ct24m . "', '" . $totalCantidadInfantilM . "' )";
    $conexion->query($cantidadJuvenil) or die("Error al ingresar los datos" . mysqli_error($conexion));
}

// infantil Dobles
$mt23 = $_REQUEST["mt23"];
$mt45 = $_REQUEST["mt45"];
$mt67 = $_REQUEST["mt67"];
$mt89 = $_REQUEST["mt89"];
$mt1011 = $_REQUEST["mt1011"];

if ($mt23 > 0 || $mt45 > 0 || $mt67 > 0 || $mt89 > 0 || $mt1011 > 0) {

    $totalCantidadInfantilD = 0;

    if ($mt23 > 0) {
        $totalCantidadInfantilD += $mt23;
    } else {
        $mt23 = 0;
    }
    if ($mt45 > 0) {
        $totalCantidadInfantilD += $mt45;
    } else {
        $mt45 = 0;
    }
    if ($mt67 > 0) {
        $totalCantidadInfantilD += $mt67;
    } else {
        $mt67 = 0;
    }
    if ($mt89 > 0) {
        $totalCantidadInfantilD += $mt89;
    } else {
        $mt89 = 0;
    }
    if ($mt1011 > 0) {
        $totalCantidadInfantilD += $mt1011;
    } else {
        $mt1011 = 0;
    }

    echo "total de piezas a producir en tallas infantil doble" . $totalCantidadInfantilD . '<br>';

    $cantidadInfantilD = "INSERT INTO `talla_infantild`(`cod_diseno`, `t23catid`, `t45catid`, `t67catid`,`t89catid`,`t1011catid`,`total_cantid`) VALUES 
                                                    ('" . $codDis . "', '" . $mt23 . "', '" . $mt45 . "', '" . $mt67 . "', '" . $mt89 . "', '" . $mt1011 . "' , '" . $totalCantidadInfantilD . "' )";
    $conexion->query($cantidadInfantilD) or die("Error al ingresar los datos" . mysqli_error($conexion));
}

// infantil Completa
$ct2 = $_REQUEST["ct2"];
$ct4 = $_REQUEST["ct4"];
$ct6 = $_REQUEST["ct6"];
$ct8 = $_REQUEST["ct8"];
$ct10 = $_REQUEST["ct10"];

if ($ct2 > 0 || $ct4 > 0 || $ct6 > 0 || $ct8 > 0 || $ct10 > 0) {
    $totalCantidadInfantilC = 0;
    if ($ct2 > 0) {
        $totalCantidadInfantilC += $ct2;
    } else {
        $ct2 = 0;
    }
    if ($ct4 > 0) {
        $totalCantidadInfantilC += $ct4;
    } else {
        $ct4 = 0;
    }
    if ($ct6 > 0) {
        $totalCantidadInfantilC += $ct6;
    } else {
        $ct6 = 0;
    }
    if ($ct8 > 0) {
        $totalCantidadInfantilC += $ct8;
    } else {
        $ct8 = 0;
    }
    if ($ct10 > 0) {
        $totalCantidadInfantilC += $ct10;
    } else {
        $ct10 = 0;
    }

    echo "total de piezas a producir en tallas infantil completa" . $totalCantidadInfantilC . '<br>';

    $cantidadInfantilD = "INSERT INTO `talla_infantilc`(`cod_diseno`, `t2catic`, `t4catic`, `t6catic`,`t8catic`,`t10catic`,`total_cantic`) VALUES 
                                                    ('" . $codDis . "', '" . $ct2 . "', '" . $ct4 . "', '" . $ct6 . "', '" . $ct8 . "', '" . $ct10 . "' , '" . $totalCantidadInfantilC . "' )";
    $conexion->query($cantidadInfantilD) or die("Error al ingresar los datos" . mysqli_error($conexion));

}
