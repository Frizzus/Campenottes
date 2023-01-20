<!DOCTYPE html>
<html lang="fr">
    <?php require "../templates/head.php"?>
    <body>
        <?php require "../templates/header.php"?>
        <main id="reservationMain">
            <?php require "../templates/nav_background.php"?>

            <section class="container topRound">
                <h2>Tarifs locations: </h2>
                <section class="appart">
                    <article>
                        <h3>Appartement 82m²</h3>
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
                        <h3>Studio 30m²</h3>
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
                    <form action="" method="post">
                        <article>
                            <section>
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
                            </section>
                            <hr>
                            <section>
                                <div class="form-row">
                                    <input id="menage" type="checkbox" name="menage">
                                    <label for="menage">Agent d'entretien (optionnel): 20€/h</label>                      
                                </div>  
                                <div class="form-row">
                                    <input id="draps" type="checkbox" name="draps">
                                    <label for="drpas">Services de draps journaliers (optionnel)</label>                                    
                                </div>
                            </section>                  
                        </article>
                    </form>      
                </section>
                <section class="calendrier">
                    <div class="form-row">
                        <label for="calendrier">
                            <input type="date" name="calendrier">
                        </label>
                        </div>
                        <button class="btn" type="submit">Réservez</button>
                </section>
            </section>
        </main>
        <?php require "../templates/footer.php"?>
    </body>
</html>