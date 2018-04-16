<?php
session_start();
include_once "funksjoner.php";
include_once "database.php";



include_once "logginn.php";

topp();
?>

	<div class="topnav">
		  <a href="index.php">Hjem</a>
		  <a class="active" href="contact.php">Kontakt</a>
		  <a href="about.php">Om oss</a>
	</div>

<body>
	<main>
	<br>
		<h1>Contact Form</h1>
		
		<div class="container">
  <form action="action_page.php">

    <label for="firstname">First Name</label>
    <input type="text" id="firstname" name="firstname" placeholder="Your name..">

    <label for="lastname">Last Name</label>
    <input type="text" id="lastname" name="lastname" placeholder="Your last name..">
	
	<label for="epost">E-post</label>
    <input type="text" id="epost" name="epost" placeholder="Your E-post">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
		
	</main>
	
	<footer>
		<p> © Sophia | Email: support@sophia.no | Telephone: 4444 4444 </p>
	</footer>
</body>

<?php 
lukk($dblink);
bunn(); 
?>