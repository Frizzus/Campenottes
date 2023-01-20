<?php
require_once "../../function.php";

// vérification que toutes les valeur obligatoire sont bien défini
if (!ExistsIn_POST(["nom", "email", "tel", "date_deb", "date_fin"])) {
    // Si les valeurs ne sont pas défini ça veut dire que l'utilisateur est passé par l'url pour accèder à la page => retour forcé
    header("Location: ../pages/reservation.php", true, 303);
    die;
}

// vérification et sanitize des données
Handle_SUPER();

// Connection à la BD
$PDO = new PDO(
    ""
);
// preparation de la requête
// Envoi de la requête
// Afficher la page confirmant l'envoi

