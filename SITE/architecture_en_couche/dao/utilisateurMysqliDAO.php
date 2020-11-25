<?php

include_once("../metier/Utilisateur.php");
// include_once("DaoUtilisateurINTERFACE.php");

$user = 'mylene';
$password = 'afpamy13';

    class UtilisateurMysqliDao {

        public function connexion() {
            $mysqli = new PDO('mysql:host=localhost; dbname=pfrTravelog', $user, $password);
            return $mysqli;
        }

        public function ajoutUtilisateur(string $mail, string $password) {
            $mysqli=$this->connexion();
            $stmt = $mysqli->prepare ("insert into utilisateurs(mail,password) values(?,?)");
            $stmt->bindParam(":mail",$mail, ":password", $password);
            $mysqli->exec($stmt);
        }
        
        public function chercherUtilisateur(string $mail) : ?array {
            $mysqli=$this->connexion();
            $stmt = $mysqli->prepare ("select * from utilisateurs where mail=?");
            $stmt->bindParam(":mail",$mail);
            $rs=exec($stmt);
            $data = $rs->fetch(PDO::FETCH_ASSOC);
            $rs->close();
            return $data;
        }

    }

?>