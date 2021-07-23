<?php
    class conten{
        public function InfantilM(){ 
            ?>
                <div id="cuerpoIM" style="display:none;">
                    <div class="container-fluid" >
                        
                        <div class="row justify-content-around"> 
                            <div class="col-md-4" >
                                <h4>Curva</h4> 
                            </div>
                        
                            <div class="col-md-4">
                                <input type="number" class="form-control form-control-sm" min="100" placeholder="Total de piezas a producir">
                            </div>  
                        </div>

                        <form action="">
                            <div class="form-row text-center">
                                <div class="form-group col-md">
                                    <label>3M</label>
                                    <input type="number" min="1" class="form-control form-control-sm" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label>6M</label>
                                    <input type="number" min="1" class="form-control form-control-sm" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label>9M</label>
                                    <input type="number" min="1" class="form-control form-control-sm" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label>12M</label>
                                    <input type="number" min="1" class="form-control form-control-sm" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label>18M</label>
                                    <input type="number" min="1" class="form-control form-control-sm" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label>24M</label>
                                    <input type="number" min="1" class="form-control form-control-sm" placeholder="">
                                </div>

                            </div>

                            <!-- mostrar resultado  -->
                            <div id="resInfantilM" >

                                <div class="form-check form-check-inline" >
                                    <label class="form-check-label h4">Cantidad: <!-- <span id="sm"></span> --> </label>       
                                </div>

                                <div class="form-row">
                            
                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Tallae3M"></span> </p>
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
                        </form>

                    </div>
                </div>
            <?php
        }

        public function InfantilD(){
            ?>
                <div id="cuerpoID" style="display:none;">
                    <div class="container-fluid">
                    
                        <div class="row justify-content-around"> 
                            <div class="col-md-4" >
                                <h4>Curva</h4> 
                            </div>
                        
                            <div class="col-md-4">
                                <input type="number" class="form-control form-control-sm" min="100" placeholder="Total de piezas a producir">
                            </div>  
                        </div>

                        <form action="">
                            <div class="form-row text-center">
                                <div class="form-group col-md">
                                    <label>2-3</label>
                                    <input type="number" min="1" class="form-control form-control-sm" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label>4-5</label>
                                    <input type="number" min="1" class="form-control form-control-sm" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label>6-7</label>
                                    <input type="number" min="1" class="form-control form-control-sm" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label>8-9</label>
                                    <input type="number" min="1" class="form-control form-control-sm" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label>10-11</label>
                                    <input type="number" min="1" class="form-control form-control-sm" placeholder="">
                                </div>

                            </div>

                            <!-- mostrar resultado  -->
                            <div id="resInfantilD" >

                                <div class="form-check form-check-inline" >
                                    <label class="form-check-label h4">Cantidad: <!-- <span id="sm"></span> --> </label>       
                                </div>

                                <div class="form-row">
                            
                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Tallae23"></span> </p>
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
                        </form>
                    </div>
                </div>
            <?php

        }

        public function InfantilC(){
            ?>
                <div id="cuerpoIC" style="display:none;">
                    <div class="container-fluid">
                        
                        <div class="row justify-content-around"> 
                            <div class="col-md-4" >
                                <h4>Curva</h4> 
                            </div>
                        
                            <div class="col-md-4">
                                <input type="number" class="form-control form-control-sm" min="100" placeholder="Total de piezas a producir">
                            </div>  
                        </div>

                        <form action="">
                            <div class="form-row text-center">
                                <div class="form-group col-md">
                                    <label>2</label>
                                    <input type="number" min="1" class="form-control form-control-sm" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label>4</label>
                                    <input type="number" min="1" class="form-control form-control-sm" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label>6</label>
                                    <input type="number" min="1" class="form-control form-control-sm" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label>8</label>
                                    <input type="number" min="1" class="form-control form-control-sm" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label>10</label>
                                    <input type="number" min="1" class="form-control form-control-sm" placeholder="">
                                </div>
                            </div>

                            <!-- mostrar resultado  -->
                            <div id="resInfantilM" >

                                <div class="form-check form-check-inline" >
                                    <label class="form-check-label h4">Cantidad: <!-- <span id="sm"></span> --> </label>       
                                </div>

                                <div class="form-row">
                            
                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="Tallae2"></span> </p>
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
                        </form>
                    </div>
                </div>
            <?php

        }
    }
?>