<?php
    class conte{
        public function Juvenil(){
            ?>
                <div class="container"> <br>
                    <div class="row justify-content-around">
                        
                        <div class="col-md-6">
                            <h3 class="text-center">Tallas de Juvenil</h3>
                        </div>

                        <div class="col-md-3">
                            <form>
                                <div class="form-group row">        
                                    <input type="number" class="form-control form-control-sm" id="piezasaJ" min="100" placeholder="Total de piezas a producir">
                                </div>
                            </form>
                        </div>

                    </div>

                    <form action="">

                        <div id="curvJu" style="display:none;"> <!-- Curva  -->
                            <p class="text-left h4">Curva</p>

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
                        <div id="resJuvenil">

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

                        </div>

                        <!-- ***************separacion del formula de curva y cantidad*************** -->

                        <div id="CantidadJu" style="display:none;">
                            <p class="text-left h4">Cantidad</p>

                            <div class="form-row text-center">

                                <div class="form-group col-md">
                                    <label>12</label>
                                    <input type="number" min="1" class="form-control form-control-sm" id="ct12" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label>14</label>
                                    <input type="number" min="1" class="form-control form-control-sm" id="ct14" placeholder="">
                                </div>

                                <div class="form-group col-md">
                                    <label>16</label>
                                    <input type="number" min="1" class="form-control form-control-sm" id="ct16" placeholder="">
                                </div>

                            </div>

                            <div id="resJuvenil" style="display:none;">

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

                        </div>

                    </form>

                </div>
            <?php
        }
    }
?>