$("#checkedContinent").on("change", function(e){ 
    const continentSelectionne = $(":selected"); 

        if (continentSelectionne){ 
            $.get("??" + continentSelectionne + "??", function(data){

            })

        } 

})