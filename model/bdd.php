<?php

class Bdd{

    // private static $host ='localhost';
    // private static $port ='5432';
    // private static $dbname ='cathub';
    // private static $user ='postgres';
    // private static $password ='8029';


    public static function connexion()
    {
        try
        {
            $bdd = new PDO("pgsql:host=localhost;port=5432;dbname=Cathub","postgres","0123456789");
            return $bdd;
            
        }
        catch(Exception $e)
        {
            echo $e;
        }
    }
}





// class Bdd{

//     public static function connexion()
//     {
//         try
//         {
//             $bdd = new PDO("mysql:host=localhost;port=3306;dbname=cathub","root","");
//             return $bdd;
            
//         }
//         catch(Exception $e)
//         {
//             echo $e;
//         }
//     }
// }