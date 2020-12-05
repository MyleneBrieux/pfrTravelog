<?php
include_once("../model-metier/Utilisateur.php");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include_once("dao_exception.php");


    class UtilisateurMysqliDao {

        // public function connexion() {
        //     $user = 'mylene';
        //     $password = 'afpamy13';
        //     $mysqli = new PDO('mysql:host=localhost; dbname=pfrtravelog', $user, $password);
        //     return $mysqli;
        // }


 /*CONNEXION*/       
        public function connexion() {
            $mysqli= new mysqli('localhost','mylene','afpamy13','pfrtravelog');
            return $mysqli;

            // $mysqli = new PDO('mysql:host=localhost; dbname=pfrtravelog', 'andhromede', 'Fm8APqpp');
            // return $mysqli;
        }

        // public function ajoutUtilisateur(string $mail, string $password) {
        //     $mysqli=$this->connexion();
        //     $stmt = $mysqli->prepare("insert into utilisateurs(mail,password) values(?,?)");
        //     $stmt->bindParam(":mail",$mail, ":password", $password);
        //     $mysqli->exec($stmt);
        // }

/* AJOUT UTILISATEUR*/
        public function ajoutUtilisateur(string $mail, string $password) {
            $mysqli=$this->connexion();
            $stmt = $mysqli->prepare("INSERT INTO utilisateurs (id, mail, password) VALUES (null,?,?)");
            $stmt->bind_param("ss",$mail,$password);
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


/* RECHERCHE UTILISATEUR PAR MAIL*/        
        public function chercherEmail(string $mail) : ?array {
            $mysqli=$this->connexion();
            $stmt = $mysqli->prepare("SELECT * FROM utilisateurs WHERE mail=?");
            $stmt->bind_param("s",$mail);
            $stmt->execute();
            $rs = $stmt->get_result();
            $data = $rs->fetch_array(MYSQLI_ASSOC);
            $rs->free();
            $mysqli->close();
            return $data;
        }


/* RECHERCHE UTILISATEUR PAR PSEUDO*/
        public function chercherPseudo(string $pseudo) : ?array {
            $mysqli=$this->connexion();
            $stmt = $mysqli->prepare("SELECT * FROM utilisateurs WHERE pseudo=?");
            $stmt->bind_param("s",$pseudo);
            $stmt->execute();
            $rs = $stmt->get_result();
            $data = $rs->fetch_array(MYSQLI_ASSOC);
            $rs->free();
            $mysqli->close();
            return $data;
        }


/* MODIFICATION de PROFIL*/        
        public function updateProfil(Utilisateur $utilisateur):void{   
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare("UPDATE utilisateurs SET mail=?, password=?, pseudo=?, birthday=?, nation=?, contact=?, notifMail=? WHERE login=?");
            $stmt->bind_param("ssssssss", $mail, $password, $pseudo, $birthday, $nation, $contact, $notifMail);
            $stmt->execute();
            $rs=$stmt->get_result();
            $employe=$rs->fetch_array(MYSQLI_ASSOC);
    
            $objetUtilisateur= New Utilisateur(
            ($utilisateur['mail']), 
            ($utilisateur['password']), 
            ($utilisateur['pseudo']), 
            ($utilisateur['birthday']),  
            ($utilisateur['nation']), 
            ($utilisateur['contact']), 
            ($utilisateur['notifMail']) );
            $mysqli->close();
        }

















    }

?>