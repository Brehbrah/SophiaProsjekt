<?php
session_start();
include_once "funksjoner.php";
include_once "database.php";
sjekkInnlogging();

$bruker = $_SESSION['brukernavn'];

topp();
?>


    <div class='topnav'>
        <a href='loggut.php'>Logg ut</a>
        <a href='#contact'>Kontakt</a>
        <a href='#about'>Om oss</a>
    </div>

    <section class="jumbotron text-center">
      <div class="container-fluid">
        <h1 class="jumbotron-heading">Hei, <?php echo "$bruker"; ?>!</h1>
        <p class="lead text-muted">Ønsker du å finne ut hva din BMI eller kalori inntak skal være?.</p>
        <hr class="my-4">
        <p>
          <a href="dashboard.php" class="btn btn-secondary my-2">Dashboard</a>
          <a href="treningsdagbok.php" class="btn btn-secondary my-2">Treningsdagbok</a>
          <a href="preferanser.php" class="btn btn-secondary my-2">Preferanser</a>
          <a href="treningsplan.php" class="btn btn-secondary my-2">Treningsplan</a>
          <a href="vektKalkulator.php" class="btn btn-primary my-2">BMI/Kalori Kalkulator</a>
          <hr class="my-4">
     </div>
    </section>


    <div class="container" id="treningsdagbok">
      <table border = "0">
          <tr>
            <td><h1>Din BMI Kalkulator</h1></td>
          </tr>
          <tr>
            <td><p>Høyde: <input type="text" id="height"/></p></td>
          </tr>
            <tr>
              <td><p>Vekt: <input type="text" id="weight"/></p></td>
            </tr>
            <tr>
              <td>
                <input type="submit" value="Kalkuler din BMI" onclick="BMI();">
                <h1>BMI: <span id="sum"></span></h1>
                <h2>Beskrivelse: <span id="comment"></span> </h2> 
              </td>
            </tr>
       </table>   
    </div>



	<footer>
		<p> © Sophia | Email: support@sophia.no | Telephone: 4444 4444 </p>
	</footer>
	
<?php bunn(); ?>