<?php
class Moule
{
    // attributs du gateau
    public $gout;
    public $texture;

    // les methodes du gateau
    public function nourrir()
    {
        echo "je suis un gateau au " . $this->gout . " " . $this->texture . " je vous regale <br>";
    }
}
// creer un gateau au chocolat fondant
$gateauAuChocolat = new Moule(); // instancier un objet
$gateauAuChocolat->gout = "chocolat";
$gateauAuChocolat->texture = "fondant";
$gateauAuChocolat->nourrir();

$gateauAuCitron = new Moule(); // instancier un objet
$gateauAuCitron->gout = "citron";
$gateauAuCitron->texture = "fondant";
$gateauAuCitron->nourrir();

// creez une classe Voiture avec les attributs suivants:
// couleur,marque,model
//et les methodes suivantes:
// rouler,accelerer,freiner

//creez une voiture de marque peugeot de model 308 et de couleur noir

// pour la methode rouler afficher le texte "je roule"
// pour la methode accelerer afficher le texte "J'accelere"
// pour la methode freiner afficher le texte "Je freine"

class Voiture
{
    public $couleur;
    public $marque;
    public $modele;

    public function rouler()
    {
        echo "je suis une voiture" . " " . $this->couleur . " de marque " . $this->marque . "et de modele" . " " . $this->modele . "et je roule <br>";
    }
    public function freiner()
    {
        echo "je suis une voiture" . " " . $this->couleur . " de marque " . $this->marque . "et de modele" . " " . $this->modele . "et je feine <br>";
    }
    public function accelerer()
    {
        echo "je suis une voiture" . "" . $this->couleur . " de marque " . $this->marque . "et de modele" . " " . $this->modele . "et j'accelere <br>";
    }
}
$voiturepeugeot = new Voiture();
$voiturepeugeot->couleur = "noir";
$voiturepeugeot->marque = "peugeot";
$voiturepeugeot->modele = "308";
$voiturepeugeot->rouler();
$voiturepeugeot->freiner();
$voiturepeugeot->accelerer();

// Correction:
// class Voiture{
//  public $marque;
//  public $model;
//  public $couleur;

//  public function rouler(){
//  echo "Je roule<br>";
//  }

//  public function accelerer(){
//  echo "J'accelere<br>";
//  }

//  public function freiner(){
//  echo "Je freine<br>";
//  }
// }

// // crer une voiture de marque peugeot, model: 308 et couleur: noire
// $Voiture1 = new Voiture();
// $Voiture1->marque = "peugeot";
// $Voiture1->model = 308;
// $Voiture1->couleur = "noire";
// // on fait rouler la voiture
// $Voiture1->rouler();
// // on fait accelerer la voiture
// $Voiture1->accelerer();
// // on fait freiner la voiture
// $Voiture1->freiner();

//class voiture avec constructeur
class VoitureAvecConstructeur
{
    //attributs
    public $marque;
    public $modele;
    public $couleur;
    //constructeur
    public function __construct($brand, $model, $color)
    {
        $this->marque = $brand;
        $this->modele = $model;
        $this->couleur = $color;
    }
    public function rouler()
    {
        echo "Je roule<br>";
    }

    public function accelerer()
    {
        echo "J'accelere<br>";
    }

    public function freiner()
    {
        echo "Je freine<br>";
    }
}
// creer une voiture 
$voiture2 = new VoitureAvecConstructeur("Citroen", "C4", "rouge");
$voiture2->rouler();
$voiture2->accelerer();
$voiture2->freiner();

// creer un formulaire avec les champs:
// nom, prenom, login, mot de passe
// la validation du formulaire redirige vers action.php