<!DOCTYPE html>
<html lang="fr">
    <?php require "../templates/head.php"?>
    <body>
        <?php require "../templates/header.php"?>
        <main>
            <?php require "../templates/nav_background.php"?>

            <h2>Tarifs locations: </h1>
            <section class="Appart">
                <article>
                    <h2>Appartement 82m²</h2>
                    <p>Tarifs de saison: </p>
                    <ul>
                        <li>1200€/ semaine</li>
                        <li>800€/ semaine (hors période de vacances scolaires)</li>
                    </ul>
                    <p>Tarifs hors saison: </p>
                    <ul>
                        <li>Week-end: 140€/ nuit</li>
                        <li>Juillet: 900€/ semaine</li>
                        <li>Juin/Septembre: 700€/ semaine</li>
                        <li>Août: PAS DE LOCATIONS</li>
                    </ul>          
                </article>
                <article>
                    <h2>Studio 30m²</h2>
                    <p>Tarifs de saison: </p>
                    <ul>
                        <li>500€/ semaine</li>
                        <li>400€/ semaine (hors saison)</li>
                    </ul>
                    <p>Tarifs d'été: </p>
                    <ul>
                        <li>400€/ semaine</li>
                        <li>350€/ semaine (hors saison)</li>
                    </ul>
                </article>
            </section>
            <section class="Dispo">
                <article>
                    <div class="form-row">
                        <label for="nom">Nom</label><br>
                        <input id="nom" type="text" name="nom" placeholder="Votre nom" maxlength="60" required>
                    </div>
                    <div class="form-row">
                        <label for="email">Email</label><br>
                        <input id="email" type="email" name="email" placeholder="Votre adresse email" maxlength="100" required>
                    </div>
                    <div class="form-row">
                        <label for="tel">Téléphone</label><br>
                        <input id="tel" type="tel" name="tel" placeholder="Votre numéro de téléphone" maxlength="100" required>
                    </div>  
                    <div class="form-row">
                        <input id="menage" type="checkbox" name="menage">
                        <label for="menage">Agent d'entretien (optionnel): 20€/h</label>                      
                    </div>  
                    <div class="form-row">
                        <input id="draps" type="checkbox" name="draps">
                        <label for="drpas">Services de draps journaliers (optionnel)</label>                                    
                    </div>                      
                </article>      
            </section>
            <section class="calendrier">
                <div class="form-row">
                    <label for="calendrier">
                        <input type="date" name="calendrier">
                    </label>
                    </div>
                    <button class="btn" type="submit">Réservez</button>
            </section>
        </main>
        <?php require "../templates/footer.php"?>
    </body>
</html>