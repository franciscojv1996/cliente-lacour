<?php 
    class cont{
        public function Adulto(){
            ?>

                <div class="container">
                    <h3 class="text-center"> Tallas de Adultos </h3>

                    <div id="curvAd" >  <!--Curvas   style="display:none;" -->
                    
                        <div class="row justify-content-around"> 
                            <div class="col-md-4" >
                                <h4>Curva</h4>

                            </div>
                            
                            <div class="col-md-4">
                                <input type="number" class="form-control form-control-sm" id="piezasaA" min="100" name="piezasaA" placeholder="Total de piezas a producir">
                            </div>  
                        </div>
                    
                            <div class="form-row text-center">
                            
                                <div class="form-group col-md">
                                    <label class="">Unica</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoA" id="u" name="u" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label class="">XS</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoA" id="xs" name="xs" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label class="">S</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoA" id="s" name="s" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label class="">M</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoA" id="m" name="m" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label class="">L</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoA" id="l" name="l" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label class="">XL</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoA" id="xl" name="xl" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label class="">XXL</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoA" id="xxl" name="xxl" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label class="">3XL</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoA" id="xl3" name="xl3" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label class="">4XL</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoA" id="xl4" name="xl4" placeholder="">
                                </div>

                            </div>

                        <!-- mostrar resultado  -->
                        <div class="row justify-content-around">
                            <div class="col-3">
                                <label class="form-check-label h4">Cantidad</label>
                            </div>

                            <div class="col-3">
                                <label class="form-check-label h4" >Total: <span class="sm" id="CcantidaA" name="CcantidaA"></span> </label>
                            </div>  
                        </div>

                            <div class="form-row">
                        
                                <div class="form-group col-md">
                                    <p class="text-center h3">  <span class="sm" id="TallaU" name="TallaU">  </p>
                                </div>

                                <div class="form-group col-md">
                                    <p class="text-center h3">  <span class="sm" id="TallaXS" name="TallaXS">  </p>
                                </div>

                                <div class="form-group col-md">
                                    <p class="text-center h3"> <span class="sm" id="TallaS" name="TallaS">  </p>
                                </div>

                                <div class="form-group col-md">
                                    <p class="text-center h3"> <span class="sm" id="TallaM" name="TallaM">  </p>
                                </div>

                                <div class="form-group col-md">
                                    <p class="text-center h3">  <span class="sm" id="TallaL" name="TallaL"> </p>
                                </div>

                                <div class="form-group col-md">
                                    <p class="text-center h3">  <span class="sm" id="TallaXL" name="TallaXL"> </p>
                                </div>

                                <div class="form-group col-md">
                                    <p class="text-center h3">  <span class="sm" id="TallaXXL" name="TallaXXL">  </p>
                                </div>

                                <div class="form-group col-md">
                                    <p class="text-center h3">  <span class="sm" id="TallaXL3" name="TallaXL3">  </p>
                                </div>

                                <div class="form-group col-md">
                                    <p class="text-center h3">  <span class="sm" id="TallaXL4" name="TallaXL4"> </p>
                                </div>

                            </div>

                    </div>
                    
                    <div id="CantidadAd" style="display:none;"> <!-- Cantidad style="display:none;"  -->
                        <p class="text-left h4">Cantidad</p>

                        <div class="form-row text-center">
                            
                            <div class="form-group col-md">
                                <label class="">Unica</label>
                                <input type="number" min="1" class="Adulto form-control form-control-sm" name="CU" placeholder="">
                            </div>

                            <div class="form-group col-md">
                                <label class="">XS</label>
                                <input type="number" min="1" class="Adulto form-control form-control-sm" name="CXS" placeholder="">
                            </div>

                            <div class="form-group col-md">
                                <label class="">S</label>
                                <input type="number" min="1" class="Adulto form-control form-control-sm" name="CS" placeholder="">
                            </div>

                            <div class="form-group col-md">
                                <label class="">M</label>
                                <input type="number" min="1" class="Adulto form-control form-control-sm" name="CM" placeholder="">
                            </div>

                            <div class="form-group col-md">
                                <label class="">L</label>
                                <input type="number" min="1" class="Adulto form-control form-control-sm" name="CL" placeholder="">
                            </div>

                            <div class="form-group col-md">
                                <label class="">XL</label>
                                <input type="number" min="1" class="Adulto form-control form-control-sm" name="CXL" placeholder="">
                            </div>

                            <div class="form-group col-md">
                                <label class="">XXL</label>
                                <input type="number" min="1" class="Adulto form-control form-control-sm" name="CXXL" placeholder="">
                            </div>

                            <div class="form-group col-md">
                                <label class="">3XL</label>
                                <input type="number" min="1" class="Adulto form-control form-control-sm" name="C3XL" placeholder="">
                            </div>

                            <div class="form-group col-md">
                                <label class="">4XL</label>
                                <input type="number" min="1" class="Adulto form-control form-control-sm" name="C4XL" placeholder="">
                            </div>

                        </div>

                        <div class="container">   
                            <div class="row justify-content-end">
                                
                                <div class="col-3" >
                                    <p class="h4"> Total:  <p class="sm h3" id="adultoC" name="adultoC"> </p> </p>
                                </div>  

                            </div>
                        </div> <br>
                    </div>

                </div>

            <?php 
        }
    }
?>