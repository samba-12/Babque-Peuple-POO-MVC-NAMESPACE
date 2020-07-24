<?php
class Autoloader {
    static function register()
    {
        spl_autoload_register(array(__CLASS__, "autoload"));
    }
    static function autoload($class)
    {

        $Auto= str_replace("\\", "/", $class);
        $Load= str_replace("\\", "/", __DIR__.$Auto.".php");
        $Loadload=str_replace("config","",$Load);

        if(file_exists($Loadload)){
            include_once "$Loadload";
        }




        
       /*  //echo $class;
        echo str_replace("\\", "/", $class);
        //Autoload
        if(file_exists("model/".$class.".php"))
        {
            require_once "model/".$class.".php";   
        }
       else if(file_exists("controller/".$class.".php"))
        {
            require_once "controller/".$class.".php";   
        }
        
        //NAMESPACE
         if (file_exists (str_replace("\\", "/", $class.".php")))
          {
            require_once  'http://localhost:8888/compteclient/MVC-POO-NAMESPACE%20/'.str_replace("\\", "/", $class.".php");
        }  */
       
       
        /* else{
            die("Merci d'utiliser le mot cle USE.");
        } */
    }

}
Autoloader::register();
 


?>