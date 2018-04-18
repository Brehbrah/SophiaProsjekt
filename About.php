<?php
session_start(); 
include_once "funksjoner.php";
include_once "database.php";


topp();
navBar("about");
?>

<body>
	<main>
		<br>
		<h1>Om oss</h1>
		<br>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vehicula risus et arcu suscipit, vulputate semper nisl venenatis. Donec volutpat sapien augue, pharetra pharetra nisl interdum ac. Proin congue nisi ullamcorper nisl tincidunt ultrices. 
		Mauris in scelerisque sem. 
		Integer sed eleifend lectus, 
		sed fringilla justo.</p>
		<p>Donec accumsan vestibulum dui, quis vehicula risus pharetra vel. Donec lorem felis, blandit id varius et, gravida sed ipsum. Cras aliquam mauris ligula, in tempor urna consectetur eu. Nam justo libero, dapibus at diam vitae, volutpat faucibus sapien. Suspendisse efficitur accumsan lectus vel finibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed ac posuere ligula, ac egestas tellus. Maecenas molestie tristique congue. Donec condimentum condimentum nibh condimentum vestibulum. Integer in purus accumsan, maximus sapien commodo, 
		hendrerit erat. 
		Aenean posuere viverra ex, 
		non dapibus augue fermentum quis.</p>
	</main>
	

</body>

<?php 
lukk($dblink);
bunn(); 
?>