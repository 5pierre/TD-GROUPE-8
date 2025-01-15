<?php

include_once 'model/usersModel.php';

class usersController
{
    private $model;

    public function __construct()
    {
        $this->model = new UsersModel;
    }

    public function getFromInscription()
    {
        include_once 'view/loginPage.php';

    }

    public function gestionRequest()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {
            $action = $_POST['action'] ?? null;

            switch ($action) {
                case 'connexion':
                    $this->connection();
                    break;

                case 'inscription':
                    $this->inscription();
                    break;

                default:
                    $this->getFromInscription();
                    break;
            }
        } 
        else 
        {
            $this->getFromInscription();
        }
    }

    public function connection()
    {

        if (isset($_POST['email'], $_POST['password'])) 
        { 
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->model->getUserByEmail($email);

            if ($user && password_verify($password, $user['mdp'])) 
            {

                $_SESSION['user']['id'] = $user['id'];
                $_SESSION['user']['name'] = $user['nom']; 
                $_SESSION['user']['logged_in'] = true;

                header("Location: ?page=cat");
            } 
            else 
            {
                echo "Email ou mot de passe incorrect";
                $this->getFromInscription();
            }

        }         
        else 
        {
        $this->getFromInscription();
        }

    }



    public function inscription()
    {
        if (isset($_POST['email'], $_POST['nom'], $_POST['password'])) 
            {
            $nom = $_POST['nom'];
            $email = $_POST['email'];
            $mdp = password_hash($_POST['password'], PASSWORD_DEFAULT);

            if($this->model->inscription($nom,$email,$mdp))
            {
                echo "inscriptio ok";
                header("Location: ?page=login");

            }
            else
            {
                echo "erreur d'inscription";
                $this->getFromInscription();
            }

        }
        else{
            $this->getFromInscription();
        }

    }



}

