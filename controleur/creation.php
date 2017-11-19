<?php
include_once('../vue/head.html');
@$appellation=$_POST['appellation'];


?>
<div class="corp">

<form method="POST" action="creation.php">
    
    <input type='text' name="appellation" autofocus />
    <input type="submit" />
    
        
    
</form>









<?php
if( @$appellation )
{
    echo @$appellation.'<hr />' ;// EFFACE-MOI
    
    //
    //  Teste si le fichier que l'on veut crée existe dejà
    //
    if(is_dir("../users/$appellation"))
    {
        echo 'ERREUR '.$appellation.'  EXISTE DEJA ! ';
        
    }
    //
    // Si non le fichier est crée par une initialisation avec --bare + clonage 
    //
    else{
            $destination=init($appellation);//M'as fonction d'initialisation
        
        echo '<hr />$quoi ? '.$destination ;// Efface-moi
        
        
        gitClone($appellation);// M'as fonction de clone 
        
        
        echo "<hr />L'initialisation est un succées , pour le consulter veuillez cliquer <a href='../index.php'>ici</a>";
    }
}
?>
</div>