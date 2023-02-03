<!DOCTYPE html>
<html lang="fr">
<?php require "../templates/head.php" ?>

<body>
    <?php require "../templates/header.php" ?>
    <main id="reservationMain">
        <?php require "../templates/nav_background.php" ?>

        <section class="container topRound">
            <h2>Tarifs locations: </h2>
            <section class="appart">
                <article>
                    <h3>Appartement 82m² (8 personnes)</h3>
                    <div>
                        <section>
                            <h4>Tarifs de <span data-desc="La saison d'hiver commence en décembre et se finit en mars" tabindex="-1">saison</span> : </h4>
                            <ul>
                                <li>1200€/ semaine</li>
                                <li>800€/ semaine (hors période de vacances scolaires)</li>
                            </ul>
                        </section>
                        <section>
                            <h4>Tarifs hors <span data-desc="La saison d'hiver commence en décembre et se finit en mars" tabindex="-1">saison</span> : </h4>
                            <ul>
                                <li>Week-end: 140€/ nuit</li>
                                <li>Juillet: 900€/ semaine</li>
                                <li>Juin/Septembre: 700€/ semaine</li>
                                <li>Août: PAS DE LOCATIONS</li>
                            </ul>
                        </section>
                    </div>
                </article>
                <article>
                    <h3>Studio 30m² (4 personnes)</h3>
                    <div>
                        <section>
                            <h4>Tarifs de <span data-desc="La saison d'hiver commence en décembre et se finit en mars" tabindex="-1">saison</span> : </h4>
                            <ul>
                                <li>500€/ semaine</li>
                                <li>400€/ semaine (hors saison)</li>
                            </ul>
                        </section>
                        <section>
                            <h4>Tarifs <span data-desc="la saison d'été commence en juin et se finit en septembre" tabindex="-1">d'été</span> : </h4>
                            <ul>
                                <li>400€/ semaine</li>
                                <li>350€/ semaine (hors saison)</li>
                            </ul>
                        </section>
                    </div>
                </article>
            </section>
            <section class="dispo">
                <form action="../checker/formReservation.php" method="post">
                    <section>
                        <label for="nom">Nom
                            <input id="nom" type="text" name="nom" placeholder="Votre nom" maxlength="60" required>
                        </label>
                        <label for="email">Email
                            <input id="email" type="email" name="email" placeholder="Votre adresse email" maxlength="100" required>
                        </label>
                        <label for="tel">Téléphone
                            <input id="tel" type="tel" name="tel" placeholder="Votre numéro de téléphone" maxlength="100" required>
                        </label>
                        <label for="habitation"> Habitation
                            <select name="habitation" id="habitation">
                                <option value="1">Appartement</option>
                                <option value="2">Studio</option>
                            </select>
                        </label>
                    </section>
                    <section>
                        <label for="menage">Agent d'entretien (optionnel): 20€/h
                            <input id="menage" type="checkbox" name="menage">
                        </label>
                        <label for="draps">Services de draps journaliers (optionnel)
                            <input id="draps" type="checkbox" name="draps">
                        </label>
                        <label for="date_deb"> Date d'arrivée : 
                            <input type="date" name="date_deb" id="date_deb" required>
                        </label>
                        <label for="date_fin">Date de départ : 
                            <input type="date" name="date_fin" id="date_fin" required>
                        </label>
                        <button type="submit">Réservez</button>
                    </section>
                </form>
            </section>
        </section>
    </main>
    <?php require "../templates/footer.php" ?>
</body>

</html>