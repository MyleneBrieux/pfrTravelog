<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="../css/contact.css">

    <title>
        Contact
    </title>
</head>

<body>
    <div class="container-fluid">

        <!-- AJOUT DE LA NAVBAR -->
        <div class="row">
            <?php include ("navbar.php")?>
        </div>

        <div class="row">
            
            <!-- ENCADRE SABLE -->
            <div class="encadreSable">

                <!-- PHRASE -->
                <p class="texteContact"><strong>Un problème ? Une suggestion ? Contactez-nous !</strong></p>

                <!-- FORMULAIRE -->
                <form class="formContact">

                    <!-- LIGNE 1 AVEC PSEUDO ET EMAIL -->
                    <div class="formLigne1 form-row">

                        <!-- PSEUDO -->
                        <div class="form-group col-md-5">
                            <input type="text" class="Pseudo form-control" id="inputPseudo" placeholder="Pseudo">
                        </div>

                        <!-- EMAIL -->
                        <div class="form-group col-md-5">
                            <input type="email" class="Email form-control" id="inputEmail" placeholder="Adresse email">
                        </div>
                    </div>

                    <!-- LIGNE 2 AVEC MESSAGE -->
                    <div class="formLigne2 form-group col-md-9">
                        <input type="text" class="Message form-control" id="inputMessage" placeholder="Saisissez votre message ici...">
                    </div>
                </form>
                
                <!-- BOUTON ENVOYER -->
                <button type="submit" class="boutonEnvoyer btn btn-sm">Envoyer</button>

            </div>
       
        </div>

        <!-- AJOUT DU FOOTER -->
        <?php include ("footer.php")?>

    </div>

</body>

</html>