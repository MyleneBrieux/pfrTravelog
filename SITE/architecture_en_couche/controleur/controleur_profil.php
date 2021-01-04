<?php
session_start();
require_once('../presentation/fonctionsProfil.php');
require_once('../service/UtilisateurSERVICE.php');
require_once('../metier/Utilisateurs.php'); 


//AFFICHAGE PAGE PROFIL
    $pseudo=$_SESSION["pseudo"];
    $newUtilisateur=new UtilisateurService();
    $utilisateur=$newUtilisateur->chercherUtilisateurParPseudo($pseudo);
    affichageProfil($utilisateur);



/*REDIRECTION*/
    // if(!isset($_SESSION['pseudo'])){
    //     header("location: ../../libs/templates/accueil.php");
    // }

  
    // echo($id);
 

/*MODIFICATION*/
    

    // if(isset($_GET["action"]) && $_GET["action"] == "modifier" && !empty($_POST)){
        
    //     if (isset($_SESSION["pseudo"]) ){

    //         //RECUPERER LE PSEUDO
    //         $pseudo=$_SESSION["pseudo"];
    //         $utilisateur = new UtilisateurService();
    //         $utilisateur=$utilisateur->chercherUtilisateurParPseudo($pseudo);
            
    //         //MODIFIER L'UTILISATEUR
    //         $newUtilisateur= new Utilisateurs(
    //             $id=$utilisateur['id'],
    //             $pseudo = htmlentities($_SESSION["pseudo"]),
    //             $mail = htmlentities($_POST["mail"]),
    //             $password = htmlentities($_POST["password"]),
    //             $description = $utilisateur['description'],
    //             $photoprofil = $utilisateur['photoprofil'],
    //             $birthday = htmlentities($_POST["birthday"]?$_POST["birthday"]:null),
    //             $nation = htmlentities($_POST["nation"]?$_POST["nation"]:null),
    //             $contact = $utilisateur['contact'],
    //             $notifmail = htmlentities($_POST["notifmail"]),
    //             $code_langue = htmlentities($_POST["code_langue"]) );

    //         $modifUtilisateur->modifierUtilisateur($newUtilisateur);
    //     }
    // }



        if (isset($_GET["action"]) && $_GET["action"] == "modifier"){
            
            if (isset($_SESSION["pseudo"]) ){

                //RECUPERER LES INFOS
                $id = $utilisateur['id'];
                $pseudo=$_SESSION["pseudo"];
                $mail = htmlentities($_POST["mail"]);
                $password = htmlentities($_POST["password"]);
                $description = $utilisateur['description'];
                $photoprofil = $utilisateur['photoprofil'];
                $birthday = htmlentities($_POST["birthday"]?$_POST["birthday"]:null);
                $nation = htmlentities($_POST["nation"]?$_POST["nation"]:null);
                $contact = $utilisateur['contact'];
                $notifmail = $utilisateur["notifmail"];
                $code_langue = htmlentities($_POST["code_langue"]);

                $utilisateur=$newUtilisateur->modifierUtilisateur($mail, $password, $description, $photoprofil, $birthday, $nation, $contact, $notifmail, $code_langue, $pseudo);
                
                //MODIFIER L'UTILISATEUR
                // $newUtilisateur= new Utilisateurs(
                //     $id=$utilisateur['id'],
                //     $pseudo = htmlentities($_SESSION["pseudo"]),
                //     $mail = htmlentities($_POST["mail"]),
                //     $password = htmlentities($_POST["password"]),
                //     $description = $utilisateur['description'],
                //     $photoprofil = $utilisateur['photoprofil'],
                //     $birthday = htmlentities($_POST["birthday"]?$_POST["birthday"]:null),
                //     $nation = htmlentities($_POST["nation"]?$_POST["nation"]:null),
                //     $contact = $utilisateur['contact'],
                //     $notifmail = htmlentities($_POST["notifmail"]),
                //     $code_langue = htmlentities($_POST["code_langue"]) );

                // $modifUtilisateur->modifierUtilisateur($newUtilisateur);
            }
        }




















   
/*DELETE DES UTILISATEURS*/    
    if(isset($_POST["action"]) && $_POST["action"] == "effacer"){
                
        if ( isset($_GET["pseudo"]) && !Empty($_GET["pseudo"]) ){
            $pseudo=htmlentities($_GET["pseudo"]); 
            $delUtilisateur=new UtilisateurService();

            try{
                $delEmploye->deleteEmployes($pseudo);
            }
            catch(ServiceException $se){
                presentationAfficherdelete($se->getCode());
            }
        }
    }
    

//AFFICHAGE PAGE PROFIL
    // if(isset($_SESSION['pseudo']) ){
    //     $utilisateur = $newUtilisateur->chercherUtilisateurParPseudo($_SESSION['pseudo']);
    //     $_SESSION['birthday']=$utilisateur->getBirthday();
    //     affichageProfil();
    // }


?>
