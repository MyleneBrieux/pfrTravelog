<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../icofont/icofont.css">
    <link rel="stylesheet" href="../css/navbar.css">

    <script src="../jquery/jquery-3.5.1.js" defer></script>
    <script src="../popper/popper.js" defer></script>
    <script src="../bootstrap/js/bootstrap.js" defer></script>
    <script src="../js/index.js" defer></script>

    <title>TRAVELOG</title>
</head>




<body>

    <div class="container mb-4">
        <header class="row">

            <nav class="navbar navbar-expand-md navbar-dark bg-perso nav fixed-top bg-turquoise fixed-top">

                <div class="logo-navbar"><img  src="../../img/logo_site/logo_blanc2.png"
                        alt="logo Travelog"></div>

                <div class="col-3">

                    <div class="row">
                        <a class="navbar-brand d-flex align-items-center" href="index.php?page=home">
                            <div class=" travelog-navbar">Travelog</div>
                        </a>
                        <div class="barre-bl-gauche"></div>
                    </div>

                </div>




                <!-- BARRE DE RECHERCHE-->
                <div class="input-group md-form form-sm form-1 pl-0 col-4">

                    <div class="input-group-prepend">
                        <span class="input-group-text lighten-3" id="basic-text1"><i class="fas fa-search text-white"
                                aria-hidden="true"></i></span>
                    </div>
                    <input class="form-control my-0 py-1" type="text" placeholder="Recherche ..." aria-label="Search">
                </div>

                <div class="barre-bl-droite"></div>

                <img class="cloche" src="../../img/logos_divers/notifs2.png" alt="cloche de notification">
                <img class="logo-ami" src="../../img/logos_divers/ami2.png" alt="logo ami">




                <!-- BOUTON HAMBURGER-->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse justify-content-end col-3" id="navbarSupportedContent">
                    <ul class="navbar-nav">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle font-white utilisateur" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Utilisateur
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="mesvoyages.html" target="blank">Mes voyages</a>

                                <a class="dropdown-item" href="monprofil.html" target="blank">Mon profil</a>

                                <?php if(!isset($_SESSION['user'])){ ?>
                                <a class="dropdown-item" href="index.php?page=figurines">Deconnexion</a>
                                <?php } ?>
                            </div>
                        </li>

                    </ul>

                    <img class="rounded-circle photo-profil-navbar" src="../../img/photos/nath.jpg" alt="Bootstrap" >


                </div>







            </nav>
        </header>



        
    </div>

















</body>

</html>