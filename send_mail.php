<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = "info@myclean-service.de"; // Ersetze dies durch deine E-Mail-Adresse
    $subject = "Neue Kontaktanfrage von $name";
    $body = "Name: $name\nE-Mail: $email\nTelefon: $phone\n\nNachricht:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Vielen Dank! Ihre Nachricht wurde gesendet.";
    } else {
        echo "Es gab ein Problem beim Versenden Ihrer Nachricht. Bitte versuchen Sie es später noch einmal.";
    }
} else {
    echo "Ungültige Anfrage.";
}
?>
