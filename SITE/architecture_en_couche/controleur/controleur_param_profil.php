<?php
// session_start();
require_once('../presentation/fonctionParamProfil.php');
require_once('../service/UtilisateurSERVICE.php');
require_once('../metier/Utilisateurs.php'); 




/*REDIRECTION*/
    // if(!isset($_SESSION['pseudo'])){
    //     header("location: ../../libs/templates/accueil.php");
    // }


/*MODIFICATION*/
    if(isset($_POST["action"]) && $_POST["action"] == "modifier" && !empty($_POST)){
        

        if (isset($_SESSION["pseudo"]) ){

            // if($_POST['password'] == $_POST['confirmPassword'] || !isset($_POST['password']) ){
                
                $utilisateur= new Utilisateurs(
                    $id = htmlentities($_POST["id"]?$_POST["id"]:null),
                    $pseudo = htmlentities($_SESSION["pseudo"]),
                    $mail = htmlentities($_POST["mail"]),
                    $password = htmlentities($_POST["password"]),
                    $description = htmlentities($_POST["description"]?$_POST["description"]:null),
                    $photoprofil = htmlentities($_POST["photoprofil"]?$_POST["photoprofil"]:null),
                    $birthday = htmlentities($_POST["birthday"]?$_POST["birthday"]:null),
                    $nation = htmlentities($_POST["nation"]?$_POST["nation"]:null),
                    $contact = htmlentities($_POST["contact"]),
                    $notifmail = htmlentities($_POST["notifmail"]),
                    $code_langue = htmlentities($_POST["code_langue"]?$_POST["code_langue"]:null)
                );

                $modifUtilisateur = new UtilisateurService;
                $modifUtilisateur->modifierUtilisateur($utilisateur);
                // $modifUtilisateur->modifierUtilisateur($pseudo, $mail, $password, $description, $photoprofil, $birthday, $nation, $contact, $notifmail, $code_langue);
            // }
        }
    }


// /*AJOUT DES UTILISATEURS*/
//     $nbr = 0;
//     if(isset($_POST["action"]) && $_POST["action"] == "ajouter"){
        
//         if (isset($_POST["pseudo"]) && !Empty($_POST["pseudo"])
//             || isset($_POST["mail"]) && !Empty($_POST["mail"])
//             || isset($_POST["password"]) && !Empty($_POST["password"])
//             || isset($_POST["description"]) && !Empty($_POST["description"])
//             || isset($_POST["photoprofil"]) && !Empty($_POST["photoprofil"])
//             || isset($_POST["birthday"]) && !Empty($_POST["birthday"])
//             || isset($_POST["nation"]) && !Empty($_POST["nation"])
//             || isset($_POST["contact"]) && !Empty($_POST["contact"])
//             || isset($_POST["notifmail"]) && !Empty($_POST["notifmail"])
//             ){

//             if( !empty($chercherPseudo)){
//                 echo "Ce Pseudo est déjà utilisé !";
//             }

//                 else{
//                     $utilisateur = new Utilisateurs( 
//                         (int)htmlentities($_POST["mail"]), 
//                         htmlentities($_POST["password"]), 
//                         htmlentities($_POST["description"]?$_POST["description"]:null), 
//                         (int)htmlentities($_POST["photoprofil"]?$_POST["photoprofil"]:null), 
//                         htmlentities($_POST["birthday"]?$_POST["birthday"]:null), 
//                         htmlentities($_POST["nation"]?$_POST["nation"]:null),
//                         (int)htmlentities($_POST["contact"]), 
//                         (int)htmlentities($_POST["notifmail"]) );

//                     try{
//                         $newUtilisateur->ajoutUtilisateur($Utilisateur);
//                     }
//                     catch(ServiceException $se){
//                         presentationAfficherInsert($se->getCode());
//                     }
//                 }    
//         }
//     }


/*DELETE DES UTILISATEURS*/    
    if(isset($_POST["action"]) && $_POST["action"] == "effacer"){
            
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
    

//AFFICHAGE PAGE PARAMETRES PROFIL
    // if(isset($_SESSION['pseudo']) ){
    //     $utilisateur = $newUtilisateur->chercherUtilisateurParPseudo($_SESSION['pseudo']);
    //     $_SESSION['birthday']=$utilisateur->getBirthday();
    //     affichageParamProfil();
    // }



    affichageParamProfil();
    













?>