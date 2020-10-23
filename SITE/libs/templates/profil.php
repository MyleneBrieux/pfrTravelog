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

    <div class="container-fluid">
        <div class="row">

            <div class="menu-gauche col-3">

                <img src="../../img/photos/nath.jpg" alt="Bootstrap" class="photo-profil">

                <div class="membre">Membre depuis le : </div>
                <div class="age">35 ans</div>
                <div class="langues-parlees">Langues parlées :</div>

                <div class="langues">
                    <ul>
                        <li>Français</li>

                    </ul>
                </div>

                <div class="logos-menu">
                    <div><img class="oeil" src="../../img/logos_divers/suivre2.png" alt="logo suivre"
                            class="photo-profil"><span>Suivre</span></div>
                    <div><img class="oeil" src="../../img/logos_divers/ami_turquoise2.png" alt="logo ami"
                            class="photo-profil"><span>Ajouter en ami</span></div>
                </div>

                <button type="button" class="btn btn-info bouton-contact">Contactez moi</button>

            </div>







            <div class="container col-8 formulaire1">
                <h1>Formulaires</h1>
                <form>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nom">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Prénom">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nom">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Prénom">
                        </div>
                    </div>
                </form>
            </div>


        </div>






        <?php   
        include("footer.php");
        ?>































    </div>












































</body>

</html>