$(document).ready(function(e) {


  // Henter brukerens preferanser fra databasen
  function visPreferanser(data) {
    $("#valgtePreferanser").html(data);
  }
  $.post("hentpreferanser.php", visPreferanser, "text");


  // Henter brukerens treningsinnlegg fra databasen
  $("#visAlleBtn").click(function() {
    function visAlleTreninger(data) {
      $("#displayAlle").html(data);
    }

    $.post("hentdata.php", visAlleTreninger, "text");
  });

  // Henter statistikk over brukerens treningsinnlegg
  $("#visStatBtn").click(function() {
    function visStat(data) {
      $("#displayStat").html(data);
    }

    $.post("hentstat.php", visStat, "text");
  });

  // Henter brukerens treninger på gitt dato
  $("#dato").change(function() {
    function visTreninger(data) {
      $("#display").html(data);
    }

    var dato = this.value;
    $.post("hentdata.php", {data: dato}, visTreninger, "text");
  });

  // Endrer label etter brukerens valgte øvelse
  $("#øvelse").change(function() {
    var øvelse = $("#øvelse").val();

    switch(øvelse) {
      case "Løping":
          document.getElementById("antLabel").innerHTML = "Antall km løpt";
          break;
      case "Svømming":
          document.getElementById("antLabel").innerHTML = "Antall km svømt";
          break;
      case "Sykling":
        document.getElementById("antLabel").innerHTML = "Antall km syklet";
          break;
      case "Vektløfting":
        document.getElementById("antLabel").innerHTML = "Antall øvelser";
          break;
    }
  });

 });



function BMI() {
    // Brukerens inputs
    var height = Number(document.getElementById("height").value);
    var weight = Number(document.getElementById("weight").value);

    // Kalkulerer ut fra BMI
    var BMI = Math.round(weight / Math.pow(height, 2) * 10000);

    // Viser frem utskriften
    document.getElementById("sum").innerText = Math.round(BMI * 100) / 100;

    var sum = Math.round(BMI * 100) / 100
    if (sum < 18.5)
        document.getElementById("comment").innerText = "Undervekt";
    else if (sum >= 18.5 && sum <= 25)
        document.getElementById("comment").innerText = "Normal";
    else if (sum >= 25 && sum <= 30)
        document.getElementById("comment").innerText = "Fedme";
    else if (sum > 30)
        document.getElementById("comment").innerText = "Overfedme";
}

