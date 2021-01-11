<?php 

function detail_head(){
    echo '<!DOCTYPE html>
    <html>
    
    <head>
        <title>Détail du voyage</title>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
        <link rel="stylesheet" href="../../libs/css/detail_voyage.css" type="text/css" />
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
    </head>';
}

function detail_bodyTop(){
    echo '<body>';
}

function detail_header(){
    echo '<div class="container-fluid ">
            <div class="row">';
        include ("navbarCONTROLEUR.php");
}

function detail_menuLateral($titre, $datedebut, $datefin, $likes, $vues){
    echo '<div class="pl-0 menu_lateral_detail_voyage">
    <nav class="bg-sable mr-3 pr-3 menU centrage">
        <div class="row">
            <img class="tailleImageProfilDetail col-md-12 col-6 mt-3 float-left"
                src="../../img/photos/photo_profil_defaut.png" alt="La photo profil">
            <div class="col-lg-12 mt-5 pl-1 col-6">
                <h4>'.$_SESSION["pseudo"].'</h4> </br>
                <h5>'.$titre.'</h5>
                <h6>Du '.$datedebut.' au '.$datefin.'</h6>
                <h6>'.$likes.' likes - '.$vues.' vues</h6>
                </div>
                <a href="../controleur/mesVoyagesControleur.php?pseudo='.$_SESSION["pseudo"].'"><button type="button" class="btn btn-primary addItem col-12 mt-4 mb-3">Mes autres</br>voyages</button></a>';
}

            //  Bouton supprimer avec modal
        function detail_boutonSupp() {
                
            echo '<button type="button" class="btn btn-danger addItem mt-5" data-toggle="modal"
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
            </div>';
        } 

function detail_menuLateralFin(){
    echo'    </div>
    </nav>
</div>';
}

function detail_placeNav(){
    echo '<div class="col-md-1 col-2"></div>
    <div class="col-md-7 col-6 placenav">';
}

// mettre un for
function detail_carousel($couverture, $numDiapo){
    echo '<div class="card col-12 mt-2 fond_carrousel">
    <div id="slider">
        <div id="carouselDetailVoyage" class="carousel slide" data-ride="carousel"
            data-interval="false">
            <ol class="carousel-indicators">';

            $numDiapo=1;
            // for($i=1;$i=>$){
                // $numDiapo++;
                echo '<div class="carousel-item'; 
                if($numDiapo==1){ 
                    echo " active"; 
                }
                echo '<li data-target="#carouselDetailVoyage" data-slide-to="'.$numDiapo.'" class="'; 
                if($numDiapo==1){ 
                    echo " active"; 
                } echo '"></li>';
            // }

            echo '</ol>';
            $numDiapo=1;
            // while($donnees = $couverture->fetch_assoc()){
                // $numDiapo++;
                echo '<div class="carousel-item'.''; 
                if($numDiapo==1){ 
                    echo " active"; 
                }
                echo '"><img class="d-block w-100" src="../../img/photos/'. $couverture .'" alt="Slide'. $numDiapo.'" /></div>';
            // }

            // <div class="carousel-inner">
            //     <div class="carousel-item active">
            //         <img class="d-block w-100" src="../../../images/photos/Trevi.jpg" alt="First slide">
            //         <div class="card-img-overlay titre_photo_detail_voyage halant ">
            //             <h2 class="taille_titre_photo_detail_voyage">La Fontaine de Trevi</h2>
            //         </div>
            //     </div>
            //     <div class="carousel-item taille_photos_detail_voyage">
            //         <img class="d-block w-100" src="../../../images/photos/grece.jpg"
            //             alt="Second slide">
            //         <div class="card-img-overlay titre_photo_detail_voyage halant">
            //             <h2 class="taille_titre_photo_detail_voyage">Mon minou</h2>
            //         </div>
            //     </div>
            //     <div class="carousel-item taille_photos_detail_voyage">
            //         <img class="d-block w-100" src="../../../images/photos/lac.jpg" alt="Third slide">
            //         <div class="card-img-overlay titre_photo_detail_voyage halant">
            //             <h2 class="taille_titre_photo_detail_voyage">Le lac</h2>
            //         </div>
            //     </div>
            // </div>
            echo '<a class="carousel-control-prev" href="#carouselDetailVoyage" role="button"
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
</div>';
}

function detail_ssTitreLogos($sousTitre){
    echo '<div class="col-lg-12 col-md-8 col-sm-8 col-12">
    <div class="row">
        <div class="col-xl-8 col-sm-12 col-12">
            <h1 class="sous_titre_carrousel">'.$sousTitre.'</h1>
        </div>
        <div class="row logo_position mt-2">
            <div class="element_like_comm col-xl-12 col-sm-12 col-12">
                <input type="image" name="like" placeholder="Like"
                    src="../../img/logos_divers/Like_vide.png" class="taille_logo_detail_voyage">
                <input type="image" name="Commentaire" placeholder="Commentaire"
                    src="../../img/logos_divers/Commentaires.png" class="taille_logo_detail_voyage"
                    data-toggle="modal" data-target="#ModalCommentaire">
            </div>
        </div>';
}

function detail_modalComm(){
    echo '<div class="modal fade" id="ModalCommentaire" tabindex="-1" role="dialog"
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
</div>';
}

function detail_description($description){
    echo '<p class="mb-3">'.$description.'</p>';
}

function detail_zoneComm(){
    echo '<div class="col-lg-11 col-md-7 col-sm-7 ml-2 col-12 bg-sable pb-2 placefooter">
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

</br>';
}

function detail_footer(){
    echo '</div>
    <div class="col-2"></div>
    <footer class="footer">';
    include ("footerCONTROLEUR.php");
echo '</footer>';
}

function detail_finDivConteneur(){
    echo '</div>';
}

function detail_bodyBottom(){
    echo '</body>';
}

function detail_finHtml(){
    echo '</html>';
}

// REGROUPEMENTS DE PAGES

function detail_headBodyTop(){
    detail_head();
    detail_bodyTop();
}

function detail_headerEtMenuLateral($titre, $datedebut, $datefin, $likes, $vues){
    detail_header();
    detail_menuLateral($titre, $datedebut, $datefin, $likes, $vues);
}
    // detail_boutonSupp();
function detail_menuFinEtNav(){
    detail_menuLateralFin();
    detail_placeNav();
}
    // detail_carousel();
function detail_restePage($sousTitre,$description){
    detail_ssTitreLogos($sousTitre);
    detail_modalComm();
    detail_description($description);
    detail_zoneComm();
}

function detail_basPage(){
    detail_finDivConteneur();
    detail_footer();
    detail_bodyBottom();
    detail_finHtml();
}