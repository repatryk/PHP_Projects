
<?php
skrypt();

function skrypt(){
	if(isset($_POST["imie"]) && $_POST["imie"] != "" && isset($_POST["nazwisko"]) && $_POST["nazwisko"] != "" && isset($_POST["wiek"]) && $_POST["wiek"] != ""){

		$con = mysqli_connect("localhost", "root", "", "raport");
		if(!$con){
			echo "Nie udalo sie polaczyc z baza";
			return;
		}
		$imie = $_POST["imie"];
		$nazwisko = $_POST["nazwisko"];
		$wiek = $_POST["wiek"];

		$sql = "INSERT INTO pilkarze VALUES('$imie', '$nazwisko', $wiek)";
		$res = mysqli_query($con, $sql);

		if($res){
			echo "Dodano pilkarza";
		} else {
			echo "Nie udalo sie przyjac pilkarza do klubu";
		}

		mysqli_close($con);
	}
}

?>
