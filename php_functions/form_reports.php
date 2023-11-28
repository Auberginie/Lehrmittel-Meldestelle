<!-- FORMULAR IN DB SCHREIBEN -->
<?php
	// Verbindung zur Datenbank herstellen (Beispiel)
	$servername = "localhost";
	$username = "mlorenz_lmstelle";
	$password = "rN84j55e#";
	$dbname = "mlorenz_lmstelle";
	
	// Verbindung herstellen
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Überprüfen, ob die Verbindung funktioniert
	if ($conn->connect_error) {
		die("Verbindung fehlgeschlagen: " . $conn->connect_error);
	}
	
	// Überprüfen, ob das Formular abgeschickt wurde
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
		// Formulardaten abrufen und vorbereiten
		$name_lehrmittel = $_POST['name_lehrmittel'];
		$verlag = $_POST['verlag'];
		$fach = $_POST['fach'];
		$ISBN = $_POST['ISBN'];
		$seitenzahl = $_POST['seitenzahl'];
		$rassismus = $_POST['rassismus'];
		$ableismus = $_POST['ableismus'];
		$sexismus = $_POST['sexismus'];
		$queerfeindlichkeit = $_POST['queerfeindlichkeit'];
		$stereotypen = $_POST['stereotypen'];
		$heteronormativitaet = $_POST['heteronormativitaet'];
		$able_bodied = $_POST['able-bodied'];
		$vielfalt = $_POST['vielfalt'];
		$binaere = $_POST['binaere'];
		$beschreibung = $_POST['beschreibung'];
		$verbesserung = $_POST['verbesserung'];
		
		// SQL-Befehl zum Einfügen der Daten in die Tabelle
		$sql = "INSERT INTO reports (name_lehrmittel, verlag, fach, ISBN, seitenzahl, rassismus, ableismus, sexismus, 
		queerfeindlichkeit, stereotypen, heteronormativitaet, able_bodied, vielfalt, binaere, beschreibung, verbesserung) 
		VALUES ('$name_lehrmittel', '$verlag', '$fach', '$ISBN', '$seitenzahl', '$rassismus', '$ableismus', '$sexismus', 
		'$queerfeindlichkeit', '$stereotypen', '$heteronormativitaet', '$able_bodied', '$vielfalt', '$binaere', 
		'$beschreibung', '$verbesserung')";
		
		// Überprüfen, ob das Einfügen erfolgreich war
		if ($conn->query($sql) === TRUE) {
	    header("Location: meldung_formular_danke.php");
	    exit();
		} else {
    	echo "Fehler: " . $sql . "<br>" . $conn->error;
		}
		
		// Datenbankverbindung schließen
		$conn->close();
		
	}
?>
