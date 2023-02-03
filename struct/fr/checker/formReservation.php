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
$statement = $PDO->prepare(<<<SQL

SELECT COUNT(id_client) 
FROM reservation 
WHERE ((date_debut < STR_TO_DATE(:dateDeb, 'YYYY-MM-DD') 
AND date_fin > STR_TO_DATE(:dateDeb, 'YYYY-MM-DD')) 
OR ( date_debut < STR_TO_DATE(:dateFin, 'YYYY-MM-DD') 
AND date_fin > STR_TO_DATE(:dateFin, 'YYYY-MM-DD'))) 
AND id_habitation = :idHabitation; 

SQL);
$statement->execute([
    "dateDeb" => $_POST["date_deb"],
    "dateFin" => $_POST["date_fin"],
    "idHabitation"  => $_POST["habitation"]
]);

$countCrossDate = $statement->fetch()["COUNT(id_client)"];

// vérif si le fetch contient un count sup à zéro si oui == d'autre date qui s'entremêle
if ($countCrossDate > 0) {
    header("Location: ../pages/reservation.php", true, 303);
    die;
}

// 700*x = 800
// x = 800/700
// Afficher la page confirmant l'envoi


// SELECT COUNT(id_client) 
// FROM reservation 
// WHERE ((date_debut < STR_TO_DATE('2023-01-05', 'YYYY-MM-DD') 
// AND date_fin > STR_TO_DATE('2023-01-05', 'YYYY-MM-DD')) 
// OR ( date_debut < STR_TO_DATE('2023-01-28', 'YYYY-MM-DD') 
// AND date_fin > STR_TO_DATE('2023-01-28', 'YYYY-MM-DD'))) 
// AND id_habitation = 1; 