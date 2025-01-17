<?php


//          if  get page                            else
$page = isset($_GET['page']) ? $_GET['page'] : 'acceuil';

switch($page)
{
    case 'acceuil':
        include_once 'view/acceuil.php';
        break;

    case 'login':
        include_once 'controller/usersController.php';
        $users = new usersController;
        $users->gestionRequest();
        break;

    case 'contact':
        include_once 'view/contact.php';
        break;   

    case 'video':
        include_once 'controller/videoController.php';
        $users = new videoController;
        $users->gestiongetVideo();
        break;  

    case 'myvideo':
        include_once 'controller/myvideoController.php';
        $users = new myvideoController;
        $users->gestiongetMyvideo();
    break;  

    case 'faq':
        include_once 'view/faq.php';
        break;   

    case 'deconnexion':
        include_once 'view/deconnexion.php';
        break; 
    
    case 'help':
        include_once 'view/help.php';
        break;

    default :
    include 'view/404.php';
}