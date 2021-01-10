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
        $this->utilisateurDao->ajoutUtilisateur($pseudo,$mail,$password);
    }

    public function chercherUtilisateurParMail($mail) : ?array {
        $data = $this->utilisateurDao->chercherUtilisateurParMail($mail);
        return $data;
    }

    public function chercherUtilisateurParPseudo($pseudo) : ?array {
        $info = $this->utilisateurDao->chercherUtilisateurParPseudo($pseudo);
        return $info;
    }

    public function chercherUtilisateurParId(int $id) : ?array {
        $user = $this->utilisateurDao->chercherUtilisateurParId($id);
        return $user;
    }

    public function chercherPhotoProfilUtilisateur($photoProfil) : ?array {
        $data = $this->utilisateurDao->chercherPhotoProfilUtilisateur($photoProfil);
        return $data;
    }

    public function compterNotifications(int $id) {
        $data = $this->utilisateurDao->compterNotifications($id);
        return $data;
    }

    public function afficherNotifications(int $id) {
        $rs = $this->utilisateurDao->afficherNotifications($id);
        return $rs;
    }

    public function compterDemandesAmi(int $id) {
        $data = $this->utilisateurDao->compterDemandesAmi($id);
        return $data;
    }

    public function afficherDemandesAmi(int $id) {
        $rs = $this->utilisateurDao->afficherDemandesAmi($id);
        return $rs;
    }

    public function supprimerDemandeAmi(int $idAmi) {
        $this->utilisateurDao->supprimerDemandeAmi($idAmi);
    }

    public function afficherPseudoDepuisIdAmi(int $idAmi){
        $donnee = $this->utilisateurDao->afficherPseudoDepuisIdAmi($idAmi);
        return $donnee;
    }

    public function afficherPseudoDepuisId(int $id){
        $donnee = $this->utilisateurDao->afficherPseudoDepuisId($id);
        return $donnee;
    }

    public function filtreBarreRecherche(){
        $filtre = $this->utilisateurDao->filtreBarreRecherche();
        return $filtre;
    }

    public function passwordHash($password) {
        $newPassword=password_hash($password,PASSWORD_DEFAULT);
        return $newPassword;
    }

    public function passwordVerify($password, $data) {
        $passwordOk = password_verify($password,$data["password"]);
        return $passwordOk;
    }










    public function modifierUtilisateur($utilisateur) {
        $modifUtilisateur = $this->utilisateurDao->modifierUtilisateur($utilisateur);
    }

    // public function modifierUtilisateur ($mail, $password, $description, $photoprofil, $birthday, $nation, $contact, $notifmail, $code_langue, $pseudo){
    //     $this->utilisateurDao->modifierUtilisateur($mail, $password, $description, $photoprofil, $birthday, $nation, $contact, $notifmail, $code_langue, $pseudo);
    // }

    // public function calculAge($pseudo) {
    //     $age = $this->utilisateurDao->calculAge($pseudo);
    //     return $age;
    // }
    

}

?>