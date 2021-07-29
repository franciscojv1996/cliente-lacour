function curva(){
/*++++++++++++++++++++++++++++++++++++++++++++TALLAS ADULTOS+++++++++++++++++++++++++++++++++++++++++++++++++++++++*/ 
   
    var totalA = 0, panoA = 0, sumaA = 0, piezaA;
    var u = 0, xs = 0, s = 0, m = 0, l = 0, xl = 0, xxl = 0, xl3 = 0, xl4 = 0;
  
    piezaA = document.getElementById("piezasaA").value;

    if (piezaA >= 100) {

        console.log("total de piezas por el cliente: " +piezaA);

        $(".montoA").each(function() {
            if (isNaN(parseInt($(this).val()))) 
                { totalA += 0; } 
            else 
                {   totalA += parseInt($(this).val()); }
        });

        console.log("total de curvas de Adulto: " +totalA);

        panoA = parseFloat(piezaA) / parseFloat(totalA);
        console.log("resultado a multiplicar adulto: " +panoA);

            u = document.getElementById("u").value;
            xs = document.getElementById("xs").value;
            s = document.getElementById("s").value;
            m = document.getElementById("m").value;
            l = document.getElementById("l").value;
            xl = document.getElementById("xl").value;
            xxl = document.getElementById("xxl").value;
            xl3 = document.getElementById("xl3").value;
            xl4 = document.getElementById("xl4").value;

        console.log("talla adulto");
        console.log("tallas U: " + u);
        console.log("tallas XS: " + xs);
        console.log("tallas S: " + s);
        console.log("tallas M: " + m);
        console.log("tallas L: " + l);
        console.log("tallas XL: " + xl);
        console.log("tallas XXL: " + xxl);
        console.log("tallas 3XL: " + xl3);
        console.log("tallas 4XL: " + xl4);

        if (u > 0) {
            var resU = 0;
                resU = parseFloat(panoA) * parseFloat(u);
                console.log("Piezas a producir: "+ resU);
                document.getElementById('TallaU').innerHTML = Math.round(resU);
            } else {
            document.getElementById('TallaU').innerHTML = " "; 
        }
    
        if (xs > 0) {
            var resXS = 0;
            resXS = parseFloat(panoA) * parseFloat(xs);
            console.log("Piezas a producir: "+ resXS);
            document.getElementById('TallaXS').innerHTML = Math.round(resXS);
            } else {
            document.getElementById('TallaXS').innerHTML = " "; 
        }

        if (s > 0) {
            var resS = 0;
                resS = parseFloat(panoA) * parseFloat(s);
                console.log("Piezas a producir: "+ resS);
                document.getElementById('TallaS').innerHTML = Math.round(resS);
            } else {
                document.getElementById('TallaS').innerHTML = " "; 
        }

        if (m > 0) {
            var resM = 0;
                resM = parseFloat(panoA) * parseFloat(m);
                console.log("Piezas a producir: "+ resM);
                document.getElementById('TallaM').innerHTML = Math.round(resM);
            } else {
                document.getElementById('TallaM').innerHTML = " "; 
        }

        if (l > 0) {
            var resL = 0;
                resL = parseFloat(panoA) * parseFloat(l);
                console.log("Piezas a producir: "+ resL);
                document.getElementById('TallaL').innerHTML = Math.round(resL);
            } else {
            document.getElementById('TallaL').innerHTML = " "; 
        }

        if (xl > 0) {
            var resXL = 0;
                resXL = parseFloat(panoA) * parseFloat(xl);
                console.log("Piezas a producir: "+ resXL);
                document.getElementById('TallaXL').innerHTML = Math.round(resXL);
            } else {
                document.getElementById('TallaXL').innerHTML = " "; 
        }

        if (xxl > 0) {
            var resXXL = 0;
                resXXL = parseFloat(panoA) * parseFloat(xxl);
                console.log("Piezas a producir: "+ resXXL);
                document.getElementById('TallaXXL').innerHTML = Math.round(resXXL);
            } else {
                document.getElementById('TallaXXL').innerHTML = " "; 
        }

        if (xl3 > 0) {
            var resXL3 = 0;
                resXL3 = parseFloat(panoA) * parseFloat(xl3);
                console.log("Piezas a producir: "+ resXL3);
                document.getElementById('TallaXL3').innerHTML = Math.round(resXL3);
            } else {
            document.getElementById('TallaXL3').innerHTML = " "; 
        }

        if (xl4 > 0) {
            var resXL4 = 0;
                resXL4 = parseFloat(panoA) * parseFloat(xl4);
                console.log("Piezas a producir: "+ resXL4);
                document.getElementById('TallaXL4').innerHTML = Math.round(resXL4);
            } else {
                document.getElementById('TallaXL4').innerHTML = " "; 
        }
        
    }

    if(adulto() == 1 && piezaA == 0){
        alert(" Debes de agregar la cantidad de piezas a producir de talla adulto ");
        document.getElementById("piezasaA").style.border = "solid";
        var bordeAdulto = 10;
    
        if(bordeAdulto == 10){
            document.getElementById("piezasaA").style.borderColor = "navy";
        }else{
            document.getElementById("piezasaA").style.borderColor = "white";
        }
    
    }else{
        document.getElementById("piezasaA").style.border = "none";
    }
    
    if(piezaA < 100 && piezaA >= 1){
        alert(" la cantidad de piezas a producir debe de se mayor a 100");
    }

/*++++++++++++++++++++++++++++++++++++++++++++TALLAS JUVENIL+++++++++++++++++++++++++++++++++++++++++++++++++++++++*/ 

    var totalJ = 0, panoJ = 0, sumaJ = 0, piezaJ;
    var t12 = 0, t14 = 0, t16 = 0;

    piezaJ = document.getElementById("piezasaJ").value;

    if (piezaJ >= 100) {
        console.log("total de piezas por el cliente: " +piezaJ);

        $(".montoJ").each(function() {
            if (isNaN(parseInt($(this).val()))) 
            { totalJ += 0; } 
                else 
            {   totalJ += parseInt($(this).val()); }
        });

        console.log("total de curvas de Adulto: " +totalJ);

        panoJ = parseFloat(piezaJ) / parseFloat(totalJ);
        console.log("resultado a multiplicar adulto: " +panoJ);

        var t12 = document.getElementById('t12').value;
        var t14 = document.getElementById('t14').value;
        var t16 = document.getElementById('t16').value;

        console.log("talla juvenil");
        console.log("tallas T12: " + t12);
        console.log("tallas T14: " + t14);
        console.log("tallas T16: " + t16);

        if (t12 > 0) {
            var resT12 = 0;
                resT12 = parseFloat(panoJ) * parseFloat(t12);
                console.log("Piezas a producir: "+ resT12);
                document.getElementById('Talla12').innerHTML = Math.round(resT12);
            } else {
               document.getElementById('Talla12').innerHTML = " "; 
        }

        if (t14 > 0) {
            var resT14 = 0;
                resT14 = parseFloat(panoJ) * parseFloat(t14);
                console.log("Piezas a producir: "+ resT14);
                document.getElementById('Talla14').innerHTML = Math.round(resT14);
            } else {
                document.getElementById('Talla14').innerHTML = " "; 
        }

        if (t16 > 0) {
            var resT14 = 0;
                resT14 = parseFloat(panoJ) * parseFloat(t16);
                console.log("Piezas a producir: "+ resT14);
                document.getElementById('Talla16').innerHTML = Math.round(resT14);
            } else {
                document.getElementById('Talla16').innerHTML = " "; 
        }
        
    }

    if(juvenil() == 1 && piezaJ == 0){
        alert(" Debes de agregar la cantidad de piezas a producir de talla juvenil ");
        document.getElementById("piezasaJ").style.border = "solid";
        var bordeJuvenil = 20;
    
        if(bordeJuvenil == 20){
            document.getElementById("piezasaJ").style.borderColor = "navy";
        }else{
            document.getElementById("piezasaJ").style.borderColor = "white";
        }
    
    }else{
        document.getElementById("piezasaJ").style.border = "none";
    }
    
    if(piezaJ < 100 && piezaJ >= 1){
        alert(" la cantidad de piezas a producir debe de se mayor a 100");
    }

/*++++++++++++++++++++++++++++++++++++++++++++TALLAS INFANTILES+++++++++++++++++++++++++++++++++++++++++++++++++++++++*/ 

    console.log("tallas infantiles");

        // TALLAS DE MESES
        var totalIM = 0, panoIM = 0, sumaIM = 0, piezaIM;
        var m3 = 0, m6 = 0, m9 = 0, m12 = 0, m18= 0, m24 = 0;

        piezaIM = document.getElementById("piezasaIM").value;
            
        if (piezaIM > 0) {
            console.log("total de piezas por el cliente: " +piezaIM);

            $(".montoIM").each(function() {
                if (isNaN(parseInt($(this).val()))) 
                { totalIM += 0; } 
                else 
                {   totalIM += parseInt($(this).val()); }
            });

            console.log("total de curvas de Infantil Meses: " +totalIM);

            panoIM = parseFloat(piezaIM) / parseFloat(totalIM);
            console.log("resultado a multiplicar adulto: " +panoIM);

            var m3 = document.getElementById('m3').value;
            var m6 = document.getElementById('m6').value;
            var m9 = document.getElementById('m9').value;
            var m12 = document.getElementById('m12').value;
            var m18 = document.getElementById('m18').value;
            var m24 = document.getElementById('m24').value;

            console.log("talla de meses");
            console.log("tallas M3: " + m3);
            console.log("tallas M6: " + m6);
            console.log("tallas M9: " + m9);
            console.log("tallas M12: " + m12);
            console.log("tallas M18: " + m18);
            console.log("tallas M24: " + m24);

            if (m3 > 0) {
                var resM3 = 0;
                    resM3 = parseFloat(panoIM) * parseFloat(m3);
                    console.log("Piezas a producir: "+ resM3);
                    document.getElementById('Talla3M').innerHTML = Math.round(resM3);
                } else {
                    document.getElementById('Talla3M').innerHTML = " "; 
            }

            if (m6 > 0) {
                var resM6 = 0;
                    resM6 = parseFloat(panoIM) * parseFloat(m6);
                    console.log("Piezas a producir: "+ resM6);
                    document.getElementById('Talla6M').innerHTML = Math.round(resM6);
                } else {
                    document.getElementById('Talla6M').innerHTML = " "; 
            }

            if (m9 > 0) {
                var resM9 = 0;
                    resM9 = parseFloat(panoIM) * parseFloat(m9);
                    console.log("Piezas a producir: "+ resM9);
                    document.getElementById('Talla9M').innerHTML = Math.round(resM9);
                } else {
                    document.getElementById('Talla9M').innerHTML = " "; 
            }

            if (m12 > 0) {
                var resM12 = 0;
                    resM12 = parseFloat(panoIM) * parseFloat(m12);
                    console.log("Piezas a producir: "+ resM12);
                    document.getElementById('Talla12M').innerHTML = Math.round(resM12);
                } else {
                    document.getElementById('Talla12M').innerHTML = " "; 
            }

            if (m18 > 0) {
                var resM18 = 0;
                    resM18 = parseFloat(panoIM) * parseFloat(m18);
                    console.log("Piezas a producir: "+ resM18);
                    document.getElementById('Talla18M').innerHTML = Math.round(resM18);
            } else {
                    document.getElementById('Talla18M').innerHTML = " "; 
            }

            if (m24 > 0) {
                var resM24 = 0;
                    resM24 = parseFloat(panoIM) * parseFloat(m24);
                    console.log("Piezas a producir: "+ resM24);
                    document.getElementById('Talla24M').innerHTML = Math.round(resM24);
                } else {
                    document.getElementById('Talla24M').innerHTML = " "; 
            }
                
        }

        if(meses() == 1 && piezaIM == 0){
            alert(" Debes de agregar la cantidad de piezas a producir de talla infantil ");
            document.getElementById("piezasaIM").style.border = "solid";
            var bordeInfantilM = 31;
        
            if(bordeInfantilM == 31){
                document.getElementById("piezasaIM").style.borderColor = "navy";
            }else{
                document.getElementById("piezasaIM").style.borderColor = "white";
            }
        
        }else{
            document.getElementById("piezasaIM").style.border = "none";
        }
        
        if(piezaIM < 100 && piezaIM >= 1){
            alert(" la cantidad de piezas a producir debe de se mayor a 100");
        }
    
        // TALLAS DE DOBLES
        var totalID = 0, panoID = 0, sumaIM = 0, piezaID;
        var t23 =0, t45 = 0, t67 = 0, t89 = 0, t1011= 0;

        piezaID = document.getElementById("piezasaID").value;

        if (piezaID >= 100) {
        
            console.log("total de piezas por el cliente: " +piezaID);

            $(".montoID").each(function() {
                if (isNaN(parseInt($(this).val()))) 
                { totalID += 0; } 
                    else 
                {   totalID += parseInt($(this).val()); }
            });

            console.log("total de curvas de Infantil doble: " +totalID);

            panoID = parseFloat(piezaID) / parseFloat(totalID);
            console.log("resultado a multiplicar adulto: " +panoID);

            var t23 = document.getElementById('t23').value;
            var t45 = document.getElementById('t45').value;
            var t67 = document.getElementById('t67').value;
            var t89 = document.getElementById('t89').value;
            var t1011 = document.getElementById('t1011').value;

            console.log("talla Doble");
            console.log("tallas 2-3: " +t23);
            console.log("tallas 4-5: " +t45);
            console.log("tallas 6-7: " +t67);
            console.log("tallas 8-9: " +t89);
            console.log("tallas 10-11: " +t1011);

            if (t23 > 0) {
                var resT23 = 0;
                    resT23 = parseFloat(panoID) * parseFloat(t23);
                    console.log("Piezas a producir: "+ resT23);
                    document.getElementById('Talla23').innerHTML = Math.round(resT23);
                } else {
                    document.getElementById('Talla23').innerHTML = " "; 
            }

            if (t45 > 0) {
                var resT45 = 0;
                    resT45 = parseFloat(panoID) * parseFloat(t45);
                    console.log("Piezas a producir: "+ resT45);
                    document.getElementById('Talla45').innerHTML = Math.round(resT45);
                } else {
                    document.getElementById('Talla45').innerHTML = " "; 
            }

            if (t67 > 0) {
                var resT67 = 0;
                    resT67 = parseFloat(panoID) * parseFloat(t67);
                    console.log("Piezas a producir: "+ resT67);
                    document.getElementById('Talla67').innerHTML = Math.round(resT67);
                } else {
                    document.getElementById('Talla67').innerHTML = " "; 
            }

            if (t89 > 0) {
                var resT89 = 0;
                    resT89 = parseFloat(panoID) * parseFloat(t89);
                    console.log("Piezas a producir: "+ resT89);
                    document.getElementById('Talla89').innerHTML = Math.round(resT89);
                } else {
                    document.getElementById('Talla89').innerHTML = " "; 
            }

            if (t1011 > 0) {
                var resT1011 = 0;
                    resT1011 = parseFloat(panoID) * parseFloat(t1011);
                    console.log("Piezas a producir: "+ resT1011);
                    document.getElementById('Talla1011').innerHTML = Math.round(resT1011);
                } else {
                    document.getElementById('Talla1011').innerHTML = " "; 
            }
                
        } 

        if(doble() == 1 && piezaID == 0){
            alert(" Debes de agregar la cantidad de piezas a producir de talla infantil ");
            document.getElementById("piezasaID").style.border = "solid";
            var bordeInfantilD = 32;
            
            if(bordeInfantilD == 32){
                document.getElementById("piezasaID").style.borderColor = "navy";
                }else{
                document.getElementById("piezasaID").style.borderColor = "white";
            }
            
        }else{
            document.getElementById("piezasaID").style.border = "none";
        }
            
        if(piezaID < 100 && piezaID >= 1){
            alert(" la cantidad de piezas a producir debe de se mayor a 100");
        }


        // TALLAS COMPLETA
        var totalIC = 0, panoIC = 0, sumaIC = 0, piezaIC;
        var t2 = 0, t4 = 0, t6 = 0, t8 = 0, t10 = 0;

        piezaIC = document.getElementById("piezasaIC").value;
        console.log("total de piezas por el cliente: " +piezaIC);

        if (piezaIC > 0) {

            $(".montoIC").each(function() {
                if (isNaN(parseInt($(this).val()))) 
                    { totalIC += 0; } 
                else 
                    {   totalIC += parseInt($(this).val()); }
            });

            console.log("total de curvas de Infantil completa: " +totalIC);

            panoIC = parseFloat(piezaIC) / parseFloat(totalIC);
            console.log("resultado a multiplicar adulto: " +panoIC);

            var t2 = document.getElementById('t2').value;
            var t4 = document.getElementById('t4').value;
            var t6 = document.getElementById('t6').value;
            var t8 = document.getElementById('t8').value;
            var t10 = document.getElementById('t10').value;

            console.log("talla Doble");
            console.log("tallas 2: " +t2);
            console.log("tallas 4: " +t4);
            console.log("tallas 6: " +t6);
            console.log("tallas 8: " +t8);
            console.log("tallas 10: " +t10);

            if (t2 > 0) {
                var resT2 = 0;
                    resT2 = parseFloat(panoIC) * parseFloat(t2);
                    console.log("Piezas a producir: "+ resT2);
                    document.getElementById('Talla2').innerHTML = Math.round(resT2);
                } else {
                    document.getElementById('Talla2').innerHTML = " "; 
            }

            if (t4 > 0) {
                var resT4 = 0;
                    resT4 = parseFloat(panoIC) * parseFloat(t4);
                    console.log("Piezas a producir: "+ resT4);
                    document.getElementById('Talla4').innerHTML = Math.round(resT4);
                } else {
                    document.getElementById('Talla4').innerHTML = " "; 
            }

            if (t6 > 0) {
                var resT6 = 0;
                    resT6 = parseFloat(panoIC) * parseFloat(t6);
                    console.log("Piezas a producir: "+ resT6);
                    document.getElementById('Talla6').innerHTML = Math.round(resT6);
                } else {
                    document.getElementById('Talla6').innerHTML = " "; 
            }

            if (t8 > 0) {
                var resT8 = 0;
                    resT8 = parseFloat(panoIC) * parseFloat(t8);
                    console.log("Piezas a producir: "+ resT8);
                    document.getElementById('Talla8').innerHTML = Math.round(resT8);
                } else {
                    document.getElementById('Talla8').innerHTML = " "; 
            }

            if (t10 > 0) {
                var resT10 = 0;
                    resT10 = parseFloat(panoIC) * parseFloat(t10);
                    console.log("Piezas a producir: "+ resT10);
                    document.getElementById('Talla10').innerHTML = Math.round(resT10);
                } else {
                    document.getElementById('Talla10').innerHTML = " "; 
            }

        }

        if(completa() == 1 && piezaIC == 0){
            alert(" Debes de agregar la cantidad de piezas a producir de talla infantil ");
            document.getElementById("piezasaIC").style.border = "solid";
            var bordeInfantilD = 33;
            
            if(bordeInfantilD == 33){
                document.getElementById("piezasaIC").style.borderColor = "navy";
                }else{
                document.getElementById("piezasaIC").style.borderColor = "white";
            }
            
        }else{
            document.getElementById("piezasaIC").style.border = "none";
        }
            
        if(piezaIC < 100 && piezaIC >= 1){
            alert(" la cantidad de piezas a producir debe de se mayor a 100");
        }




}