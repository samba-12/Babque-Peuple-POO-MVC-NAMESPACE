<?php
namespace entities;
//require_once '../config/autoload.php';
//use Dbaccess;
Class ClassEntreprise
{
    //  Les propriétes de la class
    private $nomentreprise;
    private $adresse;
    private $email;
    private $telephone;
    private $ninea;
    private $compte;
    private $numero;

  //Constructeur Methode a appeler des qu'on instancie l'objet
  //pour creer un objet j'ai besoin de nom adress email....
    public function __construct()
    {
    }

   
    public function getNomentreprise()
    {
        return $this->nomentreprise;
    }
    public function setNomentreprise($nomentreprise)
    {
        $this->nomentreprise = $nomentreprise;
    }

    //GET ET SET
    public function getAdresse(){
        return $this->adresse;
    }
    public function setAdresse($adresse){
        $this->adresse=$adresse;
    }


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
  
    
    public function getNinea()
    {
        return $this->ninea;
    }
    public function setNinea($ninea)
    {
        $this->ninea = $ninea;
    }

  
    //GET ET SET

    public function getCompte(){
        return $this->compte;
    }
    public function setCompte($compte){
        $this->compte=$compte;
    }
    


    
    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
}