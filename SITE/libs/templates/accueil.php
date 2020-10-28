<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="../css/accueil.css">

    <title>
        Accueil
    </title>
</head>

<body>
    <div class="container-fluid">

        <!-- RESULTATS FILTRES VOYAGES -->
        <div class="row">
            <?php include ("navbar.php")?>
            <?php include ("menulat.php")?>

            <p class="rsvoyages">XX voyages trouvés</p>
        </div>

        <div class="row">
        <!-- VOYAGE 1 -->
            <img src="../../../images/photos/photo_profil_detail_voyage.jpg" class="photoprofil1"/>
            <h1 class="titrevoyage1">Titre</h1>
            <img src="../../../images/photos/trevi.jpg" class="photovoyage1"/>
            <div class="encadrevoyage1">
                <p class="textevoyage1">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla."
                </p>
                <a href="detail_voyage.php" class="lienvoyage1">
                    Découvrir ce voyage
                </a>
            </div>
        </div>

        <!-- VOYAGE 2 -->
        <div class="row">
            <img src="../../../images/photos/photo_profil_femme1.jpg" class="photoprofil2"/>
            <h1 class="titrevoyage2">Titre</h1>
            <img src="../../../images/photos/grece.jpg" class="photovoyage2"/>
            <div class="encadrevoyage2">
                <p class="textevoyage2">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla."
                </p>
                <a href="" class="lienvoyage2">
                    Découvrir ce voyage
                </a>
            </div>
        </div>

        <!-- VOYAGE 3 -->
        <div class="row">
            <img src="../../../images/photos/photo_profil_homme2.jpg" class="photoprofil3"/>
            <h1 class="titrevoyage3">Titre</h1>
            <img src="../../../images/photos/lac.jpg" class="photovoyage3"/>
            <div class="encadrevoyage3">
                <p class="textevoyage3">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla."
                </p>
                <a href="" class="lienvoyage3">
                    Découvrir ce voyage
                </a>
            </div>
        </div>

        <!-- VOYAGE 4 -->
        <div class="row">
            <img src="../../../images/photos/photo_profil_femme2.jpg" class="photoprofil4"/>
            <h1 class="titrevoyage4">Titre</h1>
            <img src="../../../images/photos/japon.jpg" class="photovoyage4"/>
            <div class="encadrevoyage4">
                <p class="textevoyage4">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla."
                </p>
                <a href="" class="lienvoyage4">
                    Découvrir ce voyage
                </a>
            </div>
        </div>

        <!-- PAGES -->
        <div class="row">
            <p class="pages">< 1 2 ... 4 ></p>
        </div>

        <div class="row">
            <?php include ("footer.php")?>
        </div>

    </div>

</body>

</html>