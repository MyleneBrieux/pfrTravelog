<?php
session_start();
include_once("../model-metier/Utilisateur.php"); 
include_once('../service/utilisateurService.php');
include_once('../presentation/fonctionsProfil.php');





/*REDIRECTION*/
    if(!isset($_SESSION['email'])){
        header("location: ../../libs/templates/accueil.php");
    }


/*MODIFICATION*/
    if(isset($_POST["action"]) && $_GET["action"] == "modifier"){

        if (isset($_POST["pseudo"]) && !empty($_POST["pseudo"])){
            $utilisateur= new Utilisateur(
                htmlentities($_POST["pseudo"]),
                htmlentities($_POST["email"]),
                htmlentities($_POST["password"]),
                htmlentities($_POST["birthday"]?$_POST["birthday"]:null),
                htmlentities($_POST["nation"]?$_POST["nation"]:null),
                htmlentities($_POST["description"]?$_POST["description"]:null),
                htmlentities($_POST["photoprofil"]?$_POST["birthday"]:null),
                htmlentities($_POST["contact"]),
                htmlentities($_POST["notifmail"]),
            );
            $newUtilisateur = new UtilisateurService;

            try{
                $modifUtilisateur->updateProfil($utilisateur);
            }
            catch(ServiceException $se){
                presentationAfficherModif($se->getCode());
            }
        }
    }


/*AJOUT DES EMPLOYES*/
    $nbr = 0;
    if(isset($_GET["action"]) && $_GET["action"] == "ajouter"){
        
        if (isset($_POST["pseudo"]) && !Empty($_POST["pseudo"])
            || isset($_POST["email"]) && !Empty($_POST["email"])
            || isset($_POST["password"]) && !Empty($_POST["password"])
            || isset($_POST["description"]) && !Empty($_POST["description"])
            || isset($_POST["photoprofil"]) && !Empty($_POST["photoprofil"])
            || isset($_POST["birthday"]) && !Empty($_POST["birthday"])
            || isset($_POST["nation"]) && !Empty($_POST["nation"])
            || isset($_POST["contact"]) && !Empty($_POST["contact"])
            || isset($_POST["notifmail"]) && !Empty($_POST["notifmail"])
            ){

            if( !empty($chercherPseudo)){
                echo "Ce Pseudo est déjà utilisé !";
            }

                else{
                    $utilisateur = new Utilisateur( 
                        (int)htmlentities($_POST["email"]), 
                        htmlentities($_POST["password"]), 
                        htmlentities($_POST["description"]?$_POST["description"]:null), 
                        (int)htmlentities($_POST["photoprofil"]?$_POST["photoprofil"]:null), 
                        htmlentities($_POST["birthday"]?$_POST["birthday"]:null), 
                        htmlentities($_POST["nation"]?$_POST["nation"]:null),
                        (int)htmlentities($_POST["contact"]), 
                        (int)htmlentities($_POST["notifmail"]) );
                    $newUtilisateur=new UtilisateurService;

                    try{
                        $newUtilisateur->ajoutUtilisateur($Utilisateur);
                    }
                    catch(ServiceException $se){
                        presentationAfficherInsert($se->getCode());
                    }
                }    
        }
    }


   
/*DELETE DES EMPLOYES*/    
    if(isset($_GET["action"]) && $_GET["action"] == "effacer"){
            
        if ( isset($_GET["pseudo"]) && !Empty($_GET["pseudo"]) ){
            $pseudo=htmlentities($_GET["pseudo"]); 
            $delUtilisateur=new UtilisateurService;

            try{
                $delEmploye->deleteEmployes($pseudo);
            }
            catch(ServiceException $se){
                presentationAfficherdelete($se->getCode());
            }
        }
    }
    














?>