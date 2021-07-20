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
                        <input type="checkbox" data-toggle="modal" data-target="#exampleModal"/>
                        <!-- <input class="form-check-input" type="checkbox" id="checki" onchange="javascript:infantil()"> -->
                        <label class="form-check-label">Tallas Infantil</label>
                        
                        <!-- inicio de Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                                                
                                        <div class="container">
                                            <div class="row">
                                    
                                                <div class="col text-center">
                                                    <input type="radio" name="tll" value="1" onchange="infantil(this.value);" >
                                                    <label for="">Talla de Meses</label>
                                                    <div class="border border-dark rounded text-center">
                                                        <ul class="list-unstyled h5"> <br> <br> <br> <br> <br>
                                                            <li>3M</li> <hr>
                                                            <li>6M</li> <hr>
                                                            <li>9M</li> <hr>
                                                            <li>12M</li> <hr>
                                                            <li>18M</li> <hr>
                                                            <li>24M</li>
                                                        </ul> <br> <br> <br> <br> <br> <br>
                                                    </div>
                                                </div>

                                                <div class="col text-center">
                                                    <input type="checkbox" id="checkD">
                                                    <label for="">Talla Doble</label>
                                                    <div class="border border-dark rounded">
                                                        <ul class="list-unstyled h5"> <br> <br> <br>
                                                            <li>2-3</li> <hr>
                                                            <li>3-4</li> <hr>
                                                            <li>4-5</li> <hr>
                                                            <li>5-6</li> <hr>
                                                            <li>6-7</li> <hr>
                                                            <li>7-8</li> <hr>
                                                            <li>8-9</li> <hr>
                                                            <li>9-10</li>
                                                        </ul> <br> <br> <br>
                                                    </div>
                                                </div>

                                                <div class="col text-center">
                                                    <input type="checkbox" id="checkC">
                                                    <label for="">Talla Completa</label>
                                                    <div class="border border-dark rounded text-center">
                                                        <ul class="list-unstyled h5"> <br>
                                                            <li>1</li> <hr>
                                                            <li>2</li> <hr>
                                                            <li>3</li> <hr>
                                                            <li>4</li> <hr>
                                                            <li>5</li> <hr>
                                                            <li>6</li> <hr>
                                                            <li>7</li> <hr>
                                                            <li>8</li> <hr>
                                                            <li>9</li> <hr>
                                                            <li>10</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            
                                            </div> <br>

                                            <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal">Block level button</button>
                                
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                        <!-- final de Modal -->
                        
                    </div> 
                    
                    <br><br> 
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

                    <div id="resCurva" style="display: none;">
    
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
                            $e = new conten;
                            $e -> Infantil();
                        ?>
                    </div>

                    <div id="btnCurva" style="display: none;">
                        <input type="button" value="Calcular" onclick="curva();" class="btn btn-primary btn-lg btn-block"> 
                    </div>

                </div>
            </div> 
        
        </div>

    </div>

    

    <script>
                function infantil(valor) {

if(valor =="1"){
    documen.getElementById("infantilM").style.display='block';
    documen.getElementById("contentI").style.display='block';

}
}

    /*
        function infantil() {
        //div de tallas infantiles
         cuerpoM = documen.getElementById("infantilM");
         cuerpoD = documen.getElementById("infantilD");
         cuerpoC = documen.getElementById("infantilC");

        //checkbox de tallas infantiles
         checkM = documen.getElementById("checkM");
         checkD = documen.getElementById("checkD");
         checkC = documen.getElementById("checkC");

            //tallas de Meses
         if(checkM.checked){    cuerpoM.style.display='block';
         }else{ cuerpoM.style.display='none';   }

            //tallas dobles
         if(checkD.checked){    cuerpoD.style.display='block';
         }else{ cuerpoD.style.display='none';   }

            //tallas completas 
         if(checkC.checked){    cuerpoC.style.display='block';
         }else{ cuerpoC.style.display='none';   }

    }*/

        /*function mostrar(dato){
            if (dato == "1") {
                document.getElementById("curvAd").style.display = "block";
                document.getElementById("curvIn").style.display = "block";
                document.getElementById("curvJu").style.display = "block";
                document.getElementById("btnCurva").style.display = "block";
                document.getElementById("resCurva").style.display = "block";


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
//                document.getElementById("btnCurva").style.display = "none";
//                document.getElementById("resCurva").style.display = "none";
            }
        }*/

    </script>

    <script src="js\curva1.js"></script>
    <script src="js\tabla.js"></script>
    <script src="js\jquery.min.js"></script>
    <script src="js\jquery-3.3.1.slim.min.js"></script>
    <script src="js\popper.min.js"></script>
    <script src="js\bootstrap.min.js"></script>

    </body>

</html>