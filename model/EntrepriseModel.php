<?php
namespace model;
//PAS BESOIN D'INCLURE LES classses
//require_once '../entities/ClassEntreprise.php';

//Namespace
use entities\ClassEntreprise;
//use model\Dbaccess;
use PDO;
//Cette class permet d'acceder a la fonction enregistrer dans entrepriseController
class EntrepriseModel{
   static function enregistrer($ClassEntreprise)
    {
        
        try{
        $connexion = new Dbaccess();

        $bd = $connexion->getConnexion();
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $bd->prepare(
            "INSERT INTO `client_entreprise`(`id_entreprise`, `nom_entreprise`, `adresse`,`email`, `telephone`, `ninea`, `compte`,`numero`) 
           VALUES (null,'".$ClassEntreprise->getNomentreprise()."','".$ClassEntreprise->getAdresse()."', '".$ClassEntreprise->getEmail()."',
           '".$ClassEntreprise->getTelephone()."', '".$ClassEntreprise->getNinea()."','".$ClassEntreprise->getCompte()."','".$ClassEntreprise->getNumero()."')");
           
         $resultat = $requete->execute();   
        
        return $resultat;
        }
        catch(PDOException $ex){
            echo 'Echec de la connexion: '.$ex->getMessage();
        }
        
    }

}





