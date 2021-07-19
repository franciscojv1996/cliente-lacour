<?php 
    class conten{
        public function Infantil(){
            ?>
                <div class="container">
                    <div class="row justify-content-around">
                    
                        <div class="col-md-6">
                            <h3 class="text-center"> Tallas de Infantiles </h3>
                        </div>

                        <div class="col-md-3">
                            <form>
                                <div class="form-group row">        
                                    <input type="number" class="form-control form-control-sm" id="piezasaI" min="100" placeholder="Total de piezas a producir">
                                </div>
                            </form>
                        </div>

                    </div>

                    <form action="">
                        
                        <div id="curvIn" style="display:none;"> <!-- Curva  -->

                            <p class="text-left h4">Curva</p>
                            <div class="form-row text-center">

                                <div class="form-group col-md">
                                    <label>2</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoI" id="t2" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label>4</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoI" id="t4" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label>6</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoI" id="t6" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label>8</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoI" id="t8" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label>10</label>
                                    <input type="number" min="1" class="form-control form-control-sm montoI" id="t10" placeholder="">
                                </div>

                            </div>


                            <div id="resInfantil" > <!-- resultado de las curvas a cantidad  -->

                                <div class="form-check form-check-inline" >
                                    <label class="form-check-label h4">Cantidad</label>       
                                </div>

                                <div class="form-row">
                        
                                    <div class="form-group col-md">
                                        <p class="text-center h3"><span id="Talla2"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span id="Talla4"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span id="Talla6"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span id="Talla8"></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span id="Talla10"></span> </p>
                                    </div>

                                </div>
                            </div>

                        </div>
    <!-- ***************separacion del formula de curva y cantidad*************** -->

                        <div id="CantidadIn" style="display:none;">

                            <p class="text-left h4">Cantidad</p>
                            
                            <div class="form-row text-center">

                                <div class="form-group col-md">
                                    <label>2</label>
                                    <input type="number" min="1" class="form-control form-control-sm" id="" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label>4</label>
                                    <input type="number" min="1" class="form-control form-control-sm" id="" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label>6</label>
                                    <input type="number" min="1" class="form-control form-control-sm" id="" placeholder="">
                                </div>


                                <div class="form-group col-md">
                                    <label>8</label>
                                    <input type="number" min="1" class="form-control form-control-sm" id="" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label>10</label>
                                    <input type="number" min="1" class="form-control form-control-sm" id="" placeholder="">
                                </div>

                            </div>

                           <div id="resInfantil" style="display:none;"> <!-- resultado de las cantidad a curva  -->

                                <div class="form-check form-check-inline" >
                                    <label class="form-check-label h4">Cantidad</label>       
                                </div>

                                <div class="form-row">
                        
                                    <div class="form-group col-md">
                                        <p class="text-center h3"> 0<span id=""></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span id=""></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span id=""></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span id=""></span> </p>
                                    </div>

                                    <div class="form-group col-md">
                                        <p class="text-center h3"> <span id=""></span> </p>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </form>
                </div>
            <?php 
        }
    }
?>