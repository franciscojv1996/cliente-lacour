<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
	text-align: center;
	font-family: sans-serif;
	margin: 0;
}

.modal {
	width: 100%;
	height: 100vh;
	background: rgba(0,0,0,0.8);
	
	position: absolute;
	top: 0;
	left: 0;
	
	display: flex;
	
	animation: modal 2s 3s forwards;
	visibility: hidden;
	opacity: 0;
}

.contenido {
	margin: auto;
	width: 40%;
	height: 40%;
	background: white;
	border-radius: 10px;
}

#cerrar {
	display: none;
}

#cerrar + label {
	position: fixed;
	color: #fff;
	font-size: 25px;
	z-index: 50;
	background: darkred;
	height: 40px;
	width: 40px;
	line-height: 40px;
	border-radius: 50%;
	right: 150px;
	top: 150px;
	cursor: pointer;
	
	animation: modal 2s 3s forwards;
	visibility: hidden;
	opacity: 0;
}

#cerrar:checked + label, #cerrar:checked ~ .modal {
	display: none;
}

@keyframes modal {
	100% {
		visibility: visible;
		opacity: 1;
	}
}
  </style>
</head>
<body>

<input type="checkbox" id="cerrar">
		<label for="cerrar" id="btn-cerrar">X</label>
		<div class="modal">
			<div class="contenido">
				<h2>Visita nuestro blog</h2>
				<img src="http://lorempixel.com/200/200" alt="">
			</div>
		</div>
		
		<main>
			<h1>Ventana modal con HTML y CSS</h1>
			<p>En este tutorial haremos que luego de unos segundos aparezca una ventana modal. No hemos utilizado ningun plugin ni Jquery. Puro HTML y CSS</p>
		</main>
  
</body>
</html>