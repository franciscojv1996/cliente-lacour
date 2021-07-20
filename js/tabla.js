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
    function infantil()
    {
        //div de tallas infantiles
         cuerpoM = documen.getElementById("infantilM");
         cuerpoD = documen.getElementById("infantilD");
         cuerpoC = documen.getElementById("infantilC");

        //checkbox de tallas infantiles
         checkM = documen.getElementById("checkM");
         checkD = documen.getElementById("checkD");
         checkC = documen.getElementById("checkC");

            //tallas de Meses
         if(checkM.checked)
         {
            cuerpoM.style.display='block';
         }else{
            cuerpoM.style.display='none';
         }

            //tallas dobles
         if(checkD.checked)
         {
            cuerpoD.style.display='block';
         }else{
            cuerpoD.style.display='none';
         }

            //tallas completas 
         if(checkC.checked)
         {
            cuerpoC.style.display='block';
         }else{
            cuerpoC.style.display='none';
         }

    }

