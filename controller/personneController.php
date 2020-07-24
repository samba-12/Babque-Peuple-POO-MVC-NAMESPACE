<?php

//Inclure le fichier AUTOLOAD
require_once '../config/autoload.php';

//Utilisè les namespace
use entities\ClassPhysique;
use model\PersonneModel;

extract($_POST);
if (!empty($_POST)){
   // var_dump($_POST);
  // die();
    $personne = new ClassPhysique();
    $personne->setPrenom($_POST['prenom']);
    $personne->setNom($_POST['nom']);
    $personne->setAdresse($_POST['adresse']);
    $personne->setEmail($_POST['email']);
    $personne->setTelephone($_POST['telephone']);
    $personne->setCompte($_POST['compte']);  
    $personne->setSalaire($_POST['salaire']);
    $personne->setInfosEmployeur($_POST['infos_employeur']);
    $personne->setIdentification($_POST['identification']);
    $personne->setNumero($_POST['numero']);

    //Appeler la class PersonnelModel qui se trouve dans model/PersonnelModel
    $log= PersonneModel::enregistrer($personne);
   /*  var_dump($log);
    die; */


    if($log){
      echo 'Entreprise Ajoutée';
    }
    else{
      echo 'Enregistrement annulé';
  
    }
    //var_dump($resultatEnregistrement);    
   // var_dump($_POST['identification']);  
}
include '../view/ClientPhysique/personne.php';

