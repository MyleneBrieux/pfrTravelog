<?php

    function amisHead(){
        echo'<!DOCTYPE html>
            <html lang="fr">
            <head>
                <title>Mes amis</title>
                <meta charset="utf-8">
                <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
                <link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.css" />
                <link rel="stylesheet" href="../../libs/css/mes_amis.css">
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
                    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            </head>';
    }

    function amisHeader(){
        echo'<body>
        <div class="container-fluid ">
            <div class="row">';
                include ("navbarCONTROLEUR.php");
    }

    function menuLat($profil, $setBirthday){
        echo'<div class="pl-0 menu_lateral_detail_voyage">
            <nav class="bg-sable mr-3 pr-3 menU centrage">
                <div class="col-lg-12 col-md-6 col-sm-6 pl-1 col-12">
                    <div class="image-profil">
                        <img src="../../img/photos/photo_profil_defaut.png" alt="photo de profil"
                            width="100%" height="100%" />
                    </div>
                    <div class="row">';
                    if ($setBirthday) {
                        $dateNaissance = new DateTime($profil['birthday']);
                        $dateAjd = new DateTime();
                        $age = date_diff($dateNaissance, $dateAjd);
                        echo'<p>'. $age->format('%y ans') .'</p>';
                    }  
                    echo'</div>
                    <div class="row">
                        <p class="titre-lang">Langue parlée : </p>
                        <p>
                            <ul>
                                <li>'. $profil['type_langue'] .'</li>
                            </ul>
                        </p>
                    </div>';
                    // <div class="row mt-3">
                    //     <p><img src="../../img/logos_divers/ami_turquoise2.png" alt="logo amis">Ajouter en ami</p>
                    // </div>
                    echo'<div class="row mt-3 mb-3">
                        <button type="button" class="button">Contactez moi</button>
                    </div>
                </div>
            </nav>
        </div>';
    }

    function listeAmis($nbAmis){
        echo'<div class="col-lg-8 col-md-8 col-sm-8 ml-5 col-10">
        <h1 class="placenav_titre mb-3">Liste des amis ('. $nbAmis .')</h1>';
    }

    function ami1($ami, $isUser, $idAmi, $profil){
        echo'<div class="row bg-sable mb-3">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="row">
                <img class="photo_profil_mes_amis rounded-circle mt-3 mb-3 ml-3 mr-3"
                    src="../../img/photos/photo_profil_defaut.png" />
                <h4 class="mt-4 mb-3"><a href="monProfilControleur.php?pseudo='. $ami['pseudo'] .'" />' . $ami['pseudo'] . '</h4>
            </div>
        </div>';
        if($isUser){
            echo'<div class="col-lg-2 col-md-1"></div>
            <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                <a href="contacter.php?page=contacter">
                <button class="btn btn-info mt-4 mb-3 mr-2">Contacter</button></a>
                <a href="mesAmisControleur.php?pseudo='. $profil["pseudo"] .'&action=supprimerAmi&id_ami='. $ami['id_ami'] .'">
                <button type="button" class="btn btn-danger mt-4 mb-3 supprAmi">Supprimer</button>
                ';
        }
        echo'
        </div>
        </div>';
    }
    //<input type="button" name="supprimerAmi" class="btn btn-danger supprimerAmi" value="supprimer"/>
    function noAmis(){
        echo'<div class="row">
                <p>Vous n\'avez pas encore ajouté d\'ami(s).</p>
            </div>';
    }

    function nbPages($page, $profil, $nombreDePage, $precedent, $suivant){
        echo'<div class="pagination justify-content-center mt-5">
        <nav aria-label="Page navigation " class="pages">
            <ul class="pagination justify-content-center">';
            // if ($page>1) {
            //     echo'<li class="page-item">
            //         <a class="page-link" href="mesAmisControleur.php?pseudo='.$profil['pseudo'].'&page='. $precedent .'" aria-label="Previous">
            //             <span aria-hidden="true">&laquo;</span>
            //             <span class="sr-only">Previous</span>
            //         </a>
            //         </li>';
            // }
            for ($page=1; $page<=$nombreDePage;$page++){
            echo'<li class="page-item" id="encadreNoPage"><a class="page-link" id="noPage" href="mesAmisControleur.php?pseudo='.$profil['pseudo'].'&page='. $page .'">'. $page .'</a></li>';
            }
            // echo'<li class="page-item">
            // <a class="page-link" href="mesAmisControleur.php?pseudo='.$profil['pseudo'].'&page='. $suivant .'" aria-label="Next">
            //     <span aria-hidden="true">&raquo;</span>
            //     <span class="sr-only">Next</span>
            // </a>
            //</li>
        echo'</ul>
        </nav>
    </div>
    </div>
    </div>';
    }

    function footer(){
        include ("footerCONTROLEUR.php");
    }

    function finPage(){
        echo'</div>
        </body>
        <script src="../../libs/jquery/jquery-3.5.1.js" type="text/javascript"></script>
        <script src="../../libs/script_js/scriptPageAmis.js" type="text/javascript"></script>
        </html>';
    }

    function amisDebut(){
        amisHead();
        amisHeader();
    }

    function Pagination($page, $profil, $nombreDePage, $precedent, $suivant){
        nbPages($page, $profil, $nombreDePage, $precedent, $suivant);
    }

    function finAmis(){
        footer();
        finPage();
    }

?>