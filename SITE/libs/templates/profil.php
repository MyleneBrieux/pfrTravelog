<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../icofont/icofont.css">
    <link rel="stylesheet" href="../css/profil.css">

    <script src="../jquery/jquery-3.5.1.js" defer></script>
    <script src="../popper/popper.js" defer></script>
    <script src="../bootstrap/js/bootstrap.js" defer></script>
    <script src="../js/index.js" defer></script>

    <title>TRAVELOG</title>
</head>

<body>

    <?php   
        include("navbar.php");
        // include("menu_lat.php");
    ?>


    <div class="container-fluid d-flex">

        <div class="col-3">
            <div class="menu-gauche menulat">

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
        </div>


        <div class="col-9 formulaire1">

            <div class="col-1 txt-profil">
                <div>Profil :</div>
            </div>

            <div>
                <form>

                    <div class="form-row mb-3 container-nom ">
                        <span class="txt-nom">Nom :</span>
                        <div class="col-5 input-nom ">
                            <input type="text" class="form-control">
                        </div>
                        <span>Prénom :</span>
                        <div class="col-5">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-row">
                        <span class="txt-birthday">Date de naissance :</span>
                        <div class="col-3">
                            <input type="date" class="form-control input-birthday">
                        </div>
                        <span class="txt-nationnalite">Nationnalité :</span>
                        <div class="col-5">
                            <input type="text" class="form-control input-nationnalite">
                        </div>
                    </div>

                </form>
            </div>


        </div>






















    </div>









    <?php   
        include("footer.php");
        ?>












































































</body>

</html>