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
        $getcat = $this->bdd->prepare("SELECT * FROM video WHERE id_video = ?");
        $getcat->execute([$id]);
        return $getcat->fetch(PDO::FETCH_ASSOC);      
    }

    public function addvideo($liens, $id_user)
    {
        $addvideo = $this->bdd->prepare("INSERT INTO video(liens,id_user) VALUE(?,?)");
        return $addvideo->execute([$liens,$id_user]);
    }
}