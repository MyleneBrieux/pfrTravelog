<?php

/*FONCTION AFFICHAGE DE LA PAGE*/
    function affichageParamProfil($utilisateur){

        paramEnteteHtml();
        paramOuvertureBody();
        paramIncludeNavbar();
        paramOuvertureDivClassContFluidAndDFlex();
        paramOuvertureDivClassRow();
        paramOuvertureDivClassCols();
        paramOuvertureDivMenuLat();
        paramPhotoMenuLat();
        paramInfoUserMenuLat();
        paramDivLangues();
        paramDivSocial();
        paramBtnContact();
        paramFermetureDiv();
        paramFermetureDiv();
        paramOuvertureDivFormulaire();
        paramOuvertureDivClassRow();
        paramOuvertureDivClassRow();
        paramFormAction();
        paramDivClassNom();
        paramDivClassTxtProfil();
        paramDivClassTxtSecurite($utilisateur);
        paramBtnValidation();
        paramDivSecurite();
        paramOuvertureDivFormulaireSecurite();
        paramDivMDP();
        paramDivEmail();
        paramFermetureDiv();
        paramBtnValidation();
        paramDivDivers();
        paramDivOptionLangues();
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



/*FONCTION ENTETE HTML5*/
    function paramEnteteHtml(){
        echo 
            '<!DOCTYPE html>
            <html lang="fr">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.css">
                // <link rel="stylesheet" href="../icofont/icofont.css">
                <link rel="stylesheet" href="../../libs/css/parametres_profil.css">

                <script src="../jquery/jquery-3.5.1.js" defer></script>
                <script src="../popper/popper.js" defer></script>
                <script src="../bootstrap/js/bootstrap.js" defer></script>
                <script src="../js/index.js" defer></script>

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

/*FONCTION PHOTO MENU LAT*/    
    function paramPhotoMenuLat(){
        echo   
            ' <img src="../../img/photos/nath.jpg" alt="Bootstrap" class="photo-profil">';
    }

/*FONCTION INFOS UTILISATEUR DU MENU LAT*/    
    function paramInfoUserMenuLat(){
        echo   
            '<div class="membre txt-menu-responsive">Membre depuis le : </div>
            <div class="age">35 ans</div>
            <div class="langues-parlees">Langues parlées :</div>';
    }

/*FONCTION DIV DES LANGUES DU MENU LAT*/    
    function paramDivLangues(){
        echo   
            '<div class="langues">
                <ul>
                    <li class="txt-menu-responsive">Français</li>
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
            ' <button type="submit" class="btn btn-info bouton-contact" name="btnVoyages">Mes voyages</button>';
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
            '<form action="../controleur/controleur_profil.php?action=modifier" method="post">';
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
                        <label>Pseudo:</label><input type="text" class="form-control input-beige" placeholder="j.dupont59" name="pseudo" value=" '.$utilisateur["pseudo"].' " disabled="disabled">
                    </div>

                    <div class="col-6">
                        <label>Date de naissance:</label><input type="date" class="input-beige form-control" name="birthday" value=" '.$utilisateur["birthday"].' ">
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-6">
                        <label>Nationnalité:</label><input type="text" class="input-beige form-control" placeholder="Français" name="nation" value=" '.$utilisateur["nation"].' ">
                    </div>
                </div>
            </div>';     
    } 

/*FONCTION BOUTON VAIDER*/  
    function paramBtnValidation(){
        echo 
            '<a href="../controleur/controleur_param_profil.php"><button type="submit" class="row btn btn-info bouton-modifier1" name="btnValider">VALIDER</button></a>';
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
                <label>Mots de passe:</label><input type="password" class="input-beige form-control" name="password" value="">
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
    function paramDivOptionLangues(){
        echo 
            '<div class="col-12 formulaire-coordonnees2 securite txt-input">
                <div class="row">
                    <div class="col-12">
                        <label>Langues parlées:</label>

                        <select id="langues" class="select" name="code_langue" value="">
                            <option value="valeur1" selected>Français</option>
                            <option value="valeur2">Allemand</option>
                            <option value="valeur2">Anglais</option>
                            <option value="valeur3">Chinois</option>
                            <option value="valeur3">Coréen</option>
                            <option value="valeur3">Espagnol</option>
                            <option value="valeur2">Italien</option>
                            <option value="valeur3">Japonais</option>
                            <option value="valeur2">Russe</option>
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
                        <input type="checkbox" class="checkbox" name="notifAmi" checked=" '.$utilisateur["contact"].' "><label>J\'accepte de recevoir des
                        demande d\'ami</label>
                    </div>

                    <div class="col-12">
                        <input type="checkbox" class="checkbox" name="notifmail" checked=" '.$utilisateur["notifmail"].' "><label>J\'accepte de recevoir des
                        notifications par mail</label>
                    </div>

                </div>

                <div class="row">

                    <div class="col-12">
                        <input type="checkbox" class="checkbox" name="supressionCompte"><label>Supprimer mon compte</label>
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
        include("footerCONTROLEUR.php");
    } 

/*FONCTION FERMETURE BODY & HTML*/  
    function paramFermetureBodyHtml(){
        echo '
            </body>
        </html>';
    }


















