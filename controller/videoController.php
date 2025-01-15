<?php
include_once 'model/videoModel.php';



class videoController
{
    private $model;

    public function __construct()
    {
        $this->model = new videoModel;
    }
    public function gestiongetVideo()
    {


        if (isset($_GET['page']) && $_GET['page'] === 'video' && isset($_GET['id'])) 
        {   
            $video = $this->model->getvideobyid($_GET['id']);
            include_once 'view/videoSolo.php';
        } 
        else 
        {
            $videos = $this->model->getvideo();
            include_once 'view/video.php';

            if (isset($_POST['liens'])) 
            { 

            $liens = $_POST['liens'];
            $description = $_POST['description'];
            $title = $_POST['title'];
            // a definire /!\
            // $description = "message test ";
            // $title = "titre a def";
            $this->model->addvideo($_SESSION['user']['name'], $liens, $description, $title,  $_SESSION['user']['id']);
            
        }
    }

    }

}





