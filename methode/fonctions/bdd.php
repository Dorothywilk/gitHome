<?php

class bdd
{
    function active()
    {
        $bdd = new PDO('mysql:host=localhost;dbname=githome;charset=utf8', 'root', '');
        
        return $bdd  ;
    }
    
}






?>