<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../css/creation_voyage.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <div class="row form-titre">
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
                        <div class="row d-flex justify-content-between">
                            <p>
                                Date de début de séjour: <input type="date" name="date_debut_sejour">
                            </p>

                            <p>
                                Date de fin de séjour: <input type="date" name="date_fin_sejour">
                            </p>
                        </div>

                    <!--Formulaire du texte du voyage-->
                        <div class="row form-text">
                            <textarea class="form-control" id="texte_voyage" rows="20" placeholder="Texte"></textarea>
                        </div>

                    <!--Les boutons d'ajout-->
                        <div class="row boutons d-flex justify-content-center">
                            <button type="button" class="btn btn-primary btn-lg center-block">+ Ajouter un sous-titre</button>
                        </div>

                        <div class="row boutons d-flex justify-content-center">
                            <button type="button" class="btn btn-primary btn-lg">+ Ajouter un texte</button>
                        </div>

                    <!--Form pour ajouter ses fichiers-->
                        <div class="row form-files d-flex justify-content-center">
                            <mark class="checkbox-background"><form class="addfiles">
                                <input type="file" class="form-control-file" id="ajoutFichiers">
                            </form></mark>
                        </div>

                    <!--La checkbox-->
                        <div class="row d-flex justify-content-center">
                            <mark class="checkbox-background"><label class="checkbox">
                                <input type="checkbox"> Partager ce voyage uniquement avec mes amis
                            </label></mark>
                        </div>

                    <!-- Les boutons pour la publication -->
                        <div class="row btn-group d-flex justify-content-center" role="group">
                            <button type="button" class="btn btn-primary">Ajouter maintenant</button>
                            <button type="button" class="btn btn-primary">Ajouter plus tard</button>
                        </div>
                </div>
        </body>
        <footer class="footer">
            <?php include 'footer.php' ?>
        </footer>
</html>