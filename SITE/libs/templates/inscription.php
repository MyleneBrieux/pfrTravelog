<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="../css/inscription.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    

    <title>
        Inscription
    </title>
</head>

<body>
    <div class="container-fluid">

        <!-- EN-TÊTE DE LA PAGE AVEC LOGO ET TITRE -->
        <div class="row">

            <img src="../../img/logo_site/Logo_couleurs.png" class="logotravelog"/>

            <h1 class="nomtravelog">TRAVELOG</h1>

        </div>

        <!-- POLAROID DE GAUCHE -->
        <div class="row">

            <img src="../../img/photos/polaroid2.png" class="polaroid1"/>

            <!-- ENCADRE -->
            <!-- PHRASE D'ACCROCHE -->
            <div class="encadreinscription">
                <div class="introencadreinscription">
                    Inscription
                </div>

                <!-- FORMULAIRE -->
                <div class="formulaireinscription">
                    <div class="form-group">
                        <input type="text" class="pseudoinscription form-control" placeholder="Pseudo">
                    </div>
                    <div class="form-group">
                        <input type="text" class="adressemailinscription form-control" placeholder="Adresse email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="motdepasseinscription form-control" placeholder="Mot de passe">
                    </div>
                    <div class="form-group">
                        <input type="password" class="confirmationmotdepasseinscription form-control" placeholder="Confirmation du mot de passe">
                    </div>
                

                    <div class="CGU">
                        <label class="container">J'accepte les <a href src="" class="liencgu"  data-toggle="modal" data-target="#CGUPopUp">conditions générales d'utilisation</a>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>

                <!-- POP UP CGU -->
                <div class="modal fade" id="CGUPopUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLongTitle">Conditions Générales d'Utilisation</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            
                            <div class="modal-body">
                                <h5><strong>Titre</strong></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim odio vitae nibh volutpat blandit. 
                                        Integer massa elit, sodales vitae purus quis, tempus aliquet quam. Vivamus pharetra nunc sed est malesuada vulputate. 
                                        Fusce imperdiet lacus sit amet erat vehicula, vitae suscipit ex pharetra. Quisque in velit sem. Mauris malesuada tellus et mi tempus cursus. 
                                        Morbi ut diam aliquet, bibendum libero porta, finibus augue. Maecenas pharetra vulputate sapien in mattis. Pellentesque gravida pharetra facilisis. 
                                        Nullam libero nulla, gravida dapibus mi ut, finibus malesuada neque. Nunc tincidunt sed odio sed pretium. 
                                        Nullam ac dolor sit amet sapien porttitor semper in eu risus. Fusce ante erat, aliquet et ullamcorper in, venenatis sed nisl. 
                                        Donec venenatis dui mi, nec tempus mi ultrices vehicula. Proin blandit mauris urna, quis tempor lacus lobortis at. 
                                        Aenean mattis ipsum augue, a mattis nibh ultrices nec. Sed condimentum, odio eget fermentum viverra, lorem ante elementum justo, at auctor enim lorem in tellus. 
                                        Mauris euismod rhoncus quam, vitae blandit est porttitor non. Aliquam molestie diam sed finibus fringilla. Quisque hendrerit sit amet nisi id blandit. 
                                        Quisque viverra mattis elit, id porttitor tellus ultricies mollis. In vel aliquam ex, quis mollis magna. Nullam aliquet imperdiet laoreet. 
                                        Sed pharetra, ipsum et mollis ultricies, felis arcu semper ipsum, quis vehicula justo metus sed urna. Morbi urna nulla, lobortis sit amet tempus quis, auctor eget elit. 
                                        Nullam laoreet eu quam et aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id leo sit amet velit tincidunt vehicula. 
                                        Nam sollicitudin dignissim pretium. Suspendisse egestas tristique neque, nec elementum lorem vestibulum ut. Quisque egestas ex et dictum mattis. 
                                        Phasellus sed magna sed dolor varius dignissim et ac justo. Integer ligula elit, maximus ut posuere eu, porttitor vel purus.
                                        Etiam non ullamcorper risus, vitae ultrices libero. In tempus velit ac sem vulputate, a mattis urna interdum. Etiam cursus venenatis sagittis. 
                                        Vivamus molestie semper fermentum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum at lacus nisl. 
                                        Morbi semper ullamcorper sapien at mattis. Phasellus viverra bibendum justo in elementum. Nulla feugiat eros nisi, nec convallis lacus aliquam vel. 
                                        Maecenas posuere urna vel mi semper sodales. Nam eget accumsan dui, at vestibulum erat. Duis a porttitor sem. Suspendisse non bibendum arcu. 
                                        Sed neque dui, tempus nec ante id, mollis iaculis magna. Vivamus augue augue, tincidunt eu porttitor a, placerat ac elit. 
                                        Vestibulum vitae lectus ut augue ullamcorper congue at vitae tellus. Nunc eu nulla vitae mauris scelerisque sodales vitae a dui. 
                                        Pellentesque aliquet eleifend ex vel accumsan. Etiam feugiat ullamcorper lacinia. Pellentesque pretium dolor et nunc aliquet elementum. 
                                        Maecenas condimentum, leo quis tempor interdum, magna nisi molestie orci, in lobortis odio purus nec risus. Fusce volutpat ligula eu est lacinia condimentum. 
                                        In ac diam eget neque lacinia faucibus vel vitae nibh. Phasellus tempus diam a odio aliquet varius. Sed a ligula id massa lobortis posuere eget eu lacus.
                                        Cras pulvinar fermentum dui, eget faucibus lorem bibendum ut. Mauris et ante quam. Proin tempus neque sapien, quis pellentesque nisl vestibulum ut. 
                                        Aenean gravida diam eget lorem viverra, ut viverra nisl hendrerit. Aenean ante arcu, condimentum a lorem eget, tempor vulputate eros. 
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus eu finibus erat, ut mollis arcu. 
                                        Suspendisse dapibus tincidunt odio eu finibus. Phasellus eu purus posuere lorem pharetra pellentesque. Sed posuere tellus at lacus rhoncus, quis aliquam libero auctor. 
                                        Nam imperdiet tellus imperdiet, faucibus dolor a, faucibus ipsum. </p>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- BOUTON INSCRIPTION -->
                <button type="submit" class="boutoninscription btn"><strong>JE M'INSCRIS</strong></button>

                <!-- LIEN VERS LA PAGE DE CONNEXION -->
                <div class="connexion">
                    <strong>Pour se connecter, c'est par <a href="connexion.php" class="lienconnexion">ici</a></strong>
                </div>
            </div>

            <!-- POLAROID DE DROITE -->
            <img src="../../img/photos/polaroid.png" class="polaroid2"/>

        </div>

    </div>

</body>

</html>