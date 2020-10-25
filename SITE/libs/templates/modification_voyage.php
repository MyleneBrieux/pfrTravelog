<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../css/modification_voyage.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification de voyage</title>
</head>
<body>
    <div class="container-fluid">
            <!--Header-->
            <div class="header">
                <?php include 'navbar.php' ?>
            </div>

        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 pl-0 col-12 bg-sable">
                <nav class="bg-sable menu centrage"></br>
                    <div class="col-lg-12 col-md-6 col-sm-6 pl-1 col-12">
                        <h5>Titre</h5>
                        <h6>Dates voyage</h6>
                        <button type="button" class="btn btn-primary">+ Ajouter une étape</button></br>
                        <label class="checkbox">
                            <input type="checkbox"> Partager ce voyage uniquement avec mes amis
                        </label>
                        <button type="button" class="btn btn-danger">Supprimer ce voyage</button>
                    </div>
                </nav>
            </div>

            <div class="col-lg-10 col-md-8 col-sm-8 col-12">
                <h1>Jour 1 - 21 Juillet 2020</h1>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a
                    galley of type and scrambled it to make a type specimen book. It has survived not only five
                    centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                    passages, and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.
                </p>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 bg-sable">
                        <p>                 </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <h1>Jour 2 - 22 Juillet 2020</h1>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only five
                                centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.
                            </p>
                    </div>
                </div>

            </div>
        </div>

        <footer>
            <?php include 'footer.php' ?>
        </footer>
            

    </div>
</body>
</html>