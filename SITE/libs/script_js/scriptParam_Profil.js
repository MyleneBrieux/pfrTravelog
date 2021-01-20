
    $("#photo").on("click", function(e){
        $('#inputchangePhoto').click();
    })


    $("#inputValidPhoto").on("click", function(e){
        $('#photo').reload();
    })


    // $("#photo").on("change", function(e){
    //     $('#photo').reload();
    // })












































    // $(document).ready(function() {
    // //au click sur le lien chercher
    // $(".chercher").click(function(){
    // //on recupere la valeur de l'attribut name pour afficher tel ou tel resultat
    // var req=$(this).attr("name");
    // //requête ajax, appel du fichier recherche.php
    // $.ajax({
    // type: "GET",
    // url: "recherche.php?type_demande="+req,
    // dataType : "html",
    // //affichage de l'erreur en cas de problème
    // error:function(msg, string){
    // alert( "Error !: " + string );
    // },
    // success:function(data){
    // //alert(data);
    // //on met à jour le div zone_de_rechargement avec les données reçus
    // //on vide la div et on le cache
    // $("#zone_de_rechargement").empty().hide();
    // //on affecte les resultats au div
    // $("#zone_de_rechargement").append(data);
    // //on affiche les resultats avec la transition
    // $('#zone_de_rechargement').fadeIn(2000);
    // }
    // });
    // });
    // })



    // :$(#myDiv).load(location.href+ #myDiv>*,);