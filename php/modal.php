<?php
    class modal{
        public function Ventana(){
            ?>

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
                                                        <input type="checkbox" id="checkM">
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

                                                <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" onclick="infantil();">Block level button</button>
            
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <!-- final de Modal -->


                        <script>



                        </script>

            <?php 
        }
    }
?>