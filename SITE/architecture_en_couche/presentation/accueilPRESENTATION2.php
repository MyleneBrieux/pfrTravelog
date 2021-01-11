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
    select1();
}

function displayPageAccueil3(){
    select2();
    select3();
    displayColTable();
}

// function displayPageAccueil3($data){
//     displayTrips($data);
// }

function displayPageAccueil4(){
    displayBottomTable();
    // displayPages();
    displayPagination();
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

            <link rel="stylesheet" href="../../libs/css/accueil.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
                  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

            <script src="../../libs/jquery/jquery-3.5.1.min.js"></script>
            <script src="../../libs/script_js/scriptFiltreVoyages.js"></script>

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
        '<div class="row">
            <div class="col-9">
                <p class="rsvoyages">';
}

function displayBottomResults(){
    echo
        '</p>';
}

function select1(){
    echo
        '<form>
            <select id="continent" name="continent">
                <option value="">-- Sélectionnez un continent --</option>';
}

function selectContinent($data){
    echo
                '<option value="' . $data["continent"] . '">' . $data["continent"] . '</option>';
}

function select2(){
    echo
            '</select>

            <select id="pays" name="pays">
                <option value="">-- Sélectionnez un pays --</option>';
}

function select3(){
    echo
            '</select>
            
            <select id="ville" name="ville">
                <option value="">-- Sélectionnez une ville --</option>
            </select>
        </form>';
}

function displayColTable(){
    echo
        '<table class="table table-sm" id="tableVoyage">
            <thead class="thead" id="enteteTableVoyage">
                <tr>
                    <th scope="col">DÉCOUVREZ</th>
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
                <td id="titreVoyage">' . $data["titre"] . '</td>';
}

function displayPseudoTable($donnee){
    echo
        '<td>' . '<a href="../controleur/monProfilControleur.php?pseudo=' . $donnee["pseudo"] . '" class="lienProfil">' . $donnee["pseudo"] . '</a></td>';
}

function displayDatasTable2($data){
    echo
        '<td><img src="../../img/photos/' . $data["couverture"] . '" class="photosVoyage"/></td>
        <td id="resumeTable">' . $data["resume"] . '</td>
        <td>' . '<a href="../controleur/detail_voyageCONTROLEUR.php?code_voyage=' . $data["code_voyage"] . '&code_etape=' . $data["code_etape"] . '" id="lienVoyage"><button class="btn" id="btnDetailsVoyage">Découvrir</button></a></td>';
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

function displayPagination(){
    echo
            '<nav aria-label="Page navigation" class="pages">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Précédent">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Suivant">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
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

?>