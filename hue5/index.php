<html>
  <head>
  	<meta charset="UTF-8">
	<title>Hausübung 5 | EXPLODE</title>
	<style>

	.button{
		padding: 10px;
	}
	</style>
  </head>
  <body>
		<form method="post" action="//localhost/medt/hue5/index.php">
			<label>Eingabe: <input type="text" name="eingabe" /></label>
			<div class="button">
				<input type="submit" name="resetBtn" value="RESET">
				<input type="submit" name="explodeBtn" value="EXPLODE">
			</div>
		</form>
		<p> Ihre Eingabe als Liste </p>
		<?php
			$text =  $_POST['eingabe'];

				if(isset($_POST['explodeBtn']))
					{ 
						$Array = explode(" ",$text);
						echo "<ul>";
						foreach($Array as $item)
						{
							echo "<li>$item</li>";
						}
						echo "</ul>";
					} 
	  	?>
  </body>
</html>
