<?php

// PAGE CONTACT

/*FONCTION ENTETE HTML5*/
    function enteteHtml(){
        echo 
            '<!DOCTYPE html>
            <html lang="fr">
            
            <head>
                <meta charset="utf-8">
            
                <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
                <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" />
                <link rel="stylesheet" href="../css/contact.css">
            
                <title>
                    Contact
                </title>
            </head>
            
            <body>' ;
    }

/*FONCTION ENTETE HTML5*/
    function ouvertureDivContainer(){
        echo ' <div class="container-fluid">';
    }

    /*FONCTION INCLUDE NAVBAR*/    
    function includeNavbar(){
        echo ' include("navbar.php") ';
    }

/*FONCTION DIV CLASS ROW*/    
    function ouvertureDivClassRow(){
        echo '<div class="row">';
    }

/*FONCTION DIV CLASS SABLE*/    
    function ouvertureDivClassSable(){
        echo '<div class="encadreSable">';
    }

/*FONCTION DIV TITRE*/    
    function paragrapheTitre(){
        echo
        '<p class="texteContact"><strong>Un problème ? Une suggestion ? Contactez-nous !</strong></p>';
    }

/*FONCTION OUVERTURE FORM*/    
    function ouvertureForm(){
        echo
        '<form action="../traitementContact.php?action=envoyer" method="POST"
        class="formContact">';
    }

/*FONCTION DIV CLASS FORM*/    
    function divClassForm(){
        echo '<div class="formLigne1 form-row">';
    }

/*FONCTION DIV PSEUDO*/    
    function divPseudo(){
        echo
        ' <div class="form-group col-md-5">
            <input type="text" class="Pseudo form-control" id="pseudo" placeholder="Pseudo" name="pseudo">
        </div>';
    }

/*FONCTION DIV EMAIL*/    
    function divEmail(){
        echo
        '<div class="form-group col-md-5">
            <input type="email" class="Email form-control" id="email" placeholder="Adresse email" name="email">
        </div>';
    }

/*FONCTION OUVERTURE DIV*/    
function ouvertureDiv(){
    echo '<div>';
} 

/*FONCTION FERMETURE DIV*/    
    function fermetureDiv(){
        echo '</div>';
    } 

/*FONCTION INPUT*/    
    function input(){
        echo
        '<div class="formLigne2 form-group col-md-9">
            <input type="text" class="Message form-control" id="message" placeholder="Saisissez votre message ici..." name="message">
        </div>';
    }

/*FONCTION BOUTON ENVOYER*/    
    function boutonEnvoyer(){
        echo ' <button type="submit" class="boutonEnvoyer btn btn-sm" name="envoyer">Envoyer</button>';
    }

/*FONCTION FERMETURE FORM */    
    function fermetureForm(){
        echo '</form>';
    }

/*FONCTION INCLUDE FOOTER*/  
    function includeFooter(){
        echo 'include("footer.php")';
    } 

/*FONCTION FERMETURE BODY & HTML*/  
    function fermetureBodyHtml(){
        echo '
            </body>
        </html>';
    }