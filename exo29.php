<?php
//Créer une classe PHP Livre (ça n'a rien à voir avec une classe CSS). 
//Donnez lui 2 propriétés publiques : "nom" et "auteur" ; 
//un constructeur qui prend en paramètre un nom et un auteur puis définissez la méthode magique __toString()
// pour pouvoir facilement afficher un nouveau Livre créer. 

//IMPORTANT : cet exercice ainsi que le suivant aborde la notion d'objet et de classe ;
// ces notions ne nous serviront pas immédiatemment mais il est tout de même bien de voir à quoi cela ressemble

//Code à faire ici
class Livre{
   public $nom;
   public $auteur;
   
   public function __construct($nom, $auteur){
        $this->nom = $nom;
        $this->auteur = $auteur;
    }

    public function __toString(){
        return $this->nom. " de " .$this->auteur;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setAuteur($auteur){
        $this->auteur = $auteur;
    }
}
$livre = new Livre('Wikipedia Volume 1', 'Internet');
$livre2 = new Livre('Wikipedia Volume 2', 'Internet');
echo $livre->nom . " " . $livre->auteur;
echo "<br>" . $livre2->nom . " " . $livre2->auteur; 