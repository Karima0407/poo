<?php
class Cat{
    //attributs
    private $nom;
    private $couleur;
    private $race;
    private $age;

    // constructeur de la classe

    public function __construct($nom,$couleur,$race,$age){
        $this->nom=$nom;
        $this->couleur=$couleur;
        $this->race=$race;
        $this->age=$age;
    }

    // creer le geter et le seter de la propriété age
    // le geter son role c'est de recuperer la valeur de le propriete declare avec le mot clé private

    public function getAge(){
       return $this->age;
    }

    public function setAge($newAge)
    {
         $this->age = $newAge;
    }



}
// creer un chat
$chat1=new Cat("cynthia","beige","siamois",3);
// $chat1->age=4;
echo $chat1->getAge(). '<br>';
$chat1->setAge(4);
echo $chat1->getAge();

