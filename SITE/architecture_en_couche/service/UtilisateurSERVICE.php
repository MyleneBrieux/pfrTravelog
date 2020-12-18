<?php

include_once("../dao/UtilisateurMysqliDAO.php");

class UtilisateurService {

    public function __construct(){
        $this->utilisateurDao = new UtilisateurMysqliDao;
    }

    public function connexion() {
        $mysqli = $this->utilisateurDao->connexion();
        return $mysqli;
    }

    public function ajoutUtilisateur($mail, $password) { 
        $this->utilisateurDao->ajoutUtilisateur($mail,$password);
    }

    public function chercherMail($mail) : ?array {
        $data = $this->utilisateurDao->chercherMail($mail);
        return $data;
    }

    public function chercherUtilisateurParPseudo($pseudo) : ?array {
        $data = $this->utilisateurDao->chercherUtilisateurParPseudo($pseudo);
        return $data;
    }

    public function passwordHash($password) {
        $newPassword=password_hash($password,PASSWORD_DEFAULT);
        return $newPassword;
    }

    public function passwordVerify($password, $data) {
        $passwordOk = password_verify($password,$data["password"]);
        return $passwordOk;
    }

    public function updateProfil($utilisateur) :void {
        $data = $this->utilisateurDao->updateProfil($utilisateur);
    }
    

}

?>