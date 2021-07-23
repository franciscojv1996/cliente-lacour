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
      if (cheIM.checked) {
         cuerpoIM.style.display="block";
      }else{
         cuerpoIM.style.display="none";
      }
   }

   function doble(){
      cuerpoID = document.getElementById("cuerpoID");
      cheID = document.getElementById("cheID");
      if (cheID.checked) {
         cuerpoID.style.display="block";
      }else{
         cuerpoID.style.display="none";
      }
   }   

   function completa(){
      cuerpoIC = document.getElementById("cuerpoIC");
      cheIC = document.getElementById("cheIC");      
         if (cheIC.checked) {
            cuerpoIC.style.display="block";
         }else{
            cuerpoIC.style.display="none";
         }
      }

