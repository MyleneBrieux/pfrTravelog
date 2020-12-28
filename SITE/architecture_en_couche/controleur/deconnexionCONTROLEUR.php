<?php

unset($_SESSION["mail"]);
session_destroy();
header('Location: connexionCONTROLEUR.php');

?>