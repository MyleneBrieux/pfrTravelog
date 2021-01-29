<?php

/*FONCTION D'AFFICHAGE DE LA PAGE*/
    function affichageEnteteContact(){

        enteteHtml();
        ouvertureDivContainer();
        includeNavbar();
    }

    function affichageCorpsContact($expediteur){
        ouvertureDivClassRow();
        ouvertureDivClassSable();
        paragrapheTitre();
        ouvertureForm();
        divClassForm();
        divPseudo($expediteur);
        divEmail();
        ouvertureDiv();
        fermetureDiv();
        input();
        boutonEnvoyer();
        fermetureForm();
        fermetureDiv();
        fermetureDiv();
        fermetureDiv();
        includeFooter();
        fermetureBodyHtml();
    }





    function envoiOK(){
        echo '<div class= "alert alert-success msg-erreur"> Votre email à bien été envoyé ! </div>';
    }

    function envoiPasOK(){
        echo '<div class= "alert alert-danger msg-erreur"> Erreur lors de l\'envois d\'email, veuillez réessayer  ! </div>';
    }













/*FONCTION ENTETE HTML5*/
    function enteteHtml(){
        echo 
            '<!DOCTYPE html>
            <html lang="fr">
            
            <head>
                <meta charset="utf-8">
            
                <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
                <link rel="stylesheet" href="../../libs/css/contact.css">

                <link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.css">
                <link rel="stylesheet" href="../../libs/css/parametres_profil.css">

                <script src="../js/index.js" defer></script>
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>       
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>       
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

                <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet"> 

            
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
        include ("navbarCONTROLEUR.php");
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
            '<form action="../controleur/controleur_contact.php?action=envoyer" method="POST"
            class="formContact">';
    }

/*FONCTION DIV CLASS FORM*/    
    function divClassForm(){
        echo '<div class="formLigne1 form-row">';
    }

/*FONCTION DIV PSEUDO*/    
    function divPseudo($expediteur){
        echo
            ' <div class="form-group col-md-5">
                <input type="text" class="Pseudo form-control" id="pseudo" placeholder="Votre pseudo" name="pseudo" value="'.$expediteur.'" disabled>
            </div>';
    }

/*FONCTION DIV EMAIL*/    
    function divEmail(){
        echo
            '<div class="form-group col-md-5">
                <input type="text" class="Email form-control" id="sujet" placeholder="Sujet" name="sujet">
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
        echo'<br>';
        include("footerCONTROLEUR.php");
    } 

/*FONCTION FERMETURE BODY & HTML*/  
    function fermetureBodyHtml(){
        echo '
            </body>
        </html>';
    }


