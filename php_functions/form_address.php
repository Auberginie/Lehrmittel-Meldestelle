<?php
// Verbindung zur Datenbank herstellen (bitte passende Daten eintragen)
$servername = "localhost";
$username = "mlorenz_lmstelle";
$password = "rN84j55e#";
$dbname = "mlorenz_lmstelle";

$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung erfolgreich war
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// Überprüfen, ob das Formular abgeschickt wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // E-Mail-Adresse aus dem Formular abrufen
    $email = $_POST['email'];

    // Checkbox-Status überprüfen
    $infomail = isset($_POST['availability']) && in_array('Infomail', $_POST['availability']) ? 1 : 0;

    // SQL-Befehl für das Einfügen der Daten
    $sql = "INSERT INTO address (email, infomail) VALUES ('$email', $infomail)";

    // Daten in die Datenbank einfügen
    if ($conn->query($sql) === TRUE) {
        // E-Mail-Versand (dein vorhandener Code)
        $to = $email;
        $subject = "Verifizierung deiner E-Mailadresse für die Lehrmittel-Meldestelle";
        $message = "Dank deiner Meldung...";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: no-reply@lehrmittelmeldestelle.ch";

        if (mail($to, $subject, $message, $headers)) {
            // Erfolgreich gesendet, leite weiter
            header("Location: meldung_mail_danke.php");
            exit();
        } else {
            echo '<p class="error">E-Mail konnte nicht gesendet werden. Bitte überprüfe deine E-Mail-Adresse.</p>';
        }
    } else {
        echo '<p class="error">Fehler beim Einfügen der Daten in die Datenbank: ' . $conn->error . '</p>';
    }
}

// Verbindung zur Datenbank schließen
$conn->close();
?>