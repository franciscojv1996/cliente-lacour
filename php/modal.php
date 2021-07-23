<?php
    class modal{
        public function Ventana(){
            ?>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                            <div class="container"> 
                                <h4 class="text-center">Seleccione el tipo de talla Infantil</h4>

                                <div class="col-lg-12"  style="background-color:#ccc">
                                    <input type="checkbox" id="cheIC" onchange="javascript:completa();"> <label for="">Opción #1</label>
                                    
                                    <div class="form-row border border-dark rounded text-center">
                                        
                                        <div class="form-group col-sm">
                                            <label class="">2</label>
                                        </div>

                                        <div class="form-group col-sm">
                                            <label class="">3</label>
                                        </div>

                                        <div class="form-group col-sm">
                                            <label class="">4</label>
                                        </div>

                                        <div class="form-group col-sm">
                                        <label class="">5</label>
                                        </div>

                                        <div class="form-group col-sm">
                                            <label class="">6</label>
                                        </div>

                                        <div class="form-group col-sm">
                                            <label class="">7</label>
                                        </div>

                                        <div class="form-group col-sm">
                                            <label class="">8</label>
                                        </div>

                                        <div class="form-group col-sm">
                                            <label class="">10</label>
                                        </div>

                                    </div>

                                <br></div><br>

                                <div class="col-lg-12"  style="background-color:#bbb">
                                    <input type="checkbox" id="cheID" onchange="javascript:doble();"> <label for="">Opción #2</label>
                                    
                                    <div class="form-row border border-dark rounded text-center">
                                        
                                        <div class="form-group col-sm">
                                            <label class="">2-3</label>
                                        </div>
                                            
                                        <div class="form-group col-sm">
                                            <label class="">4-5</label>
                                        </div>

                                        <div class="form-group col-sm">
                                            <label class="">6-7</label>
                                        </div>

                                        <div class="form-group col-sm">
                                            <label class="">8-9</label>
                                        </div>

                                        <div class="form-group col-sm">
                                            <label class="">10-11</label>
                                        </div>

                                    </div>

                                </br></div> <br>

                                <div class="col-lg-12"  style="background-color:#aaa">
                                    <input type="checkbox" id="cheIM" onchange="javascript:meses();"> <label for="">Opción #3</label>            
            
                                    <div class="form-row border border-dark rounded text-center">
                                        
                                        <div class="form-group col-sm">
                                            <label class="">3M</label>
                                        </div>

                                        <div class="form-group col-sm">
                                            <label class="">6M</label>
                                        </div>

                                        <div class="form-group col-sm">
                                            <label class="">9M</label>
                                        </div>

                                        <div class="form-group col-sm">
                                            <label class="">12M</label>
                                        </div>

                                        <div class="form-group col-sm">
                                            <label class="">18M</label>
                                        </div>

                                        <div class="form-group col-sm">
                                            <label class="">24M</label>
                                        </div>

                                    </div>
                                <br></div><br>

                                
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" onclick="tituloInfantil()">Cerra ventana</button>
                    </div>
                    </div>
                </div>
                </div>

            <?php 
        }
    }
?>