<?php


function init($appellation)
{
    
    $destination="../users/$appellation/.git/$appellation";
        exec("git init --bare $destination") ;
//        echo '<hr />$destination = '.$destination.'<hr />';
    
       return $destination ;
    
}



?>