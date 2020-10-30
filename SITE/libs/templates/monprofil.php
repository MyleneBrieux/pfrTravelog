<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../css/monprofil.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--JavaScript-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/20f2b0d45a.js" crossorigin="anonymous"></script>
    <title>Mon profil</title>
</head>
<body>
    <div class="container-fluid">
        <!--Header-->
        <div class="header">
            <?php include 'navbar.php' ?>
        </div>

            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 pl-0 col-12 bg-sable">
                    <nav class="menu centrage">
                        <div class="col-lg-12 col-md-6 col-sm-6 pl-1 col-12">
                            <div class="image-profil" width=250 height=250>
                                <img src="../../img/photos/photo_profil_detail_voyage.jpg" alt="photo de profil" width="100%" height="100%" />
                            </div>
                        </div>
                    </nav>
                </div>
            </div>


            <footer>
            <!--footer-->
        <div class="footer">
            <?php include 'footer.php' ?>
        </div>
            </footer>
    </div>
</body>
</html>