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
            
            // $pdo = new PDO('mysql:host=localhost;dbname=travelog', 'mylene', 'afpamy13');
            // return $pdo;
        }

        // AJOUT UTILISATEUR //
        public function ajoutUtilisateur(string $pseudo, string $mail, string $password) {
            $mysqli=$this->connexion();
            $stmt = $mysqli->prepare("insert into utilisateurs(id,pseudo,mail,password,description,photoprofil,birthday,nation,contact,notifmail,code_langue) 
                                      VALUES (null,?,?,?,null,'photo',null,null,'Y','Y','1')");
            $stmt->bind_param("sss",$pseudo,$mail,$password);
            $stmt->execute();
            $mysqli->close();

            // $pdo=$this->connexion();
            // $stmt=$pdo->prepare("insert into utilisateurs(id,pseudo,mail,password,description,photoprofil,birthday,nation,contact,notifmail,code_langue) 
            //                     values(null,:pseudo,:mail,:password,null,'photo',null,null,'Y','Y','1')");
            // $stmt->execute(array(
            //     'pseudo' => $_POST["pseudo"],
            //     'mail' => $_POST["mail"],
            //     'password' => $_POST["password"]
            //     ));
            // $pdo=null;
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

            // $pdo=$this->connexion();
            // $stmt = $pdo->prepare("select * from utilisateurs where mail=?");
            // $stmt->bindParam("s",$mail);
            // $stmt->setFetchMode(PDO::FETCH_ASSOC);
            // $stmt->execute(); 
            // $data = $stmt->fetchAll(); 
            // $pdo=null;
            // return $data;
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

            // $pdo=$this->connexion();
            // $stmt = $pdo->prepare("select * from utilisateurs where pseudo=?");
            // $stmt->execute(array($data));
            // $stmt->bindParam("s",$pseudo);
            // $stmt->setFetchMode(PDO::FETCH_ASSOC);
            // $data=$stmt->fetchAll();
            // $pdo=null;
            // return $data;
            // var_dump($data);
        }

        // MODIFICATION //
        public function modifierUtilisateur(Utilisateur $utilisateur):void{   
            $pdo=$this->connexion();
            $stmt=$pdo->prepare("update utilisateurs set mail=?, password=?, pseudo=?, birthday=?, nation=?, contact=?, notifMail=? where pseudo=?");
            $mail=$utilisateur->getMail();
            $password=$utilisateur->getPassword();
            $pseudo=$utilisateur->getPseudo();
            $birthday=$utilisateur->getBirthday();
            $nation=$utilisateur->getNationalite();
            $contact=$utilisateur->getContact();
            $notifMail=$utilisateur->getNotifMail();
            $stmt->bindParam("ssssssss", $mail, $password, $pseudo, $birthday, $nation, $contact, $notifMail, $pseudo);
            $stmt->execute();
            $pdo=null;
        }

    }

?>