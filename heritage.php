<?php
// classe humain qui sera classe mere de Magicien et Patissier
class Humain{
    // attributs communs au classes filles
     protected $nom;
     protected $prenom;

     // le constructeur de la classe
     public function __construct($nom, $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
     // methode communes aux classes filles
     public function dormir(){
        echo "Je fais dodo";
     }

}
// class magicien qui etend la classe Humain du coup magicien va heriter des proprietes et methodes de Humain
class Magicien extends Humain{

    public $baguette;
    public function __construct($nom,$prenom,$baguette){
        // $this->nom = $nom;
        // $this->prenom = $prenom;

        parent ::__construct($nom,$prenom);
        $this->baguette=$baguette;
    }
    public function faireUnTouDeMagie(){
        echo "Bonjour c'est ".$this->prenom. "".$this->nom . "j'ai la" .$this->baguette. "Waouh voici un petit lapin";
    }
}

// class Patissier
class Patissier extends Humain{

    public $batteur="electrique";

    public function faireDeBonGateau(){
        echo "Bonjour c'est " . $this->prenom . "" . $this->nom . "j'ai un super batteur ". $this->batteur."Miam voici un delicieux gateau";
    }
}
// instancier un magicien
$magic=new Magicien("le magicien","Julien","baguette de sureau");
$magic->faireUnTouDeMagie();
echo "<br>";

// creer une patissiere
$patissiere= new Patissier ("Cherie" , "Nawal");
$patissiere->faireDeBonGateau();