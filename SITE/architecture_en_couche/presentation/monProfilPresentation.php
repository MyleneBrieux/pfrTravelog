<?php

    function profilHead(){
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="../../libs/css/monprofil.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>profil</title>
        </head>';
    }

    function profilHeader(){
        echo '<body>
        <div class="container-fluid">
        <header class="header">
            <?php include "navbarCONTROLEUR.php" ?>
        </header>';
    }

    function menuLat(){
        echo'<div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 pl-0 col-12 bg-sable">
                    <nav class="menu">
                        <div class="col-lg-12 col-md-6 col-sm-6 pl-1 col-12">
                            <div class="image-profil">
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
                                <p><img src="../../img/logos_divers/suivre2.png" alt="logo suivre">Suivre</p>
                            </div>
                            <div class="row mt-3">
                                <p><img src="../../img/logos_divers/ami_turquoise2.png" alt="logo amis">Ajouter en ami</p>
                            </div>
                            <div class="row mt-3 mb-3">
                                <button type="button" class="button">Contactez moi</button>
                            </div>
                        </div>
                    </nav>
                </div>';
    }

    function presentationUser(){
        echo '<div class="col-lg-10 col-md-8 col-sm-8 col-12 mt-2">
                    <div class="d-inline-flex p-2 bd-highlight">
                        <h3><img src="../../img/flags/flags/flat/24/France.png" alt="drapeau de nationalité">John Doe</h3>
                    </div>
                    <div class="d-flex justify-content-end">
                        <p class="pr-4 bd-highlight">3 contienents visités</p>
                        <p class="pr-4 bd-highlight">12 pays visités</p>
                    </div>
                    <div class="pl-2 rectangle_desc">
                        <p class="description">Description : </p>
                    </div>';
    }

    function voyagesUser(){
        echo'<div class="row d-flex justify-content-around mt-2">
                        <div>
                            <h3>Son dernier voyage : </h3>
                            <img src="../../img/photos/polaroid2.png" alt="" width=250 height=250>
                        </div>
                        <div>
                            <h3>Le plus populaire : </h3>
                            <img src="../../img/photos/polaroid2.png" alt="" width=250 height=250>
                        </div>
                    </div>
                    <div>
                        <h3>Ses autres voyages</h3>
                    </div>
                    <div class="row d-inline-flex justify-content-around">
                        <div class="ml-2">
                            <h4>Japon</h4>
                            <img class="mt-3" src="../../img/photos/osaka.jpg" alt="" width=350 height=250>
                        </div>
                        <div class="ml-2">
                            <h4>Venise</h4>
                            <img class="mt-3" src="../../img/photos/venise.jpg" alt="" width=350 height=250>
                        </div>
                        <div class="ml-2">
                            <h4>Londres</h4>
                            <img class="mt-3" src="../../img/photos/londres.jpg" alt="" width=350 height=250>
                        </div>
                        <div class="ml-2">
                            <h4>Hambourg</h4>
                            <img class="mt-3" src="../../img/photos/hambourg.jpg" alt="" width=350 height=250>
                        </div>
                    </div>
                </div>
            </div>';
    }

    function footer(){
        echo'<footer class="footer">
            <?php include "footerCONTROLEUR.php" ?>
        </footer>';
    }

    function finPage(){
        echo '</div>
            </body>
            </html>';
    }

?>