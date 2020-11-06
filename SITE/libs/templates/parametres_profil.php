<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../icofont/icofont.css">
    <link rel="stylesheet" href="../css/parametres_profil.css">

    <script src="../jquery/jquery-3.5.1.js" defer></script>
    <script src="../popper/popper.js" defer></script>
    <script src="../bootstrap/js/bootstrap.js" defer></script>
    <script src="../js/index.js" defer></script>

     <link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet"> 

    <title>TRAVELOG</title>
</head>

<body>

    <?php   
        include("navbar.php");
      
    ?>


    <div class="container-fluid d-flex">

        <div class="row">

            <div class="col-12 col-sm-8 col-md-7 col-lg-5 col-xl-3">
                <div class=" menulat">

                    <img src="../../img/photos/nath.jpg" alt="Bootstrap" class="photo-profil">

                    <div class="membre txt-menu-responsive">Membre depuis le : </div>
                    <div class="age">35 ans</div>
                    <div class="langues-parlees">Langues parlées :</div>

                    <div class="langues">
                        <ul>
                            <li class="txt-menu-responsive">Français</li>
                        </ul>
                    </div>

                    <div class="logos-menu">
                        <div><a href=""><img class="oeil" src="../../img/logos_divers/suivre2.png" alt="logo suivre"
                                    class="photo-profil"><span class="liens-menu">Suivre</span></a></div>

                        <div><a href=""><img class="oeil" src="../../img/logos_divers/ami_turquoise2.png" alt="logo ami"
                                    class="photo-profil"><span class="liens-menu">Ajouter en ami</span></a></div>
                    </div>

                    <button type="button" class="btn btn-info bouton-contact">Mes voyages</button>

                </div>
            </div>



            <div class="col-9 col-sm-4 col-md-5 col-lg-7 col-xl-9 formulaire1">
                <div class="row">

                    <!-- INPUT COORDONNEES-->

                    <div class="row">

                        <div class="col-12 txt-nom">
                            <div class="nom">John Doe</div>
                        </div>

                     
                        <form>

                            <div class="col-12">
                                <div class="txt-securite">Profil :</div>
                            </div>

                            <div class="col-12 formulaire-coordonnees securite  txt-input">
                                <div class="row">
                                    <div class="col-6">
                                        <label>Nom:</label><input type="text" class="form-control input-beige" placeholder="John">
                                    </div>
                                    <div class="col-6">
                                        <label>Prenom:</label><input type="text" class="form-control input-beige" placeholder="Doe">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <label>Date de naissance:</label><input type="date" class="input-beige form-control" >
                                    </div>
                                    <div class="col-6">
                                        <label>Nationnalité:</label><input type="text" class="input-beige form-control"  placeholder="Français">
                                    </div>
                                </div>
                            </div>


                            <button type="button" class="btn btn-info bouton-modifier1">Modifier</button>



                            <!-- INPUT SECURITE -->

                            <div class="col-12 txt-securite">
                                <div class="">Securité :</div>
                            </div>

                            <div class="col-12 formulaire-coordonnees securite  txt-input">
                                <div class="row">
                                    <div class="col-6">
                                        <label>Mots de passe:</label><input type="password" class="input-beige form-control">
                                    </div>
                                    <div class="col-6">
                                        <label>Confirmation:</label><input type="password" class="input-beige form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <label>Email:</label><input type="email" class="input-beige form-control" placeholder="john.doe@gmail.com">
                                    </div>
                                    <div class="col-6">
                                        <label>Confirmation:</label><input type="email" class="input-beige form-control" placeholder="john.doe@gmail.com">
                                    </div>
                                </div>
                            </div>

                            <button type="button" class="btn btn-info bouton-modifier1">Modifier</button>




                            <!-- INPUT DIVERS -->


                            <div class="col-12 txt-securite">
                                <div class="">Divers :</div>
                            </div>

                            <div class="col-12 formulaire-coordonnees2 securite  txt-input">
                                <div class="row">
                                    
                                    <div class="col-12">
                                        <label>Langues parlées:</label>

                                        <select id="langues" class="select">
                                            <option value="valeur1" selected>Français</option>
                                            <option value="valeur2">Allemand</option>
                                            <option value="valeur2">Anglais</option>
                                            <option value="valeur3">Chinois</option>
                                            <option value="valeur3">Coréen</option>
                                            <option value="valeur3">Espagnol</option>
                                            <option value="valeur2">Italien</option>
                                            <option value="valeur3">Japonais</option>
                                            <option value="valeur2">Russe</option>
                                        </select>
                                    </div>

                                </div>


                            </div>
                            <button type="button" class="btn btn-info bouton-modifier1">Modifier</button>
                            <!-- INPUT CONFIDENTIALITE -->


                            <div class="col-12 txt-securite">
                                <div class="">Confidentialité :</div>
                            </div>

                            <div class="col-12 formulaire-coordonnees securite txt-input">
                                <div class="row">

                                    <div class="col-12 mt-3">
                                        <input type="checkbox" class="checkbox"><label>J'accepte de reçevoir des
                                            demande d'ami</label>
                                    </div>

                                    <div class="col-12">
                                        <input type="checkbox" class="checkbox"><label>J'accepte de reçevoir des
                                            notifications par mail</label>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-12">
                                        <input type="checkbox" class="checkbox"><label>Supprimer mon compte</label>
                                    </div>

                                </div>
                            </div>




                        </form>

                        <button type="button" class="row btn btn-info bouton-modifier1 ">VALIDER</button>



                    </div>







                </div>
            </div>


        </div>
    </div>









    <?php   
        include("footer.php");
        ?>












































































</body>

</html>