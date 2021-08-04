<?php 

adulto($_POST['piezasaA'], $_POST['u'], $_POST['xs'], $_POST['s'], $_POST['m'], $_POST['l'], $_POST['xl'], $_POST['xxl'], $_POST['xl3'], $_POST['xl4']);

function adulto($piezasaA, $u, $xs, $s, $m, $l, $xl, $xxl, $xl3, $xl4){
 $suma= $u + $xs + $s + $m + $l + $xl + $xxl + $xl3 + $xl4;  
 echo $suma;    
}

/*
adultoCurvas($_POST[''], $_POST[''], $_POST[''], $_POST[''], $_POST[''], $_POST[''], $_POST[''],);

function adultoCantidad(){}
*/


?>