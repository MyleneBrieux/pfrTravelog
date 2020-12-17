<?php

// FONCTIONS GLOBALES //
function displayFooter(){
    topTagHtml();
    head();
    topTagBody();
    displayBottomFooter();
    popUpCGU();
    popUpML();
    bottomTagBody();
    bottomTagHtml();
}


// FONCTIONS EN VRAC //

function topTagHtml(){
    echo
        "<!DOCTYPE html>
        <html lang='fr'>";
}

function head(){
    echo
        '<head>
            <meta charset="UTF-8">
        
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
                  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <link rel="stylesheet" href="../../libs/css/footer.css">

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
            <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet"> 
        
            <title>Footer</title>
        </head>';
}

function topTagBody(){
    echo
        '<body>';
}

function displayBottomFooter(){
    echo
        '<footer>
            <div class="footer row">

                <div class="CGU col-3">
                    <a href src="" class="liencgu" name="checkcgu" data-toggle="modal" data-target="#CGUPopUp">
                        Conditions générales d\'utilisation
                    </a>
                </div>

                <div class="ML col-3">
                    <a href src="" class="lienML" name="checkML" data-toggle="modal" data-target="#mlPopUp">
                        Mentions légales
                    </a>
                </div>

                <div class="contact col-3">
                    <a href="../controleur/contactCONTROLEUR.php" class="liencontact">
                        Contact
                    </a>
                </div>

                <div class="copyright col-3">© 2020 Travelog</div>
            </div>
        </footer>';
}

function popUpCGU(){
    echo
        '<div class="modal fade" id="CGUPopUp">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="cgu-title"><strong>Conditions Générales d\'Utilisation</strong></h4>
                    </div>
            
                    <div class="modal-body">
                        <h5><strong>Conditions de service</strong></h5>
                            <p class="text-cgu">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim odio vitae nibh volutpat blandit. 
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
                            </p>
                        <h5><strong>Politique d\'utilisation des données</strong></h5>
                            <p class="text-cgu">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim odio vitae nibh volutpat blandit. 
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
                            </p>
                        <h5><strong>Standards de la communauté</strong></h5>
                            <p class="text-cgu">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim odio vitae nibh volutpat blandit. 
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
                            </p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="btn-fermer-cgu" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>';
}

function popUpML(){
    echo
        '<div class="modal fade" id="mlPopUp">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="ML-title"><strong>Mentions légales</strong></h4>
                    </div>
            
                    <div class="modal-body">
                        <h5><strong>Informations sur la société</strong></h5>
                            <p class="text-ML">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim odio vitae nibh volutpat blandit. 
                                Integer massa elit, sodales vitae purus quis, tempus aliquet quam. Vivamus pharetra nunc sed est malesuada vulputate. 
                                Fusce imperdiet lacus sit amet erat vehicula, vitae suscipit ex pharetra. Quisque in velit sem. Mauris malesuada tellus et mi tempus cursus. 
                                Morbi ut diam aliquet, bibendum libero porta, finibus augue. Maecenas pharetra vulputate sapien in mattis. Pellentesque gravida pharetra facilisis. 
                                Nullam libero nulla, gravida dapibus mi ut, finibus malesuada neque. Nunc tincidunt sed odio sed pretium. 
                            </p>
                        <h5><strong>Activité</strong></h5>
                            <p class="text-ML">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim odio vitae nibh volutpat blandit. 
                                Integer massa elit, sodales vitae purus quis, tempus aliquet quam. Vivamus pharetra nunc sed est malesuada vulputate. 
                                Fusce imperdiet lacus sit amet erat vehicula, vitae suscipit ex pharetra. Quisque in velit sem. Mauris malesuada tellus et mi tempus cursus. 
                                Morbi ut diam aliquet, bibendum libero porta, finibus augue. Maecenas pharetra vulputate sapien in mattis. Pellentesque gravida pharetra facilisis. 
                                Nullam libero nulla, gravida dapibus mi ut, finibus malesuada neque. Nunc tincidunt sed odio sed pretium. 
                            </p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="btn-fermer-ML" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>';
}

function bottomTagBody(){
    echo
        '</body>';
}

function bottomTagHTML(){
    echo
        '</html>';
}

?>