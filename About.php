<?php
session_start(); 
include_once "funksjoner.php";
include_once "database.php";


topp();
navBar("about");
?>

<body>
  <main>
      <div class="container">
          <h1 class="jumbotron-heading">Sophia</h1>
          <p class="lead text-muted">Formålet med denne applikasjonen er å gi brukeren oversikt over treningsaktiviteten sin. Sophia kan også gi brukeren en tilrettelagt treningsplan.</p>
          <p class="lead text-muted">Dette er en eksamensoppgave for våren 2018 under universitetet i Sørøst-Norge, Bø i Telemark</p>
          <p>
            <a href="https://www.usn.no/" class="btn btn-primary my-2" style="width: 150px;">usn.no</a>
          </p>
      </div>

    <div class="row" style=" margin-top: 20px;">
        <div class="col-lg-2" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); margin: auto;">
          <img class="rounded-circle" src="img/Qasim.jpg" alt="Qasim" width="140" height="140">
          <h2>Qasim Iyas Abdi</h2>
          <p>Jeg er bare en som ønsker å gjøre treningsplanen til brukerene våre enklere.</p>
          <p>Kasim300@hotmail.com</p>
         <a href="mailto:Kasim300@hotmail.com"><button type="submit" class="btn btn-info btn-lg" value="Send">Kontakt</button></a>
         </div>
         <div class="col-lg-2" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); margin: auto;">
          <img class="rounded-circle" src="" alt="Magnus" width="140" height="140">
          <h2>Khoi</h2>
          <p>Komentar</p>
          <p>Hotmail adressen din</p>
          <a href="mailto:Hotmail adressen din"><button type="submit" class="btn btn-info btn-lg" value="Send">Kontakt</button></a>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-2" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); margin: auto;">
          <img class="rounded-circle" src="img/vidar.PNG" alt="Generic placeholder image" width="140" height="140">
          <h2>Vidar Årvik</h2>
          <p>Ønsker at alle skal få mulighet til å følge sin fremgang.</p>
          <p>vidaraarvik@gmail.com</p>
         <a href="mailto:vidaraarvik@gmail.com"><button type="submit" class="btn btn-info btn-lg" value="Send">Kontakt</button></a>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-2" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); margin: auto;">
          <img class="rounded-circle" src="img/tom.png" alt="Tom" width="140" height="140">
          <h2>Tom</h2>
          <p>Ingen resultat eller progress? ta kontakt med meg!  :)</p>
          <p>viettran_95@hotmail.com</p>
          <a href="mailto:viettran_95@hotmail.com"><button type="submit" class="btn btn-info btn-lg" value="Send">Kontakt</button></a>
          </div>
        <div class="col-lg-2" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); margin: auto;">
          <img class="rounded-circle" src="img/mag.jpg" alt="Magnus" width="140" height="140">
          <h2>Magnus Åby Bergquist</h2>
          <p>Jeg håper at vår nettsida har hjulpet deg, og hvis du sliter kan du kontakte meg :)</p>
          <p>magnusbergquist-<br>77@gmail.com</p>
          <a href="mailto:magnusbergquist77@gmail.com"><button type="submit" class="btn btn-info btn-lg" value="Send">Kontakt</button></a>
        </div><!-- /.col-lg-4 -->
  </main>
  
</body>

<?php 
lukk($dblink);
bunn(); 
?>