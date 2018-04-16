<?php
session_start();
include_once "funksjoner.php";
include_once "database.php";


$bruker = $_SESSION['brukernavn'];

topp();


?>
<section class="jumbotron text-center">
      <div class="container-fluid">
        <h1 class="jumbotron-heading">Hei, <?php echo "$bruker"; ?>!</h1>
        <p class="lead text-muted">Ønsker du å finne ut hva din BMI eller kalori inntak skal være?.</p>
        <hr class="my-4">
        <p>
          <a href="treningsdagbok.php" class="btn btn-primary my-2">Dashboard</a>
          <a href="treningsdagbok.php" class="btn btn-secondary my-2">Treningsdagbok</a>
          <a href="preferanser.php" class="btn btn-secondary my-2">Preferanser</a>
          <a href="treningsplan.php" class="btn btn-secondary my-2">Treningsplan</a>
          <a href="vektKalkulator.php" class="btn btn-secondary my-2">BMI/Kalori Kalkulator</a>
          <hr class="my-4">

          <title>BMI Kalkulator</title>


    <script type="text/javascript">

        function BMI() {
            // Brukerens inputs
            var height = Number(document.getElementById("height").value);
            var weight = Number(document.getElementById("weight").value);

            // Kalkulerer ut fra BMI
            var BMI = Math.round(weight / Math.pow(height, 2) * 10000);

            // Viser frem utskriften
            document.getElementById("sum").innerText = Math.round(BMI * 100) / 100;

            var sum = Math.round(BMI * 100) / 100
            if (sum < 18.5)
                document.getElementById("comment").innerText = "Undervekt";
            else if (sum >= 18.5 && sum <= 25)
                document.getElementById("comment").innerText = "Normal";
            else if (sum >= 25 && sum <= 30)
                document.getElementById("comment").innerText = "Fedme";
            else if (sum > 30)
                document.getElementById("comment").innerText = "Overfedme";
        }
    </script>
     </head>
     <body>
     	<div class ="row">
     		<section class="col-sm-6 col-md-4 col-lg-3 col-xl-12">
     			<table border = "0">
		     		<tr>
		     			<td><h1>Din BMI Kalkulator</h1></td>
		     		</tr>
		     		<tr>
		     			<td><p>Høyde: <input type="text" id="height"/></p>
		     			</td>
		     		</tr>
		     			<tr>
		     				<td>
			     				<p>Vekt: <input type="text" id="weight"/></p>
							</td>
		     			</tr>
		     			<tr>
		     				<td>
		     					<input type="submit" value="Kalkuler din BMI" onclick="BMI();">
						    	<h1>BMI: <span id="sum"></span></h1>
						    	<h2>Beskrivelse: <span id="comment"></span> </h2> 
		     				</td>
		     			</tr>
     			</table>  	
     		</section>
        </div>
    </body>

	</div>
</section>



	<footer>
		<p> © Sophia | Email: support@sophia.no | Telephone: 4444 4444 </p>
	</footer>
	
<?php bunn(); ?>