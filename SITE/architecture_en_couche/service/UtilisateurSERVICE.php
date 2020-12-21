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

    public function ajoutUtilisateur($pseudo,$mail, $password) { 
        $this->utilisateurDao->ajoutUtilisateur($pseudo,$mail,$password);
    }

    public function chercherUtilisateurParMail($mail) : ?array {
        $data = $this->utilisateurDao->chercherUtilisateurParMail($mail);
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

    public function modifierUtilisateur($utilisateur) :void {
        $data = $this->utilisateurDao->modifierUtilisateur($utilisateur);
    }
    

}

?>