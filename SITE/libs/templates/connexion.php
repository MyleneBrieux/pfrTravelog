<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="../css/connexion.css">

    <title>
        Connexion
    </title>
</head>

<body>
    <div class="container-fluid">

        <!-- EN-TÊTE DE LA PAGE AVEC LOGO ET TITRE -->
        <div class="row">

            <img src="../../img/logo_site/Logo_couleurs.png" class="logotravelog"/>

            <h1 class="nomtravelog">TRAVELOG</h1>

        </div>

        <!-- POLAROID DE GAUCHE -->
        <div class="row">

            <img src="../../img/photos/polaroid2.png" class="polaroid1"/>

            <!-- ENCADRE -->
            <!-- PHRASE D'ACCROCHE -->
            <div class="encadreconnexion">
                <div class="introencadreconnexion">
                    Prêt(e) à partager</br>
                    la suite de vos aventures ?
                </div>

                <!-- FORMULAIRE -->
                <div class="formulaireconnexion">
                    <div class="form-group">
                        <input type="text" class="pseudoconnexion form-control" placeholder="Pseudo">
                    </div>
                    <div class="form-group">
                        <input type="password" class="motdepasseconnexion form-control" placeholder="Mot de passe">
                    </div>
                </div>

                <!-- BOUTON CONNEXION -->
                <button type="submit" class="boutonconnexion btn"><strong>CONNEXION</strong></button>

                <!-- LIEN VERS LA PAGE D'INSCRIPTION -->
                <div class="inscription">
                    <strong>Pour s'inscrire, c'est par <a href="inscription.php">ici</a></strong>
                </div>
            </div>

            <!-- POLAROID DE DROITE -->
            <img src="../../img/photos/polaroid.png" class="polaroid2"/>

        </div>

    </div>

</body>

</html>