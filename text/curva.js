function curva() {

    var total = 0;
  
    $(".monto").each(function() {
        if (isNaN(parseInt($(this).val()))) 
        { total += 0; } 
            else 
        {   total += parseInt($(this).val()); }
    });
    
    console.log("total de curvas"+total);

    var piezas = document.getElementById("piezas").value;
    var fijo = 100;

    // tallas adultos
    var u = document.getElementById("u").value;
    var xs = document.getElementById("xs").value;
    var s = document.getElementById("s").value;
    var m = document.getElementById("m").value;
    var l = document.getElementById("l").value;
    var xl = document.getElementById("xl").value;
    var xxl = document.getElementById("xxl").value;
    var xl3 = document.getElementById("xl3").value;
    var xl4 = document.getElementById("xl4").value;
    
    // tallas juveniles
    var t12 = document.getElementById("t12").value;
    var t14 = document.getElementById("t14").value;
    var t16 = document.getElementById("t16").value;
    
    // tallas infantiles
    var t2 = document.getElementById("t2").value;
    var t4 = document.getElementById("t4").value;
    var t6 = document.getElementById("t6").value; 
    var t8 = document.getElementById("t8").value; 
    var t10 = document.getElementById("t10").value;

    // Suma
    var suma =0;

    console.log("total de piezas a producir "+ piezas);

    //-----talla adulto-------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    console.log("talla adulto"); 
    console.log("tallas U: " + u);
    console.log("tallas XS: " + xs);
    console.log("tallas S: " + s);
    console.log("tallas M: " + m);
    console.log("tallas XL: " + l);
    console.log("tallas XL: " + xl);
    console.log("tallas XXL: " + xxl);
    console.log("tallas 3XL: " + xl3);
    console.log("tallas 4XL: " + xl4);

    if (u >0 ) {
        console.log("Curva talla u: " +u);
        var resU;

        var totalU = parseFloat(u) * parseFloat(fijo);
        var totalUres= totalU / parseFloat(total);
        console.log(" prime operacion talla u:" +totalUres);
            
        resU = parseFloat(totalUres) * parseFloat(piezas);
        var resultadoU = resU / parseFloat(fijo);
        console.log("total de piezas a producir con decimales: " +resultadoU);
        console.log("total de piezas a producir: " + Math.round(resultadoU));
            document.getElementById('TallaU').innerHTML = Math.round(resultadoU);

            suma += resultadoU;
    }

    if (xs >0 ) {
        console.log("Curva talla xs: " +xs);
        var resXS;

        var totalXS = parseFloat(xs) * parseFloat(fijo);
        var totalXSres= totalXS / parseFloat(total);
        console.log(" prime operacion talla xs:" +totalXSres);
        
        resXS = parseFloat(totalXSres) * parseFloat(piezas);
        var resultadoXS = resXS / parseFloat(fijo);
        console.log("total de piezas a producir con decimales: " +resultadoXS);
        console.log("total de piezas a producir: " +Math.round(resultadoXS));
            document.getElementById('TallaXS').innerHTML = Math.round(resultadoXS);

            suma += resultadoXS;
    }

    if (s >0 ) {
        console.log("Curva talla s: " +s);
        var resS;

        var totalS = parseFloat(s) * parseFloat(fijo);
        var totalSres= totalS / parseFloat(total);
        console.log(" prime operacion talla s:" +totalSres);
            
        resS = parseFloat(totalSres) * parseFloat(piezas);
        var resultadoS = resS / parseFloat(fijo);
    
        console.log("total de piezas a producir con decimales: " +resultadoS);
        console.log("total de piezas a producir: " +Math.round(resultadoS));
            document.getElementById('TallaS').innerHTML = Math.round(resultadoS);

            suma += resultadoS;
    }   

    if (m >0 ) {
        console.log("Curva talla m: " +m);
        var resM;

        var totalM = parseFloat(m) * parseFloat(fijo);
        var totalMres= totalM / parseFloat(total);
        console.log(" prime operacion talla m:" +totalMres);
            
        resM = parseFloat(totalMres) * parseFloat(piezas);
        var resultadoM = resM / parseFloat(fijo);
        console.log("total de piezas a producir con decimales: " +resultadoM);
        console.log("total de piezas a producir: " +Math.round(resultadoM));
            document.getElementById('TallaM').innerHTML = Math.round(resultadoM);

            suma += resultadoM;
    }

    if (l >0 ) {
        console.log("Curva talla l: " +l);
        var resL;

        var totalL = parseFloat(l) * parseFloat(fijo);
        var totalLres= totalL / parseFloat(total);
        console.log(" prime operacion talla l:" +totalLres);
            
        resL = parseFloat(totalLres) * parseFloat(piezas);
        var resultadoL = resL / parseFloat(fijo);
        console.log("total de piezas a producir con decimales: " +resultadoL);
        console.log("total de piezas a producir: " +Math.round(resultadoL));
            document.getElementById('TallaL').innerHTML = Math.round(resultadoL);

            suma += resultadoL;
    }

    if (xl >0 ) {
        console.log("Curva talla xl: " +xl);
        var resXL;

        var totalXL = parseFloat(xl) * parseFloat(fijo);
        var totalXLres= totalXL / parseFloat(total);
        console.log(" prime operacion talla xl:" +totalXLres);
            
        resXL = parseFloat(totalXLres) * parseFloat(piezas);
        var resultadoXL = resXL / parseFloat(fijo);
        console.log("total de piezas a producir con decimales: " +resultadoXL);
        console.log("total de piezas a producir: " +Math.round(resultadoXL));
            document.getElementById('TallaXL').innerHTML = Math.round(resultadoXL);

            suma += resultadoXL;
    }

    if (xxl >0 ) {
        console.log("Curva talla xxl: " +xxl);
        var resXXL;

        var totalXXL = parseFloat(xxl) * parseFloat(fijo);
        var totalXXLres= totalXXL / parseFloat(total);
        console.log(" prime operacion talla xxl:" +totalXXLres);
            
        resXXL = parseFloat(totalXXLres) * parseFloat(piezas);
        var resultadoXXL = resXXL / parseFloat(fijo);
        console.log("total de piezas a producir con decimales: " +resultadoXXL);
        console.log("total de piezas a producir: " +Math.round(resultadoXXL));
            document.getElementById('TallaXXL').innerHTML = Math.round(resultadoXXL);

            suma += resultadoXXL;

        }

    if (xl3 >0 ) {
        console.log("Curva talla 3xl: " +xl3);
        var resXL3;

        var totalXL3 = parseFloat(xl3) * parseFloat(fijo);
        var totalXL3res= totalXL3 / parseFloat(total);
        console.log(" prime operacion talla 3xl:" +totalXL3res);
            
        resXL3 = parseFloat(totalXL3res) * parseFloat(piezas);
        var resultadoXL3 = resXL3 / parseFloat(fijo);
        console.log("total de piezas a producir con decimales: " +resultadoXL3);
        console.log("total de piezas a producir: " +Math.round(resultadoXL3));
            document.getElementById('TallaXL3').innerHTML = Math.round(resultadoXL3);

            suma += resultadoXL3;

    }

    if (xl4 >0 ) {
        console.log("Curva talla 4xl: " +xl4);
        var resXL4;

        var totalXL4 = parseFloat(xl4) * parseFloat(fijo);
        var totalXL4res= totalXL4 / parseFloat(total);
        console.log(" prime operacion talla xl4:" +totalXL4res);
            
        resXL4 = parseFloat(totalXL4res) * parseFloat(piezas);
        var resultadoXL4 = resXL4 / parseFloat(fijo);
        console.log("total de piezas a producir con decimales: " +resultadoXL4);
        console.log("total de piezas a producir: " +Math.round(resultadoXL4));
            document.getElementById('TallaXL4').innerHTML = Math.round(resultadoXL4);

            suma += resultadoXL4;
    }

    
    //-----talla juvenil------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    console.log("talla juvenil");
    console.log("talla 12"+ t12);
    console.log("talla 14"+ t14);
    console.log("talla 16"+ t16);

    if (t12 >0 ){
        console.log("Curva talla 12: " + t12);
        var resT12;
    
        var totalT12 = parseFloat(t12) * parseFloat(fijo);
        var totalT12res= totalT12 / parseFloat(total);
        console.log("operacion talla 12:" +totalT12res);
            
        resT12 = parseFloat(totalT12res) * parseFloat(piezas);
        var resultadoT12 = resT12 / parseFloat(fijo);
        console.log("total de piezas a producir con decimales: " +resultadoT12);
        console.log("total de piezas a producir: " +Math.round(resultadoT12));
            document.getElementById('Talla12').innerHTML = Math.round(resultadoT12);

            suma += resultadoT12;
    }
    
    if (t14 >0 ) {
        console.log("Curva talla 14: " + t14);
        var resT12;
    
        var totalT14 = parseFloat(t14) * parseFloat(fijo);
        var totalT14res= totalT14 / parseFloat(total);
        console.log("operacion talla 14:" +totalT14res);
            
        resT14 = parseFloat(totalT14res) * parseFloat(piezas);
        var resultadoT14 = resT14 / parseFloat(fijo);
        console.log("total de piezas a producir con decimales: " +resultadoT14);
        console.log("total de piezas a producir: " +Math.round(resultadoT14));
            document.getElementById('Talla14').innerHTML = Math.round(resultadoT14);

            suma += resultadoT14;
    }
    
    if (t16 >0 ) {
        console.log("Curva talla 16: " + t16);
        var resT16;
    
        var totalT16 = parseFloat(t16) * parseFloat(fijo);
        var totalT16res= totalT16 / parseFloat(total);
        console.log("operacion talla 16:" +totalT16res);
            
        resT16 = parseFloat(totalT16res) * parseFloat(piezas);
        var resultadoT16 = resT16 / parseFloat(fijo);
        console.log("total de piezas a producir con decimales: " +resultadoT16);
        console.log("total de piezas a producir: " +Math.round(resultadoT16));
            document.getElementById('Talla16').innerHTML = Math.round(resultadoT16);

            suma += resultadoT16;
    }

    //-----talla infantiles---------------------------------------------------------------------------------------------------------------------------------------------------------------------
    console.log("tallas insfantiles");
    console.log("talla 2"+ t2);
    console.log("talla 4"+ t4);
    console.log("talla 6"+ t6);
    console.log("talla 8"+ t8);
    console.log("talla 10"+ t10);

    if (t2 >0 ) {
        console.log("Curva talla 2: " + t2);
        var resT2;
    
        var totalT2 = parseFloat(t2) * parseFloat(fijo);
        var totalT2res= totalT2 / parseFloat(total);
        console.log("operacion talla 2:" +totalT2res);
            
        resT2 = parseFloat(totalT2res) * parseFloat(piezas);
        var resultadoT2 = resT2 / parseFloat(fijo);
        console.log("total de piezas a producir con decimales: " +resultadoT2);
        console.log("total de piezas a producir: " +Math.round(resultadoT2));
            document.getElementById('Talla2').innerHTML = Math.round(resultadoT2);

            suma += resultadoT2;
    }
    
    if (t4 >0 ) {
    
        console.log("Curva talla 4: " + t4);
        var resT4;
    
        var totalT4 = parseFloat(t4) * parseFloat(fijo);
        var totalT4res= totalT4 / parseFloat(total);
        console.log("operacion talla 4:" +totalT4res);
            
        resT4 = parseFloat(totalT4res) * parseFloat(piezas);
        var resultadoT4 = resT4 / parseFloat(fijo);
        console.log("total de piezas a producir con decimales: " +resultadoT4);
        console.log("total de piezas a producir: " +Math.round(resultadoT4));
            document.getElementById('Talla4').innerHTML = Math.round(resultadoT4);

            suma += resultadoT4;
    }

    if (t6 >0 ) {
        console.log("Curva talla 6: " + t6);
        var resT6;
    
        var totalT6 = parseFloat(t6) * parseFloat(fijo);
        var totalT6res= totalT6 / parseFloat(total);
        console.log("operacion talla 6:" +totalT6res);
            
        resT6 = parseFloat(totalT6res) * parseFloat(piezas);
        var resultadoT6 = resT6 / parseFloat(fijo);
        console.log("total de piezas a producir con decimales: " +resultadoT6);
        console.log("total de piezas a producir: " +Math.round(resultadoT6));
            document.getElementById('Talla6').innerHTML = Math.round(resultadoT6);

            suma += resultadoT6;
    }

    if (t8 >0 ) {
        console.log("Curva talla 8: " + t8);
        var resT8;
    
        var totalT8 = parseFloat(t8) * parseFloat(fijo);
        var totalT8res= totalT8 / parseFloat(total);
        console.log("operacion talla 8:" +totalT8res);
            
        resT8 = parseFloat(totalT8res) * parseFloat(piezas);
        var resultadoT8 = resT8 / parseFloat(fijo);
        console.log("total de piezas a producir con decimales: " +resultadoT8);
        console.log("total de piezas a producir: " +Math.round(resultadoT8));
            document.getElementById('Talla8').innerHTML = Math.round(resultadoT8);

            suma += resultadoT8;
    }

    if (t10 >0 ) {
    
        console.log("Curva talla 10: " + t10);
        var resT16;
    
        var totalT10 = parseFloat(t10) * parseFloat(fijo);
        var totalT10res= totalT10 / parseFloat(total);
        console.log("operacion talla 10:" +totalT10res);
            
        resT10 = parseFloat(totalT10res) * parseFloat(piezas);
        var resultadoT10 = resT10 / parseFloat(fijo);
        console.log("total de piezas a producir con decimales: " +resultadoT10);
        console.log("total de piezas a producir: " +Math.round(resultadoT10));
            document.getElementById('Talla10').innerHTML = Math.round(resultadoT10);

            suma += resultadoT10;
  }

  document.getElementById('spTotal').innerHTML = suma;

}

