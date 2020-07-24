<?php
//Inclure le fichier AUTOLOAD
require_once '../config/autoload.php';


//Utilisè les namespace
use entities\ClassEntreprise;
use model\EntrepriseModel;

extract($_POST);
if(!empty($_POST)){
   
   $entreprise = new ClassEntreprise();

    $entreprise->setNomentreprise($_POST['nom_entreprise']);
    $entreprise->setAdresse($_POST['adresse']);
    $entreprise->setEmail($_POST['email']);
    $entreprise->setTelephone($_POST['telephone']);
    $entreprise->setNinea($_POST['ninea']);  
    $entreprise->setCompte($_POST['compte']);
    $entreprise->setNumero($_POST['numero']);
    //var_dump($entreprise);
    //die;
    //Appeler la class Entreprise model qui se trouve dans model/EntrepriseModel
    $log= EntrepriseModel::enregistrer($entreprise);
   /*  var_dump($log);
    die;
 */
  if($log){
    echo 'Entreprise Ajoutée';
  }
  else{
    echo 'Enregistrement annulé';

  }
  
}

require '../view/clientEntreprise/entreprise.php';


