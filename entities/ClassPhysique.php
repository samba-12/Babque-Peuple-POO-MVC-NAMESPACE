<?php
namespace entities;

class ClassPhysique
{
        //  Les propriétes de la class

    private $prenom;
    private $nom;
    private $adresse;
    private $email;
    private $telephone;
    private $compte;
    private $salaire;
    private $infos_employeur;
    private $identification;
    private $numero;

    //Constructeur Methode a appeler des qu'on instancie l'objet
  //pour creer un objet j'ai besoin de nom adress email....
    public function __construct()
    {
    }

    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom($prenom){
        $this->prenom=$prenom;
    }
    //GET ET SET

    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom=$nom;
    }

    //GET ET SET
    public function getAdresse(){
        return $this->adresse;
    }
    public function setAdresse($adresse){
        $this->adresse=$adresse;
    }
    //GET ET SET

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    //GET ET SET

    public function getTelephone(){
        return $this->telephone;
    }
    public function setTelephone($telephone){
        $this->telephone=$telephone;
    }
    //GET ET SET

    public function getCompte(){
        return $this->compte;
    }
    public function setCompte($compte){
        $this->compte=$compte;
    }
    //GET ET SET
    public function getSalaire(){
        return $this->salaire;
    }
    public function setSalaire($salaire){
        $this->salaire=$salaire;
    }
    //GET ET SET
    public function getInfosEmployeur(){
        return $this->infos_employeur;
    }
    public function setInfosEmployeur($infos_employeur){
        $this->infos_employeur=$infos_employeur;
    }
    //GET ET SET
    /**
     * Get the value of identification
     */ 
    public function getIdentification()
    {
        return $this->identification;
    }

    public function setIdentification($identification)
    {
        $this->identification = $identification;

        return $this;
    }
    
    //GET ET SET
    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($numero){
        $this->numero=$numero;
    }
    //GET ET SET
}