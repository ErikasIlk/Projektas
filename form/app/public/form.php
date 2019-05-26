<?php 
    require __DIR__ . '../../app/src/app.php';
?>
<!DOCTYPE html>
<html lang="lt">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Parašykite mums!</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet">
	<link href="../../css/style.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
	</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBc9WCPCWFRo0sKUAh3mXaT_3Xq9eKoFpE&callback=initMap">
	</script>
</head>
<body>
	<div class="container-fluid">
		<div class="topNav" id="topNavBar">
			<a href="../../index.php">Pagrindinis</a> <a href="../../aboutUs.php">Apie mus</a> <a href="form.php">Parašykite mums!</a> <a class="topNavIcon" href="javascript:void(0);" onclick="openMobileNavbar()"><i class="fas fa-brain"></i></a>
		</div>
		<form action="form.php" id="contact" method="post" name="contact">
			<fieldset class="fldset1">
				<legend>Jūsų informacija</legend>
				<table>
					<tr>
						<td><label for="name">Vardas:</label></td>
						<td><input autofocus="" name="name" required="" type="text"></td>
					</tr>
					<tr>
						<td><label for="lastName">Pavardė:</label></td>
						<td><input name="lastName" required="" type="text"></td>
					</tr>
					<tr>
						<td><label for="email">E. paštas:</label></td>
						<td><input name="email" required="" type="email"></td>
					</tr>
					<tr>
						<td><label for="age">Jūsų amžius:</label></td>
						<td><input name="age" required="" type="number"></td>
					</tr>
				</table>
			</fieldset>
			<fieldset class="fldset2">
				<legend>Padėkite mums tobulėti!</legend>
				<h6>Jūsų pasiūlymai, komentarai:</h6>
				<textarea name="offers" placeholder="Prašome rašyti VISKĄ, kas tik šauna į galvą!" required=""></textarea><br>
				<input id="submit" name="submit" type="submit" value="Siųsti">
			</fieldset>
			<fieldset class="fldset3">
				<legend>Aplankykite mus!</legend>
				<div id="locationMap"></div>
				<h6>tel. nr.: 867988888;</h6>
				<h6>el. paštas: lorem@lorem.lt</h6>
			</fieldset>
		</form>
		<div class="row">
			<footer>
				<p>&copy;ErikasIlk<?php echo date('Y')?></p>
			</footer>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
	</script> 
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
	</script> 
	<script src="../../script.html" type="text/javascript">
	</script>
</body>
</html>
