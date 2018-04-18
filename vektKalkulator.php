<?php
session_start();
include_once "funksjoner.php";
include_once "database.php";
sjekkInnlogging();

$bruker = $_SESSION['brukernavn'];

topp();
navBarDash();
menyDashboard("bmi", "Her kan du regne ut din BMI basert på høyde og vekt.", $bruker);
?>


    <div class="container containerBMI" id="treningsdagbok">
      <table border = "0">
          <tr>
            <td><h1>BMI Kalkulator</h1></td>
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



	
<?php 
bunn(); 
?>