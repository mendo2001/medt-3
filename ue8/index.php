<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>A Web Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

	<h1>Grid Generator</h1>

	<form action="#">

	<label><input type="checkbox" name="wochentag[]" value="Sunday">Sunday</label><br>
	<label><input type="checkbox" name="wochentag[]" value="Monday">Monday</label><br>
	<label><input type="checkbox" name="wochentag[]" value="Tuesday">Tuesday</label><br>
	<label><input type="checkbox" name="wochentag[]" value="Wednesday">Wednesday</label><br>
	<label><input type="checkbox" name="wochentag[]" value="Thursday">Thursday</label><br>
	<label><input type="checkbox" name="wochentag[]" value="Friday">Friday</label><br>
	<label><input type="checkbox" name="wochentag[]" value="Saturday">Saturday</label><br><br>

	<label>Enter number of fields <input type="text" name="numberFields"></label>

	<br><input type="submit" name="submitBtn" value="Generate..."><br><br>

	</form>

	<?php
	if(!isset($_GET['submitBtn']))
	{
		exit;
	}
	$wochentag = $_GET['wochentag'];
	?>
	

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Day</th>
					<?php
					for ($a = 1; $a <= $_GET['numberFields']; $a++)
					{
						echo "<th>Event {$a}</th>";
					}
					?>
				</tr>
			</thead>
			<tbody>
				<?php
					for ($x = 0; $x < sizeof($wochentag); $x++){
						echo "<tr>";
							echo "<td>";
								echo "$wochentag[$x]";
							echo "</td>";
							for ($y=0; $y < $_GET['numberFields']; $y++) { 
								echo "<td>Event {$x}.{$y}</td>";
							}
						echo "</tr>";
					}
				?>
			</tbody>
		</table>

</body>
</html>
