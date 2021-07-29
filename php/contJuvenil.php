<?php
    class conte{
        public function Juvenil(){
            ?>
                <div class="container">
                    <h3 class="text-center"> Tallas Juveniles </h3>
                    
                    <div id="curvJu" style="display:none;"> <!-- Curva  style="display:none;"-->
                    
                        <div class="row justify-content-around"> 
                            <div class="col-md-4" >
                                <h4>Curva</h4> 
                            </div>
                            
                            <div class="col-md-4">
                                <input type="number" class="form-control form-control-sm" id="piezasaJ" min="100" placeholder="Total de piezas a producir">
                            </div>  
                        </div>

                            
                            <div class="form-row text-center">

                                <div class="form-group col-md">
                                    <label>12</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoJ" id="t12" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label>14</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoJ" id="t14" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label>16</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoJ" id="t16" placeholder="">
                                </div>
                            
                            </div>
                                
                         <!-- mostrar resultado  -->

                        <div class="form-check form-check-inline" >
                            <label class="form-check-label h4">Cantidad</label>       
                        </div>
                
                            <div class="form-row">

                                <div class="form-group col-md">
                                    <p class="text-center h3"><span id="Talla12"></span> </p>
                                </div>

                                <div class="form-group col-md">
                                    <p class="text-center h3"> <span id="Talla14"></span> </p>
                                </div>

                                <div class="form-group col-md">
                                    <p class="text-center h3"> <span id="Talla16"></span> </p>
                                </div>

                            </div>
                    </div>
                    
                    <div id="CantidadJu" style="display:none;"> <!-- Cantidad  style="display:none;"-->
                        <p class="text-left h4">Cantidad</p>
            
                        <div class="form-row text-center">

                            <div class="form-group col-md">
                                <label>12</label>
                                <input type="number" min="1" class="Juvenil form-control form-control-sm" placeholder="">
                            </div>

                            <div class="form-group col-md">
                                <label>14</label>
                                <input type="number" min="1" class="Juvenil form-control form-control-sm" placeholder="">
                            </div>

                            <div class="form-group col-md">
                                <label>16</label>
                                <input type="number" min="1" class="Juvenil form-control form-control-sm" placeholder="">
                            </div>

                        </div>

                        <div class="container">   
                            <div class="row justify-content-end">
                                
                                <div class="col-3" >
                                    <p class="h4"> Total:  <span class="sm h3" id="juvenilC" ></span> </p>
                                </div>

                            </div>
                        </div> <br>

                    </div>

                </div>
            <?php
        }
    }
?>