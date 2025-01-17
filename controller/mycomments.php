
<?php

include_once 'model/videoModel.php';

class mycommentsController
{
    private $model;

    public function __construct()
    {
        $this->model = new videoModel;
    }


    public function gestioncomments()
    {

        if (!$_SESSION['user']['logged_in'] === false) {

            $coms = $this->model->getcommentairebyid_user($_SESSION['user']['id']);
            include_once 'view/mycomments.php';

            if (isset($_POST['comid'])) 
            { 
                $comid = $_POST['comid'];
                $this->model->suppcom($comid);
                // header("Location: ?page=mycomments");
                exit;

            }
            
        }
        else 
        {
            include_once 'view/usernonlogee.php';

        }

    }









}

