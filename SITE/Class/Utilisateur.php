<?php

class Utilisateur {
    private $id;
    private $mail;
    private $password;
    private $nom;
    private $prenom;
    private $birthday;
    private $photoProfil;
    private $nationalite;
    private $contact;
    private $notifmail;

    public function __construct(int $id, string $mail, string $password, string $nom, string $prenom, DateTime $birthday, string $photoProfil, 
    string $nationalite, string $contact, string $notifmail)
    {
        $this->id = $id;
        $this->mail = $mail;
        $this->password = $password;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->birthday = $birthday;
        $this->photoProfil = $photoProfil;
        $this->nationalite = $nationalite;
        $this->contact = $contact;
        $this->notifmail = $notifmail;
    }

    /**
     * Get the value of id
     */ 
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail() : string
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail(string $mail) : self
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword() : string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword(string $password) : self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom() : string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom(string $nom) : self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom() : string
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom(string $prenom) : self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of birthday
     */ 
    public function getBirthday() : DateTime
    {
        return $this->birthday;
    }

    /**
     * Set the value of birthday
     *
     * @return  self
     */ 
    public function setBirthday(DateTime $birthday) : self
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get the value of photoProfil
     */ 
    public function getPhotoProfil() : string
    {
        return $this->photoProfil;
    }

    /**
     * Set the value of photoProfil
     *
     * @return  self
     */ 
    public function setPhotoProfil(string $photoProfil) : self
    {
        $this->photoProfil = $photoProfil;

        return $this;
    }

    /**
     * Get the value of nationalite
     */ 
    public function getNationalite() : string
    {
        return $this->nationalite;
    }

    /**
     * Set the value of nationalite
     *
     * @return  self
     */ 
    public function setNationalite(string $nationalite) : self
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get the value of contact
     */ 
    public function getContact() : string
    {
        return $this->contact;
    }

    /**
     * Set the value of contact
     *
     * @return  self
     */ 
    public function setContact(string $contact) : self
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get the value of notifmail
     */ 
    public function getNotifmail() : string
    {
        return $this->notifmail;
    }

    /**
     * Set the value of notifmail
     *
     * @return  self
     */ 
    public function setNotifmail(string $notifmail) : self
    {
        $this->notifmail = $notifmail;

        return $this;
    }

    public function __toString() : string
    {
        return "[id] : " . $this->id . "[mail] : " . $this->mail . "[password] : " . $this->password . "[nom] : " . $this->nom . "[prenom] : " . $this->prenom . 
        "[birthday] : " . $this->birthday . "[Photo profil] : " . $this->photoProfil . "[nationalité] : " . $this->nationalite . 
        "[contact] : " . $this->contact . "[notifmail] : " . $this->notifmail;
    }
}

?>