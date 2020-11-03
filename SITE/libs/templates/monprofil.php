<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../css/monprofil.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--JavaScript-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/20f2b0d45a.js" crossorigin="anonymous"></script>
    <title>Mon profil</title>
</head>
<body>
    <div class="container-fluid">
        <!--Header-->
        <header class="header">
            <?php include 'navbar.php' ?>
        </header>

            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 pl-0 col-12 bg-sable">
                    <nav class="menu centrage">
                        <div class="col-lg-12 col-md-6 col-sm-6 pl-1 col-12">
                            <div class="image-profil" width=250 height=250>
                                <img src="../../img/photos/photo_profil_detail_voyage.jpg" alt="photo de profil" width="100%" height="100%" />
                            </div>
                            <div class="row">
                                <p>Membre depuis: (05/10/2020)</p>
                            </div>
                            <div class="row">
                                <p>35 ans</p>
                            </div>
                            <div class="row">
                                <p class="titre-lang">Langues parlées : </p>
                                <p>
                                    <ul>
                                        <li>Français</li>
                                        <li>Anglais</li>
                                        <li>Espagnol</li>
                                    </ul>
                                </p>
                            </div>
                            <div class="row mt-3">
                                <img src="../../img/logos_divers/suivre2.png" alt="logo suivre">Suivre
                            </div>
                            <div class="row mt-3">
                                <img src="../../img/logos_divers/ami_turquoise2.png" alt="logo amis">Ajouter en ami
                            </div>
                            <div class="row mt-3 mb-3">
                            <button type="button" class="button">Contactez moi</button>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="col-lg-10 col-md-8 col-sm-8 col-12 mt-2">
                    <div class="d-inline-flex p-2 bd-highlight">
                        <h3>John Doe</h3>
                    </div>
                    <div class="row d-flex justify-content-end">
                        <p class="pr-4 bd-highlight">3 contienents visités</p>
                        <p class="pr-4 bd-highlight">12 pays visités</p>
                    </div>
                    <div class="pl-2 rectangle_desc">
                        <p class="description">Description : </p>
                    </div>
                    <div class="row d-flex justify-content-around mt-2">
                        <h3>Mon dernier voyage : </h3>
                        <h3>Le plus populaire : </h3>
                    </div>
                    <div class="pl-2 rectangle_voyages d-flex justify-content-around">
                        <img class="mt-3" src="../../img/photos/polaroid2.png" alt="" width=250 height=250>
                        <img class="mt-3" src="../../img/photos/polaroid2.png" alt="" width=250 height=250>
                    </div>
                    <div class="row">
                        <h3></h3>
                    </div>
                </div>
            </div>


            <footer>
            <!--footer-->
        <footer class="footer">
            <?php include 'footer.php' ?>
        </footer>
            </footer>
    </div>
</body>
</html>