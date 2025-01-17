
<?php
include_once 'model/videoModel.php';



class myvideoController
{
    private $model;

    public function __construct()
    {
        $this->model = new videoModel;
    }
    public function gestiongetMyvideo()
    {
        if (!$_SESSION['user']['logged_in'] === false) {

            //suppr d'une video
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['videoID'])) {
                $videoID = $_POST['videoID'];
                $this->model->suppvideo($videoID);
                header("Location: ?page=myvideo");
                exit; 
            }
            //chargment des video de l'user
            $myvideos = $this->model->getvideobyid_user($_SESSION['user']['id']);
            include_once 'view/myvideo.php';

        } else {
            include_once 'view/usernonlogee.php';
        }
    }
}