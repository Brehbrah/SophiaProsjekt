$(document).ready(function(e) {

  $("#dato").change(function() {
    function visØvelser(data) {
      $("#display").html(data);
    }

    var dato = this.value;
    $.post("hentdata.php", {data: dato}, visØvelser, "text");
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





