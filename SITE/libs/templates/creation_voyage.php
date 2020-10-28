<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../css/creation_voyage.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/20f2b0d45a.js" crossorigin="anonymous"></script>
    <title>Création de Voyage</title>
</head>
        <body class="background-body">
            <!--Bloc central-->
                <div class="container">
                    <div class="header">
                        <?php include 'navbar.php' ?>
                    </div>

                    <h1>Création de voyage</h1>

            <!--Titre du voyage-->
                    <div class="row form-titre ml-1 mr-1">
                        <input class="form-control" type="text" placeholder="Titre">
                    </div>

                    <!--Les filtres-->
                        <h4>Filtres</h4>
                            <div class="row d-flex justify-content-around">
                                <p>+ ajouter un continent</p>
                                <p>+ ajouter un pays</p>
                                <p>+ ajouter une ville</p>
                            </div>

                    <!--Les dates du séjour-->
                        <div class="row ml-1 mr-1 d-flex justify-content-between">
                            <p>
                                Date de début de séjour:</br> <input type="date" name="date_debut_sejour">
                            </p>

                            <p>
                                Date de fin de séjour:</br> <input type="date" name="date_fin_sejour">
                            </p>
                        </div>

                    <!--Formulaire du texte du voyage-->
                        <div class="row form-text ml-1 mr-1">
                            <textarea class="form-control" id="texte_voyage" rows="20" placeholder="Texte"></textarea>
                        </div>

                    <!--Les boutons d'ajout-->
                        <div class="row d-flex justify-content-center">
                            <button type="button" class="button">+ Ajouter un sous-titre</button>
                        </div>

                        <div class="row d-flex justify-content-center">
                            <button type="button" class="button">+ Ajouter un texte</button>
                        </div>

                    <!--Form pour ajouter ses fichiers-->
                        <div class="row form-files d-flex justify-content-center">
                            <form class="rectangle-files addfiles">
                                <input type="file" class="form-control-file" id="ajoutFichiers" name="files" multiple>
                            </form>
                        </div>

                    <!--La checkbox-->
                        <div class="row d-flex justify-content-center">
                            <label class="rectangle-checkbox checkbox">
                                <input type="checkbox"> Partager ce voyage uniquement avec mes amis
                            </label>
                        </div>

                    <!-- Les boutons pour la publication -->
                        <div class="row btn-group d-flex justify-content-center" role="group">
                            <button type="button" class="btn-group">Ajouter maintenant</button>
                            <button type="button" class="btn-group">Ajouter plus tard</button>
                        </div>
                </div>
        </body>
        <footer class="footer">
            <?php include 'footer.php' ?>
        </footer>
</html>