<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Oceny meczowe</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h1>Dziennik ocen meczowych</h1>
</div>
<div class="lewy">
	<div>
		<h3>Szukaj pilkarza</h3>
		<form action="index.php" method="post">
			Imie: <input type="text" name="imie"><br>
			<button type="submit">Szukaj</button>
		</form>
	</div>
	<hr>
	<div>
		<h3>Dodaj pilkarza</h3>
		<form action="dodajpilkarza.php" method="post">
			Imie: <input type="text" name="imie"><br>
			Nazwisko: <input type="text" name="nazwisko"><br>
			Wiek: <input type="number" name="wiek"><br>
			<button type="submit">Dodaj</button>
		</form>
	</div>
</div>
<div class="prawy">
	<h1>Lista piłkarzy</h1>
    <?php 
    skrypt()
    ?>
</div>

</body>
</html>

<?php 
function skrypt() {
    if(isset($_POST['imie']) && $_POST['imie'] !='') {
		$con = mysqli_connect('localhost','root','','raport');
		if(!$con) {
			echo "Nie udało się połączyć z bazą";
			return;
		}
		$imie = $_POST['imie'];
		$sql ="SELECT imie, nazwisko,wiek FROM pilkarze WHERE imie = '$imie'";
		$res = mysqli_query($con, $sql);
		while($row = mysqli_fetch_row($res)) {
			echo "$row[0] $row[1] $row[2]<br>";
			
		}
		mysqli_close($con);
	} else {
		echo "Wpisz imie pilkarza";
	}
}
?>