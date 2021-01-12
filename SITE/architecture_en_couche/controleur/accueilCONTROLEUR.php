<?php

// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/accueilPRESENTATION.php");
include_once("../service/UtilisateurSERVICE.php");
include_once("../service/VoyageSERVICE.php");
include_once("../metier/Utilisateur.php");
include_once("../metier/Voyage.php");

session_start();

$utilisateurService = new UtilisateurService();
$voyageService = new VoyageService();


displayPageAccueil1();

if(isset($_GET['page']) && !empty($_GET['page'])){ // on détermine sur quelle page on se trouve //
    $currentPage = strip_tags($_GET['page']); // supprime les balises HTML et PHP d'une chaîne //
}else{
    $currentPage = 1;
}
$parPage=3;
$nbVoyages=$voyageService->compterVoyages();
echo"Nombre de voyages:".($nbVoyages)."</br>";
$pages=ceil($nbVoyages/$parPage); // on calcule le nombre total de pages requises //
echo"Nombre de pages:".($pages)."</br>";
$premier=($currentPage*$parPage); // on calcule le premier article de la page //
echo"Premier article de la page:".($premier)."</br>";
echo"Current page:".($currentPage)."</br>";

// compteur de voyages trouvés dans la bdd //
echo ($nbVoyages . " voyages trouvés");

displayPageAccueil2();

// affichage dynamique des voyages dans le corps de page //
$rs=$voyageService->afficherVoyages();
    while($data=mysqli_fetch_array($rs)){
        displayDatasTable1($data);
        $id=$data["id"];
        $donnee=$utilisateurService->afficherPseudoDepuisId($id);
        displayPseudoTable($donnee);
        displayDatasTable2($data);
    }

displayBottomTable();

// pagination //
displayPagination1($currentPage);
    for ($page=1;$page<=$pages;$page++){
        displayPagination2($currentPage, $page);
    }
displayPagination3($currentPage, $pages);

displayPageAccueil3();

?>