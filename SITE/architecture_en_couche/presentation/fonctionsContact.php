<?php

// PAGE CONTACT

/*FONCTION ENTETE HTML5*/
    function contact_enteteHtml(){
        echo 
            '<!DOCTYPE html>
            <html lang="fr">
            
            <head>
                <meta charset="utf-8">
            
                <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
                <link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.css" />
                <link rel="stylesheet" href="../../libs/css/contact.css">
            
                <title>
                    Contact
                </title>
            </head>
            
            <body>' ;
    }

/*FONCTION ENTETE HTML5*/
    function contact_ouvertureDivContainer(){
        echo ' <div class="container-fluid">';
    }

    /*FONCTION INCLUDE NAVBAR*/    
    function contact_includeNavbar(){
        include("navbarCONTROLEUR.php");
    }

/*FONCTION DIV CLASS ROW*/    
    function contact_ouvertureDivClassRow(){
        echo '<div class="row">';
    }

/*FONCTION DIV CLASS SABLE*/    
    function contact_ouvertureDivClassSable(){
        echo '<div class="encadreSable">';
    }

/*FONCTION DIV TITRE*/    
    function contact_paragrapheTitre(){
        echo
        '<p class="texteContact"><strong>Un problème ? Une suggestion ? Contactez-nous !</strong></p>';
    }

/*FONCTION OUVERTURE FORM*/    
    function contact_ouvertureForm(){
        echo
        '<form action="../traitementContact.php?action=envoyer" method="POST"
        class="formContact">';
    }

/*FONCTION DIV CLASS FORM*/    
    function contact_divClassForm(){
        echo '<div class="formLigne1 form-row">';
    }

/*FONCTION DIV PSEUDO*/    
    function contact_divPseudo(){
        echo
        ' <div class="form-group col-md-5">
            <input type="text" class="Pseudo form-control" id="pseudo" placeholder="Pseudo" name="pseudo">
        </div>';
    }

/*FONCTION DIV EMAIL*/    
    function contact_divEmail(){
        echo
        '<div class="form-group col-md-5">
            <input type="email" class="Email form-control" id="email" placeholder="Adresse email" name="email">
        </div>';
    }

/*FONCTION OUVERTURE DIV*/    
function contact_ouvertureDiv(){
    echo '<div>';
} 

/*FONCTION FERMETURE DIV*/    
    function contact_fermetureDiv(){
        echo '</div>';
    } 

/*FONCTION INPUT*/    
    function contact_inputMessage(){
        echo
        '<div class="form-group col-md-10">
            <input type="text" class="Message form-control" id="message" placeholder="Saisissez votre message ici..." name="message">
        </div>';
    }

/*FONCTION BOUTON ENVOYER*/    
    function contact_boutonEnvoyer(){
        echo ' <button type="submit" class="boutonEnvoyer btn btn-sm" name="envoyer">Envoyer</button>';
    }

/*FONCTION FERMETURE FORM */    
    function contact_fermetureForm(){
        echo '</form>';
    }

/*FONCTION INCLUDE FOOTER*/  
    function contact_includeFooter(){
        include("footerCONTROLEUR.php");
    } 

/*FONCTION FERMETURE BODY & HTML*/  
    function contact_fermetureBodyHtml(){
        echo '
            </body>
        </html>';
    }

function contact_corpsPage(){
    contact_ouvertureDivContainer();   //div container
    contact_includeNavbar();
    contact_ouvertureDivClassRow();
    contact_ouvertureDivClassSable();
    contact_paragrapheTitre();
    contact_ouvertureForm();
    contact_divClassForm();
    contact_divPseudo();
    contact_divEmail();
    contact_inputMessage();
    contact_fermetureForm();
    contact_boutonEnvoyer();
    contact_fermetureDiv();
    contact_fermetureDiv();
    contact_fermetureDiv();
}

function contact_basDePage(){
    contact_includeFooter();
    
    contact_fermetureBodyHtml();
}