<?php

session_start();
unset($_SESSION["mail"]);
session_destroy();
header('Location: accueilCONTROLEUR.php');

?>