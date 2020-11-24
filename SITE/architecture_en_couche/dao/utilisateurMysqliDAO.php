<?php

include_once("../metier/Utilisateur.php");
// include_once("DaoUtilisateurINTERFACE.php");

    class UtilisateurMysqliDao {

        public function connexion() {
            $mysqli = new PDO('mysql:host=localhost; dbname=pfrTravelog', 'mylene', 'afpamy13');
            return $mysqli;
        }

        public function ajoutUtilisateur(string $mail, string $password) {
            $mysqli=$this->connexion();
            $stmt = $mysqli->prepare ("insert into utilisateurs(mail,password) values(?,?)");
            $stmt->bindParam(":mail",$mail, ":password", $password);
            $mysqli->exec($stmt);
            // $mysqli->close();
        }
        
        public function chercherUtilisateur(string $mail) : ?array {
            $mysqli=$this->connexion();
            $stmt = $mysqli->prepare ("select * from utilisateurs where mail=?");
            $stmt->bindParam(":mail",$mail);
            $mysqli->exec($stmt);
            $data = $rs->fetch(PDO::FETCH_ASSOC);
            // $rs->free();
            // $mysqli->close();
            return $data;
        }

    }

?>