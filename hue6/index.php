<?php

	$myNav = ["Home", "About", "Portfolio", "Kontakt", "Login"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Anliegen</title>

	<style>
		body 
		{
			font-family: MS Reference Sans Serif;
		}
		nav a 
		{
			margin-left: 5px;
		}

		h1 
		{
			color: #d10000;
			margin-bottom: 1px;
		}

		h3 
		{
			margin-top: 2px;
		}
		.data input 
		{
			margin-bottom: 5px;
		}

		.wrapper 
		{
			margin-left: 3%;
		}

	</style>
</head>
<body>
<div class="wrapper">
	<img src="img/MEDT_Logo.png">

	<nav>
	<?php  
	for ($i=0; $i < sizeof($myNav); $i++) { ?>
		<a href="http://www.google.at"><?php echo "$myNav[$i]"; ?></a>
		<b> | </b>
	<?php } ?>

</nav>
	<h1>Kontakt</h1>
	
<?php 


if (isset($_POST['btnSubmit'])) {
	echo "<p>Herzlichen Dank für Ihre Anfrage! Aufgrund unseres derzeitigen Anfragevolumens kann die Beantwortung Ihrer Anfrage längere Zeit in Anspruch nehmen. Wir bitten um Ihr Verständnis und melden uns sobald als möglich bei Ihnen.</p>";

	echo "<p>Ihr Das-Logo Team</p>";
}


else {
	echo"<h3>Wir freuen uns auf Ihre Anfrage!</h3>";
	echo"<p>Der Grund für Ihre Anfrage</p>";
	echo"<form action=\"#\" method=\"post\">";
	echo"<input type=\"radio\" name=\"reason\" value=\"FS\">Freie Stellen<br>";
	echo"<input type=\"radio\" name=\"reason\" value=\"PR\">Produktreklamation<br>";
	echo"<input type=\"radio\" name=\"reason\" value=\"PN\">Produktneuheiten<br><br>";

	echo"Anrede* ";
	echo"<input type=\"radio\" name=\"gender\" value=\"Frau\" required>Frau";
	echo"<input type=\"radio\" name=\"gender\" value=\"Herr\" required>Herr<br><br>";

	echo"Vorname* ";
	echo"<input type=\"Text\" name=\"vn\" required>";
	echo" Nachname* ";
	echo"<input type=\"Text\" name=\"nn\" required> <br><br>";

	echo"<div class=\"data\">";
		echo"Straße ";
		echo"<input type=\"Text\" name=\"street\"><br>";
		echo"Postleitzahl ";
		echo"<input type=\"Text\" name=\"postalCode\"><br>";
		echo"Ort ";
		echo"<input type=\"Text\" name=\"place\"><br>";
		echo"Land ";
		echo"<input type=\"Text\" name=\"country\"><br><br>";
		echo"Telefonnummer ";
		echo"<input type=\"Text\" name=\"place\"><br>";
		echo"E-Mail ";
		echo"<input type=\"email\" name=\"country\"><br><br>";
		echo"Anfrage* ";
		echo"<textarea cols=\"30\" rows=\"5\" required></textarea>";
	echo"</div>";

	echo"<input type=\"submit\" name=\"btnSubmit\" value=\"Anfrage senden\">";
echo"</form>";
echo"</div>";
}
?>
</body>
</html>
