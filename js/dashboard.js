function endreØvelse(valg) {
	var øvelse = valg.value;

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
}

