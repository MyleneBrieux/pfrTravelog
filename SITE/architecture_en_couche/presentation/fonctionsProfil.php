<?php

// PAGE PARAMETRES PROFIL PROFIL

/*FONCTION ENTETE HTML5*/
    function enteteHtml(){
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
    function ouvertureBody(){
        echo
            '<body>';
    }

/*FONCTION INCLUDE NAVBAR*/    
    function includeNavbar(){
            include("navbarCONTROLEUR.php") ;
    }

/*FONCTION DIV CONTAINER-FLUID AND D-FLEX*/    
    function ouvertureDivClassContFluidAndDFlex(){
        echo   
            '<div class="container-fluid d-flex">';
    }

/*FONCTION DIV CLASS ROW*/    
    function ouvertureDivClassRow(){
        echo   
            '<div class="row">';
    }

/*FONCTION DIV CLASS COLS*/    
    function ouvertureDivClassCols(){
        echo   
            '<div class="col-12 col-sm-8 col-md-7 col-lg-5 col-xl-3">';
    }

/*FONCTION DIV MENU LAT*/    
    function ouvertureDivMenuLat(){
        echo   
            '<div class=" menulat">';
    }

/*FONCTION PHOTO MENU LAT*/    
    function photoMenuLat(){
        echo   
            ' <img src="../../img/photos/nath.jpg" alt="Bootstrap" class="photo-profil">';
    }
    
/*FONCTION INFOS UTILISATEUR DU MENU LAT*/    
    function infoUserMenuLat(){
        echo   
            '<div class="membre txt-menu-responsive">Membre depuis le : </div>
            <div class="age">35 ans</div>
            <div class="langues-parlees">Langues parlées :</div>';
    }

/*FONCTION DIV DES LANGUES DU MENU LAT*/    
    function divLangues(){
        echo   
            '<div class="langues">
                <ul>
                    <li class="txt-menu-responsive">Français</li>
                </ul>
            </div>';
    }       
    
/*FONCTION DIV DES BOUTONS SUIVRE ET AJOUTER AMI*/    
    function divSocial(){
        echo   
            '<div class="logos-menu">
                <div><a href=""><img class="oeil" src="../../img/logos_divers/suivre2.png" alt="logo suivre"
                            class="photo-profil"><span class="liens-menu">Suivre</span></a></div>

                <div><a href=""><img class="oeil" src="../../img/logos_divers/ami_turquoise2.png" alt="logo ami"
                            class="photo-profil"><span class="liens-menu">Ajouter en ami</span></a></div>
            </div>';
    }

/*FONCTION BOUTON CONTACT*/    
    function btnContact(){
        echo   
            ' <button type="submit" class="btn btn-info bouton-contact" name="btnVoyages">Mes voyages</button>';
    }

/*FONCTION FERMETURE DIV*/    
    function fermetureDiv(){
        echo   
            '</div>';
    }   

/*FONCTION OUVERTURE DIV FORMULAIRE*/    
    function ouvertureDivFormulaire(){
        echo   
            '<div class="col-9 col-sm-4 col-md-5 col-lg-7 col-xl-9 formulaire1">';
    } 
   
/*FONCTION FORM ACTION*/    
    function formAction(){
        echo   
            '<form action="../controleur/controleur_param_profil.php?action=modifierProfil" method="POST">';
    } 

/*FONCTION DIV DU NOM*/    
    function divClassNom(){
        echo   
            '<div class="col-12 txt-nom">
                <div class="nom">John Doe</div>
            </div>';
    } 

/*FONCTION DIV DU TEXTE PROFIL*/    
    function divClassTxtProfil(){
        echo   
            '<div class="col-12">
                <div class="txt-securite">Profil :</div>
            </div>';
    } 

/*FONCTION FORM ACTION*/    
function divClassTxtSecurite(){
    echo   
        '<div class="col-12 formulaire-coordonnees securite  txt-input">
            <div class="row">
                <div class="col-6">
                    <label>Nom:</label><input type="text" class="form-control input-beige" placeholder="John" name="nom">
                </div>
                <div class="col-6">
                    <label>Prenom:</label><input type="text" class="form-control input-beige" placeholder="Doe" name="prenom">
                </div>
            </div>
    
            <div class="row">
                <div class="col-6">
                    <label>Date de naissance:</label><input type="date" class="input-beige form-control" name="birthday">
                </div>
                <div class="col-6">
                    <label>Nationnalité:</label><input type="text" class="input-beige form-control" placeholder="Français"  name="nationnalite">
                </div>
            </div>
        </div>';
} 

/*FONCTION BOUTON MOFIDIER*/  
    function divBtnModifier(){
        echo '<button type="submit" class="btn btn-info bouton-modifier1" name="modifier" id="btnModif1">Modifier</button>';
    }

/*FONCTION DIV SECURITE*/  
    function divSecurite(){
        echo 
            '<div class="col-12 txt-securite">
                <div class="">Securité :</div>
            </div>';
    }

/*FONCTION DIV FORMULAIRE SECURITE*/  
    function OuvertureDivFormulaireSecurite(){
        echo '<div class="col-12 formulaire-coordonnees securite txt-input">';
    }

/*FONCTION DIV POUR LES MOTS DE PASSE*/  
    function divMDP(){
        echo 
        '<div class="row">
            <div class="col-6">
                <label>Mots de passe:</label><input type="password" class="input-beige form-control" name="password">
            </div>
            <div class="col-6">
                <label>Confirmation:</label><input type="password" class="input-beige form-control"  name="confirmPassword">
            </div>
        </div>';
    } 

/*FONCTION DIV POUR LES EMAILS*/  
    function divEmail(){
        echo 
        '<div class="row">
            <div class="col-6">
                <label>Email:</label><input type="email" class="input-beige form-control" placeholder="john.doe@gmail.com" name="email">
            </div>
            <div class="col-6">
                <label>Confirmation:</label><input type="email" class="input-beige form-control" placeholder="john.doe@gmail.com" name="confirmEmail">
            </div>
        </div>';
    } 
   
/*FONCTION TEXTE DIVERS*/  
function divDivers(){
    echo 
        '<div class="col-12 txt-securite">
            <div class="">Divers :</div>
        </div>';
} 

/*FONCTION DES OPTIONS LANGUES*/  
function divOptionLangues(){
    echo 
        '<div class="col-12 formulaire-coordonnees2 securite  txt-input">
            <div class="row">
                <div class="col-12">
                    <label>Langues parlées:</label>

                    <select id="langues" class="select" name="langues">
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

/*FONCTION BOUTON VOYAGES*/  
function btnVoyages(){
    echo 
        '<button type="button" class="btn btn-info bouton-contact">Mes voyages</button>';
} 

/*FONCTION TEXTE CONFIDENTIALITE*/  
    function divConfidential(){
        echo 
            '<div class="col-12 txt-securite">
                <div class="">Confidentialité :</div>
            </div>';
    } 

/*FONCTION DES CHOIX VIA CHECKBOX*/  
function divCheckbox(){
    echo 
        '<div class="col-12 formulaire-coordonnees securite txt-input">
            <div class="row">

                <div class="col-12 mt-3">
                    <input type="checkbox" class="checkbox" name="notifAmi"><label>J\'accepte de reçevoir des
                    demande d\'ami</label>
                </div>

                <div class="col-12">
                    <input type="checkbox" class="checkbox" name="notifEmail"><label>J\'accepte de reçevoir des
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

/*FONCTION BOUTON VAIDER*/  
    function btnValidation(){
        echo 
            '<button type="submit" class="row btn btn-info bouton-modifier1" name="btnValider">VALIDER</button>';
    }  

/*FONCTION FERMETURE FORM*/  
    function fermetureForm(){
        echo '</form>';
    } 

/*FONCTION INCLUDE FOOTER*/  
    function includeFooter(){
        echo
        '<footer>'; 
        include("footerCONTROLEUR.php");
        echo'</footer>';
    } 

/*FONCTION FERMETURE BODY & HTML*/  
    function fermetureBodyHtml(){
        echo '
            </body>
        </html>';
    }





// PAGE PROFIL

/*FONCTION INPUT DES FONCTIONS UTILISATEURS*/  
function inputInfosUserProfil(){
    echo '
    <div class="col-12 col-sm-8 col-md-7 col-lg-5 col-xl-3">
                    <div class=" menulat">

                        <img src="../../img/photos/nath.jpg" alt="Bootstrap" class="photo-profil">

                        <div class="membre txt-menu-responsive">Membre depuis le : </div>
                        <div class="age">35 ans</div>
                        <div class="langues-parlees">Langues parlées :</div>

                        <div class="langues">
                            <ul>
                                <li class="txt-menu-responsive">Français</li>
                            </ul>
                        </div>

                        <div class="logos-menu">
                            <div><a href=""><img class="oeil" src="../../img/logos_divers/suivre2.png" alt="logo suivre"
                                        class="photo-profil"><span class="liens-menu">Suivre</span></a></div>

                            <div><a href=""><img class="oeil" src="../../img/logos_divers/ami_turquoise2.png" alt="logo ami"
                                        class="photo-profil"><span class="liens-menu">Ajouter en ami</span></a></div>
                        </div>

                        <button type="button" class="btn btn-info bouton-contact">Mes voyages</button>

                    </div>
                </div>';
}




/*FONCTION FORM ACTION*/    
function divClassTxtSecuriteProfil(){
    echo   
        '<div class="col-12 formulaire-coordonnees securite">
        <div class="row">
            <div class="col-6">
                <label>Nom:</label><input type="text" class="form-control">
            </div>
            <div class="col-6">
                <label>Prenom:</label><input type="text" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <label>Date de naissance:</label><input type="date" class="form-control">
            </div>
            <div class="col-6">
                <label>Nationnalité:</label><input type="text" class="form-control">
            </div>
        </div>
    </div>';
} 


    
/*FONCTION INPUT DES FONCTIONS UTILISATEURS*/  
function inputInfosUser(){
    echo '
    <div class="col-12 formulaire-coordonnees securite">
    <div class="row">
        <div class="col-6">
            <label>Nom:</label><input type="text" class="form-control">
        </div>
        <div class="col-6">
            <label>Prenom:</label><input type="text" class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <label>Date de naissance:</label><input type="date" class="form-control">
        </div>
        <div class="col-6">
            <label>Nationnalité:</label><input type="text" class="form-control">
        </div>
    </div>
</div>';
}


/*FONCTION OUVERTURE DIV FORMULAIRE COORDONNEES SECURITE*/  
    function ouvertureFormCoordonneeSecur(){
        echo
            '<div class="col-12 formulaire-coordonnees securite ">';
    }


/*FONCTION FERMETURE BODY & HTML*/  
    function inputPassword(){
        echo 
            '<div class="col-6">
                        <label>Mots de passe:</label><input type="password" class="form-control">
                    </div>
                    <div class="col-6">
                        <label>Confirmation:</label><input type="password" class="form-control">
                    </div>';
    }

/*FONCTION FERMETURE BODY & HTML*/  
    function inputEmail(){
        echo 
            '<div class="col-6">
                        <label>Email:</label><input type="email" class="form-control">
                    </div>
                    <div class="col-6">
                        <label>Confirmation:</label><input type="email" class="form-control">
                    </div>';
    }

/*FONCTION OUVERTURE DIV SECURITE*/  
    function divFormulaireSecurite(){
        echo 
            '<div class="col-12 formulaire-coordonnees2 securite">';
    }

/*FONCTION DES LANGUES DU PROFIL*/  
function OptionLanguesProfil(){
    echo 
        ' <div class="col-12">
        <label>Langues parlées:</label>
    
        <select id="langues" class="select">
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
    </div>';
} 
   
/*FONCTION OUVERTURE DIV FORMULAIRE COORDONNEES PROFIL*/  
    function ouvertureDivCoordSecur(){
        echo 
            '<div class="col-12 formulaire-coordonnees securite">';
    }


/*FONCTION OUVERTURE DIV FORMULAIRE COORDONNEES PROFIL*/  
    function checkbox2(){
    echo'
    <div class="row">
        <div class="col-12 mt-3">
            <input type="checkbox" class="checkbox"><label>J\'accepte de reçevoir des
                demande d\'ami</label>
        </div>

        <div class="col-12">
            <input type="checkbox" class="checkbox"><label>J\'accepte de reçevoir des
                notifications par mail</label>
        </div>
    </div>
    
    <div class="row">

         <div class="col-12">
            <input type="checkbox" class="checkbox" name="supressionCompte"><label>Supprimer mon compte</label>
        </div>

    </div>';
}



    function affichageParamProfil(){
        enteteHtml();
        ouvertureBody();
        includeNavbar();
        ouvertureDivClassContFluidAndDFlex();
        ouvertureDivClassRow();
        ouvertureDivClassCols();
        ouvertureDivMenuLat();
        photoMenuLat();
        infoUserMenuLat();
        divLangues();
        divSocial();
        btnContact();
        fermetureDiv();
        fermetureDiv();
        ouvertureDivFormulaire();
        ouvertureDivClassRow();
        ouvertureDivClassRow();
        formAction();
        divClassNom();
        divClassTxtProfil();
        divClassTxtSecurite();
        divBtnModifier();
        divSecurite();
        OuvertureDivFormulaireSecurite();
        divMDP();
        divEmail();
        fermetureDiv();
        divBtnModifier();
        divDivers();
        divOptionLangues();
        divBtnModifier();
        divConfidential();
        divCheckbox();
        btnValidation();
        fermetureForm();
        fermetureDiv();
        fermetureDiv();
        fermetureDiv();
        fermetureDiv();
        fermetureDiv();
        includeFooter();
        fermetureBodyHtml();
    }






    function affichageProfil(){
        enteteHtml();
        ouvertureBody();
        includeNavbar();
        ouvertureDivClassContFluidAndDFlex();
        ouvertureDivClassRow();
        ouvertureDivClassCols();
        ouvertureDivMenuLat();
        photoMenuLat();
        infoUserMenuLat();
        divLangues();
        divSocial();
        btnContact();
        fermetureDiv();
        fermetureDiv();
        ouvertureDivFormulaire();
        ouvertureDivClassRow();
        ouvertureDivClassRow();
        divClassNom();
        formAction();
        divClassTxtProfil();
        divClassTxtSecuriteProfil();
        divSecurite();
        inputInfosUser();
        divDivers();
        divOptionLangues();
        fermetureDiv();
        divConfidential();
        ouvertureFormCoordonneeSecur();
        checkbox2();
        fermetureDiv();
        fermetureForm();
        fermetureDiv();
        btnValidation();
        fermetureDiv();
        fermetureDiv();
        fermetureDiv();
        fermetureDiv();
        includeFooter();
        fermetureBodyHtml();
    }





?>