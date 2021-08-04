function cantidad() {
  // tallas adultos
  var totalAdulto = 0;
  $(".Adulto").each(function () {
    if (isNaN(parseInt($(this).val()))) {
      totalAdulto += 0;
    } else {
      totalAdulto += parseInt($(this).val());
    }
  });
  document.getElementById("adultoC").innerHTML = totalAdulto;
  console.log("total de pieazas a producir Adultos: " + totalAdulto);

  // tallas juveniles
  var totalJuvenil = 0;
  $(".Juvenil").each(function () {
    if (isNaN(parseInt($(this).val()))) {
      totalJuvenil += 0;
    } else {
      totalJuvenil += parseInt($(this).val());
    } //juvenilC infantilCC
  });
  document.getElementById("juvenilC").innerHTML = totalJuvenil;
  console.log("total de pieazas a producir Juvenil: " + totalJuvenil);

  // tallas infantiles

  // tallas meses
  var totalInfantileM = 0;
  $(".InfantilM").each(function () {
    if (isNaN(parseInt($(this).val()))) {
      totalInfantileM += 0;
    } else {
      totalInfantileM += parseInt($(this).val());
    }
  });

  document.getElementById("infantilMC").innerHTML = totalInfantileM;
  console.log(
    "total de pieazas a producir Infantiles Meses: " + totalInfantileM
  );

  // tallas dobles
  var totalInfantileD = 0;
  $(".InfantilD").each(function () {
    if (isNaN(parseInt($(this).val()))) {
      totalInfantileD += 0;
    } else {
      totalInfantileD += parseInt($(this).val());
    }
  });
  document.getElementById("infantilDC").innerHTML = totalInfantileD;
  console.log(
    "total de pieazas a producir Infantiles Dobles: " + totalInfantileD
  );

  // tallas completas
  var totalInfantileC = 0;
  $(".InfantilC").each(function () {
    if (isNaN(parseInt($(this).val()))) {
      totalInfantileC += 0;
    } else {
      totalInfantileC += parseInt($(this).val());
    }
  });

  document.getElementById("infantilCC").innerHTML = totalInfantileC;
  console.log(
    "total de pieazas a producir Infantiles Completa: " + totalInfantileC
  );
}
