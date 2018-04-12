$(document).ready(function(e) {

  $("#visAlleBtn").click(function() {
    function visAlleTreninger(data) {
      $("#displayAlle").html(data);
    }

    $.post("hentdata.php", visAlleTreninger, "text");
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





