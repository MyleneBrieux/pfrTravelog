$("#corpsTableVoyage").load("../../architecture_en_couche/controleur/menulatCONTROLEUR.php");

    $("#continent").on("change", function(e){ 
        const continentSelectionne = $(":selected").val(); 

            if (continentSelectionne){ 
                $("#pays").load("../../architecture_en_couche/controleur/menulatCONTROLEUR.php?continent=" + continentSelectionne); 
                $("#corpsTableVoyage").load("../../architecture_en_couche/controleur/menulatCONTROLEUR.php?continent=" + continentSelectionne + "&afficher=tableau"); 
            } else { 
                $("#pays").load("../../architecture_en_couche/controleur/menulatCONTROLEUR.php?continent=");
                $("#corpsTableVoyage").load("../../architecture_en_couche/controleur/menulatCONTROLEUR.php");
            }

    })


    $("#pays").on("change", function(e){ 
        const paysSelectionne = $("#pays :selected").val(); 
        const continentSelectionne = $("#continent option:selected").val(); 
            if (paysSelectionne){
                $("#ville").load("../../architecture_en_couche/controleur/menulatCONTROLEUR.php?continent=" + continentSelectionne + "&pays=" + paysSelectionne);
                $("#corpsTableVoyage").load("../../architecture_en_couche/controleur/menulatCONTROLEUR.php?continent=" + continentSelectionne + "&pays=" + paysSelectionne + "&afficher=tableau");   
            } else {
                $("#ville").load("../../architecture_en_couche/controleur/menulatCONTROLEUR.php?continent=" + continentSelectionne + "&pays=");
                $("#corpsTableVoyage").load("../../architecture_en_couche/controleur/menulatCONTROLEUR.php?continent=" + continentSelectionne +  "&afficher=tableau");
            }
    })


    $("#ville").on("change", function(e){ 
        const villeSelectionnee = $("#ville :selected").val();
        const paysSelectionne = $("#pays option:selected").val(); 
        const continentSelectionne = $("#continent option:selected").val(); 
            if (villeSelectionnee){
                $("#corpsTableVoyage").load("../../architecture_en_couche/controleur/menulatCONTROLEUR.php?continent=" + continentSelectionne + "&pays=" + paysSelectionne + "&ville=" + villeSelectionnee + "&afficher=tableau");   
            } else {
                $("#corpsTableVoyage").load("../../architecture_en_couche/controleur/menulatCONTROLEUR.php?continent=" + continentSelectionne +  "&pays=" + paysSelectionne + "&afficher=tableau");
            }
    })