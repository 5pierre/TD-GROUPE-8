<?php

class Bdd{

    public static function connexion()
    {
        try
        {
            $bdd = new PDO("pgsql:host=localhost;port=5432;dbname=cathub","postgres","8029");
            return $bdd;
            
        }
        catch(Exception $e)
        {
            echo $e;
        }
    }
}



