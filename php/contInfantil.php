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
                                    <input type="number" class="form-control form-control-sm" id="piezasaIM" min="100" placeholder="Total de piezas a producir">
                                </div>  
                            </div>

                                <div class="form-row text-center">

                                    <div class="form-group col-md">
                                        <label>3M</label>
                                        <input type="number" min="1" id="m3" class="form-control form-control-sm montoIM" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>6M</label>
                                        <input type="number" min="1" id="m6" class="form-control form-control-sm montoIM" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>9M</label>
                                        <input type="number" min="1" id="m9" class="form-control form-control-sm montoIM" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>12M</label>
                                        <input type="number" min="1" id="m12" class="form-control form-control-sm montoIM" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>18M</label>
                                        <input type="number" min="1" id="m18" class="form-control form-control-sm montoIM" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>24M</label>
                                        <input type="number" min="1" id="m24" class="form-control form-control-sm montoIM" placeholder="">
                                    </div>

                                </div>

                            <!-- mostrar resultado  -->
                            <div class="form-check form-check-inline" >
                                    <label class="form-check-label h4">Cantidad: <!-- <span id="sm"></span> --> </label>       
                            </div>

                                <div class="form-row">

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla3M"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla6M"></span> </p>
                                    </div>
                                        
                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla9M"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla12M" ></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla18M" ></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla24M"></span> </p>
                                    </div>

                                </div>

                        </div>
                        
                        <div id="CantidadIM" style="display:none;"> <!-- Cantidad style="display:none;"  -->
                            <div class="form-check form-check-inline" >
                                <label class="form-check-label h4">Cantidad <!-- <span id="sm"></span> --> </label>       
                            </div>
                                
                                <div class="form-row text-center">
                            
                                    <div class="form-group col-md">
                                        <label class="">3M</label>
                                        <input type="number" min="1" class="InfantilM form-control form-control-sm" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">6M</label>
                                        <input type="number" min="1" class="InfantilM form-control form-control-sm" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">9M</label>
                                        <input type="number" min="1" class="InfantilM form-control form-control-sm" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">12M</label>
                                        <input type="number" min="1" class="InfantilM form-control form-control-sm" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">18M</label>
                                        <input type="number" min="1" class="InfantilM form-control form-control-sm" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">24M</label>
                                        <input type="number" min="1" class="InfantilM form-control form-control-sm" placeholder="">
                                    </div>


                                </div>

                            <div class="container">   
                                <div class="row justify-content-end">
                                
                                    <div class="col-3" >
                                        <p class="h4"> Total:  <span class="sm h3" id="infantilMC" ></span> </p>
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
                                    <input type="number" class="form-control form-control-sm" id="piezasaID" min="100" placeholder="Total de piezas a producir">
                                </div>  
                            </div>

                                <div class="form-row text-center">
                                    
                                    <div class="form-group col-md">
                                        <label>2-3</label>
                                        <input type="number" min="1" id="t23" class="form-control montoID form-control-sm" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>4-5</label>
                                        <input type="number" min="1" id="t45" class="form-control montoID form-control-sm" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>6-7</label>
                                        <input type="number" min="1" id="t67" class="form-control montoID form-control-sm" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>8-9</label>
                                        <input type="number" min="1" id="t89" class="form-control montoID form-control-sm" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>10-11</label>
                                        <input type="number" min="1" id="t1011" class="form-control montoID form-control-sm" placeholder="">
                                    </div>

                                </div>

                            <!-- mostrar resultado  -->

                            <div class="form-check form-check-inline" >
                                <label class="form-check-label h4">Cantidad: <!-- <span id="sm"></span> --> </label>       
                            </div>

                                <div class="form-row">
                            
                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla23"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla45"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla67"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla89" ></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla1011" ></span> </p>
                                    </div>

                                </div>

                        </div>

                        <div id="CantidadID" style="display:none;">

                            <div class="form-check form-check-inline" >
                                <label class="form-check-label h4">Cantidad <!-- <span id="sm"></span> --> </label>       
                            </div>
                                
                                <div class="form-row text-center">
                            
                                    <div class="form-group col-md">
                                        <label class="">2-3</label>
                                        <input type="number" min="1" class="InfantilD form-control form-control-sm" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">4-5</label>
                                        <input type="number" min="1" class="InfantilD form-control form-control-sm" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">6-7</label>
                                        <input type="number" min="1" class="InfantilD form-control form-control-sm" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">8-9</label>
                                        <input type="number" min="1" class="InfantilD form-control form-control-sm" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">10-11</label>
                                        <input type="number" min="1" class="InfantilD form-control form-control-sm" placeholder="">
                                    </div>

                                </div>

                            <div class="container">   
                                <div class="row justify-content-end">
                                
                                    <div class="col-3" >
                                        <p class="h4"> Total:  <span class="sm h3" id="infantilDC" ></span> </p>
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
                                    <input type="number" class="form-control form-control-sm" min="100" id="piezasaIC" placeholder="Total de piezas a producir">
                                </div>  
                            </div>

                                <div class="form-row text-center">
                                    <div class="form-group col-md">
                                        <label>2</label>
                                        <input type="number" min="1" class="form-control form-control-sm montoIC" id="t2" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>4</label>
                                        <input type="number" min="1" class="form-control form-control-sm montoIC" id="t4" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>6</label>
                                        <input type="number" min="1" class="form-control form-control-sm montoIC" id="t6" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>8</label>
                                        <input type="number" min="1" class="form-control form-control-sm montoIC" id="t8" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label>10</label>
                                        <input type="number" min="1" class="form-control form-control-sm montoIC" id="t10" placeholder="">
                                    </div>
                                </div>

                            <!-- mostrar resultado  -->
                            <div class="form-check form-check-inline" >
                                <label class="form-check-label h4">Cantidad: <!-- <span id="sm"></span> --> </label>       
                            </div>

                                <div class="form-row">

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla2"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla4"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla6"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla8" ></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Talla10" ></span> </p>
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
                                        <input type="number" min="1" class="InfantilC form-control form-control-sm" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">4</label>
                                        <input type="number" min="1" class="InfantilC form-control form-control-sm" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">6</label>
                                        <input type="number" min="1" class="InfantilC form-control form-control-sm" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">8</label>
                                        <input type="number" min="1" class="InfantilC form-control form-control-sm" placeholder="">
                                    </div>

                                    <div class="form-group col-md">
                                        <label class="">10</label>
                                        <input type="number" min="1" class="InfantilC form-control form-control-sm" placeholder="">
                                    </div>

                                </div>

                            <div class="container">   
                                <div class="row justify-content-end">
                                
                                    <div class="col-3" >
                                        <p class="h4"> Total:  <span class="sm h3" id="infantilCC" ></span> </p>
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