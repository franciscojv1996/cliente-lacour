<?php 
$piezaA = $_GET['piezaA'];

echo $piezaA;


/*

<html>
<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into alumnos(nombre,mail,codigocurso) values 
                       ('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[codigocurso])")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El alumno fue dado de alta.";
  ?>
</body>

// tallas adulto
$piezasaA = $_REQUEST['piezasaA'];
$u = $_REQUEST['u'];
$xs = $_REQUEST['xs'];
$s = $_REQUEST['s'];
$m = $_REQUEST['m'];
$l = $_REQUEST['l'];
$xl = $_REQUEST['xl'];
$xxl = $_REQUEST['xxl'];
$xl3 = $_REQUEST['xl3'];
$xl4 = $_REQUEST['xl4'];
$CcantidaA = $_REQUEST['CcantidaA'];

echo $piezasaA ; 
echo $u;
echo $xs;
echo $s;
echo $m;
echo $l;
echo $xl;
echo $xxl;
echo $xl3;
echo $xl4;
echo $CcantidaA ;

</html>

*/