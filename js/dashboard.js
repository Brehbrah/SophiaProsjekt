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

  $("#dato").change(function() {
    function visTreninger(data) {
      $("#display").html(data);
    }

    var dato = this.value;
    $.post("hentdata.php", {data: dato}, visTreninger, "text");
  });

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





