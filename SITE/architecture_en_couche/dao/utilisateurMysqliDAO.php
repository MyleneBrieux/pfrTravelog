<?php

// LIAISONS AVEC AUTRES COUCHES //
// include_once("../metier/Utilisateur.php");
include_once("../metier/Utilisateurs.php");
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
                // $mysqli= new mysqli('localhost','mylene','afpamy13','travelog');
                $mysqli= new mysqli('localhost','root','','travelog');
                return $mysqli;
            } catch (mysqli_sql_exception $a) {
                throw new DaoException($a->getMessage(), $a->getCode());
            }
        }


    /* AJOUT UTILISATEUR */
        public function ajoutUtilisateur(string $pseudo, string $mail, string $password) {
            try {
                $mysqli=$this->connexion();
                $stmt = $mysqli->prepare("insert into utilisateurs (id, pseudo, mail, password, description, photoprofil, birthday, nation, contact, notifmail, code_langue) 
                                        VALUES (null, ?, ?, ?, null, 'photo', null, null, 'Y', 'Y', '1')");
                $stmt->bind_param("sss", $pseudo, $mail, $password);
                $stmt->execute();
                $mysqli->close();
            } catch (mysqli_sql_exception $b) {
                throw new DaoException($b->getMessage(), $b->getCode());
            }
        }


    /* RECHERCHE UTILISATEUR PAR MAIL */        
        public function chercherUtilisateurParMail(string $mail) : ?array {
            try {
                $mysqli=$this->connexion();
                $stmt = $mysqli->prepare("select * from utilisateurs where mail=?");
                $stmt->bind_param("s",$mail);
                $stmt->execute();
                $rs = $stmt->get_result();
                $data = $rs->fetch_array(MYSQLI_ASSOC);
                $rs->free();
                $mysqli->close();
                return $data;
            } catch (mysqli_sql_exception $c) {
                throw new DaoException($c->getMessage(), $c->getCode());
            }
        }


    /* RECHERCHE UTILISATEUR PAR PSEUDO */
        public function chercherUtilisateurParPseudo(string $pseudo) : ?array {
            try {
                $mysqli=$this->connexion();
                $stmt = $mysqli->prepare("select * from utilisateurs inner join langues on utilisateurs.code_langue=langues.code_langue where pseudo=?");
                $stmt->bind_param("s",$pseudo);
                $stmt->execute();
                $rs = $stmt->get_result();
                $info = $rs->fetch_array(MYSQLI_ASSOC);
                $rs->free();
                $mysqli->close();
                return $info;
            } catch (mysqli_sql_exception $d) {
                throw new DaoException($d->getMessage(), $d->getCode());
            }
        }

    /* RECHERCHE UTILISATEUR PAR ID */
        public function chercherUtilisateurParId(int $id) : ?array {
            try {
                $mysqli=$this->connexion();
                $stmt = $mysqli->prepare("select * from utilisateurs where id=?");
                $stmt->bind_param("i",$id);
                $stmt->execute();
                $rs = $stmt->get_result();
                $user = $rs->fetch_array(MYSQLI_ASSOC);
                $rs->free();
                $mysqli->close();
                return $user;
            } catch (mysqli_sql_exception $e) {
                throw new DaoException($e->getMessage(), $e->getCode());
            }
        }

    /* RECHERCHE PHOTO DE PROFIL UTILISATEUR */
        public function chercherPhotoProfilUtilisateur(string $photoProfil) : ?array {
            try {
                $mysqli=$this->connexion();
                $stmt = $mysqli->prepare("select photoprofil from utilisateurs where pseudo=?");
                $stmt->bind_param("s",$photoProfil);
                $stmt->execute();
                $rs = $stmt->get_result();
                $data = $rs->fetch_array(MYSQLI_ASSOC);
                $rs->free();
                $mysqli->close();
                return $data;
            } catch (mysqli_sql_exception $f) {
                throw new DaoException($f->getMessage(), $f->getCode());
            }
        }

    /* COMPTER LES NOTIFICATIONS */
    public function compterNotifications(int $id) {
        try {
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare('select * from notifications where id=?');
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $rs=$stmt->get_result();
            $data=mysqli_num_rows($rs);
            $mysqli->close();
            return $data;
        } catch (mysqli_sql_exception $g) {
            throw new DaoException($g->getMessage(), $g->getCode());
        }
    }
    
    /* AFFICHER TOUTES LES NOTIFICATIONS */        
    public function afficherNotifications(int $id) {
        try {
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare('select * from notifications where id=? order by date desc');
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $rs=$stmt->get_result();
            return $rs;
            $rs->free();
            $mysqli->close();
        } catch (mysqli_sql_exception $h) {
            throw new DaoException($h->getMessage(), $h->getCode());
        }
    }

    /* COMPTER LES DEMANDES D'AMI */
    public function compterDemandesAmi(int $id) {
        try {
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare('select * from demande_ami where id=? and accepte="N"');
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $rs=$stmt->get_result();
            $data=mysqli_num_rows($rs);
            $mysqli->close();
            return $data;
        } catch (mysqli_sql_exception $i) {
            throw new DaoException($i->getMessage(), $i->getCode());
        }
    }

    /* AFFICHER TOUTES LES DEMANDES D'AMIS */        
    public function afficherDemandesAmi(int $id) {
        try {
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare('select * from demande_ami where id=? and accepte="N"');
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $rs=$stmt->get_result();
            return $rs;
            $rs->free();
            $mysqli->close();
        } catch (mysqli_sql_exception $j) {
            throw new DaoException($j->getMessage(), $j->getCode());
        }
    }

    /* AFFICHER LE PSEUDO UTILISATEUR (TABLE UTILISATEURS) DEPUIS ID AMI (TABLE DEMANDE_AMI) */
    public function afficherPseudoDepuisIdAmi(int $idAmi) {
        try {
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare('select pseudo from utilisateurs inner join demande_ami on utilisateurs.id=demande_ami.id_ami where demande_ami.id_ami=?');
            $stmt->bind_param("i",$idAmi);
            $stmt->execute();
            $rs = $stmt->get_result();
            $donnee = $rs->fetch_array(MYSQLI_ASSOC);
            $rs->free();
            $mysqli->close();
            return $donnee;
        } catch (mysqli_sql_exception $k) {
            throw new DaoException($k->getMessage(), $k->getCode());
        }
    }

    /* AFFICHER LE PSEUDO UTILISATEUR (TABLE UTILISATEURS) DEPUIS ID UTILISATEUR (TABLE VOYAGE) */
    public function afficherPseudoDepuisId(int $id) {
        try {
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare('select pseudo from utilisateurs inner join voyages on utilisateurs.id=voyages.id where voyages.id=?');
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $rs = $stmt->get_result();
            $donnee = $rs->fetch_array(MYSQLI_ASSOC);
            $rs->free();
            $mysqli->close();
            return $donnee;
        } catch (mysqli_sql_exception $l) {
            throw new DaoException($l->getMessage(), $l->getCode());
        }
    }

    /* FILTRES POUR LA BARRE DE RECHERCHE / NAVBAR */
    public function filtreBarreRecherche(){
        try {
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare("select * from utilisateurs inner join voyages on utilisateurs.id = voyages.id");
            $stmt->execute();
            $rs=$stmt->get_result();
            $filtre=$rs->fetch_all(MYSQLI_ASSOC);
            $mysqli->close();
            return $filtre;
        } catch (mysqli_sql_exception $m) {
            throw new DaoException($m->getMessage(), $m->getCode());
        }
    }

    /* COMPTER LE NOMBRE D'AMIS */
    public function nbAmisUtilisateur(int $id) {
        try{
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare('select * from demande_ami where id=? and accepte="Y"');
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $rs=$stmt->get_result();
            $nbAmis=mysqli_num_rows($rs);
            $mysqli->close();
            return $nbAmis;
        }catch (mysqli_sql_exception $n) {
            throw new DaoException($n->getMessage(), $n->getCode());
        }
    }

    /* COMPTER LE NOMBRE DE DEMANDES D'AMIS */
    public function nbDemandesAmisUtilisateur(int $id) {
        try{
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare('select * from demande_ami where id=? and accepte="N"');
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $rs=$stmt->get_result();
            $nbAmis=mysqli_num_rows($rs);
            $mysqli->close();
            return $nbAmis;
        }catch (mysqli_sql_exception $n) {
            throw new DaoException($n->getMessage(), $n->getCode());
        }
    }

    /* AJOUTER UN UTILISATEUR EN AMI */
    public function ajouterAmi($idAmi, $id){
        try {
            $mysqli=$this->connexion();
            $stmt = $mysqli->prepare("insert into demande_ami (id, id_ami, accepte) VALUES (?, ?, 'N')");
            $stmt->bind_param("ii", $idAmi, $id);
            $stmt->execute();
            // $stmt2 = $mysqli->prepare("insert into demande_ami (id, id_ami, accepte) VALUES (?, ?, 'N')");
            // $stmt2->bind_param("ii", $idAmi, $id);
            // $stmt2->execute();
            $mysqli->close();
        } catch (mysqli_sql_exception $o) {
            throw new DaoException($o->getMessage(), $o->getCode());
        }
    }

    /* RECHERCHE DES AMIS ACCEPTES */        
    public function listeAmis(int $id) {
        try {
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare('select * from demande_ami where id=? and accepte="Y"');
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $rs=$stmt->get_result();
            return $rs;
            $rs->free();
            $mysqli->close();
        } catch (mysqli_sql_exception $p) {
            throw new DaoException($p->getMessage(), $p->getCode());
        }
    }

    /* RECHERCHE DES AMIS EN ATTENTE */        
    public function demandesAmis(int $id) {
        try {
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare('select * from demande_ami where id=? and accepte="N"');
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $rs=$stmt->get_result();
            return $rs;
            $rs->free();
            $mysqli->close();
        } catch (mysqli_sql_exception $p) {
            throw new DaoException($p->getMessage(), $p->getCode());
        }
    }

    /* CONFIRMER DEMANDE AMI */
    public function confirmerDemandeAmis(int $id, $idAmi) {
        try {
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare('update demande_ami set id=?, id_ami=?, accepte="Y" where id=? and id_ami=?');
            $stmt->bind_param("iiii",$id,$idAmi,$idAmi,$id);
            $stmt->execute();
            $stmt = $mysqli->prepare("insert into demande_ami (id_ami, id, accepte) VALUES (?, ?, 'Y')");
            $stmt->bind_param("ii", $id, $idAmi);
            $stmt->execute();
            $mysqli->close();
        } catch (mysqli_sql_exception $p) {
            throw new DaoException($p->getMessage(), $p->getCode());
        }
    }

    /* SUPPRIMER UN AMI */
    public function supprimerAmi($idAmi, $id){
        try{
            $mysqli=$this->connexion();
            $stmt = $mysqli->prepare("delete from demande_ami where id=? and id_ami=?");
            $stmt->bind_param("ii", $id, $idAmi);
            $stmt->execute();
            $stmt2 = $mysqli->prepare("delete from demande_ami where id=? and id_ami=?");
            $stmt2->bind_param("ii", $idAmi, $id);
            $stmt2->execute();
            $mysqli->close();
        }catch(mysqli_sql_exception $q){
            throw new DaoException($q->getMessage(), $q->getCode());
        }
    }

    /* AFFICHER LES DONNEES UTILISATEUR (TABLE UTILISATEURS) DEPUIS ID AMI (TABLE DEMANDE_AMI) */
    public function afficherDonneesDepuisIdAmi(int $idAmi) {
        try {
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare('select * from utilisateurs inner join demande_ami on utilisateurs.id=demande_ami.id_ami where demande_ami.id_ami=? and demande_ami.accepte="N"');
            $stmt->bind_param("i",$idAmi);
            $stmt->execute();
            $rs = $stmt->get_result();
            $donnee = $rs->fetch_array(MYSQLI_ASSOC);
            $rs->free();
            $mysqli->close();
            return $donnee;
        } catch (mysqli_sql_exception $q) {
            throw new DaoException($q->getMessage(), $q->getCode());
        }
    }

    /* AFFICHER LES DONNEES UTILISATEUR (TABLE UTILISATEURS) DEPUIS ID AMI (TABLE DEMANDE_AMI) */
    public function afficherDonneesDepuisIdAmi1(int $idAmi) {
        try {
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare('select * from utilisateurs inner join demande_ami on utilisateurs.id=demande_ami.id_ami where demande_ami.id_ami=? and demande_ami.accepte="Y"');
            $stmt->bind_param("i",$idAmi);
            $stmt->execute();
            $rs = $stmt->get_result();
            $donnee = $rs->fetch_array(MYSQLI_ASSOC);
            $rs->free();
            $mysqli->close();
            return $donnee;
        } catch (mysqli_sql_exception $q) {
            throw new DaoException($q->getMessage(), $q->getCode());
        }
    }

    public function dejaAmis($idAmi, $id){
        try {
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare('select * from demande_ami where id_ami=? and id=? and accepte="Y"');
            $stmt->bind_param("ii",$idAmi, $id);
            $stmt->execute();
            $rs=$stmt->get_result();
            $nbAmis=mysqli_num_rows($rs);
            $mysqli->close();
            return $nbAmis;
        } catch (mysqli_sql_exception $q) {
            throw new DaoException($q->getMessage(), $q->getCode());
        }
    }


/* MODIFICATION DU PROFIL*/        
        public function modifierUtilisateur(Utilisateurs $utilisateur) :void{ 
            $id=$utilisateur->getId(); 
            $pseudo=$utilisateur->getPseudo();
            $mail=$utilisateur->getMail();
            $password=$utilisateur->getPassword();
            $description=$utilisateur->getDescription();
            $birthday=$utilisateur->getBirthday();
            $nation=$utilisateur->getNation();
            $contact=$utilisateur->getContact();
            $notifmail=$utilisateur->getNotifmail();
            $code_langue=$utilisateur->getCode_langue();

            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare("UPDATE utilisateurs SET id=?, pseudo=?, mail=?, password=?, description=?, /*photoprofil=?,*/ birthday=?, nation=?, contact=?, notifmail=?, code_langue=? WHERE pseudo=?");
            $stmt->bind_Param("issssssssis", $id, $pseudo, $mail, $password, $description, /*$photoprofil,*/ $birthday, $nation, $contact, $notifmail, $code_langue, $pseudo);
            $stmt->execute();
            $mysqli->close();
        }


// MODIFICATION DE L'IMAGE PROFIL
    public function modifPhoto($imgContent, $pseudo){
        $mysqli=$this->connexion(); 
        $stmt=$mysqli->prepare("UPDATE utilisateurs SET photoprofil='$imgContent' where pseudo='$pseudo'");
        $stmt->send_long_data(0, $imgContent);
        $stmt->execute();
        $mysqli->close();
    }



/*SUPPRESSION DES UTILISATEURS*/
        public function deleteUtilisateur(string $pseudo) :void{ 
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare("DELETE from utilisateurs WHERE pseudo=?");
            $stmt->bind_param("s", $pseudo);
            $stmt->execute();
            $mysqli->close();
        }


/*AGE DES UTILISATEURS*/
        function calculAge($pseudo) {
            $dateJour = date("Y-m-d");
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare("SELECT timestampdiff(year,birthday,$dateJour) from utilisateurs WHERE pseudo=? ");
            $stmt->bind_param("s", $pseudo);
            $stmt->execute();
            $rs = $stmt->get_result();
            $age = $rs->fetch_array(MYSQLI_ASSOC);
            return $age;
        }
  

    }

?>