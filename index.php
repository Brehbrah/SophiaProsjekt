<?php
session_start();
include_once "funksjoner.php";
include_once "database.php";

topp();
navBar("index");
?>

	<div class="container2">
		<div class = "split-left">
		<div class = "center">
			<img src = "img/SophiaFront.png" alt = "Sophia">
			<center><h4>Sophia</h4></center>
			<center><p>Veileder | Coach | Venn</p></center>
		</div>
	</div>

		<div class="split-right">
		  <div class="centered">
		    <div class = "box">
		    	<div class="form-wrap">
			<div class="tabs">
				<h3 class="signup-tab"><a class="active" href="#signup-tab-content">Registrer</a></h3>
				<h3 class="login-tab"><a href="#login-tab-content">Logg inn</a></h3>
			</div><!--.tabs-->
		
			<div class="tabs-content">
				<div id="signup-tab-content" class="active">
					<form class="signup-form" action="registrer.php" method="post">
						<input type="email" class="input" name="signup_epost" autocomplete="off" placeholder="Epost" required>
						<input type="text" class="input" name="signup_brukernavn" autocomplete="off" placeholder="Brukernavn" required>
						<input type="password" class="input" name="signup_passord" autocomplete="off" placeholder="Passord" required>
						<input type="submit" class="button" value="Registrer">
					</form><!--.signup-form-->
					<div class="help-text"></div><!--.help-text-->
				</div><!--.signup-tab-content-->

				<div id="login-tab-content">
					<form class="login-form" action="logginn.php" method="post">
						<input type="text" class="input" name="brukernavn" autocomplete="off" placeholder="Epost eller Brukernavn" required>
						<input type="password" class="input" name="passord" autocomplete="off" placeholder="Passord" required>
						<input type="submit" class="button" value="Logg inn">
						<hr style="height: 0px; visibility:hidden;" />
					</form>

				</div> 
			</div><!--.tabs-content-->
				</div><!--.form-wrap-->

		    </div>
		</div>

		</div>
	</div>
		<div class="topMeny" style="margin-top: 500px;">
			<h2>Ranking! Hvem har gjort det best med treningen?</h2>
			<?php
			topTrening(kobleOpp());
			?>
		</div>
		

<?php 
bunn(); 
?>
