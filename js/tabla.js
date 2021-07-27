//adulto

   function adulto(){
      elementA = document.getElementById("contentA");
      checkA = document.getElementById("checka");
         if (checkA.checked){    
            elementA.style.display='block';
         } else {   
            elementA.style.display='none'; 
         }
   } 

// juvenil

   function juvenil(){
      cuerpoJ = document.getElementById("contentJ");
      checkJ = document.getElementById("checkj");
         if(checkJ.checked){ 
            cuerpoJ.style.display='block';
         } else { 
            cuerpoJ.style.display='none';
         }
   }

//Infantil

   function meses(){
      cuerpoIM = document.getElementById("cuerpoIM");
      cheIM = document.getElementById("cheIM");
      //texto cuerpo 
         cuerpoT = document.getElementById("cuerpoT");
         if (cheIM.checked) {
            cuerpoIM.style.display="block";
            cuerpoT.style.display="block"
         }else{
            cuerpoIM.style.display="none";
            cuerpoT.style.display="none"
         }
   }

   function doble(){
      cuerpoID = document.getElementById("cuerpoID");
      cheID = document.getElementById("cheID");
      //texto cuerpo 
         cuerpoT = document.getElementById("cuerpoT");
         if (cheID.checked) {
            cuerpoID.style.display="block";
            cuerpoT.style.display="block"
         }else{
            cuerpoID.style.display="none";
            cuerpoT.style.display="none"
         }
   }   

   function completa(){
      cuerpoIC = document.getElementById("cuerpoIC");
      cheIC = document.getElementById("cheIC");
      //texto cuerpo 
         cuerpoT = document.getElementById("cuerpoT");      
         if (cheIC.checked) {
            cuerpoIC.style.display="block";
            cuerpoT.style.display="block"
         }else{
            cuerpoIC.style.display="none";
            cuerpoT.style.display="none"
         }
   }

   
   // curva y cantidad
   function mostrar(dato){
      //1=curva
      if (dato == "1") {
         //curva
         document.getElementById("curvAd").style.display = "block";
         document.getElementById("curvJu").style.display = "block";
         document.getElementById("curvaIM").style.display = "block";
         document.getElementById("curvaID").style.display = "block";
         document.getElementById("curvaIC").style.display = "block";
            //boton
         document.getElementById("btnCurva").style.display = "block";
   
         //cantidad 
         document.getElementById("CantidadAd").style.display = "none";
         document.getElementById("CantidadJu").style.display = "none";
         document.getElementById("CantidadIM").style.display = "none";
         document.getElementById("CantidadID").style.display = "none";
         document.getElementById("CantidadIC").style.display = "none";
            //boton
         document.getElementById("btnCantidad").style.display = "none";
   
      }
   
      //2=cantidad
      if (dato == "2") {
         //cantidad
         document.getElementById("CantidadAd").style.display = "block";
         document.getElementById("CantidadJu").style.display = "block";
         document.getElementById("CantidadIM").style.display = "block";
         document.getElementById("CantidadID").style.display = "block";
         document.getElementById("CantidadIC").style.display = "block";
            //boton
         document.getElementById("btnCantidad").style.display = "block";
   
            //curva
         document.getElementById("curvAd").style.display = "none";
         document.getElementById("curvJu").style.display = "none";
         document.getElementById("curvaIM").style.display = "none";
         document.getElementById("curvaID").style.display = "none";
         document.getElementById("curvaIC").style.display = "none";
            //boton
         document.getElementById("btnCurva").style.display = "none";
      }
   
   }
