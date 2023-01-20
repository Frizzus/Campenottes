
<!-- Redirection vers accueil.php en français (ou selon la langue du navigateur) -->

<?php
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    if (in_array($lang, ["fr", "en", "it", "ne", "de"])) {
        header("Location: struct/".$lang."/pages/accueil.php");
        die;
    }
    else{
        header("Location: struct/en/pages/accueil.php");
        die;
    }
    exit;
?>