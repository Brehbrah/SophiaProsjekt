<?php
session_start();
include_once "funksjoner.php";
include_once "database.php";
sjekkInnlogging();

$bruker = $_SESSION['brukernavn'];

topp();
navBarDash();
menyDashboard("treningsplan", "Når du har lagt inn dine preferanser vil jeg lage en plan for deg.", $bruker);
?>

<main style="height: 1250px;">
<div class="row featurette" style="padding: 40px;">
          <div class="col-md-7">
            <h2 class="featurette-heading"> Sykkeltrening </h2>
            <p class="lead">Dette er et treningsprogram for deg som ønsker å få bedre kondisjon gjennom sykkeltrening. Sykling er en sunn, lav-effekt-øvelse som kan nytes av mennesker i alle aldre, fra små barn til eldre voksne. Det er også morsomt, billig og bra for miljøet.
			</p>
            <br>
            <h2> Treningsprogram</h2>
            <table class="table2">
				<tr><td class="td2"> Nr </td> <td class="td2"> Aktivitet </td> <td class="td2">Repitisjon</td></tr>
				<tr><td class="td2"> 1 </td>	<td class="td2"> Sykling </td>	<td class="td2"> 4 timer</td></tr>
				<tr><td class="td2"> 2 </td>	<td class="td2"> Tur </td>	<td class="td2"> 3 timer </td></tr>
				<tr><td class="td2"> 5 </td>	<td class="td2"> Svømming </td>	<td class="td2"> 1 time </td></tr>
				<tr><td class="td2"> 8 </td>	<td class="td2"> Massasje </td>	<td class="td2"> 1 time </td></tr>
			</table>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 250px; height: 250px;" src="img/Sykling.jpg" data-holder-rendered="true">
          </div>
        </div>
        <hr class="featurette-divider">
<div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading"> Styrke </h2>
            <p class="lead">Vi har gjort det enklere å bli sterk på rekordtid. Gi den forsømte ryggen og de slappe armene en effektiv treningsøkt – Det tar bare 30 minutter. Det eneste du trenger er et sett håndvekter og litt gulvplass.</p>
            <br>
             <table class="table2">
				<tr><td class="td2"> Nr </td> <td class="td2"> Aktivitet </td> <td class="td2">Repitisjon</td></tr>
				<tr><td class="td2"> 1 </td>	<td class="td2"> Svøming </td>	<td class="td2"> 1 time</td></tr>
				<tr><td class="td2"> 2 </td>	<td class="td2"> Løping </td>	<td class="td2"> 1 time/4 </td></tr>
				<tr><td class="td2"> 5 </td>	<td class="td2"> Sykling </td>	<td class="td2"> 1 time </td></tr>
				<tr><td class="td2"> 8 </td>	<td class="td2"> Vektløfting </td>	<td class="td2"> 1 time </td></tr>
			</table>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 250px; height: 250px;" src="img/vekt.jpg" data-holder-rendered="true">
          </div>
        </div>
        <hr class="featurette-divider">
<div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading"> Intervaltrening </h2>
            <p class="lead">Programmet for deg som gjerne vil øke hastigheten. Vi gir deg bedre kondisjon, øker forbrenningen og gjør deg på alle måter til en bedre løper. Hvis du ikke driver med intervalltrening allerede, vil formkurven gå rett til himmels.</p>
            <br>
              <table class="table2">
				<tr><td class="td2"> Nr </td> <td class="td2"> Aktivitet </td> <td class="td2">Repitisjon</td></tr>
				<tr><td class="td2"> 1 </td>	<td class="td2"> Svøming </td>	<td class="td2"> 1 time</td></tr>
				<tr><td class="td2"> 2 </td>	<td class="td2"> Løping </td>	<td class="td2"> 1 time/4 </td></tr>
				<tr><td class="td2"> 5 </td>	<td class="td2"> Sykling </td>	<td class="td2"> 1 time </td></tr>
				<tr><td class="td2"> 8 </td>	<td class="td2"> Vektløfting </td>	<td class="td2"> 1 time </td></tr>
			</table>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 250px; height: 250px;" src="img/løping.jpg" data-holder-rendered="true">
          </div>
        </div>
      </main>


<?php bunn(); ?>