<?php

// FONCTIONS GLOBALES //
function displayPageAccueil1(){
    displayTopTagHtml();
    displayHead();
    navbar();
    menuLateral();
}

function displayPageAccueil2(){
    displayBottomResults();
    displayColTable();
}

// function displayPageAccueil3($data){
//     displayTrips($data);
// }

function displayPageAccueil3(){
    displayBottomTable();
    displayPages();
    footer();
    displayEnd();
}


// FONCTIONS EN VRAC //
function displayTopTagHtml(){
    echo
        '<!DOCTYPE html>
        <html lang="fr">';
}

function displayHead(){
    echo
        '<head>
            <meta charset="utf-8">

            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
                  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <link rel="stylesheet" href="../../libs/css/accueil.css">

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

            <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet"> 
        
            <title>
                Accueil
            </title>
        </head>';
}

function navbar(){
    echo 
        '<body>
            <div class="container-fluid">';
                include ("../controleur/navbarCONTROLEUR.php");
}

function menuLateral(){
    echo 
        '<div class="row">';
            include ("menulatCONTROLEUR.php");
        echo '<div class="col-9">
                <p class="rsvoyages">';
}

function displayBottomResults(){
    echo
        '</p>';
}

function displayColTable(){
    echo
        '<table class="table table-sm" id="tableVoyage">
            <thead class="thead" id="enteteTableVoyage">
                <tr>
                    <th scope="col" id="top-left-col">TITRE</th>
                    <th scope="col">PAR</th>
                    <th scope="col">EN IMAGE</th>
                    <th scope="col">EN BREF</th>
                    <th scope="col"></th>
                </tr>
            </thead>';
}

function displayDatasTable1($data){
    echo
        '<tbody id="corpsTableVoyage">
            <tr>
                <td>' . $data["titre"] . '</td>';
}

function displayPseudoTable($donnee){
    echo
        '<td>' . $donnee["pseudo"] . '</td>';
}

function displayDatasTable2($data){
    echo
        '<td><img src="' . $data["couverture"] . '"/></td>
        <td>' . $data["resume"] . '</td>
        <td>' . '<a href="../controleur/detail_voyageCONTROLEUR.php?code_voyage=' . $data["id"] . '"><button class="btn" id="btnDetailsVoyage">Découvrir</button></a></td>';
}

function displayBottomTable(){
    echo
                '</tr>
            </tbody>
        </table>
    </div>';
}

function displayPages(){
    echo
            '<p class="pages">< 1 2 ... 4 ></p>
        </div>';
}

function footer(){
    include ("../controleur/footerCONTROLEUR.php");
}

function displayEnd(){
    echo 
                '</div>
            </body>
        </html>';
}

// function displayTrips($data){ // 1 ENCADRE DYNAMIQUE //
//     echo
//         '<div class="row">
//             <img src="'.$data["id"].'" class="photoprofil"/>
//             <h1 class="titrevoyage">'.$data["titre"].'</h1>
//             <img src="'.$data["couverture"].'" class="photovoyage"/>
//             <div class="encadrevoyage">
//                 <p class="textevoyage">
//                     "'.$data["resume"].'"
//                 </p>
//                 <a href="../controleur/detail_voyageCONTROLEUR.php" class="lienvoyage">
//                     Découvrir ce voyage
//                 </a>
//             </div>
//         </div>';
// }

// function displayTripOne($data){ // 4 ENCADRES "EN DUR" //
//     echo
//         '<div class="row">
//             <img src="'.$data["id"].'" class="photoprofil1"/>
//             <h1 class="titrevoyage1">'.$data["titre"].'</h1>
//             <img src="'.$data["couverture"].'" class="photovoyage1"/>
//             <div class="encadrevoyage1">
//                 <p class="textevoyage1">
//                     "'.$data["resume"].'"
//                 </p>
//                 <a href="detail_voyage.php" class="lienvoyage1">
//                 <a href="../controleur/detail_voyageCONTROLEUR.php" class="lienvoyage1">
//                     Découvrir ce voyage
//                 </a>
//             </div>
//         </div>';
// }
// function displayTripTwo($data){
//     echo
//         '<div class="row">
//             <img src="'.$data["id"].'" class="photoprofil2"/>
//             <h1 class="titrevoyage2">'.$data["titre"].'</h1>
//             <img src="'.$data["couverture"].'" class="photovoyage2"/>
//             <div class="encadrevoyage2">
//                 <p class="textevoyage2">
//                     "'.$data["resume"].'"
//                 </p>
//                 <a href="../controleur/detail_voyageCONTROLEUR.php" class="lienvoyage2">
//                     Découvrir ce voyage
//                 </a>
//             </div>
//         </div>';
// }
// function displayTripThree($data){
//     echo
//         '<div class="row">
//             <img src="'.$data["id"].'" class="photoprofil3"/>
//             <h1 class="titrevoyage3">'.$data["titre"].'</h1>
//             <img src="'.$data["couverture"].'" class="photovoyage3"/>
//             <div class="encadrevoyage3">
//                 <p class="textevoyage3">
//                     "'.$data["resume"].'"
//                 </p>
//                 <a href="../controleur/detail_voyageCONTROLEUR.php" class="lienvoyage3">
//                     Découvrir ce voyage
//                 </a>
//             </div>
//         </div>';
// }
// function displayTripFour($data){
//     echo
//         '<div class="row">
//             <img src="'.$data["id"].'" class="photoprofil4"/>
//             <h1 class="titrevoyage4">'.$data["titre"].'</h1>
//             <img src="'.$data["couverture"].'" class="photovoyage4"/>
//             <div class="encadrevoyage4">
//                 <p class="textevoyage4">
//                     "'.$data["resume"].'"
//                 </p>
//                 <a href="../controleur/detail_voyageCONTROLEUR.php" class="lienvoyage4">
//                     Découvrir ce voyage
//                 </a>
//             </div>
//         </div>';
// }

?>