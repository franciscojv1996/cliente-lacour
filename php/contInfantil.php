<?php
    class conten{
        public function InfantilM(){ 
            ?>
                <div class="container" >
                    <div id="cuerpoIM" style="display:none;">
                        
                        <div id="curvaIM" > <!--   style="display:none;"  -->

                            <div class="row justify-content-around"> 
                                <div class="col-md-4" >
                                    <h4>Curva</h4> 
                                </div>
                            
                                <div class="col-md-4">
                                    <input type="number" class="form-control form-control-sm" id="piezasaIM"  name="piezasaIM" min="100" placeholder="Total de piezas a producir">
                                </div>  
                            </div>

                                <div class="form-row text-center">

                                    <div class="form-group col-md">
                                        <label>3M</label>
                                        <input type="number" min="1" id="m3" name="m3" class="form-control form-control-sm montoIM" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>6M</label>
                                        <input type="number" min="1" id="m6" name="m6" class="form-control form-control-sm montoIM" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>9M</label>
                                        <input type="number" min="1" id="m9" name="m9" class="form-control form-control-sm montoIM" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>12M</label>
                                        <input type="number" min="1" id="m12" name="m12" class="form-control form-control-sm montoIM" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>18M</label>
                                        <input type="number" min="1" id="m18" name="m18" class="form-control form-control-sm montoIM" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>24M</label>
                                        <input type="number" min="1" id="m24" name="m24" class="form-control form-control-sm montoIM" placeholder="">
                                    </div>

                                </div>

                            <!-- mostrar resultado  -->
                            <div class="row justify-content-around">
                                <div class="col-3">
                                    <label class="form-check-label h4">Cantidad</label>
                                </div>

                                <div class="col-3">
                                    <label class="form-check-label h4" >Total: <span class="sm" id="CcantidaIM"> </label>
                                </div>  
                            </div>

                                <div class="form-row">

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla3M" name="Talla3M"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla6M" name="Talla6M"></span> </p>
                                    </div>
                                        
                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla9M" name="Talla9M"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla12M" name="Talla12M"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla18M" name="Talla18M"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla24M" name="Talla24M"></span> </p>
                                    </div>

                                </div>

                        </div>
                        
                        <div id="CantidadIM" style="display:none;"> <!-- Cantidad style="display:none;"  -->
                            <div class="row justify-content-around">
                                <div class="col-3">
                                    <label class="form-check-label h4">Cantidad</label>
                                </div>

                                <div class="col-3">
                                    <label class="form-check-label h4" >Total: <span class="sm" id="CcantidaIM" name="CcantidaIM"> </label>
                                </div>  
                            </div>
                                
                                <div class="form-row text-center">
                            
                                    <div class="form-group col-md">
                                        <label class="">3M</label>
                                        <input type="number" min="1" class="InfantilM form-control form-control-sm" name="ct3m" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">6M</label>
                                        <input type="number" min="1" class="InfantilM form-control form-control-sm" name="ct6m" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">9M</label>
                                        <input type="number" min="1" class="InfantilM form-control form-control-sm" name="ct9m" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">12M</label>
                                        <input type="number" min="1" class="InfantilM form-control form-control-sm" name="ct12m" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">18M</label>
                                        <input type="number" min="1" class="InfantilM form-control form-control-sm" name="ct18m" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">24M</label>
                                        <input type="number" min="1" class="InfantilM form-control form-control-sm" name="ct24m" placeholder="">
                                    </div>


                                </div>

                            <div class="container">   
                                <div class="row justify-content-end">
                                
                                    <div class="col-3" >
                                        <p class="h4"> Total:  <span class="sm h3" id="infantilMC" name="infantilMC"  ></span> </p>
                                    </div>

                                </div>
                            </div> <br>

                        </div>

                    </div>

                </div>
            <?php
        }

        public function InfantilD(){
            ?>
                <div class="container">

                    <div id="cuerpoID" style="display:none;">

                        <div id="curvaID" > <!--style="display:none;" -->
                    
                            <div class="row justify-content-around"> 
                                <div class="col-md-4" >
                                    <h4>Curva</h4> 
                                </div>
                            
                                <div class="col-md-4">
                                    <input type="number" class="form-control form-control-sm" id="piezasaID" name="piezasaID" min="100" placeholder="Total de piezas a producir">
                                </div>  
                            </div>

                                <div class="form-row text-center">
                                    
                                    <div class="form-group col-md">
                                        <label>2-3</label>
                                        <input type="number" min="1" id="t23" class="form-control montoID form-control-sm" name="t23" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>4-5</label>
                                        <input type="number" min="1" id="t45" class="form-control montoID form-control-sm" name="t45" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>6-7</label>
                                        <input type="number" min="1" id="t67" class="form-control montoID form-control-sm" name="t67" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>8-9</label>
                                        <input type="number" min="1" id="t89" class="form-control montoID form-control-sm" name="t89" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>10-11</label>
                                        <input type="number" min="1" id="t1011" class="form-control montoID form-control-sm" name="t1011" placeholder="">
                                    </div>

                                </div>

                            <!-- mostrar resultado  -->

                            <div class="row justify-content-around">
                                <div class="col-3">
                                    <label class="form-check-label h4">Cantidad</label>
                                </div>

                                <div class="col-3">
                                    <label class="form-check-label h4" >Total: <span class="sm" id="CcantidaID" name="CcantidaID"> </label>
                                </div>  
                            </div>

                                <div class="form-row">
                            
                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla23" name="Talla23"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla45" name="Talla45"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla67" name="Talla67"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla89" name="Talla89"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla1011" name="Talla1011"></span> </p>
                                    </div>

                                </div>

                        </div>

                        <div id="CantidadID" style="display:none;">

                            <div class="row justify-content-around">
                                <div class="col-3">
                                    <label class="form-check-label h4">Cantidad</label>
                                </div>

                                <div class="col-3">
                                    <label class="form-check-label h4" >Total: <span class="sm" id="CcantidaIC" name="CcantidaIC"> </label>
                                </div>  
                            </div>
                                
                                <div class="form-row text-center">
                            
                                    <div class="form-group col-md">
                                        <label class="">2-3</label>
                                        <input type="number" min="1" class="InfantilD form-control form-control-sm" name="mt23" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">4-5</label>
                                        <input type="number" min="1" class="InfantilD form-control form-control-sm" name="mt45" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">6-7</label>
                                        <input type="number" min="1" class="InfantilD form-control form-control-sm" name="mt67" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">8-9</label>
                                        <input type="number" min="1" class="InfantilD form-control form-control-sm" name="mt89" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">10-11</label>
                                        <input type="number" min="1" class="InfantilD form-control form-control-sm" name="mt1011" placeholder="">
                                    </div>

                                </div>

                            <div class="container">   
                                <div class="row justify-content-end">
                                
                                    <div class="col-3" >
                                        <p class="h4"> Total:  <span class="sm h3" id="infantilDC" name="mt1011"></span> </p>
                                    </div>

                                </div>
                            </div> <br>

                        </div>

                    </div>
                </div>
            <?php

        }

        public function InfantilC(){
            ?>
                <div class="container">
                    
                    <div id="cuerpoIC" style="display:none;">

                        <div id="curvaIC"> <!--   style="display:none;"  -->
                        
                            <div class="row justify-content-around"> 
                                <div class="col-md-4" >
                                    <h4>Curva</h4> 
                                </div>
                            
                                <div class="col-md-4">
                                    <input type="number" class="form-control form-control-sm" min="100" id="piezasaIC" name="piezasaIC" placeholder="Total de piezas a producir">
                                </div>  
                            </div>

                                <div class="form-row text-center">
                                    <div class="form-group col-md">
                                        <label>2</label>
                                        <input type="number" min="1" class="form-control form-control-sm montoIC" id="t2" name="t2" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>4</label>
                                        <input type="number" min="1" class="form-control form-control-sm montoIC" id="t4" name="t2"placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>6</label>
                                        <input type="number" min="1" class="form-control form-control-sm montoIC" id="t6" name="t6" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>8</label>
                                        <input type="number" min="1" class="form-control form-control-sm montoIC" id="t8" name ="t8" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>10</label>
                                        <input type="number" min="1" class="form-control form-control-sm montoIC" id="t10" name="t10" placeholder="">
                                    </div>
                                </div>

                            <!-- mostrar resultado  -->
                            <div class="row justify-content-around">
                                <div class="col-3">
                                    <label class="form-check-label h4">Cantidad</label>
                                </div>

                                <div class="col-3">
                                    <label class="form-check-label h4" >Total: <span class="sm" id="CcantidaIC" name="CcantidaIC"> </label>
                                </div>  
                            </div>

                                <div class="form-row">

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla2" name="Talla2"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla4" name="Talla4"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla6" name="Talla6"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla8" name="Talla8"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla10" name="Talla10"></span> </p>
                                    </div>

                                </div>
                        </div>

                        <div id="CantidadIC" style="display: none">

                            <div class="form-check form-check-inline" >
                                <label class="form-check-label h4">Cantidad <!-- <span id="sm"></span> --> </label>       
                            </div>
                                
                                <div class="form-row text-center">
                            
                                    <div class="form-group col-md">
                                        <label class="">2</label>
                                        <input type="number" min="1" class="InfantilC form-control form-control-sm" name="ct23" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">4</label>
                                        <input type="number" min="1" class="InfantilC form-control form-control-sm" name="ct45" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">6</label>
                                        <input type="number" min="1" class="InfantilC form-control form-control-sm" name="ct67" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">8</label>
                                        <input type="number" min="1" class="InfantilC form-control form-control-sm" name="ct89" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">10</label>
                                        <input type="number" min="1" class="InfantilC form-control form-control-sm" name="ct1011" placeholder="">
                                    </div>

                                </div>

                            <div class="container">   
                                <div class="row justify-content-end">
                                
                                    <div class="col-3" >
                                        <p class="h4"> Total:  <span class="sm h3" id="infantilCC" name="infantilCC" ></span> </p>
                                    </div>

                                </div>
                            </div> <br>

                        </div>
                        
                    </div>
                </div>
            <?php

        }

        public function Texto(){
            ?>
                <div class="container" id="cuerpoT" style="display: none;"> <!-- Titulo de tallas infantiles -->
                    <h2 class="text-center">Tallas Infantiles</h2>
                </div>
            <?php
        }
    }
?>