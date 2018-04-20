<?php
session_start();
include_once "funksjoner.php";
include_once "database.php";
include_once "endrepreferanser.php";
sjekkInnlogging();

$bruker = $_SESSION['brukernavn'];

topp();
navBarDash();
menyDashboard("preferanser", "Her velger du dine mål. Ut fra dette vil jeg beregne en treningsplan du kan følge.", $bruker);
?>

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
  </div><br>
  

  
  
<?php
footer();
bunn();
?>