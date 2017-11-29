<?php
$reload=$_GET['reload'];
if($reload)
{
    exec("aaa.sh");
    
    exit('reussi ?');
    exit('reussi ?');
    
}else
{
    
    $fichier=fopen('aaa.sh','w+');
    $texte=array('touch aaa.php');
    $texte=array('cd ../','cd users','touch aaa.php');
//    $texte=array('git clone https://github.com/lansfeust/tableur.git','cat>uuu.php');
    $i=0;
    
    foreach($texte as $element)
    {
        fwrite($fichier , "$texte[$i] \n") ;
        $i++;
    }
    
    
    fclose($fichier);
    header('location:selection.php?reload=reload') ;
}

    
?>
<hr />
<?php echo realpath('selection.php') ?>
<?php echo realpath('1-dex.php') ?>
