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

    public function chercherPhotoProfilUtilisateur($photoProfil) : ?array {
        $data = $this->utilisateurDao->chercherPhotoProfilUtilisateur($photoProfil);
        return $data;
    }

    public function compterDemandesAmi() {
        $data = $this->utilisateurDao->compterDemandesAmi();
        return $data;
    }

    public function chercherUtilisateurParPseudoAmi($pseudo) : ?array {
        $info = $this->utilisateurDao->chercherUtilisateurParPseudoAmi($pseudo);
        return $info;
    }

    public function afficherPseudoDepuisId(int $id){
        $donnee = $this->utilisateurDao->afficherPseudoDepuisId($id);
        return $donnee;
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