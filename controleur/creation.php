<?php
include_once('vue/head.html');
@$appellation=$_POST['appellation'];


?>
<div class="corp">

<form method="POST" action="creation.php">
    
    <input type='text' name="appellation" autofocus />
    <input type="submit" />
    
        
    
</form>









<?php
if(@$appellation )
{
    echo @$appellation.'<hr />' ;// EFFACE-MOI
    
    if(is_dir($appellation))
    {
        echo 'ERREUR '.$appellation.'  EXISTE DEJA ! ';
        
    }
    else{
        
        $destination="users/bleurg/$appellation";
        echo '<hr />'.$destination.'<hr />';
        exec("git init --bare users/bleurg/$appellation") ;
        
        exit();
        $dossier=opendir("$appellation");

        $i=0;
            while(($entree= readdir($dossier)) != false )
            {
                echo "<br />".$i." => ".$entree;// EFFACE-MOI
                $i++;
            }
        closedir($dossier) ;
        
        echo "<hr />L'initialisation est un succées , pour l'activer veuillez cliquer <a href='clone.php?appellation=$appellation'>ici</a>";
    }
}
?>
</div>