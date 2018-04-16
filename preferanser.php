<?php
session_start();
include_once "funksjoner.php";
include_once "database.php";
include_once "endrepreferanser.php";
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
      <p class="lead text-muted">Mitt navn er Sophia, din personlige veileder.</p>
      <hr class="my-4">
      <p class="lead text-muted">Her velger du dine mål. Ut fra dette vil jeg beregne en treningsplan du kan følge.</p>
      <p>
        <a href="dashboard.php" class="btn btn-secondary my-2">Dashboard</a>
        <a href="treningsdagbok.php" class="btn btn-secondary my-2">Treningsdagbok</a>
        <a href="preferanser.php" class="btn btn-primary my-2">Preferanser</a>
        <a href="treningsplan.php" class="btn btn-secondary my-2">Treningsplan</a>
        <a href="vektKalkulator.php" class="btn btn-secondary my-2">BMI/Kalori Kalkulator</a>
      </p>
    </div>
  </section>



  <div class="container">
    <div class="card">
    <h5 class="card-header">Dine preferanser</h5>
      <div class="card-body" id="valgtePreferanser">
        <p class="card-text">Mål: Ikke valgt</p>
        <p class="card-text">Aktivitetsnivå: Ingen</p>
      </div>
    </div>
  </div>

 

  <div class="container" id="preferanser">
    <form action="preferanser.php" method="post">
      <div class="form-group">
        <label class="bold">Mål</label>
        <select class="form-control" name="mål" required>
          <option></option>
          <option>Gå ned i vekt</option>
          <option>Få bedre kondisjon</option>
          <option>Oppretthold nåværende vekt</option>
          <option>Gå opp i vekt</option>
        </select>
      </div>
      <div class="form-group">
        <label class="bold">Hvordan beskriver du din daglige aktivitet?</label><br>
          <input type="radio" name="aktivitet" value="Stillesittende"> Stillesittende (f.eks jobber i bank eller på kontor)<br>
          <input type="radio" name="aktivitet" value="Litt Aktiv"> Tilbringer en stor del av dagen på beina (f.eks lærer eller selger)<br>
          <input type="radio" name="aktivitet" value="Aktiv"> Bruker en stor del av dagen med fysisk aktivitet (f.eks servitør eller postbud)<br>
          <input type="radio" name="aktivitet" value="Svært Aktiv"> Tilbringer mesteparten av dagen med tung fysisk aktivitet (f.eks industriarbeider, snekker)<br>
      </div>
      <div class="form-group">
        <input type="submit" value="Lagre preferanser" class="btn btn-primary btn-sm">
      </div>
    </form>
    <div id="display"></div>
  </div>
  
	<footer>
		<p> © Sophia | Email: support@sophia.no | Telephone: 4444 4444 </p>
	</footer>
  
  
<?php bunn(); ?>