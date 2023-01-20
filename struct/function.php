<?php

/**
 * S'occupe de se débarasser des balise html dans les tableau $_GET et $_POST
 *
 * @return void
 */
function Handle_SUPER(): void
{
    $_POST = SanitizedArray($_POST);
    $_GET = SanitizedArray($_GET);
}

/**
 * Débarasse les éléments string d'un array de toutes balise HTML quotes y compris
 *
 * @param string[] $tabToSanitize le tableau à sécuriser
 * @return array le tableau dénué de toutes balise HTML
 */
function SanitizedArray(array $tabToSanitize): array
{
    foreach ($tabToSanitize as $value) {
        if (is_string($value)) {
            $value = htmlentities($value, ENT_QUOTES);
        }
    }

    return $tabToSanitize;
}

/**
 * Vérifie la présence de certaines clefs dans le tableau $_POST
 *
 * @param string[] $keyList le tableau de string qui correspond au clefs que l'on veut retrouver
 * @return boolean vrai : toutes les clefs sont défnini, faux : une ou plusieurs des clefs ne sont pas défini
 */
function ExistsIn_POST(array $keyList): bool
{
    foreach ($keyList as $key) {
        if (!isset($_POST[$key])) {
            return false;
        }
    }
    return true;
}


/**
 * Vérifie la présence de certaines clefs dans le tableau $_GET
 *
 * @param string[] $keyList le tableau de string qui correspond au clefs que l'on veut retrouver
 * @return boolean vrai : toutes les clefs sont défnini, faux : une ou plusieurs des clefs ne sont pas défini
 */
function ExistsIn_GET(array $keyList): bool
{
    foreach ($keyList as $key) {
        if (!isset($_GET[$key])) {
            return false;
        }
    }
    return true;
}