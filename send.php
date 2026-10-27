<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Accès non autorisé.");
}

// Récupération des données
$prenom = trim($_POST["prenom"] ?? "");
$jour   = trim($_POST["jour"] ?? "");
$heure  = trim($_POST["heure"] ?? "");

// Vérification
if (empty($prenom) || empty($jour) || empty($heure)) {
    die("Veuillez remplir tous les champs.");
}

// Adresse qui recevra le message
$destinataire = "evankossi506@gmail.com";

// Sujet
$sujet = "Réponse";

// Contenu du mail
$message = "Réponse\n\n";
$message .= "Salut j'ai dit oui \n";
$message .= "Jour : " . $jour . "\n";
$message .= "Heure : " . $heure . "\n";

// En-têtes
$headers = "From: formulaire@monsite.com\r\n";
$headers .= "Reply-To: formulaire@monsite.com\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Envoi
if (mail($destinataire, $sujet, $message, $headers)) {

    echo "La Réponse a été envoyer avec succès !";

} else {

    echo "Une erreur est survenue lors de l'envoi.";
}

?>