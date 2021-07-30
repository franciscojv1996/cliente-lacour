<script>var Var_JavaScript = 14;    // declaración de la variable </script>  
<script src="js/curva.js"></script>
    <?php
        $var_PHP = "<script> document.writeln(Var_JavaScript); </script>"; // igualar el valor de la variable JavaScript a PHP 
        $piezaA = "<script> document.writeln(piezaA); </script>";

    echo $var_PHP;   // muestra el resultado 
    echo $piezaA;

    ?>