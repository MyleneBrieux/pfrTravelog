<?php

class Utilisateurs {

    private $id;
    private $pseudo;
    private $mail;
    private $password;
    private $description;
    private $photoprofil;
    private $birthday;
    private $nation;
    private $contact;
    private $notifmail;
    private $code_langue;


    public function __construct(int $id, string $pseudo, string $mail, string $password, ?string $description, 
    ?string $photoprofil, ?string $birthday, ?string $nation, string $contact, string $notifmail, int $code_langue){
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->mail = $mail;
        $this->password = $password;
        $this->description= $description;
        $this->photoprofil = $photoprofil;
        $this->birthday = $birthday;
        $this->nation = $nation;
        $this->contact = $contact;
        $this->notifmail = $notifmail;
        $this->code_langue = $code_langue;
    }


/*ID*/
    public function getId() :int{
        return $this->id;
    }

/*PSEUDO*/
    public function getPseudo() :string{
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo) :self{
        $this->pseudo = $pseudo;
        return $this;
    }

/*ADRESSE MAIL*/
    public function getMail() :string{
        return $this->mail;
    }

    public function setMail(string $mail) :self{
        $this->mail = $mail;
        return $this;
    }

/*MOTS DE PASSE*/
    public function getPassword() :string{
        return $this->password;
    }

    public function setPassword(string $password) :self{
        $this->password = $password;
        return $this;
    }

/*DESCRIPTION*/
    public function getDescription() :string{
        return $this->description;
    }

    public function setDescription(string $description) :self{
        $this->description = $description;
        return $this;
    }

/*PHOTO DE PROFIL*/
    public function getPhotoprofil() :string{
        return $this->photoprofil;
    }

    public function setPhotoprofil(string $photoprofil) :self{
        $this->photoprofil = $photoprofil;
        return $this;
    }

/*DATE DE NAISSANCE*/
    public function getBirthday() :string{
        return $this->birthday;
    }

    public function setBirthday(string $birthday) :self{
        $this->birthday = $birthday;
        return $this;
    }

/*NATIONNALITE*/
    public function getNation() :string{
        return $this->nation;
    }

    public function setNation(string $nation) :self{
        $this->nation = $nation;
        return $this;
    }

/*CONTACT*/
    public function getContact() :string{
        return $this->contact;
    }

    public function setContact(string $contact) :self{
        $this->contact = $contact;
        return $this;
    }

/*NOTIFICATION PAR MAIL*/
    public function getNotifmail() :string{
        return $this->notifmail;
    }

    public function setNotifmail(string $notifmail) :self{
        $this->notifmail = $notifmail;
        return $this;
    }

    public function getCode_langue() :int{
        return $this->code_langue;
    }

    public function setCode_langue(int $code_langue) :self{
        $this->code_langue = $code_langue;
        return $this;
    }
    

    // public function __toString() : string{
    //     return "[id]: " . $this->id . "[mail] : " . $this->mail . "[password] : " . $this->password . "[login] : " . $this->login . "[birthday] : " . 
    //     $this->birthday . "[Photo profil] : " . $this->photoprofil . "[nationalité] : " . $this->nationalite . "[contact] : " . 
    //     $this->contact . "[notifmail] : " . $this->notifmail;
    // }




        
}

?>