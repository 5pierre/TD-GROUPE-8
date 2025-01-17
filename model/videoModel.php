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

    public function suppvideo($idvideo)
    {        
        $suppvideo = $this->bdd->prepare("DELETE FROM video WHERE id_video = ?");
        return $suppvideo->execute([$idvideo]);
    }
    public function getvideobyid_user($id)
    {
        $getvideo = $this->bdd->prepare("SELECT * FROM video WHERE id_user = ?");
        $getvideo->execute([$id]);
        return $getvideo->fetchAll();      
    }
   
    
    public function getvideobyid($id)
    {
        $getvideo = $this->bdd->prepare("SELECT * FROM video WHERE id_video = ?");
        $getvideo->execute([$id]);
        return $getvideo->fetch(PDO::FETCH_ASSOC);      
    }

    public function addvideo($user_name, $liens, $description, $title, $id_user)
    {
        $addvideo = $this->bdd->prepare("INSERT INTO video(user_name, liens, description, title, id_user) VALUES(?,?,?,?,?)");
        return $addvideo->execute([$user_name, $liens, $description, $title, $id_user]);
    }



//comentaire

public function getcommentaire()
{
    return $this->bdd->query("SELECT * FROM comms")->fetchAll(PDO::FETCH_ASSOC);
}

public function suppcom($idcom)
{        
    $suppcom = $this->bdd->prepare("DELETE FROM comms WHERE id_comm = ?");
    return $suppcom->execute([$idcom]);
}


public function getcommentaireid($id)
{
    $getcommentaire = $this->bdd->prepare("SELECT * FROM comms WHERE id_comm = ?");
    $getcommentaire->execute([$id]);
    return $getcommentaire->fetch(PDO::FETCH_ASSOC);      
}

public function addcommentaire($contenue,$user_name, $id_user, $id_video)
{
    $addvideo = $this->bdd->prepare("INSERT INTO comms(contenue, user_name, id_user, id_video) VALUES(?,?,?,?)");
    return $addvideo->execute([$contenue,$user_name, $id_user, $id_video]);
}


public function getcommentsbyvideo($id)
{
    $getcommentsbyvideo = $this->bdd->prepare("SELECT * FROM comms WHERE id_video = ?");
    $getcommentsbyvideo->execute([$id]);
    return $getcommentsbyvideo->fetchAll();      
}

public function getcommentairebyid_user($id)
{
    $getcommentaire = $this->bdd->prepare("SELECT * FROM comms WHERE id_user = ?");
    $getcommentaire->execute([$id]);
    return $getcommentaire->fetchAll();      
}
}