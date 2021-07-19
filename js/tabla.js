//adulto
    function adulto(){
    elementA = document.getElementById("contentA");
    checkA = document.getElementById("checka");
        if (checkA.checked) {    
            elementA.style.display='block';
            } else {   
            elementA.style.display='none'; 
            }
    } 

// juvenil
    function juvenil(){
        cuerpoJ = document.getElementById("contentJ");
        checkJ = document.getElementById("checkj");
            if(checkJ.checked){ cuerpoJ.style.display='block';
            } else {    cuerpoJ.style.display='none';}
    }

//infantil
    function infantil(){
        cuerpoI = document.getElementById("contentI");
        checkI = document.getElementById("checki");
            if(checkI.checked){ cuerpoI.style.display='block';
            }else{ cuerpoI.style.display='none';}
    }

    function mostrar(dato){
        if (dato == "1") {
            document.getElementById("curvAd").style.display = "block";
            document.getElementById("curvIn").style.display = "block";
            document.getElementById("curvJu").style.display = "block";
            document.getElementById("btnCurva").style.display = "block";

            document.getElementById("CantidadAd").style.display = "none";
            document.getElementById("CantidadIn").style.display = "none";
            document.getElementById("CantidadJu").style.display = "none";
        }

        if (dato == "2") {
            document.getElementById("CantidadAd").style.display = "block";
            document.getElementById("CantidadIn").style.display = "block";
            document.getElementById("CantidadJu").style.display = "block";

            document.getElementById("curvAd").style.display = "none";
            document.getElementById("curvIn").style.display = "none";
            document.getElementById("curvJu").style.display = "none";
            document.getElementById("btnCurva").style.display = "none";
        }
    }
