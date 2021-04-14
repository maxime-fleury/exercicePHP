<?php
//Créer la même classe PHP Livre que l'exercice précédent mais cette fois 
//mettez ses propriétés en privées et créer lui ses getters et setters.

//Code à faire ici
class Livre{
    private $nom;
    private $auteur;
    
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
    public function getNom(){
        return $this->nom;
    }
    public function getAuteur(){
        return $this->auteur;
    }
 }
 $livre = new Livre('Wikipedia Volume 1', 'Internet');
 $livre2 = new Livre('Wikipedia Volume 2', 'Internet');
 echo $livre . "<br>" . $livre2;
 echo "<br>" . $livre->getNom() . " " . $livre->getAuteur();
 echo "<br>" . $livre2->getNom() . " " . $livre2->getAuteur();