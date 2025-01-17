<?php
include_once 'bdd.php';


class commentaireModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = Bdd::connexion();
    }
    
    public function getcommentaire()
    {
        return $this->bdd->query("SELECT * FROM commentaire")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function suppcommentaire($idcommentaire)
    {        
        $suppcommentaire = $this->bdd->prepare("DELETE FROM video WHERE id_comm = ?");
        return $suppcommentaire->execute([$idcommentaire]);
    }

    
    public function getcommentaireid($id)
    {
        $getcommentaire = $this->bdd->prepare("SELECT * FROM commentaire WHERE id_commentaire = ?");
        $getcommentaire->execute([$id]);
        return $getcommentaire->fetch(PDO::FETCH_ASSOC);      
    }

    public function addcommentaire($user_name, $liens, $description, $title, $id_user)
    {
        $addvideo = $this->bdd->prepare("INSERT INTO video(user_name, liens, description, title, id_user) VALUES(?,?,?,?,?)");
        return $addvideo->execute([$user_name, $liens, $description, $title, $id_user]);
    }
    
    public function getcommentsbyvideo($id)
    {
        $getcommentsbyvideo = $this->bdd->prepare("SELECT * FROM commentaire WHERE id_video = ?");
        $getcommentsbyvideo->execute([$id]);
        return $getcommentsbyvideo->fetch(PDO::FETCH_ASSOC);      
    }
}