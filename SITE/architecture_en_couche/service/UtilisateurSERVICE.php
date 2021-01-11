<?php

// LIAISON AVEC LES AUTRES COUCHES //
include_once("../dao/utilisateurMysqliDAO.php");

// GESTION DES ERREURS //
include_once("ServiceException.php");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


class UtilisateurService {

    public function __construct(){
        $this->utilisateurDao = new UtilisateurMysqliDao;
    }

    public function connexion() {
        try {
            $mysqli = $this->utilisateurDao->connexion();
            return $mysqli;
        } catch (DaoException $a){
            throw new ServiceException($a->getMessage(),$a->getCode());
        }
    }

    public function ajoutUtilisateur($pseudo,$mail, $password) { 
        try {
            $this->utilisateurDao->ajoutUtilisateur($pseudo,$mail,$password);
        } catch (DaoException $b){
            throw new ServiceException($b->getMessage(),$b->getCode());
        }
    }

    public function chercherUtilisateurParMail($mail) : ?array {
        try {
            $data = $this->utilisateurDao->chercherUtilisateurParMail($mail);
            return $data;
        } catch (DaoException $c){
            throw new ServiceException($c->getMessage(),$c->getCode());
        }
    }

    public function chercherUtilisateurParPseudo($pseudo) : ?array {
        try {
            $info = $this->utilisateurDao->chercherUtilisateurParPseudo($pseudo);
            return $info;
        } catch (DaoException $d){
            throw new ServiceException($d->getMessage(),$d->getCode());
        }
    }

    public function chercherUtilisateurParId(int $id) : ?array {
        try {
            $user = $this->utilisateurDao->chercherUtilisateurParId($id);
            return $user;
        } catch (DaoException $e){
            throw new ServiceException($e->getMessage(),$e->getCode());
        }
    }

    public function chercherPhotoProfilUtilisateur($photoProfil) : ?array {
        try {
            $data = $this->utilisateurDao->chercherPhotoProfilUtilisateur($photoProfil);
            return $data;
        } catch (DaoException $f){
            throw new ServiceException($f->getMessage(),$f->getCode());
        }
    }

    public function compterNotifications(int $id) {
        try {
            $data = $this->utilisateurDao->compterNotifications($id);
            return $data;
        } catch (DaoException $g){
            throw new ServiceException($g->getMessage(),$g->getCode());
        }
    }

    public function afficherNotifications(int $id) {
        try {
            $rs = $this->utilisateurDao->afficherNotifications($id);
            return $rs;
        } catch (DaoException $h){
            throw new ServiceException($h->getMessage(),$h->getCode());
        }
    }

    public function compterDemandesAmi(int $id) {
        try {
            $data = $this->utilisateurDao->compterDemandesAmi($id);
            return $data;
        } catch (DaoException $i){
            throw new ServiceException($i->getMessage(),$i->getCode());
        }
    }

    public function afficherDemandesAmi(int $id) {
        try {
            $rs = $this->utilisateurDao->afficherDemandesAmi($id);
            return $rs;
        } catch (DaoException $j){
            throw new ServiceException($j->getMessage(),$j->getCode());
        }
    }

    public function afficherPseudoDepuisIdAmi(int $idAmi){
        try {
            $donnee = $this->utilisateurDao->afficherPseudoDepuisIdAmi($idAmi);
            return $donnee;
        } catch (DaoException $k){
            throw new ServiceException($k->getMessage(),$k->getCode());
        }
    }

    public function afficherPseudoDepuisId(int $id){
        try {
            $donnee = $this->utilisateurDao->afficherPseudoDepuisId($id);
            return $donnee;
        } catch (DaoException $l){
            throw new ServiceException($l->getMessage(),$l->getCode());
        }
    }

    public function filtreBarreRecherche(){
        try {
            $filtre = $this->utilisateurDao->filtreBarreRecherche();
            return $filtre;
        } catch (DaoException $m){
            throw new ServiceException($m->getMessage(),$m->getCode());
        }
    }

    public function passwordHash($password) {
        try {
            $newPassword=password_hash($password,PASSWORD_DEFAULT);
            return $newPassword;
        } catch (DaoException $n){
            throw new ServiceException($n->getMessage(),$n->getCode());
        }
    }

    public function passwordVerify($password, $data) {
        try {
            $passwordOk = password_verify($password,$data["password"]);
            return $passwordOk;
        } catch (DaoException $o){
            throw new ServiceException($o->getMessage(),$o->getCode());
        }
    }

    public function nbAmisUtilisateur($id){
        try{
            $nbAmis = $this->utilisateurDao->nbAmisUtilisateur($id);
            return $nbAmis;
        }catch(DaoException $p){
            throw new ServiceException($p->getMessage(),$p->getCode());
        }
    }

    public function ajouterAmi($id){
        try{
            $this->utilisateurDao->ajoutAmi($id);
        }catch(DaoException $q){
            throw new ServiceException($q->getMessage(),$q->getCode());
        }
    }

    public function listeAmis(int $id) {
        try {
            $rs = $this->utilisateurDao->listeAmis($id);
            return $rs;
        } catch (DaoException $r){
            throw new ServiceException($r->getMessage(),$r->getCode());
        }
    }









    public function modifierUtilisateur($utilisateur) {
        $modifUtilisateur = $this->utilisateurDao->modifierUtilisateur($utilisateur);
    }

    public function calculAge($pseudo) {
        $age = $this->utilisateurDao->calculAge($pseudo);
        return $age;
    }
    

}

?>