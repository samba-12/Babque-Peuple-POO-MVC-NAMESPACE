<?php
namespace model;
//include '../Dbaccess.php';
//include '../entities/ClassPhysique.php';

//NAMESPACE
use entities\Physique\ClassPhysique;
use PDO;

//Cette class permet d'acceder a la fonction enregistrer dans personneController
class PersonneModel{

    static function enregistrer($ClassPhysique)
    {
        try{
        $connexion = new Dbaccess();

        $bd = $connexion->getConnexion();
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $bd->prepare(
            "INSERT INTO `client_physique`(`id_client`, `prenom`, `nom`, `adresse`, `email`, `telephone`, `compte`, `salaire`, `infos_employeur`, `identification`, `numero`)
             VALUES (null,'".$ClassPhysique->getPrenom()."','".$ClassPhysique->getNom()."', '".$ClassPhysique->getAdresse()."','".$ClassPhysique->getEmail()."',
           '".$ClassPhysique->getTelephone()."', '".$ClassPhysique->getCompte()."','".$ClassPhysique->getSalaire()."','".$ClassPhysique->getInfosEmployeur()."','".$ClassPhysique->getIdentification()."', '".$ClassPhysique->getNumero()."' )");
           

        $resultat = $requete->execute();       
        return $resultat;
    }
    catch(PDOException $ex){
        echo 'Echec de la connexion: '.$ex->getMessage();
    }
}
}