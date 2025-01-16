
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

        
        if (!$_SESSION['user']['logged_in'] === false) 
        {
        
            $myvideos = $this->model->getvideobyid_user($_SESSION['user']['id']); 
            // echo '<pre>'; print_r($myvideos); echo '</pre>';
            include_once 'view/myvideo.php';

            if (isset($_POST['videoID'])) 
            { 
                $videoID = $_POST['videoID'];

                $this->model->suppvideo($videoID);

            }


        }else{
            include_once 'view/usernonlogee.php';

        }


    

    }

}






