<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Mes amis</title>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../css/mes_amis.css">


</head>

<body>

    <div class="container-fluid ">
        <div class="row">
            <?php include ("navbar.php")?>

            <!--MENU DE GAUCHE-->

            <div class="pl-0 menu_lateral_detail_voyage">
                <nav class="bg-sable mr-3 pr-3 menU centrage">
                    <div class="col-lg-12 col-md-6 col-sm-6 pl-1 col-12">
                        <div class="image-profil">
                            <img src="../../img/photos/photo_profil_detail_voyage.jpg" alt="photo de profil"
                                width="100%" height="100%" />
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
            </div>

            <!-- CORPS DE PAGE - AMIS -->

            <div class="col-lg-8 col-md-8 col-sm-8 ml-5 col-10">
                <h1 class="placenav_titre mb-3">Liste des amis (XX)</h1>

                <!-- Ami 1 -->

                <div class="row bg-sable mb-3">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="row">
                            <img class="photo_profil_mes_amis rounded-circle mt-3 mb-3 ml-3 mr-3"
                                src="../../img/photos/photo_profil_detail_voyage.jpg" />
                            <h4 class="mt-4 mb-3">Utilisateur1</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-1"></div>
                    <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                        <a href="contacter.php?page=contacter"><button
                                class="btn btn-info mt-4 mb-3 mr-2">Contacter</button></a>
                        <button type="button" class="btn btn-danger mt-4 mb-3 addItem" data-toggle="modal"
                            data-target="#ModalSupp_Ami">Supprimer</button>
                    </div>

                </div>

                <!-- Ami 2 -->

                <div class="row bg-sable mb-3">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="row">
                            <img class="photo_profil_mes_amis rounded-circle mt-3 mb-3 ml-3 mr-3"
                                src="../../img/photos/photo_profil_detail_voyage.jpg" />
                            <h4 class="mt-4 mb-3">Utilisateur2</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-1"></div>
                    <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                        <a href="contacter.php?page=contacter"><button
                                class="btn btn-info mt-4 mb-3 mr-2">Contacter</button></a>
                        <button type="button" class="btn btn-danger mt-4 mb-3 addItem" data-toggle="modal"
                            data-target="#ModalSupp_Ami">Supprimer</button>
                    </div>

                </div>

                <!-- Ami 3 -->

                <div class="row bg-sable mb-3">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="row">
                            <img class="photo_profil_mes_amis rounded-circle mt-3 mb-3 ml-3 mr-3"
                                src="../../img/photos/photo_profil_detail_voyage.jpg" />
                            <h4 class="mt-4 mb-3">Utilisateur3</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-1"></div>
                    <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                        <a href="contacter.php?page=contacter"><button
                                class="btn btn-info mt-4 mb-3 mr-2">Contacter</button></a>
                        <button type="button" class="btn btn-danger mt-4 mb-3 addItem" data-toggle="modal"
                            data-target="#ModalSupp_Ami">Supprimer</button>
                    </div>

                </div>

                <!-- Ami 4 -->

                <div class="row bg-sable mb-3">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="row">
                            <img class="photo_profil_mes_amis rounded-circle mt-3 mb-3 ml-3 mr-3"
                                src="../../img/photos/photo_profil_detail_voyage.jpg" />
                            <h4 class="mt-4 mb-3">Utilisateur4</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-1"></div>
                    <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                        <a href="contacter.php?page=contacter"><button
                                class="btn btn-info mt-4 mb-3 mr-2">Contacter</button></a>
                        <button type="button" class="btn btn-danger mt-4 mb-3 addItem" data-toggle="modal"
                            data-target="#ModalSupp_Ami">Supprimer</button>
                    </div>

                </div>

                <!-- Ami 5 -->

                <div class="row bg-sable mb-3">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="row">
                            <img class="photo_profil_mes_amis rounded-circle mt-3 mb-3 ml-3 mr-3"
                                src="../../img/photos/photo_profil_detail_voyage.jpg" />
                            <h4 class="mt-4 mb-3">Utilisateur5</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-1"></div>
                    <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                        <a href="contacter.php?page=contacter"><button
                                class="btn btn-info mt-4 mb-3 mr-2">Contacter</button></a>
                        <button type="button" class="btn btn-danger mt-4 mb-3 addItem" data-toggle="modal"
                            data-target="#ModalSupp_Ami">Supprimer</button>
                    </div>

                </div>

                <!-- Ami 6 -->

                <div class="row bg-sable mb-3">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="row">
                            <img class="photo_profil_mes_amis rounded-circle mt-3 mb-3 ml-3 mr-3"
                                src="../../img/photos/photo_profil_detail_voyage.jpg" />
                            <h4 class="mt-4 mb-3">Utilisateur6</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-1"></div>
                    <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                        <a href="contacter.php?page=contacter"><button
                                class="btn btn-info mt-4 mb-3 mr-2">Contacter</button></a>
                        <button type="button" class="btn btn-danger mt-4 mb-3 addItem" data-toggle="modal"
                            data-target="#ModalSupp_Ami">Supprimer</button>
                    </div>

                </div>

                <!-- Ami 7 -->

                <div class="row bg-sable mb-3">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="row">
                            <img class="photo_profil_mes_amis rounded-circle mt-3 mb-3 ml-3 mr-3"
                                src="../../img/photos/photo_profil_detail_voyage.jpg" />
                            <h4 class="mt-4 mb-3">Utilisateur7</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-1"></div>
                    <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                        <a href="contacter.php?page=contacter"><button
                                class="btn btn-info mt-4 mb-3 mr-2">Contacter</button></a>
                        <button type="button" class="btn btn-danger mt-4 mb-3 addItem" data-toggle="modal"
                            data-target="#ModalSupp_Ami">Supprimer</button>
                    </div>

                </div>

                <!-- Ami 8 -->

                <div class="row bg-sable mb-3">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="row">
                            <img class="photo_profil_mes_amis rounded-circle mt-3 mb-3 ml-3 mr-3"
                                src="../../img/photos/photo_profil_detail_voyage.jpg" />
                            <h4 class="mt-4 mb-3">Utilisateur8</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-1"></div>
                    <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                        <a href="contacter.php?page=contacter"><button
                                class="btn btn-info mt-4 mb-3 mr-2">Contacter</button></a>
                        <button type="button" class="btn btn-danger mt-4 mb-3 addItem" data-toggle="modal"
                            data-target="#ModalSupp_Ami">Supprimer</button>
                    </div>

                </div>

                <!-- Ami 9 -->

                <div class="row bg-sable mb-3">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="row">
                            <img class="photo_profil_mes_amis rounded-circle mt-3 mb-3 ml-3 mr-3"
                                src="../../img/photos/photo_profil_detail_voyage.jpg" />
                            <h4 class="mt-4 mb-3">Utilisateur9</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-1"></div>
                    <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                        <a href="contacter.php?page=contacter"><button
                                class="btn btn-info mt-4 mb-3 mr-2">Contacter</button></a>
                        <button type="button" class="btn btn-danger mt-4 mb-3 addItem" data-toggle="modal"
                            data-target="#ModalSupp_Ami">Supprimer</button>
                    </div>

                </div>

                <!-- Ami 10 -->

                <div class="row bg-sable mb-3">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="row">
                            <img class="photo_profil_mes_amis rounded-circle mt-3 mb-3 ml-3 mr-3"
                                src="../../img/photos/photo_profil_detail_voyage.jpg" />
                            <h4 class="mt-4 mb-3">Utilisateur10</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-1"></div>
                    <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                        <a href="contacter.php?page=contacter"><button
                                class="btn btn-info mt-4 mb-3 mr-2">Contacter</button></a>
                        <button type="button" class="btn btn-danger mt-4 mb-3 addItem" data-toggle="modal"
                            data-target="#ModalSupp_Ami">Supprimer</button>
                    </div>

                </div>

                <!-- Pages -->


                <p class="text-center">
                    < 1 2 ... 4>
                </p>

            </div>
        </div>
        <?php include ("footer.php")?>

    </div>
</body>



<!-- Pour la suppression d'un ami -->

<!-- <div class="modal fade" id="ModalSupp_Ami" tabindex="-1" role="dialog" aria-labelledby="ModalSupp_Ami"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="Supp">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Suppression d'un ami</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h6>Vous êtes sur le point de supprimer votre voyage<br>Voulez-vous vraiment
                                le supprimer ?</h6>
                            <label class="container">Je souhaite supprimer définitivement mon voyage
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div> -->