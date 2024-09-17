<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formulardaten erfassen
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $square_meters = htmlspecialchars($_POST['square_meters']);
    $object_type = htmlspecialchars($_POST['object_type']);
    $cleaning_frequency = htmlspecialchars($_POST['cleaning_frequency']);
    $price_expectation = htmlspecialchars($_POST['price_expectation']);
    $special_requirements = htmlspecialchars($_POST['special_requirements']);
    $message = htmlspecialchars($_POST['message']);

    // E-Mail-Adresse des Empfängers (deine eigene E-Mail-Adresse)
    $to = "info@myclean-service.de"; // Empfängeradresse ändern

    // Betreff der E-Mail
    $subject = "Neue Anfrage von der Webseite";

    // Kopfzeilen der E-Mail
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Nachrichtentext für die E-Mail
    $body = "Name: $name\n";
    $body .= "E-Mail: $email\n";
    $body .= "Telefon: $phone\n";
    $body .= "Quadratmeter: $square_meters\n";
    $body .= "Objektart: $object_type\n";
    $body .= "Häufigkeit der Reinigung: $cleaning_frequency\n";
    $body .= "Preisvorstellung: $price_expectation\n";
    $body .= "Besondere Anforderungen: $special_requirements\n";
    $body .= "Nachricht: $message";

    // E-Mail senden
    if (mail($to, $subject, $body, $headers)) {
        echo "Nachricht erfolgreich gesendet!";
    } else {
        echo "Fehler beim Senden der Nachricht. Bitte versuchen Sie es später erneut.";
    }
}
?>
