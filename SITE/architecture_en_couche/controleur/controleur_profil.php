<?php
session_start();
require_once('../presentation/fonctionsProfil.php');
require_once('../service/UtilisateurSERVICE.php');
require_once('../metier/Utilisateurs.php'); 



//AFFICHAGE PAGE PROFIL
    $pseudo=$_SESSION["pseudo"];
    $newUtilisateur=new UtilisateurService();
    $utilisateur=$newUtilisateur->chercherUtilisateurParPseudo($pseudo);



/*MODIFICATION*/
    if(isset($_GET["action"]) && $_GET["action"] == "modifier"){ 
        $password=$_POST['password'];

            if(($_POST['password']) == ($_POST['confirmPassword'])){
        
                if (password_verify($password, $utilisateur["password"])){

                        $newPassword=$newUtilisateur->passwordHash($_POST["password"], PASSWORD_DEFAULT);
                        $user= new Utilisateurs(
                        htmlentities($utilisateur['id']),
                        htmlentities($utilisateur['pseudo']),
                        htmlentities($_POST["mail"]?$_POST["mail"]:$utilisateur['mail']),
                        htmlentities($newPassword?$newPassword:$utilisateur['password']),
                        htmlentities($_POST['description']?$_POST["description"]:$utilisateur['description']),
                        htmlentities($utilisateur['photoprofil']?$_POST["photoprofil"]:$utilisateur['photoprofil']),
                        htmlentities($_POST["birthday"]?$_POST["birthday"]:$utilisateur['birthday']),
                        htmlentities($_POST["nation"]?$_POST["nation"]:$utilisateur['nation']),
                        htmlentities($_POST['contact']?$_POST['contact']:$utilisateur['contact']),
                        htmlentities($_POST['notifmail']?$_POST['notifmail']:$utilisateur['contact']),
                        htmlentities($_POST['langue']?$_POST['langue']:$utilisateur['langue']) 
                        );
                        try{
                            $newUtilisateur->modifierUtilisateur($user);
                            header("Location: controleur_profil.php");   
                        }catch(ServiceException $se){
                            erreurModifProfil($se->getCode());
                        }   
                }
                else{
                    mdpInvalide();
                    // header("Location: controleur_param_profil.php");  
                }  
            }
            else{
                mdpDifferents();
            }
    }



//AFFICHAGE DE LA PHOTO DU MENU SELON UTILISATEUR
    affichageEnteteProfil();

    if (isset($utilisateur['photoprofil']) ){
        paramPhotoMenuLatDefaut();
    }
    else {
        paramPhotoMenuLatProfil($utilisateur);
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



/*CALCUL D'AGE UTILISATEUR*/  
    $age=$newUtilisateur->calculAge($pseudo);
    


//AFFICHAGE DE LA PAGE
    affichageProfil($utilisateur, $age);


    



?>
