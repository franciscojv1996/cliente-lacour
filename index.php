<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>
<body>
    <?php 
        include "php/menu.php";
        include "php/contAdulto.php";
        include "php/contJuvenil.php";
        include "php/contInfantil.php";

        $a = new menu;
        $a -> navn();
    ?>

    <div class="container-fluid">
        <div class="container">
            
            <div class="row justify-content-around" style="background-color:#dd0">
                
                <div class="col-md"> <br>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="checka" onchange="javascript:adulto()">
                        <label class="form-check-label">Tallas Adultos</label>       
                    </div>
                    
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="checkj" onchange="javascript:juvenil()">
                        <label class="form-check-label">Tallas Juvenil</label>       
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="checki" onchange="javascript:infantil()">
                        <label class="form-check-label">Tallas Infantil</label>       
                    </div> 
                    
                    <br><br> </div>
                
                <div class="col-md"> <br>

                </div>  
                 
            </div> 
        
        </div>

        <br>

        <div class="container">
            
            <div class="row justify-content-center" style="background-color:#dd0">
                
                <div class="col-md-2"  style="background-color:#aaa">

                    <div class="custom-control custom-radio">
                        <input type="radio" name="opc" value="1" onchange="mostrar(this.value);">
                        <label>Curva</label>
                    </div>

                    <div class="custom-control custom-radio">
                        <input type="radio" name="opc" value="2" onchange="mostrar(this.value);">
                        <label>Cantidad</label>
                    </div>

                    <div id="btnCurva" style="display: none;">
                        <div class="custom-control custom-radio">
                            <input type="button" value="calcular" onclick="curva()" class="btn btn-primary">
                        </div>

                        <div class="custom-control custom-radio">
                        <span>El resultado es: </span> <span id="spTotal"></span>
                        </div>
                    </div>

                </div>
                
                <div class="col-md-10"  style="background-color:#bbb">
                    
                    <div class="" id="contentA" style="display: none;">
                        <?php 
                            $b = new cont;
                            $b -> Adulto();
                        ?>
                    </div>

                    <div class="" id="contentJ" style="display: none;">
                        <?php 
                            $c = new conte;
                            $c -> Juvenil();
                        ?>
                    </div>

                    <div class="" id="contentI" style="display: none;">
                        <?php 
                            $d = new conten;
                            $d -> Infantil();
                        ?>
                    </div>

                </div>  
                 
            </div> 
        
        </div>

    </div>

    <script>

        function mostrar(dato){
            if (dato == "1") {
                document.getElementById("curvAd").style.display = "block";
                document.getElementById("curvIn").style.display = "block";
                document.getElementById("curvJu").style.display = "block";
                document.getElementById("btnCurva").style.display = "block";

                document.getElementById("CantidadAd").style.display = "none";
                document.getElementById("CantidadIn").style.display = "none";
                document.getElementById("CantidadJu").style.display = "none";
            }

            if (dato == "2") {
                document.getElementById("CantidadAd").style.display = "block";
                document.getElementById("CantidadIn").style.display = "block";
                document.getElementById("CantidadJu").style.display = "block";

                document.getElementById("curvAd").style.display = "none";
                document.getElementById("curvIn").style.display = "none";
                document.getElementById("curvJu").style.display = "none";
                document.getElementById("btnCurva").style.display = "none";
            }
        }

    </script>

    <script src="js\curva1.js"></script>
    <script src="js\tabla.js"></script>
    <script src="js\bootstrap.min.js"></script>
    <script src="js\jquery-3.3.1.slim.min.js"></script>
    <script src="js\jquery.min.js"></script>
    <script src="js\popper.min.js"></script>
</body>
</html>