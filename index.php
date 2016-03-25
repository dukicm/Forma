<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forma</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	
<div id="wrapp">
	<h1>Forma</h1>
	<form action="register.php" method="post" id="mojaForma">
		<label for="i">Ime
			<input type="text" name="ime" placeholder="Ime" id="i">
		</label><br>
		<label for="pre">Prezime
			<input type="text" name="prezime" placeholder="Prezime" id="pre">
		</label><br>
		<label for="mejl">Email
			<input type="text" name="email" placeholder="Email" id="mejl">
		</label><br><br>

<!--prva tri polja za biranje-->
		<label for="bmw">Izaberite marku automobila:
			<br>
			<input type="radio" name="auti" id="bmw" value="bmw">BMW<br>
		</label>
		<label for="fiat1">
			<input type="radio" name="auti" id="fiat1" value="fiat">FIAT<br>
		</label>
		<label for="golf">
			<input type="radio" name="auti" id="golf" value="golf">GOLF<br>
		</label>
<!--prva tri polja za biranje-->

<!--ovi ce se pojaviti kad kliknem gore-->		
		<div id="bm">
		Izaberite model automobila:
			<br>
			<label for="x6">
				<input type="checkbox" name="modelibmw" id="x6" value="bmwx6">
			BMW X6</label><br>
			<label for="x5">
				<input type="checkbox" name="modelibmw" id="x5" value="bmwx5">
			BMW X5</label><br>
			<label for="x3">
				<input type="checkbox" name="modelibmw" id="x3" value="bmwx3">
			BMW X3</label><br>
			
		</div>

		<div class="clearfix"></div>

		<div id="fiat">
		Izaberite model automobila:
		<br>
			<label for="fiatStilo">
				<input type="checkbox" name="modelifiat" id="fiatStilo" value="fiat_stilo_1.9jtd">
			FIAT STILO 1.9jtd</label><br>
			<label for="fiatPuntojtd">
				<input type="checkbox" name="modelifiat" id="fiatPuntojtd" value="fiat_punto_1.9jtd">
			FIAT PUNTO 1.9jtd</label><br>
			<label for="fiatPuntoBen">
				<input type="checkbox" name="modelifiat" id="fiatPuntoBen" value="fiat_punto_1.2">
			FFIAT PUNTO 1.2</label><br>
			
		</div>
		
		
		<div id="go">
		Izaberite model automobila:
			<br>
			<label for="golf4">
				<input type="checkbox" name="modeligolf" id="golf4" value="golf4">
			GOLF 4</label><br>
			<label for="golf5">
				<input type="checkbox" name="modeligolf" id="golf5" value="golf5">
			GOLF 5</label><br>
			<label for="golf6">
				<input type="checkbox" name="modeligolf" id="golf6" value="golf6">
			GOLF 6</label><br>
		</div>
		
<!--ovi ce se pojaviti kad kliknem gore-->
		<br>
		<div class="clearfix"></div>
		
		<select required name="motori">
			<option value="">None</option>
			<option value="suzuki">Suzuki</option>
			<option value="kavasaki">Kavasaki</option>
			<option value="honda">Honda</option>
			<option value="harli">Harli</option>
		</select>
		<div class="clearfix"></div>
		<br>
		<input type="submit" value="Submit">
	</form>

	<select required name="bajsevi" id="mojaForma">
		<option value="">None</option>
		<option value="capirolo">Capriolo</option>
		<option value="scott">Scott</option>
		<option value="ktm">KTM</option>
		<option value="bmx">BMX</option>
	</select>
</div>
	<script src="js/main.js"></script>
</body>
</html>