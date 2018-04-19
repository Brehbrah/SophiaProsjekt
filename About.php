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
            <a href="https://aktivtrening.com/" class="btn btn-secondary my-2" style="width: 150px;">aktivtrening.com</a>
          </p>
      </div>

    <div class="row" style=" margin-top: 20px;">
        <div class="col-lg-2" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); margin: auto;">
          <img class="rounded-circle" src="img/Qasim.jpg" alt="Qasim" width="140" height="140">
          <h2>Qasim Iyas Abdi</h2>
          <p>Jeg er bare en som ønsker å gjøre treningsplanen til brukerene våre enklere.</p>
        	<p>Kasim300@hotmail.com</p>
         <p><button class="alfa">Kontakt</button></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-2" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); margin: auto;">
          <img class="rounded-circle" src="img/vidar.PNG" alt="Generic placeholder image" width="140" height="140">
          <h2>Vidar Årvik</h2>
          <p>Ønsker at alle skal få mulighet til å følge sin fremgang.</p>
        	<p>vidaraarvik@gmail.com</p>
         <p><button class="alfa">Kontakt</button></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-2" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); margin: auto;">
          <img class="rounded-circle" src="img/mag.jpg" alt="Magnus" width="140" height="140">
          <h2>Magnus Åby Bergquist</h2>
          <p>Jeg håper at vår nettsida har hjulpet deg, og hvis du sliter kan du kontakte meg :)</p>
          <p>magnusbergquist77@gmail.com</p>
          <p><button class="alfa">Kontakt</button></p>
        </div><!-- /.col-lg-4 -->
      </div>
  </main>
  
</body>

<?php 
lukk($dblink);
bunn(); 
?>