
<!-- Redirection vers accueil.php en français (ou selon la langue du navigateur) -->

<?php
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    header("Location: struct/".$lang."/pages/accueil.php");
    exit;
?>