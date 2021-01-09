<?php

// LIAISONS AVEC AUTRES COUCHES //
include_once("../metier/Utilisateur.php");
// include_once("../metier/Utilisateurs.php");
include_once("../metier/Voyage.php");
include_once("../metier/Notification.php");
include_once("../metier/DemandeAmi.php");

// GESTION DES ERREURS //
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include_once("dao_exception.php");

    class UtilisateurMysqliDao {

    /* CONNEXION */       
        public function connexion() {
            try {
                $mysqli= new mysqli('localhost','mylene','afpamy13','travelog');
                // $mysqli= new mysqli('localhost','root','','travelog');
                return $mysqli;
            } catch (mysqli_sql_exception $a) {
                throw new DaoException($a->getMessage(), $a->getCode());
            }
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

    /* COMPTER LES NOTIFICATIONS */
    public function compterNotifications(int $id) {
        $mysqli=$this->connexion();
        $stmt=$mysqli->prepare('select * from notifications where id=?');
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $rs=$stmt->get_result();
        $data=mysqli_num_rows($rs);
        $mysqli->close();
        return $data;
    }

    /* COMPTER LES DEMANDES D'AMI */
        public function compterDemandesAmi(int $id) {
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare('select * from demande_ami where id=?');
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $rs=$stmt->get_result();
            $data=mysqli_num_rows($rs);
            $mysqli->close();
            return $data;
        }

    /* RECHERCHE UTILISATEUR PAR PSEUDO / DEMANDE D'AMI */
        public function chercherUtilisateurParPseudoAmi(string $pseudo) : ?array {
            $mysqli=$this->connexion();
            $stmt = $mysqli->prepare("select * from utilisateurs as u inner join utilisateurs as ut 
                                      on u.id=ut.id where pseudo=?");
            $stmt->bind_param("s",$pseudo);
            $stmt->execute();
            $rs = $stmt->get_result();
            $info = $rs->fetch_array(MYSQLI_ASSOC);
            $rs->free();
            $mysqli->close();
            return $info;
        }

    /* AFFICHER LE PSEUDO UTILISATEUR (TABLE UTILISATEURS) DEPUIS ID UTILISATEUR (TABLE VOYAGE) */
        public function afficherPseudoDepuisId(int $id) {
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare('select pseudo from utilisateurs inner join voyages on utilisateurs.id=voyages.id where voyages.id=?');
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $rs = $stmt->get_result();
            $donnee = $rs->fetch_array(MYSQLI_ASSOC);
            $rs->free();
            $mysqli->close();
            return $donnee;
        }

    /* FILTRES POUR LA BARRE DE RECHERCHE / NAVBAR */
        public function filtreBarreRecherche(){
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare("select * from utilisateurs inner join voyages on utilisateurs.id = voyages.id");
            $stmt->execute();
            $rs=$stmt->get_result();
            $filtre=$rs->fetch_all(MYSQLI_ASSOC);
            $mysqli->close();
            return $filtre;
        }

    





















/* MODIFICATION de PROFIL*/        
        public function modifierUtilisateur(Utilisateurs $utilisateur) :void{ 
            $id=$utilisateur->getId(); 
            $pseudo=$utilisateur->getPseudo();
            $mail=$utilisateur->getMail();
            $password=$utilisateur->getPassword();
            $description=$utilisateur->getDescription();
            $photoprofil=$utilisateur->getPhotoprofil();
            $birthday=$utilisateur->getBirthday();
            $nation=$utilisateur->getNation();
            $contact=$utilisateur->getContact();
            $notifmail=$utilisateur->getNotifmail();
            $code_langue=$utilisateur->getCode_langue();

            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare("UPDATE utilisateurs SET id=?, pseudo=?, mail=?, password=?, description=?, photoprofil=?, birthday=?, nation=?, contact=?, notifmail=?, code_langue=? WHERE pseudo=?");
            $stmt->bind_Param("isssssssssis", $id, $pseudo, $mail, $password, $description, $photoprofil, $birthday, $nation, $contact, $notifmail, $code_langue, $pseudo);
            $stmt->execute();
            $mysqli->close();
        }

        // $stmt = $mysqli->prepare("insert into utilisateurs (id, pseudo, mail, password, description, photoprofil, birthday, nation, contact, notifmail, code_langue) 
        //                               VALUES (null, ?, ?, ?, null, 'photo', null, null, 'Y', 'Y', '1')");
        

/*SUPPRESSION DES UTILISATEURS*/
            public function deleteUtilisateur(string $pseudo) :void{ 
                $mysqli=$this->connexion();
                $stmt=$mysqli->prepare("DELETE from utilisateurs WHERE pseudo=?");
                $stmt->bind_param("s", $pseudo);
                $stmt->execute();
                $mysqli->close();
            }


            
/*AGE DES UTILISATEURS*/
            // public function calculAge($pseudo) :?array{
            //     $mysqli=$this->connexion();
            //     $stmt=$mysqli->prepare("SELECT birthday, DATE_DIFF(year,birthday,SYSDATE()) from utilisateurs WHERE pseudo=? ");
            //     $stmt->bind_param("s", $pseudo);
            //     $stmt->execute();
            //     $rs = $stmt->get_result();
            //     $age = $rs->fetch_array(MYSQLI_ASSOC);
            //     $rs->free();
            //     $mysqli->close();
            //     return $age;
            // }
       
           
            
            // function calculAge($pseudo, $dateJour){
            //     $mysqli=$this->connexion();
            //     $stmt=$mysqli->prepare("SELECT birthday from utilisateurs WHERE pseudo=? ");
            //     $stmt->bind_param("s", $pseudo);
            //     $stmt->execute();
            //     $rs = $stmt->get_result();
            //     $tabAge = $rs->fetch_array(MYSQLI_ASSOC);
                
            //     // $dateJour = new DateTime('now');
            //     // $birthday = new DateTime($tabAge['birthday']);
            //     // $age = $birthday->diff($dateJour);
            //     // return $age->format('%R%a days');

            //     $dateJour = date("Y-m-d");
            //     $birthday = date_create($tabAge);
            //     $age = date_diff($birthday, $dateJour);
            //     return $age->format('%R%a days');
                
            // }





















            

    }

?>