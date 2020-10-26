<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../css/modification_voyage.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification de voyage</title>
</head>
<body>
    <div class="container-fluid">
            <!--Header-->
            <div class="header">
                <?php include 'navbar.php' ?>
            </div>

        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 pl-0 col-12 bg-sable">
                <nav class="bg-sable menu centrage"></br>
                    <div class="col-lg-12 col-md-6 col-sm-6 pl-1 col-12">
                        <h5>Titre</h5>
                        <h6>Dates voyage</h6>
                        <button type="button" class="btn btn-primary">+ Ajouter une étape</button></br>
                        <label class="checkbox">
                            <input type="checkbox"> Partager ce voyage uniquement avec mes amis
                        </label>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-lg">Supprimer ce voyage</button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <h2>Êtes-vous sûr de vouloir supprimer ce voyage ?</h2>
                                        <label class="checkbox">
                                            <input type="checkbox"> Oui, je souhaite supprimer mon voyage.
                                        </label>
                                        <div class="modal-footer centrage">
                                            <button type="button" class="btn btn-primary">supprimer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-10 col-md-8 col-sm-8 col-12">

                <!-- Carousel -->

                <div class="card">
                    <div id="slider">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active taille_photos_detail_voyage">
                                    <div  class="img-wraps">
                                        <span  class="closes" title="Delete">&times;</span>
                                        <img class="d-block w-100" src="../../../images/photos/Trevi.jpg" alt="First slide">
                                        <div class="card-img-overlay titre_photo_detail_voyage halant">
                                            <h2 class="">La Fontaine de Trevi</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item taille_photos_detail_voyage">
                                    <div  class="img-wraps">
                                        <span  class="closes" title="Delete">&times;</span>
                                        <img class="d-block w-100" src="../../../images/photos/Trevi.jpg" alt="Second slide">
                                        <div class="card-img-overlay titre_photo_detail_voyage halant">
                                            <h2 class="">La Fontaine de Trello</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item taille_photos_detail_voyage">
                                    <div  class="img-wraps">
                                        <span  class="closes" title="Delete">&times;</span>
                                        <img class="d-block w-100" src="../../../images/photos/benzaie.gif" alt="Third slide">
                                        <div class="card-img-overlay titre_photo_detail_voyage halant">
                                            <h2 class="">La Fontaine de Thomas</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>
                </div>

                <h1>Jour 1 - 21 Juillet 2020</h1>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a
                    galley of type and scrambled it to make a type specimen book. It has survived not only five
                    centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                    passages, and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.
                </p>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 bg-sable">
                        <p>                 </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <h1>Jour 2 - 22 Juillet 2020</h1>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only five
                                centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.
                            </p>
                    </div>
                </div>

            </div>
        </div>

        <footer>
            <?php include 'footer.php' ?>
        </footer>
            

    </div>

    <!--JavaScript-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>