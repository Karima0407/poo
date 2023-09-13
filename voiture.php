<?php
class Voiture{
    public $marque;
    public $model;
    public $couleur;

    public function rouler(){
        echo  "Je roule<br>";
    }

    public function accelerer(){
        echo "J'accelere<br>";
    }

    public function freiner(){
        echo "Je freine<br>";
    }
}

// crer une voiture de marque peugeot, model: 308 et couleur: noire
$voiture1 = new Voiture();
$voiture1->marque = "peugeot";
$voiture1->model = 308;
$voiture1->couleur = "noire";
// on fait rouler la voiture
$voiture1->rouler();
// on fait accelerer la voiture
$voiture1->accelerer();
// on fait freiner la voiture
$voiture1->freiner();

// class Voiture avec constructeur
class VoitureAvecConstructeur{
    // attributs 
    public $marque;
    public $modele;
    public $couleur;
    // constructeur
    public function __construct($brand, $model, $color){
        $this->marque = $brand;
        $this->modele = $model;
        $this->couleur = $color;
    }

    public function rouler(){
        echo  "Je roule<br>";
    }

    public function accelerer(){
        echo "J'accelere<br>";
    }

    public function freiner(){
        echo "Je freine<br>";
    }
}
// creer une voiture 
$voiture2 = new VoitureAvecConstructeur("Citroen", "C4", "rouge");
$voiture2->rouler();