<?php

// LIAISONS AVEC AUTRES COUCHES //
include_once("../metier/Utilisateur.php");
include_once("../metier/Voyage.php");
include_once("../metier/Notifications.php");
include_once("dao_exception.php");

// GESTION DES ERREURS //
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    class UtilisateurMysqliDao {

        /* CONNEXION */       
        public function connexion() {
            $mysqli= new mysqli('localhost','mylene','afpamy13','travelog');
            return $mysqli;
        }


        /* AJOUT UTILISATEUR */
        public function ajoutUtilisateur(string $pseudo, string $mail, string $password) {
            $mysqli=$this->connexion();
            $stmt = $mysqli->prepare("insert into utilisateurs (id, pseudo, mail, password, description, photoprofil, birthday, nation, contact, notifmail, code_langue) 
                                      VALUES (null, ?, ?, ?, null, 'photo', null, null, 'Y', 'Y', '1')");
            $stmt->bind_param("sss", $pseudo, $mail, $password);
            $stmt->execute();
            $mysqli->close();
        }


        /* RECHERCHE UTILISATEUR PAR MAIL */        
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


        /* RECHERCHE UTILISATEUR PAR PSEUDO */
        public function chercherUtilisateurParPseudo(string $pseudo) : ?array {
            $mysqli=$this->connexion();
            $stmt = $mysqli->prepare("select * from utilisateurs inner join langues on utilisateurs.code_langue=langues.code_langue where pseudo=?");
            $stmt->bind_param("s",$pseudo);
            $stmt->execute();
            $rs = $stmt->get_result();
            $info = $rs->fetch_array(MYSQLI_ASSOC);
            $rs->free();
            $mysqli->close();
            return $info;
        }

        /* RECHERCHE PHOTO DE PROFIL UTILISATEUR */
        public function chercherPhotoProfilUtilisateur(string $photoProfil) : ?array {
            $mysqli=$this->connexion();
            $stmt = $mysqli->prepare("select photoprofil from utilisateurs where pseudo=?");
            $stmt->bind_param("s",$photoProfil);
            $stmt->execute();
            $rs = $stmt->get_result();
            $data = $rs->fetch_array(MYSQLI_ASSOC);
            $rs->free();
            $mysqli->close();
            return $data;
        }

        /* AFFICHER LES NOTIFICATIONS SELON L'UTILISATEUR */
        // public function afficherNotificationsParUtilisateur() : ?array {
        //     $mysqli=$this->connexion();
        //     $stmt = $mysqli->prepare("select * from notifications where pseudo=?");
        //     $stmt->bind_param("s",$photoProfil);
        //     $stmt->execute();
        //     $rs = $stmt->get_result();
        //     $data = $rs->fetch_array(MYSQLI_ASSOC);
        //     $rs->free();
        //     $mysqli->close();
        //     return $data;
        // }

        /* AFFICHER LES DEMANDES D'AMIS SELON L'UTILISATEUR */
        // public function afficherDemandesAmisParUtilisateur(string $pseudo) : ?array {
        //     $mysqli=$this->connexion();
        //     $stmt = $mysqli->prepare("select * from utilisateurs as u inner join utilisateurs as ut on u.id=ut.id where pseudo=?");
        //     $stmt->bind_param("s",$pseudo);
        //     $stmt->execute();
        //     $rs = $stmt->get_result();
        //     $data = $rs->fetch_array(MYSQLI_ASSOC);
        //     $rs->free();
        //     $mysqli->close();
        //     return $data;
        // }

        /* MODIFICATION D'UN UTILISATEUR */        
        public function modifierUtilisateur(Utilisateur $utilisateur):void{   
            $mail=$utilisateur->getMail();
            $password=$utilisateur->getPassword();
            $pseudo=$utilisateur->getPseudo();
            $birthday=$utilisateur->getBirthday();
            $nation=$utilisateur->getNationalite();
            $contact=$utilisateur->getContact();
            $notifMail=$utilisateur->getNotifMail();

            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare("UPDATE utilisateurs set mail=?, password=?, pseudo=?, birthday=?, nation=?, contact=?, notifMail=? where pseudo=?");
            $stmt->bindParam("ssssssss", $mail, $password, $pseudo, $birthday, $nation, $contact, $notifMail, $pseudo);
            $stmt->execute();
        }


        /* SUPPRESSION D'UN UTILISATEUR */
        public function deleteUtilisateur(int $noemp) :void{ 
            $mysqli= new mysqli('localhost','andhromede','Fm8APqpp','utilisateur');
            $stmt=$mysqli->prepare("DELETE from utilisateur WHERE pseudo=?");
            $stmt->bind_param("i", $pseudo);
            $stmt->execute();
            $mysqli->close();
        }

    }

?>