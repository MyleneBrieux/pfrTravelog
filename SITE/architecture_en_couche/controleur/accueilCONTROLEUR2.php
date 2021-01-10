<?php

// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/accueilPRESENTATION2.php");
include_once("../service/UtilisateurSERVICE.php");
include_once("../service/VoyageSERVICE.php");
include_once("../metier/Utilisateur.php");
include_once("../metier/Voyage.php");

session_start();

$utilisateurService = new UtilisateurService();
$voyageService = new VoyageService();

displayPageAccueil1();

// compteur de voyages trouvés dans la bdd //
$data=$voyageService->compterVoyages();
echo ($data . " voyages trouvés");

displayPageAccueil2();

$continents=$voyageService->chercherContinents(); 
    while($data=mysqli_fetch_array($continents)){
        selectContinent($data);
    }

displayPageAccueil3();

$voyages=$voyageService->afficherVoyages();

    while($data=mysqli_fetch_array($voyages)){
        $pays=$data["pays"];
        $ville=$data["ville"];


        if(!empty($_GET) && isset($_GET["continent"]) && !isset($_GET["afficher"])){ 
            $voyagesRetournes = filterVoyagesSelonContinentPaysEtVille($voyages,$_GET["continent"]);
            afficherOptionsPays($voyagesRetournes);
        } elseif(!empty($_GET) && isset($_GET["continent"]) && isset($_GET["pays"]) && !isset($_GET["afficher"])){ 
            $voyagesRetournes = filterVoyagesSelonContinentPaysEtVille($voyages,$_GET["continent"],$_GET["pays"]);
            afficherOptionsVilles($voyagesRetournes);
        } elseif(empty($_GET)) { 
            $voyagesRetournes = $voyages;
        } elseif(isset($_GET["continent"]) && isset($_GET["pays"]) && isset($_GET["ville"])){ 
            $voyagesRetournes = filterVoyagesSelonContinentPaysEtVille($voyages,$_GET["continent"], $_GET["pays"], $_GET["ville"]);
        } elseif(isset($_GET["continent"]) && isset($_GET["pays"])){ 
            $voyagesRetournes = filterVoyagesSelonContinentPaysEtVille($voyages,$_GET["continent"], $_GET["pays"]);
        } elseif(isset($_GET["continent"])){
            $voyagesRetournes = filterVoyagesSelonContinentPaysEtVille($voyages,$_GET["continent"]);
        }

        $rs=$voyageService->afficherVoyages();
        foreach ($voyagesRetournes as $voyage) { 
            while($data=mysqli_fetch_array($rs)){
                displayDatasTable1($data);
                $id=$data["id"];
                $donnee=$utilisateurService->afficherPseudoDepuisId($id);
                displayPseudoTable($donnee);
                displayDatasTable2($data);
            }
        } 
        
        
        function filterVoyagesSelonContinentPaysEtVille(array $voyages, string $continent, string $pays, string $ville=null) : array {
            
            $voyagesRetournes=[];
            foreach ($voyages as $voyage) { 
                if($ville && $pays && $continent && $ville == $voyage->ville && $pays == $voyage->pays && $continent == $voyage->continent){
                    $voyagesRetournes[] = $voyage;
                } elseif(!$ville && $pays && $continent && $pays == $voyage->pays && $continent == $voyage->continent){ 
                    $voyagesRetournes[]=$voyage; 
                } elseif(!$ville && !$pays && $continent && $continent == $voyage->continent){ 
                    $voyagesRetournes[]=$voyage; 
                } 
            }
            return $voyagesRetournes;
        }
        
        function afficherOptionsPays(array $voyagesRetournes){
            echo
                "<option value=''>-- Sélectionnez un pays --</option>"; 
            foreach ($voyagesRetournes as $voyage) { 
                echo
                    "<option value='" . $voyage->pays . "'>" . $voyage->pays . "</option>"; 
            }
        }
        
        function afficherOptionsVilles(array $voyagesRetournes){
            echo
                "<option value=''>-- Sélectionnez une ville --</option>"; 
            foreach ($voyagesRetournes as $voyage) { 
                echo
                    "<option value='" . $voyage->ville . "'>" . $voyage->ville . "</option>"; 
            }
        }

    }

displayPageAccueil4();

?>