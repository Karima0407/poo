<?php
/**
 * creer une classe abstraite FormeGeometrique
 * avec les attribut suivants:
 * 1) Surface
 * 2) perimetre
 * 
 * creer la classe Rectangle fille de FormeGeometrique avec les attributs suivant:
 * 1) longueur
 * 2) largeur
 * et les methodes calculerSurface et calculerPerimetre
 * 
 * creer la classe Cercle fille de FormeGeometrique avec les proprietes suivantes:
 * 1) rayon
 * et les methodes calculerSurface et calculerPerimetre
 */
abstract class  FormeGeometrique{
    protected $surface;
    protected $perimetre;
}
class Rectangle extends FormeGeometrique{
    private $longueur;
    private $largeur;
    public function __construct($longueur, $largeur)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }
    public function calculerSurface(){
     return $this->surface= ($this->longueur)*($this->largeur);
    }
    
    public function calculerPerimetre()
    {
      return $this->perimetre=(($this->longueur)+($this->largeur))*2;
    }
   
}
class Cercle extends FormeGeometrique{
    private $rayon;
    public function __construct($rayon)
    {
        $this->rayon = $rayon;
       
    }
    public function calculerSurface()
    {
       return $this->surface = (($this->rayon) * ($this->rayon)) * M_PI;
    }
    public function calculerPerimetre()
    {
      return  $this->perimetre = ($this->rayon) *2 * M_PI;
    }

}
$rectangle1 = new Rectangle(15, 20);
echo $rectangle1->calculerSurface()."<br>";
echo $rectangle1->calculerPerimetre();
