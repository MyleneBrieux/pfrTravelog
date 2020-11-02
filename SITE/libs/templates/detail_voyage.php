<!DOCTYPE html>
<html>

<head>
    <title>Détail du voyage</title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <link rel="stylesheet" href="../css/detail_voyage.css" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Pour caroussel -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Permanent+Marker&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/20f2b0d45a.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid ">
        <div class="row">
            <?php include ("navbar.php")?>

            <!--MENU DE GAUCHE-->

            <div class="pl-0 col-md-2 col-12 bg-sable placenav">
                <nav class="bg-sable mr-3 pr-3 menU centrage">
                    <div class="row">
                        <img class="taille_photo_profil_detail_voyage col-md-12 col-6 mt-3 float-left"
                            src="../../../images/photos/photo_profil_detail_voyage.jpg" alt="Claude">
                        <div class="col-lg-12 col-md-6 col-sm-6 mt-5 pl-1 col-6 float-right">
                            <h4>Utilisateur</h4> </br>
                            <h5>Titre</h5>
                            <h6>Dates voyage</h6>
                            <h6>xxx vues - xxx likes</h6>
                            </div>
                            <button type="button" class="btn btn-primary addItem col-12 mt-4 mb-3">Mes autres</br>voyages</button>
                        
                        <!-- Bouton supprimer avec modal -->

                        <!-- <button type="button" class="btn btn-danger addItem mt-5" data-toggle="modal"
                            data-target="#ModalSupp">Supprimer le voyage</button>

                        <div class="modal fade" id="ModalSupp" tabindex="-1" role="dialog" aria-labelledby="ModalSupp"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="Supp">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Suppression de voyage
                                        </h5>
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
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                    </div>
                </nav>
            </div>
            <!-- </div> -->

            <!-- Bloc central -->
            <div class="col-md-1 col-2"></div>
            <div class="col-md-7 col-6 placenav">
                <!-- Etape 2 -->

                <!-- Carousel -->

                <div class="card col-12 mt-2 fond_carrousel">
                    <div id="slider">
                        <div id="carouselDetailVoyage" class="carousel slide" data-ride="carousel"
                            data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselDetailVoyage" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselDetailVoyage" data-slide-to="1"></li>
                                <li data-target="#carouselDetailVoyage" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="../../../images/photos/Trevi.jpg" alt="First slide">
                                    <div class="card-img-overlay titre_photo_detail_voyage halant ">
                                        <h2 class="taille_titre_photo_detail_voyage">La Fontaine de Trevi</h2>
                                    </div>
                                </div>
                                <div class="carousel-item taille_photos_detail_voyage">
                                    <img class="d-block w-100" src="../../../images/photos/grece.jpg"
                                        alt="Second slide">
                                    <div class="card-img-overlay titre_photo_detail_voyage halant">
                                        <h2 class="taille_titre_photo_detail_voyage">Mon minou</h2>
                                    </div>
                                </div>
                                <div class="carousel-item taille_photos_detail_voyage">
                                    <img class="d-block w-100" src="../../../images/photos/lac.jpg" alt="Third slide">
                                    <div class="card-img-overlay titre_photo_detail_voyage halant">
                                        <h2 class="taille_titre_photo_detail_voyage">Le lac</h2>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselDetailVoyage" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselDetailVoyage" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>
                </div>

                <!-- Sous titre / Description -->
                <div class="col-lg-12 col-md-8 col-sm-8 col-12">
                    <div class="row">
                        <div class="col-xl-8 col-sm-12 col-12">
                            <h1 class="sous_titre_carrousel">Jour 1 - 21 juillet 2020</h1>
                        </div>
                        <div class="row logo_position mt-2">
                            <div class="element_like_comm col-xl-12 col-sm-12 col-12">
                                <input type="image" name="like" placeholder="Like"
                                    src="../../img/logos_divers/Like_vide.png" class="taille_logo_detail_voyage">
                                <input type="image" name="Commentaire" placeholder="Commentaire"
                                    src="../../img/logos_divers/Commentaires.png" class="taille_logo_detail_voyage"
                                    data-toggle="modal" data-target="#ModalCommentaire">
                            </div>
                        </div>
                        <!-- Modal commentaires -->

                        <div class="modal fade" id="ModalCommentaire" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ecrire un commentaire
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <form action="detail_voyage.html?action=commentaire" method="post">

                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                placeholder="Ecrivez votre commentaire ici ..."></textarea>

                                        </form>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Fermer</button>
                                        <button type="button" class="btn btn-primary">Envoyer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a
                    galley of type and scrambled it to make a type specimen book. It has survived not only five
                    centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                    passages, and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.</p>



                <!-- Zone Commentaire -->

                <div class="col-lg-8 col-md-7 col-sm-7 ml-5 col-12 bg-sable pb-2 placefooter">
                    <h3>Commentaire (xxx)</h3>
                    <div class="row">

                        <h6 class="pl-2">Utiliseur3 : </h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div>
                        <a href="detail_voyage.php?page=add"><button class="btn mb-1 btn-info">Like</button></a>
                        <a href="detail_voyage.php?page=add"><button class="btn mb-1 btn-info">Commentaire</button></a>
                        <a href="ajoutmodif_services.php?page=add"><button
                                class="btn mb-1 btn-info">Signaler</button></a>
                    </div>

                </div>

                </br>
            </div>

        </div>
        <div class="col-2"></div>
        <?php include ("footer.php")?>
    </div>


</body>

</html>