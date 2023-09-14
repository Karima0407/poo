<?php
class Cat
{
    // attributs
    private $nom;
    private $couleur;
    private $race;
    private $age;

    // constructeur de la classe
    public function __construct($nom, $couleur, $race, $age)
    {
        $this->nom = $nom;
        $this->couleur = $couleur;
        $this->race = $race;
        $this->age = $age;
    }

    // creer le geter et le seter de la propriete age
    // le geter son role c'est de recuperer la valeur de la propriete declare avec le mot cle private
    public function getAge()
    {
        return $this->age;
    }
    // le role du seter c'est de mettre a jour la propriete en question declare avec le mot cle private
    public function setAge($newAge)
    {
        $this->age = $newAge;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($newNom)
    {
        $this->nom = $newNom;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }
    public function setCouleur($newColor)
    {
        $this->couleur = $newColor;
    }
}

// creer un chat
$chat1 = new Cat("cynthia", "beige", "siamois", 3);
// $chat1->age = 4;
echo $chat1->getAge() . '<br>';
$chat1->setAge(4);
echo $chat1->getAge() . '<br>';

$chat2 = new Cat("karima", "blanche", "siamois", 6);
echo $chat2->getNom() . '<br>';
$chat2->setNom("Mitra");
echo $chat2->getNom() . '<br>';
echo $chat2->getCouleur() . '<br>';
$chat2->setCouleur("Violette");
echo $chat2->getCouleur() . '<br>';