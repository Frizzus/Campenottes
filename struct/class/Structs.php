<?php

class Semaine{
    public bool $estWeekend;
    public string $dateDebut;
    public string $dateFin;
    public Saison $saison;

    public function __construct(bool $estWeekend, string $debut, string $fin, Saison $saison) {
        $this->estWeekend = $estWeekend;
        $this->dateDebut = $debut;
        $this->dateFin = $fin;
        $this->saison = $saison;
    }
}

class Habitation{
    public int $nbPlaces;
    public string $nom;
    
    public function __construct(int $nbPlaces, string $nom) {
        $this->nbPlaces = $nbPlaces;
        $this->nom = $nom;
    }
}

class Formule{
    public Habitation $habitation;
    public bool $optionEntretien;
    public bool $optionDraps;

    public function __construct(Habitation $habitation, bool $optionEntretien, bool $optionDraps) {
        $this->habitation = $habitation;
        $this->optionEntretien = $optionEntretien;
        $this->optionDraps = $optionDraps;
    }
}

class Client{
    public string $nom;
    public string $email;
    public string $tel;

    public function __construct(string $nom, string $email, string $tel) {
        $this->nom = $nom;
        $this->email = $email;
        $this->tel = $tel;
    }
}

class Facture{
    public Reservation $reservation;

    public function __construct(Reservation $reservation ) {
        $this->reservation = $reservation;
    }
}

