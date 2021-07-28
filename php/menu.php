<?php 
    class menu{
        public function navn(){
        ?>
            <nav class="navbar navbar-light bg-light" style="">
                <a class="navbar-brand" href="#">
                    Logo/titulo
                </a>
            </nav>

        <?php
        }
    }

?>

<?php 
    class submenu{
        public function selector(){
            ?>
                <div class="container">
                    <div class="row justify-content-around" style="background-color: #dd0">

                        <div class="col-lg-5 text-center" style="background-color: #ccc">
                            <h4>Tallas</h4>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="1" id="checka" onchange="javascript:adulto()">
                                <label class="form-check-label" for="inlineCheckbox1">Adulto</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="2" id="checkj" onchange="javascript:juvenil()">
                                <label class="form-check-label" for="inlineCheckbox2">Juvenil</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" data-toggle="modal" data-target="#exampleModal">
                                <label class="form-check-label" for="inlineCheckbox3">Infantil</label>
                                    <?php 
                                        $b = new modal;
                                        $b -> Ventana();
                                    ?>
                            </div>

                        </div>

                        <div class="col-lg-5 text-center" style="background-color: #ccc">
                            <h4>Tipo de pedido</h4>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="opc" value="1" onchange="mostrar(this.value);">
                                <label class="form-check-label" for="inlineRadio1">Curva</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="opc" value="2" onchange="mostrar(this.value);" >
                                <label class="form-check-label" for="inlineRadio2">Cantidad</label>
                            </div>

                        </div>

                    </div>

                </div>

            <?php
        }
    }

?>