<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verzamelen van formuliergegevens
    $naam = htmlspecialchars($_POST['naam']);
    $straat = htmlspecialchars($_POST['straat']);
    $postcode_woonplaats = htmlspecialchars($_POST['postcode_woonplaats']);
    $telefoonnummer = htmlspecialchars($_POST['telefoonnummer']);
    $email = htmlspecialchars($_POST['email']);
    $uitgerekende_datum = htmlspecialchars($_POST['uitgerekende_datum']);
    $gezinssamenstelling = htmlspecialchars($_POST['gezinssamenstelling']);
    $speciale_wensen = htmlspecialchars($_POST['speciale_wensen']);
    $aanvullende_informatie = htmlspecialchars($_POST['aanvullende_informatie']);

    // E-mailinstellingen
    $to = "thomasdiondehaas@hotmail.com"; // Zet hier je eigen e-mailadres in
    // info@kraamzorgmimi.com
    $subject = "Inschrijving Kraamzorg Mimi";

    // Bericht opmaken
    $message = "
    <html>
    <head>
        <title>Inschrijving Kraamzorg Mimi</title>
    </head>
    <body>
        <h2>Nieuwe inschrijving</h2>
        <p><strong>Naam:</strong> $naam</p>
        <p><strong>Straatnaam + Huisnummer:</strong> $straat</p>
        <p><strong>Postcode + Woonplaats:</strong> $postcode_woonplaats</p>
        <p><strong>Telefoonnummer:</strong> $telefoonnummer</p>
        <p><strong>E-mail:</strong> $email</p>
        <p><strong>Uitgerekende datum:</strong> $uitgerekende_datum</p>
        <p><strong>Gezinssamenstelling:</strong> $gezinssamenstelling</p>
        <p><strong>Speciale wensen:</strong><br> $speciale_wensen</p>
        <p><strong>Aanvullende informatie:</strong><br> $aanvullende_informatie</p>
    </body>
    </html>
    ";

    // E-mailheaders
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <$email>" . "\r\n"; // Verstuur vanaf het ingevulde e-mailadres

    // Verstuur de e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "Formulier succesvol verzonden!";
    } else {
        echo "Er is een fout opgetreden bij het verzenden van het formulier.";
    }
}
?>
