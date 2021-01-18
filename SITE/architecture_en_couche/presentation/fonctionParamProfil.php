<?php

/*FONCTION AFFICHAGE DE LA PAGE*/
    
    function affichageEnteteParamProfil(){
        paramEnteteHtml();
        paramOuvertureBody();
        paramIncludeNavbar();
        paramOuvertureDivClassContFluidAndDFlex();
        paramOuvertureDivClassRow();
        paramOuvertureDivClassCols();
        paramOuvertureDivMenuLat();
        paramFormAction();
    }

    function affichageParamProfil($utilisateur, $age){
        paramInfoUserMenuLat($age);
        paramDivLangues($utilisateur);
        // paramDivSocial();
        paramBtnContact();
        paramFermetureDiv();
        paramFermetureDiv();
        paramOuvertureDivFormulaire();
        paramOuvertureDivClassRow();
        paramOuvertureDivClassRow();
        // paramFormAction();
        paramDivClassNom();
        paramDivClassTxtProfil();
        paramDivClassTxtSecurite($utilisateur);
        paramBtnValidation();
        paramDivSecurite();
        paramOuvertureDivFormulaireSecurite();
        paramDivMDP();
        paramDivEmail();
        paramBtnValidation();
        paramDivDescription();
        paramOuvertureDivFormulaireDescription();
        paramDivDescriptionTxt();
        paramFermetureDiv();
        paramBtnValidation();
        paramDivDivers();
        paramDivOptionLangues($utilisateur);
        paramBtnValidation();
        paramDivConfidential();
        paramDivCheckbox($utilisateur);
        paramBtnValidation();
        paramFermetureForm();
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
        echo '<div class= "alert alert-danger msg-erreur"> L\'email ou le mot de passe n\'est pas valide ! </div>';
    }

    function mdpInvalide(){
        echo '<div class= "alert alert-danger msg-erreur"> Les deux adresses mail ne sont pas identiques ! </div>';
    }

    function erreurModifProfil($errorCode=null){
        if($errorCode && $errorCode == !1045){
            echo "<div class= 'alert alert-danger'> Modification impossible, veuillez réessayer ultèrieurement ! </div>";
        }
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

                <script src="../../libs/script_js/scriptParamProfil.js"></script>

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
            ' <img src="../../img/photos/photo_profil_defaut.png" alt="Photo de Profil" class="photo-profil">
                <div class="">
                    <input type="file" class="form-control-file input-file" id="photoprofil" name="photoprofil">
                </div>';
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
            '<a href="mesVoyagesControleur.php?pseudo='.$_SESSION['pseudo'].'"><button type="submit" class="btn btn-info bouton-contact" name="btnVoyages">Mes voyages</button></a>';
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

/*FONCTION FORM ACTION*/    
    function paramFormAction(){
        echo   
            '<form action="../controleur/controleur_param_profil.php?action=modifier" method="post">';
    } 

/*FONCTION DIV DU NOM*/    
    function paramDivClassNom(){
        echo   
            '<div class="col-12 txt-nom">
                <div class="nom">John Doe</div>
            </div>';
    } 

/*FONCTION DIV DU TEXTE PROFIL*/    
    function paramDivClassTxtProfil(){
        echo   
            '<div class="col-12">
                <div class="txt-securite">Profil :</div>
            </div>';
    } 

/*FONCTION FORM ACTION*/    
    function paramDivClassTxtSecurite($utilisateur){
        echo   
            '<div class="col-12 formulaire-coordonnees securite txt-input">
                <div class="row">
                    <div class="col-6">
                        <label>Pseudo:</label><input type="text" class="form-control input-beige" placeholder="j.dupont59" name="pseudo" value="'.$utilisateur["pseudo"].'" disabled="disabled">
                    </div>

                    <div class="col-6">
                    <label>Date de naissance:</label><input type="date" class="form-control input-beige" name="birthday" value="'.$utilisateur["birthday"].'">
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-6">
                        <label>Nationnalité:</label><input type="text" class="input-beige form-control" placeholder="Français" name="nation" value="'.$utilisateur["nation"].'">
                    </div>
                </div>
            </div>';     
    } 

/*FONCTION BOUTON VAIDER*/  
    function paramBtnValidation(){
        echo 
            '<div class="col-12"><a href="../controleur/controleur_param_profil.php"><button type="submit" class="row btn btn-info bouton-modifier1" name="btnValider">VALIDER</button></a></div>';
    } 


/*FONCTION DIV SECURITE*/  
    function paramDivSecurite(){
        echo 
            '<div class="col-12 txt-securite">
                <div class="">Securité :</div>
            </div>';
    }

/*FONCTION DIV FORMULAIRE SECURITE*/  
    function paramOuvertureDivFormulaireSecurite(){
        echo '<div class="col-12 formulaire-coordonnees securite txt-input">';
    }

/*FONCTION DIV POUR LES MOTS DE PASSE*/  
    function paramDivMDP(){
        echo 
        '<div class="row">
            <div class="col-6">
                <label>Nouveau mot de passe:</label><input type="password" class="input-beige form-control" name="password" value="">
            </div>
            <div class="col-6">
                <label>Confirmation:</label><input type="password" class="input-beige form-control" name="confirmPassword" value="">
            </div>
        </div>';
    } 

/*FONCTION DIV POUR LES EMAILS*/  
    function paramDivEmail(){
        echo 
        '<div class="row">
            <div class="col-6">
                <label>Email:</label><input type="email" class="input-beige form-control" placeholder="john.doe@gmail.com" name="mail" value="">
            </div>
            <div class="col-6">
                <label>Confirmation:</label><input type="email" class="input-beige form-control" placeholder="john.doe@gmail.com" name="confirmMail" value="">
            </div>
        </div>
        </div>';
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
function paramDivDescriptionTxt(){
    echo 
    '<div class="row">
        <div class="col-12">
            <label>Description:</label><textarea class="form-control" rows="4" class="input-beige form-control " name="description" value=""></textarea>
        </div>
    </div>';
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
            '<div class="col-12 formulaire-coordonnees2 securite txt-input">
                <div class="row">
                    <div class="col-12">
                        <label>Langues parlées:</label>
                            <select id="langue" class="select" name="langue">
                                <option value="'.$utilisateur["code_langue"].'"selected>'.$utilisateur["type_langue"].'</option>
                                <option value="1"><-- Langues --></option>
                                <option value="1">Anglais</option>
                                <option value="2">Francais</option>
                                <option value="3">Chinois</option>
                                <option value="4">Arabe</option>
                                <option value="5">Espagnol</option>
                                <option value="6">Hindi</option>
                                <option value="7">Portugais</option>
                                <option value="8">Russe</option>
                                <option value="9">Japonais</option>
                                <option value="10">Coreen</option>
                                <option value="11">Allemand</option>
                                <option value="12">Turc</option>
                                <option value="13">Vietnamien</option>
                                <option value="14">Italien</option>
                                <option value="15">Polonais</option>
                                <option value="16">Neerlandais</option>
                                <option value="17">Grec</option>
                                <option value="18">Thai</option>
                                <option value="19">Bengali</option>
                                <option value="20">Pendjabi</option>
                                
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

/*FONCTION DES CHOIX VIA CHECKBOX*/  
    function paramDivCheckbox($utilisateur){
        echo 
            '<div class="col-12 formulaire-coordonnees securite txt-input">
                <div class="row">

                    <div class="col-12 mt-3">
                        <input type="checkbox" class="checkbox" name="contact" value="Y" ';
                        if(isset($utilisateur['contact']) && ($utilisateur['contact'])=="Y" ){
                           echo'checked="checked" ';
                        }
                        echo'><label>J\'accepte de recevoir des
                            demande d\'ami</label>
                    </div>

                    <div class="col-12">
                        <input type="checkbox" class="checkbox" name="notifmail" value="Y" ';
                        if(isset($utilisateur['notifmail']) && ($utilisateur['notifmail'])=="Y" ){
                           echo'checked="checked" ';
                        }
                        echo'><label>J\'accepte de recevoir des
                        notifications par mail</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <input type="checkbox" class="checkbox" name="supressionCompte" value="delete"><label>Supprimer mon compte</label>
                    </div>
                </div>
            </div>';
    } 

/*FONCTION FERMETURE FORM*/  
    function paramFermetureForm(){
        echo '</form>';
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


















