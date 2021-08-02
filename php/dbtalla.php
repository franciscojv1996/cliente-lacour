<script>
  import '/js/curva.js';  // declaración de la variable 
  //tallas adultos
  totalA, panoA, sumaA, piezaA, u, xs, s, m, l, xl, xxl, xl3, xl4, resU, resXS, resS, resM, resL, resXL, resXXL, resXL3, resXL4,
    // talalas juvenil
      totalJ, panoJ, sumaJ, piezaJ, t12, t14, t16, resT12, resT14,  resT16,
    //tallas infantil
      //meses
      totalIM, panoIM, sumaIM, piezaIM, m3, m6, m9, m12, m18, m24, resM3, resM6, resM9, resM12, resM18, resM24,
      //dobles
      totalID, panoID, sumaID, piezaID, t23, t45, t67, t89, t1011, resT23, resT45, resT67, resT89, resT1011,
      //completa
      totalIC, panoIC, sumaIC, piezaIC, t2, t4, t6, t8, t10, resT2, resT4, resT6, resT8, resT10

</script>  
    <?php
        $totalA = "<script> document.writeln(totalA); </script>"; // igualar el valor de la variable JavaScript a PHP 

    echo $totalA ;  // muestra el resultado 

    ?>