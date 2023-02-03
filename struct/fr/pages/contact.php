<?php // logique serveur?>

<?php // template header?>

<!-- contenu de chaque page -->

<?php // template footer?>

<!DOCTYPE html>
<html lang="fr">
<?php require "../templates/head.php" ?>

<body>
    <?php require "../templates/header.php" ?>
    <main>
        <?php require "../templates/nav_background.php" ?>

        <section class="Contact">
            <article>
                <div class="form-row">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" placeholder="Votre adresse email" maxlength="100" required>
                </div>
                <div class="form-row">
                    <label for="tel">Téléphone</label>
                    <input id="tel" type="tel" name="tel" placeholder="Votre numéro de téléphone" maxlength="100" required>
                </div>
                <p>N'hésitez pas à me contacter, je suis à votre disposition pour plus d'informations</p>
                <div class="form-row">
                    <label for="nom">Votre Nom</label>
                    <input id="nom" type="text" name="nom" placeholder="Votre nom" maxlength="60" required>
                </div>
                <div class="form-row">
                    <label for="nom">Votre prénom</label>
                    <input id="nom" type="text" name="nom" placeholder="Votre prénom" maxlength="60" required>
                </div>
                <div class="form-row">
                    <textarea name="text" id="text" cols="30" rows="10">Votre Message</textarea>
                </div>
                <div class="form-row">
                    <button type="submit" value="envoyer">Envoyer</button>
                </div>
            </article>
        </section>
    </main>
    <?php require "../templates/footer.php" ?>
</body>
</html>