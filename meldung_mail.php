<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Meldung machen - Lehrmittel-Meldestelle</title>

    <!-- METADATEN -->
    <meta name="robots" content="index,follow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="/img/favicons/site.webmanifest">
    <link rel="mask-icon" href="/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- STYLE -->
    <link rel="stylesheet" href="font/_fonts.css">
    <link rel="stylesheet" href="css/app.css">

    <!-- ICON LIBRARY für MAIL ICON -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<body>

    <!-- INCLUDE HEADER -->
    <?php include '_header.php' ?>

    <main class="bg_blue">
        <div class="inside">
            <div class="container">
                <p class="label">Mit deiner Hilfe zu mehr Repräsentation & Diversität.<p>
                <h1>Lehrmittel-Meldung</h1>
                <p class="teaser">Neue Meldung erfassen</p>

                <!-- MAILVERSAND -->
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // E-Mail-Adresse aus dem Formular abrufen
                    $to = $_POST['email'];

                    // Betreff der E-Mail
                    $subject = "Lehrmittel-Meldestelle: Verifizierung deiner E-Mail-Adressse";

                    // Nachricht mit Link
                    $message = "Hier kannst du <a href='https://www.lehrmittelmeldestelle.ch/meldung_formular.php'>deine Meldung erfassen</a>.<br><br>
                    Dank deiner Unterstützung und Meldung können wir uns zusammen für mehr Diversität und Repräsentation in Lehrmitteln einsetzen.<br><br>
                    Herzlichen Dank für deinen Support!<br><br>
                    Deine Lehrmittel-Meldestelle<br><br>";

                    // E-Mail-Header setzen
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= "From: no-reply@lehrmittelmeldestelle.ch";

                    // E-Mail senden
                    if (mail($to, $subject, $message, $headers)) {
                        // Erfolgreich gesendet, leite weiter
                        header("Location: meldung_mail_danke.php");
                        exit();
                    } else {
                        echo '<p class="error">E-Mail konnte nicht gesendet werden. Bitte überprüfe deine E-Mail-Adresse.</p>';
                    }
                } ?>

                <!-- FORMULAR -->
                <form  method="post">
                    <div class="widget-text">
                        <input type="email" name="email" id="email" class="text" required placeholder=".">
                        <label for="email">E-Mail-Adresse</label>
                    </div>
                    <div class="widget-checkbox">
	                    <input type="checkbox" name="availability[]" id="infomail" class="checkbox" value="Infomail"> 
	                    <label for="infomail">Ich will über den aktuellen Stand der Meldungen per E-Mail informiert werden.</label>
						<span class="checkmark"></span>
                    </div>
                    <button class="btn" type="submit">Senden</button>
                </form>

            </div>
        </div>
    </main>

    <!-- JAVASCRIPT -->
    <script src="js/script.js"></script>

</body>
</html>