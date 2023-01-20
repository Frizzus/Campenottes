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
// Connection à la BD TODO: mettre dans un fichier .env
$_ENV["host"] = "localhost";
$_ENV["dbname"] = "campenottes";
$_ENV["user"] = "Frizzus";
$_ENV["psw"] = "bX]s2yeisdAsif*r";

$PDO = new PDO("mysql:host=" . $_ENV["host"] . ";dbname=" . $_ENV["dbname"], $_ENV["user"], $_ENV["psw"]);
// vérification des dates
// preparation de la requête
// Envoi de la requête
// Afficher la page confirmant l'envoi
