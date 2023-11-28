<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Meldung - Lehrmittel-Meldestelle<</title>

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

    <!-- ICON LIBARY für MAIL ICON -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<body>

<!-- INCLUDE HEADER -->
<?php include '_header.php' ?>

<main class="bg_blue">
    <div class="inside">
        <div class="container">
            <p class="label">Mit deiner Hilfe zu mehr Repräsentation & Diversität.
            <p>
            <h1>Lehrmittel-Meldung</h1>
            <p class="teaser">Neue Meldung erfassen</p>
            
            <!-- INCLUDE PHP (Formular in DB abspeichern) -->
            <?php include 'php_functions/form_reports.php' ?>

            <!-- FORMULAR -->
            <form method="post">
                <div class="kap kap1">
                    <div class="kap-label"><span class="circel"><h2>1</h2></span></div>
                    <div class="kap-form">
                        <p> Informationen betreffend des Lehrmittels, in welchem dir diskriminierende Sprache oder Abbildungen aufgefallen sind. </p>
                        <div class="widget-text">
                            <input type="text" name="name_lehrmittel" class="text" value="" required="" placeholder=".">
                            <label for="lehrmittel">Name des Lehrmittels</label>
                        </div>
                        <div class="widget-text">
                            <input type="text" name="verlag" class="text" value="" required="" placeholder=".">
                            <label for="verlag">Verlag des Lehrmittels</label>
                        </div>
                        <div class="widget-text">
                            <input type="text" name="fach" class="text" value="" required="" placeholder=".">
                            <label for="fach">Fach des Lehrmittels</label>
                        </div>
                        <div class="widget-text">
                            <input type="text" name="ISBN" class="text" value="" required="" placeholder=".">
                            <label for="ISBN">ISBN-Nummer des Lehrmittels</label>
                        </div>
                        <div class="widget-text">
                            <input type="number" name="seitenzahl" class="text" value="" required="" placeholder=".">
                            <label for="seitenzahl">Seitenzahl der Meldung</label>
                        </div>
                    </div>
                </div>
                <div class="kap kap2">
                    <div class="kap-label"><span class="circel"><h2>2</h2></span></div>
                    <div class="kap-form">
                        <p>Welche Arten von Diskriminierung(en) werden teils oder mit Sicherheit abgebildet und/oder genannt?</p>
                        <div class="widget-radio">
                            <fieldset class="radio_container">
                                <label class="title">Rassismus</label>
                                <div>
                                    <span><input type="radio" name="rassismus" id="rassismus_1" class="radio"
                                                 value="ja" data-gtm-form-interact-field-id="1"> <label
                                                for="rassismus_1">ja</label></span>
                                    <span><input type="radio" name="rassismus" id="rassismus_2" class="radio"
                                                 value="wahrscheinlich" data-gtm-form-interact-field-id="2"> <label
                                                for="rassismus_2">wahrscheinlich</label></span>
                                    <span><input type="radio" name="rassismus" id="rassismus_3" class="radio" value="nein"
                                                 data-gtm-form-interact-field-id="3"> <label
                                                for="rassismus_3">nein</label></span>
                                </div>
                            </fieldset>
                            <fieldset class="radio_container">
                                <label class="title">fehlende ethnische & kulturelle Vielfalt</label>
                                <div>
                                    <span><input type="radio" name="vielfalt" id="vielfalt_1" class="radio" value="ja"
                                                 data-gtm-form-interact-field-id="1"> <label
                                                for="vielfalt_1">ja</label></span>
                                    <span><input type="radio" name="vielfalt" id="vielfalt_2" class="radio"
                                                 value="wahrscheinlich" data-gtm-form-interact-field-id="2"> <label
                                                for="vielfalt_2">wahrscheinlich</label></span>
                                    <span><input type="radio" name="vielfalt" id="vielfalt_3" class="radio" value="nein"
                                                 data-gtm-form-interact-field-id="3"> <label for="vielfalt_3">nein</label></span>
                                </div>
                            </fieldset>
                            <fieldset class="radio_container">
                                <label class="title">Ableismus</label>
                                <div>
                                    <span><input type="radio" name="ableismus" id="ableismus_1" class="radio"
                                                 value="ja" data-gtm-form-interact-field-id="1"> <label
                                                for="ableismus_1">ja</label></span>
                                    <span><input type="radio" name="ableismus" id="ableismus_2" class="radio"
                                                 value="wahrscheinlich" data-gtm-form-interact-field-id="2"> <label
                                                for="ableismus_2">wahrscheinlich</label></span>
                                    <span><input type="radio" name="ableismus" id="ableismus_3" class="radio" value="nein"
                                                 data-gtm-form-interact-field-id="3"> <label
                                                for="ableismus_3">nein</label></span>
                                </div>
                            </fieldset>
                            <fieldset class="radio_container">
                                <label class="title">Able-bodied</label>
                                <div>
                                    <span><input type="radio" name="able-bodied" id="able-bodied_1" class="radio"
                                                 value="ja" data-gtm-form-interact-field-id="1"> <label
                                                for="able-bodied_1">ja</label></span>
                                    <span><input type="radio" name="able-bodied" id="able-bodied_2" class="radio"
                                                 value="wahrscheinlich" data-gtm-form-interact-field-id="2"> <label
                                                for="able-bodied_2">wahrscheinlich</label></span>
                                    <span><input type="radio" name="able-bodied" id="able-bodied_3" class="radio"
                                                 value="nein" data-gtm-form-interact-field-id="3"> <label
                                                for="able-bodied_3">nein</label></span>
                                </div>
                            </fieldset>
                            <fieldset class="radio_container">
                                <label class="title">Sexismus</label>
                                <div>
                                    <span><input type="radio" name="sexismus" id="sexismus_1" class="radio" value="ja"
                                                 data-gtm-form-interact-field-id="1"> <label
                                                for="sexismus_1">ja</label></span>
                                    <span><input type="radio" name="sexismus" id="sexismus_2" class="radio"
                                                 value="wahrscheinlich" data-gtm-form-interact-field-id="2"> <label
                                                for="sexismus_2">wahrscheinlich</label></span>
                                    <span><input type="radio" name="sexismus" id="sexismus_3" class="radio" value="nein"
                                                 data-gtm-form-interact-field-id="3"> <label for="sexismus_3">nein</label></span>
                                </div>
                            </fieldset>
                            <fieldset class="radio_container">
                                <label class="title">Queerfeindlichkeit</label>
                                <div>
                                    <span><input type="radio" name="queerfeindlichkeit" id="queerfeindlichkeit_1"
                                                 class="radio" value="ja" data-gtm-form-interact-field-id="1"> <label
                                                for="queerfeindlichkeit_1">ja</label></span>
                                    <span><input type="radio" name="queerfeindlichkeit" id="queerfeindlichkeit_2"
                                                 class="radio" value="wahrscheinlich"
                                                 data-gtm-form-interact-field-id="2"> <label for="queerfeindlichkeit_2">wahrscheinlich</label></span>
                                    <span><input type="radio" name="queerfeindlichkeit" id="queerfeindlichkeit_3"
                                                 class="radio" value="nein" data-gtm-form-interact-field-id="3"> <label
                                                for="queerfeindlichkeit_3">nein</label></span>
                                </div>
                            </fieldset>
                            <fieldset class="radio_container">
                                <label class="title">Bedienen von Stereotypen</label>
                                <div>
                                    <span><input type="radio" name="stereotypen" id="stereotypen_1" class="radio"
                                                 value="ja" data-gtm-form-interact-field-id="1"> <label
                                                for="stereotypen_1">ja</label></span>
                                    <span><input type="radio" name="stereotypen" id="stereotypen_2" class="radio"
                                                 value="wahrscheinlich" data-gtm-form-interact-field-id="2"> <label
                                                for="stereotypen_2">wahrscheinlich</label></span>
                                    <span><input type="radio" name="stereotypen" id="stereotypen_3" class="radio"
                                                 value="nein" data-gtm-form-interact-field-id="3"> <label
                                                for="stereotypen_3">nein</label></span>
                                </div>
                            </fieldset>
                            <fieldset class="radio_container">
                                <label class="title">Heteronormativität</label>
                                <div>
                                    <span><input type="radio" name="heteronormativitaet" id="heteronormativitaet_1"
                                                 class="radio" value="ja" data-gtm-form-interact-field-id="1"> <label
                                                for="heteronormativitaet_1">ja</label></span>
                                    <span><input type="radio" name="heteronormativitaet" id="heteronormativitaet_2"
                                                 class="radio" value="wahrscheinlich"
                                                 data-gtm-form-interact-field-id="2"> <label
                                                for="heteronormativitaet_2">wahrscheinlich</label></span>
                                    <span><input type="radio" name="heteronormativitaet" id="heteronormativitaet_3"
                                                 class="radio" value="nein" data-gtm-form-interact-field-id="3"> <label
                                                for="heteronormativitaet_3">nein</label></span>
                                </div>
                            </fieldset>
                            <fieldset class="radio_container">
                                <label class="title">binäre Geschlechterrollen</label>
                                <div>
                                    <span><input type="radio" name="binaere" id="binaere_1" class="radio" value="ja"
                                                 data-gtm-form-interact-field-id="1"> <label
                                                for="binaere_1">ja</label></span>
                                    <span><input type="radio" name="binaere" id="binaere_2" class="radio"
                                                 value="wahrscheinlich" data-gtm-form-interact-field-id="2"> <label
                                                for="binaere_2">wahrscheinlich</label></span>
                                    <span><input type="radio" name="binaere" id="binaere_3" class="radio" value="nein"
                                                 data-gtm-form-interact-field-id="3"> <label for="binaere_3">nein</label></span>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="kap kap3">
                    <div class="kap-label"><span class="circel"><h2>3</h2></span></div>
                    <div class="kap-form">
                        <p>Beschreibe uns in deinen eigenen Worten die Problematik der genannten Stelle im Lehrmittel und teile uns mit, wie diese d.M.n. optiminiert werden könnte.</p>
                        <div class="widget-textarea">
                            <textarea name="beschreibe" id="ctrl_6" class="textarea" rows="4" cols="50" required=""
                                      placeholder="."></textarea>
                            <label for="beschreibe">Beschreibe die Problematik:</label>
                        </div>
                        <div class="widget-textarea">
                            <textarea name="verbesserung" id="ctrl_6" class="textarea" rows="4" cols="50" required=""
                                      placeholder="."></textarea>
                            <label for="verbesserung">Was würdest du wie verbessern:</label>
                        </div>
                    </div>
                </div>
                <div class="kap kap3">
                    <div class="kap-label"><span class="circel"><h2>4</h2></span></div>
                    <div class="kap-form">
                        <button class="btn" type="submit">Senden</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

<!-- JAVASCRIPT -->
<script src="js/script.js"></script>

</body>
</html>