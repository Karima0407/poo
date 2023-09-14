<?php

// class CompteBancaire{
//     // déclarer les propriétés normales:
//     private $numero;
//     private $nom;
//     private $solde;
//     private $montantDepose;
//     private $montantRetire;

//     // declarer une propriété statique
//     public static $nombreDeCompte=0;
//     // le constructeur 
//     public function __construct($solde,$nom,$montantDepose,$montantRetire){
//         // pour manipuler une propriete statique dans la classe on utilise le mot clé self ::
//        self::$nombreDeCompte++; //self pour dire on fait reference a la variable nombre de compte;
//        $this->numero="FR 76 00".self::$nombreDeCompte;
//        $this->solde=$solde;
//        $this->nom=$nom;
//       $this->montantDepose = $montantDepose;
//       $this->montantRetire=$montantRetire;
//     }

//     // creer un geter qui permet de recuperer le numero de compte 
//     public function getNumero(){
//         return $this->numero;
//     }

//     public function getSolde(){
//         return $this->solde;
//     }


//     public function deposer(){
//          $this->solde += $this->solde + $this->montantDepose;
//     }
//     public function retirer(){
//         return $this->solde = $this->solde - $this->montantRetire;
//     }
//     // une methode transferer qui prend 2 parametres : le numero de compte destinataire et le montant

//     // une methode transferer qui prend 2 parametres : le numero de compte destinataire et le montant

//     public function transferer($compteDestinataire, $montant)
//     {

//         // Vérifier si le solde est suffisant pour effectuer le transfert

//         if ($this->solde >= $montant) {

//             // Retirer le montant du compte source

//             $this->solde -= $montant;



//             // Déposer le montant sur le compte destinataire

//             $compteDestinataire->deposer($montant);



//             // Retourner true pour indiquer que le transfert a réussi

//             return true;

//         } else {



//             // Retourner false si le solde est insuffisant pour le transfert

//             return false;

//         }



//     }
// }


// //  dans chaque compte bancaire est préfixé par cette chaine de caractere : "FR 76 00"
// // creer un compte 
// $compte1=new CompteBancaire(800,"Alin Mansita",50,20);
// echo $compte1->getNumero(). '<br>';
// echo $compte1->deposer(). '<br>';
// echo $compte1->retirer(). '<br>';


// $compte2= new CompteBancaire(10, "Karima",100,45);
// echo $compte2->getNumero();

// // de creer une methode deposer qui prend 1 parametre : montant a deposer pour ajouter la somme dans le compte concerne
// // une methode retirer qui prend 1 parametre: le montant a retirer elle permet de retirer le montant du compte concerne
// // une methode transferer qui prend 2 parametres le numero de compte destinataire, le montant elle permet de transferer un montant d'un compte a un autre

// // Transfert de 5 du compte1 au compte2

// if ($compte1->transferer($compte2, 5)) {

//     echo "Transfert réussi. Solde de compte1 : " . $compte1->getSolde() . "<br><br>";

//     echo "Solde de compte2 : " . $compte2->getSolde() . "<br>";

// } else {

//     echo "Transfert échoué. Solde insuffisant sur le compte1.";

// }


// 2eme methode

class CompteBancaire
{
    // declarer les proprietes normales
    private $numero;
    private $nom;
    private $solde;
    // declarer une propriete statique
    public static $nombreDeCompte = 0;
    public static $listCompte = [];
    // le constructeur
    public function __construct($solde, $nom)
    {
        // pour manipuler une propriete statique dans la classe on utilise le mot cle self suivi des "::"
        self::$nombreDeCompte++;
        $this->numero = "FR 76 00" . self::$nombreDeCompte;
        $this->solde = $solde;
        $this->nom = $nom;
        array_push(self::$listCompte, $this);
    }

    // creer un geter qui permet de recuperer le numero de compte
    public function getNumero()
    {
        return $this->numero;
    }
    // 
    public function deposer($montant)
    {
        $this->solde += $montant;
    }
    // 
    public function retirer($montant)
    {
        $this->solde -= $montant;
    }
    // 
    public function transferer($numero, $montant)
    {
        foreach (self::$listCompte as $compte) {
            if ($compte->numero == $numero) {
                $compte->solde += $montant;
                $this->solde -= $montant;
                return;
            }
        }
    }

    public function getSolde()
    {
        return $this->solde;
    }


}
// chaque compte bancaire est prefixe par cette chaine de caractere "FR 76 00"
// creer un compte 
$compte1 = new CompteBancaire(10, "Alin Mansita");
// echo $compte1->getNumero()."<br>";
$compte2 = new CompteBancaire(100, "Wassila Boukedroun");
// echo $compte2->getNumero();
// $compte1->getNumero(): c'est le numéro de l'objet compte1 (le compte d'alin)
$compte2->transferer($compte1->getNumero(), 50);
echo $compte1->getSolde();
$compte1->transferer($compte2->getNumero(), 20);