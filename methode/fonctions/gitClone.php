
<?php




function gitClone($var)
{
    
    $dossier=fopen("clone.sh","w+b");//     Ouverture en mode Lecture / ecriture + effacement automatique le l'ancienne version a l'ouverture 
    
    //
    //Sur 2 ligne ajout de la commande sh pour ce deplacer dans le bon dossier + clone du git 
    //
    $remplire="cd ../users/$var/";
    $remplire2="git clone .git/$var";
    
    fwrite($dossier,"$remplire \n");
    fwrite($dossier,$remplire2);
    
    //
    // Fin
    //
    fclose($dossier);
    
    exec("clone.sh");
}




?>