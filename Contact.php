<?php
session_start();
include_once "funksjoner.php";
include_once "database.php";



include_once "logginn.php";

topp();
?>

	<div class="topnav">
		  <a href="index.php">Home</a>
		  <a class="active" href="contact.php">Contact</a>
		  <a href="about.php">About</a>
	</div>

<body>
	<main>
		<h1>Contact Us</h1>
		<br>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vehicula risus et arcu suscipit, vulputate semper nisl venenatis. Donec volutpat sapien augue, pharetra pharetra nisl interdum ac. Proin congue nisi ullamcorper nisl tincidunt ultrices. 
		Mauris in scelerisque sem. 
		Integer sed eleifend lectus, 
		sed fringilla justo.</p>
		<br>
		<p>Donec accumsan vestibulum dui, quis vehicula risus pharetra vel. Donec lorem felis, blandit id varius et, gravida sed ipsum. Cras aliquam mauris ligula, in tempor urna consectetur eu. Nam justo libero, dapibus at diam vitae, volutpat faucibus sapien. Suspendisse efficitur accumsan lectus vel finibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed ac posuere ligula, ac egestas tellus. Maecenas molestie tristique congue. Donec condimentum condimentum nibh condimentum vestibulum. Integer in purus accumsan, maximus sapien commodo, 
		hendrerit erat. 
		Aenean posuere viverra ex, 
		non dapibus augue fermentum quis.</p>
		<br>
		<h2>Contact Form</h2>
	</main>
	
	<footer>
		<p> © Sophia | Email: support@sophia.no | Telephone: 4444 4444 </p>
	</footer>
</body>

<?php 
lukk($dblink);
bunn(); 
?>