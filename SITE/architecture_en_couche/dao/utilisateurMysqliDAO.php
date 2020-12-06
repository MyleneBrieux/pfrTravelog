<?php

// LIAISONS AVEC AUTRES COUCHES //
include_once("../metier/Utilisateur.php");
include_once("dao_exception.php");

// GESTION DES ERREURS //
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


    class UtilisateurMysqliDao {

        // CONNEXION //
        public function connexion() {
            $mysqli= new mysqli('localhost','mylene','afpamy13','travelog');
            return $mysqli;
        }

        // AJOUT //
        public function ajoutUtilisateur(string $mail, string $password, string $pseudo) {
            $mysqli=$this->connexion();
            $stmt = $mysqli->prepare("insert into utilisateurs(id,mail,password,pseudo) VALUES (null,?,?,?)");
            $stmt->bind_param("sss",$mail,$password,$pseudo);
            $stmt->execute();
            $mysqli->close();
        }

        // RECHERCHE UTILISATEUR PAR EMAIL //
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

        // RECHERCHE UTILISATEUR PAR PSEUDO //
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

        // MODIFICATION //
        public function modifierUtilisateur(Utilisateur $utilisateur):void{   
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare("update utilisateurs set mail=?, password=?, pseudo=?, birthday=?, nation=?, contact=?, notifMail=? where pseudo=?");
            $mail=$utilisateur->getMail();
            $password=$utilisateur->getPassword();
            $pseudo=$utilisateur->getPseudo();
            $birthday=$utilisateur->getBirthday();
            $nation=$utilisateur->getNationalite();
            $contact=$utilisateur->getContact();
            $notifMail=$utilisateur->getNotifMail();
            $stmt->bind_param("ssssssss", $mail, $password, $pseudo, $birthday, $nation, $contact, $notifMail, $pseudo);
            $stmt->execute();
            $mysqli->close();
        }

    }

?>