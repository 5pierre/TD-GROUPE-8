<?php
include_once 'bdd.php';


class UsersModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = Bdd::connexion();
    }
    
    public function inscription($nom,$email,$mdp) 
    {
        $user = $this->bdd->prepare("INSERT INTO users(nom,email,mdp) VALUES(?,?,?)");
        return $user->execute([$nom,$email,$mdp]);
    }


    public function getUserByEmail($email)
    {
        $getuser = $this->bdd->prepare("SELECT * FROM users WHERE email = ?");
        $getuser->execute([$email]);
        return $getuser->fetch(PDO::FETCH_ASSOC);      

    }
}






