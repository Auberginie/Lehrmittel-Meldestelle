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
        $subject = "Lehrmittel-Meldestelle: Verifizierung deiner E-Mail-Adressse";
        $message = "Hier kannst du <a href='https://www.lehrmittelmeldestelle.ch/meldung_formular.php'>deine Meldung erfassen</a>.<br><br>
                    Dank deiner Unterstützung und Meldung können wir uns zusammen für mehr Diversität und Repräsentation in Lehrmitteln einsetzen.<br><br>
                    Herzlichen Dank für deinen Support!<br><br>
                    Deine Lehrmittel-Meldestelle<br><br>";
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