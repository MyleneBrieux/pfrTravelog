<?php

/*FONCTION AFFICHAGE DE LA PAGE*/

    function affichageEnteteProfil(){
        paramEnteteHtml();
        paramOuvertureBody();
        paramIncludeNavbar();
        paramOuvertureDivClassContFluidAndDFlex();
        paramOuvertureDivClassRow();
        paramOuvertureDivClassCols();
        paramOuvertureDivMenuLat();
    }

    function affichageProfil($utilisateur, $age){
        paramInfoUserMenuLat($age);
        paramDivLangues($utilisateur);
        // paramDivSocial();
        paramBtnContact();
        paramFermetureDiv();
        paramFermetureDiv();
        paramOuvertureDivFormulaire();
        paramOuvertureDivClassRow();
        paramOuvertureDivClassRow();
        paramFormAction();
        paramDivClassNom($utilisateur);
        paramDivClassTxtProfil();
        paramDivClassTxtSecuriteProfil($utilisateur);
        paramDivSecurite();
        profilDivClassTxtSecurite($utilisateur);
        paramDivDescription();
        paramOuvertureDivFormulaireDescription();
        paramDivDescriptionTxt($utilisateur);
        paramFermetureDiv();
        paramDivDivers();
        paramDivOptionLangues($utilisateur);
        paramFermetureDiv();
        paramDivConfidential();
        paramOuvertureFormCoordonneeSecur();
        paramCheckbox2($utilisateur);
        paramFermetureDiv();
        paramFermetureForm();
        paramDivBtnModifier();
        paramFermetureDiv();
        paramFermetureDiv();
        paramFermetureDiv();
        paramFermetureDiv();
        paramFermetureDiv();
        paramIncludeFooter();
        paramFermetureBodyHtml();
    }


/*AFFICHAGE DES MESSAGES D'ERREUR*/ 
    function mdpDifferents(){
        echo '<div class= "alert alert-danger msg-erreur"> Les 2 mots de passe doivent être identiques ! </div>';
    }

    function mdpInvalide(){
        echo '<div class= "alert alert-danger msg-erreur"> Le mot de passe ne correspond pas à ce compte utilisateur ! </div>';
    }

    function erreurModifProfil($errorCode=null){
        if($errorCode && $errorCode == !1045){
            echo "<div class= 'alert alert-danger'> Modification impossible, veuillez réesayer ultèrieurement ! </div>";
        }
    }

/*FONCTION DIV DESCRIPTION*/  
function paramDivDescription(){
    echo 
        '<div class="col-12 txt-securite">
            <div class="">A propos de vous :</div>
        </div>';
}

/*FONCTION DIV FORMULAIRE DESCRITION*/  
function paramOuvertureDivFormulaireDescription(){
    echo '<div class="col-12 formulaire-coordonnees securite txt-input">';
}

/*FONCTION DIV POUR LA DESCRITION*/  
function paramDivDescriptionTxt($utilisateur){
    echo 
    '<div class="row">
        <div class="col-12">
            <label>Description:</label><textarea class="form-control" rows="4" class="input-beige form-control" name="description" disabled="disabled">'.$utilisateur['description'].'</textarea>
        </div>
    </div>';
} 



/*FONCTION ENTETE HTML5*/
    function paramEnteteHtml(){
        echo 
            '<!DOCTYPE html>
            <html lang="fr">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.css">
                <link rel="stylesheet" href="../../libs/css/parametres_profil.css">

                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
                    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

                <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet"> 

                <title>TRAVELOG</title>
            </head>' ;
    }

/*FONCTION ENTETE HTML5*/
    function ParamOuvertureBody(){
        echo
            '<body>';
    }

/*FONCTION INCLUDE NAVBAR*/    
    function paramIncludeNavbar(){
            include ("navbarCONTROLEUR.php");
    }

/*FONCTION DIV CONTAINER-FLUID AND D-FLEX*/    
    function paramOuvertureDivClassContFluidAndDFlex(){
        echo   
            '<div class="container-fluid d-flex">';
    }

/*FONCTION DIV CLASS ROW*/    
    function paramOuvertureDivClassRow(){
        echo   
            '<div class="row">';
    }

/*FONCTION DIV CLASS COLS*/    
    function paramOuvertureDivClassCols(){
        echo   
            '<div class="col-12 col-sm-8 col-md-7 col-lg-5 col-xl-3">';
    }

/*FONCTION DIV MENU LAT*/    
    function paramOuvertureDivMenuLat(){
        echo   
            '<div class=" menulat">';
    }

/*FONCTION PHOTO MENU LAT PROFIL*/    
    function paramPhotoMenuLatProfil($utilisateur){
        echo   
            ' <img src="'.$utilisateur['photoprofil'].'" alt="Photo de Profil" class="photo-profil">';
    }

/*FONCTION PHOTO MENU LAT DEFAUT*/    
    function paramPhotoMenuLatDefaut(){
        echo   
            ' <img src="../../img/photos/photo_profil_defaut.png" alt="Photo de Profil" class="photo-profil">';
    }
    
/*FONCTION INFOS UTILISATEUR DU MENU LAT*/    
    function paramInfoUserMenuLat($age){
        echo   
            '<div class="age">'.$age.'</div>';
    }

/*FONCTION DIV DES LANGUES DU MENU LAT*/    
    function paramDivLangues($utilisateur){
        echo   
            '<div class="langues-parlees">Langue parlée :</div>
            <div class="langues">
                <ul>
                    <li class="txt-menu-responsive">'.$utilisateur["type_langue"].'</li>
                </ul>
            </div>';
    }       
    
/*FONCTION DIV DES BOUTONS SUIVRE ET AJOUTER AMI*/    
    function paramDivSocial(){
        echo   
            '<div class="logos-menu">
                <div><a href=""><img class="oeil" src="../../img/logos_divers/suivre2.png" alt="logo suivre"
                            class="photo-profil"><span class="liens-menu">Suivre</span></a></div>

                <div><a href=""><img class="oeil" src="../../img/logos_divers/ami_turquoise2.png" alt="logo ami"
                            class="photo-profil"><span class="liens-menu">Ajouter en ami</span></a></div>
            </div>';
    }

/*FONCTION BOUTON CONTACT*/    
    function paramBtnContact(){
        echo   
            ' <a href="mesVoyagesControleur.php?pseudo='.$_SESSION['pseudo'].'"><button type="submit" class="btn btn-info bouton-contact" name="btnVoyages">Mes voyages</button></a>';
    }

/*FONCTION FERMETURE DIV*/    
    function paramFermetureDiv(){
        echo   
            '</div>';
    }   

/*FONCTION OUVERTURE DIV FORMULAIRE*/    
    function paramOuvertureDivFormulaire(){
        echo   
            '<div class="col-9 col-sm-4 col-md-5 col-lg-7 col-xl-9 formulaire1">';
    } 

/*FONCTION DIV DU NOM*/    
    function paramDivClassNom($utilisateur){
        echo   
            '<div class="col-12 txt-nom">
                <div class="nom">'.$utilisateur['pseudo'].'</div>
            </div>';
    }    

/*FONCTION FORM ACTION*/    
    function paramFormAction(){
        echo   
            '<form>';
    } 

/*FONCTION DIV DU TEXTE PROFIL*/    
    function paramDivClassTxtProfil(){
        echo   
            '<div class="col-12">
                <div class="txt-securite">Profil :</div>
            </div>';
    } 

/*FONCTION FORM ACTION*/    
    function paramDivClassTxtSecuriteProfil($utilisateur){
        echo   
            '<div class="col-12 formulaire-coordonnees securite">
            <div class="row">
                <div class="col-6">
                    <label>Pseudo:</label><input type="text" class="form-control name="pseudo" value="'.$utilisateur["pseudo"].'" disabled="disabled">
                </div>

                <div class="col-6">
                    <label>Date de naissance:</label><input type="date" class="form-control" name="birthday" value="'.$utilisateur["birthday"].'" disabled="disabled">
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <label>Nationnalité:</label><input type="text" class="form-control" name="nation" value="'.$utilisateur["nation"].'" disabled="disabled">
                </div>
            </div>
        </div>';
    } 

/*FONCTION DIV SECURITE*/  
    function paramDivSecurite(){
        echo 
            '<div class="col-12 txt-securite">
                <div class="">Securité :</div>
            </div>';
    }

/*FONCTION FORM ACTION PROFIL*/ 
    function profilDivClassTxtSecurite($utilisateur){
        echo '
            <div class="col-12 formulaire-coordonnees securite ">
                <div class="row">
                    <div class="col-6">
                        <label>Mot de passe:</label><input type="password" class="form-control" name="password" disabled="disabled" value="*******">
                    </div>
                </div>

                 <div class="row">
                    <div class="col-6">
                        <label>Email:</label><input type="email" class="form-control" name="mail" disabled="disabled" value="'.$utilisateur["mail"].'">
                    </div>
                </div>
            </div>
            
            ';
        }

/*FONCTION TEXTE DIVERS*/  
    function paramDivDivers(){
        echo 
            '<div class="col-12 txt-securite">
                <div class="">Divers :</div>
            </div>';
    } 

/*FONCTION DES OPTIONS LANGUES*/  
    function paramDivOptionLangues($utilisateur){
        echo 
            '<div class="col-12 formulaire-coordonnees2 securite  txt-input">
                <div class="row">
                    <div class="col-12">
                        <label>Langues parlées:</label>
                            <select id="langue" class="select" name="langue" disabled="disabled">
                                <option value="1" selected>'.$utilisateur["type_langue"].'</option>
                                
                        </select>
                    </div>
                </div>
            </div>';
    }

/*FONCTION TEXTE CONFIDENTIALITE*/  
    function paramDivConfidential(){
        echo 
            '<div class="col-12 txt-securite">
                <div class="">Confidentialité :</div>
            </div>';
    } 

/*FONCTION OUVERTURE DIV FORMULAIRE COORDONNEES SECURITE*/  
    function paramOuvertureFormCoordonneeSecur(){
        echo
            '<div class="row">
                <div class="col-12 formulaire-coordonnees securite ">';
    }

/*FONCTION OUVERTURE DIV FORMULAIRE COORDONNEES PROFIL*/  
    function paramCheckbox2($utilisateur){
        echo'
                    <div class="col-12 mt-3 ">
                        <input type="checkbox" class="checkbox" name="contact" disabled="disabled" ';
                        if(isset($utilisateur['contact']) && ($utilisateur['contact'])=="Y" ){
                           echo'checked="checked" ';
                        }
                        echo'><label>J\'accepte de reçevoir des
                            demande d\'ami</label>
                    </div>

                    <div class="col-12">
                        <input type="checkbox" class="checkbox" name="notifmail" disabled="disabled" ';
                        if(isset($utilisateur['notifmail']) && ($utilisateur['notifmail'])=="Y" ){
                           echo'checked="checked" ';
                        }
                        echo'><label>J\'accepte de reçevoir des
                            notifications par mail</label>
                    </div>

                    <div class="col-12">
                        <input type="checkbox" class="checkbox" name="supressionCompte" disabled="disabled"><label>Supprimer mon compte</label>
                    </div>
            </div>
        </div>';
    }

/*FONCTION FERMETURE FORM*/  
    function paramFermetureForm(){
        echo '</form>';
    }

/*FONCTION BOUTON MOFIDIER*/  
    function paramDivBtnModifier(){
        echo '<a href="controleur_param_profil.php"><button type="submit" class="btn btn-info bouton-modifier1" name="modifier">Modifier</button></a>';
    }

/*FONCTION INCLUDE FOOTER*/  
    function paramIncludeFooter(){
        echo'<br>';
        include("footerCONTROLEUR.php");
    } 

/*FONCTION FERMETURE BODY & HTML*/  
    function paramFermetureBodyHtml(){
        echo '
            </body>
        </html>';
    }




?>