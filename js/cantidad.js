    function cantidad() {

        // tallas adultos
            var totalAdulto = 0;
                $(".Adulto").each(function(){
                    if (isNaN(parseInt($(this).val()))) 
                        {   totalAdulto += 0;   }
                    else 
                        {   totalAdulto += parseInt($(this).val());    }
                });
        console.log("total de pieazas a producir Adultos" + totalAdulto);
    
        // tallas juveniles
            var totalJuvenil = 0;
                $(".Juvenil").each(function(){
                    if (isNaN(parseInt($(this).val()))) 
                        {   totalJuvenil += 0;   }
                    else 
                        {   totalJuvenil += parseInt($(this).val());    }
                });
        console.log("total de pieazas a producir Juvenil" + totalJuvenil);
    
        // tallas infantiles
            
            // tallas meses
            var totalInfantileM = 0;
                $(".InfantilM").each(function(){
                    if (isNaN(parseInt($(this).val()))) 
                    {   totalInfantileM += 0;   }
                        else 
                    {   totalInfantileM += parseInt($(this).val());    }
                });
            console.log("total de pieazas a producir Infantiles Meses" + totalInfantileM);
        
            // tallas dobles
            var totalInfantileD = 0;
            $(".InfantilD").each(function(){
                if (isNaN(parseInt($(this).val()))) 
                {   totalInfantileD += 0;   }
                    else 
                {   totalInfantileD += parseInt($(this).val());    }
            });
            console.log("total de pieazas a producir Infantiles Dobles" + totalInfantileD);
        
        
            // tallas completas
            var totalInfantileC = 0;
                $(".InfantilC").each(function(){
                    if (isNaN(parseInt($(this).val()))) 
                    {   totalInfantileC += 0;   }
                        else 
                    {   totalInfantileC += parseInt($(this).val());    }
                });
            console.log("total de pieazas a producir Infantiles Completa" + totalInfantileC);
        
    }