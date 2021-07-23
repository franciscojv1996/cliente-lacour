<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <input type="checkbox" id="test7" checked="checked" data-toggle="modal" data-target="#myModal"/>
<label for="test7">Custom Avalability</label>
<br /><br />
<input type="checkbox" id="test6" data-toggle="modal" data-target="#myModal"/>
<label for="test6">Manual</label>

<br/>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<input type="checkbox" data-toggle="modal" data-target="#exampleModal"/>
            <label> Tallas de Infantiles</label> 



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
                                        <input type="radio" name="tll" value="1" onchange="infantil(this.value);" >
                                        <label for="">Talla de Meses</label>
                                        
                                        <div class="border border-dark rounded text-center">
                                            <ul class="list-unstyled h5"> <br> <br> <br> <br> <br>
                                                <li>3M</li><hr>    <li>6M</li><hr>  <li>9M</li><hr>
                                                <li>12M</li><hr>   <li>18M</li><hr> <li>24M</li>
                                            </ul> <br> <br> <br> <br> <br> <br>
                                        </div>
                                    </div>

                                    <div class="col text-center">
                                        <input type="checkbox" id="checkD">
                                        <label for="">Talla Doble</label>
        
                                        <div class="border border-dark rounded">
                                            <ul class="list-unstyled h5"> <br> <br> <br>
                                                <li>2-3</li><hr>    <li>3-4</li><hr>   <li>4-5</li><hr>
                                                <li>5-6</li><hr>    <li>6-7</li><hr>   <li>7-8</li><hr>
                                                <li>8-9</li><hr>    <li>9-10</li>
                                            </ul> <br> <br> <br>
                                        </div>
                                    </div>

                                    <div class="col text-center">
                                        <input type="checkbox" id="checkC">
                                        <label for="">Talla Completa</label>
                                        <div class="border border-dark rounded text-center">
                                            <ul class="list-unstyled h5"> <br>
                                                <li>1</li><hr>  <li>2</li><hr>  <li>3</li><hr>
                                                <li>4</li><hr>  <li>5</li><hr>  <li>6</li><hr>
                                                <li>7</li><hr>  <li>8</li><hr>  <li>9</li><hr>
                                                <li>10</li>
                                            </ul>
                                        </div>
                                    </div>
                                                
                                </div> <br>
                                    <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal">Block level button</button>                                
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
            <!-- final de Modal -->





      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>