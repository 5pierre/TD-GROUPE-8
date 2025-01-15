<?php
include_once 'bdd.php';


class videoModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = Bdd::connexion();
    }
    
    public function getvideo()
    {
        return $this->bdd->query("SELECT * FROM video")->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getvideobyid($id)
    {
        $getvideo = $this->bdd->prepare("SELECT * FROM video WHERE id_video = ?");
        $getvideo->execute([$id]);
        return $getvideo->fetch(PDO::FETCH_ASSOC);      
    }

    public function addvideo($user_name, $liens, $description, $id_user)
    {
        $addvideo = $this->bdd->prepare("INSERT INTO video(user_name, liens, description, id_user) VALUE(?,?,?,?)");
        return $addvideo->execute([$user_name, $liens, $description,$id_user]);
    }
}