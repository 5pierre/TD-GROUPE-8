# TD-GROUPE-8


pour les video il faut eviter une bdd classique et utiliser des services tel que AWS S3, Google Cloud Storage, ou Azure Blob Storage





video: firestor ? 


















ICI PIERRE(tik) STOCK DU CODE

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

            $this->model->addvideo($_SESSION['user']['name'], $liens, $description, $title,  $_SESSION['user']['id']);
            
        }
        header("Location: ?page=video");
    }

    }




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

        if ($_SESSION['user']['logged_in'] !== false) {
            if (isset($_GET['page']) && $_GET['page'] === 'video' && isset($_GET['id'])) {
                $video = $this->model->getvideobyid($_GET['id']);
                
                include_once 'view/videoSolo.php';
                return; //return pour stoper ici
            }

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $liens = $_POST['liens'];
                $description = $_POST['description'];
                $title = $_POST['title'];

                if ($this->model->addvideo($_SESSION['user']['name'], $liens, $description, $title, $_SESSION['user']['id'])) {
                    echo "Vidéo ajoutée avec succès.";
                    header("Location: ?page=video");
                    exit;
                }
            }

            $videos = $this->model->getvideo();
            include_once 'view/video.php';
        } else {
            include_once 'view/usernonlogee.php';
        }
    }




}







