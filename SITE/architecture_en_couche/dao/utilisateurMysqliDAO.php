<?php

include_once("../metier/Utilisateur.php");

    class UtilisateurMysqliDao {

        // public function connexion() {
        //     $user = 'mylene';
        //     $password = 'afpamy13';
        //     $mysqli = new PDO('mysql:host=localhost; dbname=pfrtravelog', $user, $password);
        //     return $mysqli;
        // }

        public function connexion() {
            $mysqli= new mysqli('localhost','mylene','afpamy13','pfrtravelog');
            return $mysqli;
        }

        // public function ajoutUtilisateur(string $mail, string $password) {
        //     $mysqli=$this->connexion();
        //     $stmt = $mysqli->prepare("insert into utilisateurs(mail,password) values(?,?)");
        //     $stmt->bindParam(":mail",$mail, ":password", $password);
        //     $mysqli->exec($stmt);
        // }

        public function ajoutUtilisateur(string $pseudo, string $mail, string $password) {
            $mysqli=$this->connexion();
            $stmt = $mysqli->prepare("insert into utilisateurs(id,pseudo,mail,password) values(null,?,?,?)");
            $stmt->bind_param("sss",$pseudo,$mail,$password);
            $stmt->execute();
            $mysqli->close();
        }
        
        // public function chercherUtilisateur(string $mail) : ?array {
        //     $mysqli=$this->connexion();
        //     $stmt = $mysqli->prepare("select * from utilisateurs where mail=?");
        //     $stmt->bindParam(":mail",$mail);
        //     $rs=exec($stmt);
        //     $data = $rs->fetch(PDO::FETCH_ASSOC);
        //     $rs->close();
        //     return $data;
        // }

        public function chercherUtilisateurParMail(string $mail) : ?array {
            $mysqli=$this->connexion();
            $stmt = $mysqli->prepare("select * from utilisateurs where mail=?");
            $stmt->bind_param("s",$mail);
            $stmt->execute();
            $rs = $stmt->get_result();
            $data = $rs->fetch_array(MYSQLI_ASSOC);
            $rs->free();
            $mysqli->close();
            return $data;
        }

        public function chercherUtilisateurParPseudo(string $pseudo) : ?array {
            $mysqli=$this->connexion();
            $stmt = $mysqli->prepare("select * from utilisateurs where pseudo=?");
            $stmt->bind_param("s",$pseudo);
            $stmt->execute();
            $rs = $stmt->get_result();
            $data = $rs->fetch_array(MYSQLI_ASSOC);
            $rs->free();
            $mysqli->close();
            return $data;
        }

    }

?>