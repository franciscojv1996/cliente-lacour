function curva(){
//-----------------------------------------------------------------------------------tallas Adultos-------------------------------------------------------------------------------------------
    var totalA = 0, pano =0 , suma =0;
  
    $(".montoA").each(function() {
        if (isNaN(parseInt($(this).val()))) 
        { totalA += 0; } 
            else 
        {   totalA += parseInt($(this).val()); }
    });
    
    console.log("total de curvas de Adulto"+totalA);
    var piezaA = document.getElementById("piezasaA").value;

    console.log("total de piezas por el cliente"+piezaA);

    pano = parseFloat(piezaA) / parseFloat(totalA);
    console.log("resultado a multiplicar adulto"+pano);

    var u = document.getElementById("u").value;
    var xs = document.getElementById("xs").value;
    var s = document.getElementById("s").value;
    var m = document.getElementById("m").value;
    var l = document.getElementById("l").value;
    var xl = document.getElementById("xl").value;
    var xxl = document.getElementById("xxl").value;
    var xl3 = document.getElementById("xl3").value;
    var xl4 = document.getElementById("xl4").value;

    if(u > 0){
        var piezaU = 0;
        piezaU = parseFloat(pano) * parseFloat(u);
        suma += Math.round(piezaU);
        console.log("piezas a producir " + piezaU);
            document.getElementById('TallaU').innerHTML = Math.round(piezaU) ;
    }

    if(xs > 0){
        var piezaXS = 0;
        piezaXS = parseFloat(pano) * parseFloat(xs);
        suma += Math.round(piezaXS);
        console.log("piezas a producir " + piezaXS);
            document.getElementById('TallaXS').innerHTML = Math.round(piezaXS) ;
    }

    if(s > 0){
        var piezaS = 0;
        piezaS = parseFloat(pano) * parseFloat(s);
        suma += Math.round(piezaS);
        console.log("piezas a producir " + piezaS);
            document.getElementById('TallaS').innerHTML =  Math.round(piezaS);
    }

    if(m > 0){
        var piezaM = 0;
        piezaM = parseFloat(pano) * parseFloat(m);
        suma += Math.round(piezaM);
        console.log("piezas a producir " + piezaM);
            document.getElementById('TallaM').innerHTML = Math.round(piezaM) ;
    }

    if(l > 0){
        var piezaL = 0;
        piezaL = parseFloat(pano) * parseFloat(l);
        suma += Math.round(piezaL);
        console.log("piezas a producir " + piezaL);
            document.getElementById('TallaL').innerHTML = Math.round(piezaL) ;
    }

    if(xl > 0){
        var piezaXL = 0;
        piezaXL = parseFloat(pano) * parseFloat(xl);
        suma += Math.round(piezaXL);
        console.log("piezas a producir " + piezaXL);
            document.getElementById('TallaXL').innerHTML = Math.round(piezaXL) ;
    }

    if(xxl > 0){
        var piezaXXL = 0;
        piezaXXL = parseFloat(pano) * parseFloat(xxl);
        suma += Math.round(piezaXXL);
        console.log("piezas a producir " + piezaXXL);
            document.getElementById('TallaXXL').innerHTML = Math.round(piezaXXL) ;
    }

    if(xl3 > 0){
        var piezaXL3 = 0;
        piezaXL3 = parseFloat(pano) * parseFloat(xl3);
        suma += Math.round(piezaXL3);
        console.log("piezas a producir " + piezaXL3);
            document.getElementById('TallaXL3').innerHTML = Math.round(piezaXL3) ;
    }

    if(xl4 > 0){
        var piezaXL4 = 0;
        piezaXL4 = parseFloat(pano) * parseFloat(xl4);
        suma += Math.round(piezaXL4);
        console.log("piezas a producir " + piezaXL4);
            document.getElementById('TallaXL4').innerHTML = Math.round(piezaXL4);
    }
    console.log("total de piezas Juveniles"+ suma);    

//-----------------------------------------------------------------------------------tallas juveniles-------------------------------------------------------------------------------------------
    var totalJ =0, pano1= 0, sm = 0;

    $(".montoJ").each(function() {
        if (isNaN(parseInt($(this).val()))) 
        { totalJ += 0; } 
            else 
        {   totalJ += parseInt($(this).val()); }
    });

    console.log("total de curvas Juveniles "+ totalJ);
    var piezaJ = document.getElementById('piezasaJ').value;

    console.log("total de piezas por el cliente "+piezaJ);

    pano1 = parseFloat(piezaJ) / parseFloat(totalJ);
    console.log("resultado a multiplicar Juvenil "+pano1);

    var t12 = document.getElementById('t12').value;
    var t14 = document.getElementById('t14').value;
    var t16 = document.getElementById('t16').value;

    if(t12 > 0){
        p12 = 0;
        p12 = parseFloat(pano1) * parseFloat(t12);
        sm += Math.round(p12);
        console.log("piezas a producir t-12 " + p12);
            document.getElementById('Talla12').innerHTML = Math.round(p12);
    }

    if(t14 > 0){
        p14 = 0;
        p14 = parseFloat(pano1) * parseFloat(t14);
        sm += Math.round(p14);
        console.log("piezas a producir t-14 " + p14);
            document.getElementById('Talla14').innerHTML = Math.round(p14);
    }

    if(t16 > 0){
        p16 = 0;
        p16 = parseFloat(pano1) * parseFloat(t16);
        sm += Math.round(p16);
        console.log("piezas a producir t-16 " + p16);
            document.getElementById('Talla16').innerHTML = Math.round(p16);
    }

    console.log("total de piezas Juveniles"+ Math.round(sm));

//-----------------------------------------------------------------------------------tallas infantiles-------------------------------------------------------------------------------------------
    var totalI = 0;

    $(".montoI").each(function() {
        if (isNaN(parseInt($(this).val()))) 
        { totalI += 0; } 
            else 
        {   totalI += parseInt($(this).val()); }
    });

    console.log("total de curvas Juveniles "+ totalI);

    var 

    var t2 = document.getElementById("t2").value;
    var t4 = document.getElementById("t4").value;
    var t6 = document.getElementById("t6").value; 
    var t8 = document.getElementById("t8").value; 
    var t10 = document.getElementById("t10").value;
}
