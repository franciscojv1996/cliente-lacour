<?php 
    class cont{
        public function Adulto(){
            ?>
                <div class="container"> <br>
                    
                    <div class="row justify-content-between">
                        <div class="col-md">
                            <h3> Tallas de Adultos </h3>
                        </div>

                        <div class="col-md">
                            <form>
                                <div class="form-group row">        
                                    <input type="number" class="form-control form-control-sm" id="piezasaA" min="100" placeholder="Total de piezas a producir">
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <form>
                        <div id="curvAd"> <!--Curvas style="display:none;"  -->
                            <p class="text-left h4">Curva</p>

                            <!-- formulario de talas  -->
                            <div class="form-row text-center">
                            
                                <div class="form-group col-md">
                                    <label class="">Unica</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoA" id="u" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label class="">XS</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoA" id="xs" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label class="">S</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoA" id="s" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label class="">M</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoA" id="m" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label class="">L</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoA" id="l" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label class="">XL</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoA" id="xl" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label class="">XXL</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoA" id="xxl" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label class="">3XL</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoA" id="xl3" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label class="">4XL</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoA" id="xl4" placeholder="">
                                </div>

                            </div>

                            <!-- mostrar resultado  -->
                            <div id="resAdutlo" >

                                <div class="form-check form-check-inline" >
                                    <label class="form-check-label h4">Cantidad: <!-- <span id="sm"></span> --> </label>       
                                </div>

                                <div class="form-row">
                            
                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="TallaU"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="TallaXS"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="TallaS"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="TallaM" ></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="TallaL" ></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="TallaXL"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="TallaXXL"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="TallaXL3"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span class="sm" id="TallaXL4"></span> </p>
                                    </div>

                                </div>

                            </div>
                            
                        </div>

                        <div id="CantidadAd"> <!-- Cantidad style="display:none;"  -->
                            <p class="text-left h4">Cantidad</p>

                            <div class="form-row text-center">
                            
                                <div class="form-group col-md">
                                    <label class="">Unica</label>
                                    <input type="number" min="1" class="form-control form-control-sm" id="cu" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label class="">XS</label>
                                    <input type="number" min="1" class="form-control form-control-sm" id="cxs" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label class="">S</label>
                                    <input type="number" min="1" class="form-control form-control-sm" id="cs" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label class="">M</label>
                                    <input type="number" min="1" class="form-control form-control-sm" id="cm" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label class="">L</label>
                                    <input type="number" min="1" class="form-control form-control-sm" id="cl" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label class="">XL</label>
                                    <input type="number" min="1" class="form-control form-control-sm" id="cxl" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label class="">XXL</label>
                                    <input type="number" min="1" class="form-control form-control-sm" id="cxxl" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label class="">3XL</label>
                                    <input type="number" min="1" class="form-control form-control-sm" id="c3xl" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label class="">4XL</label>
                                    <input type="number" min="1" class="form-control form-control-sm" id="c4xl" placeholder="">
                                </div>

                            </div>
                        </div>

                    </form>
                </div>

            <?php 
        }
    }
?>