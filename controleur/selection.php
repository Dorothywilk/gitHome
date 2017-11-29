<?php
include_once('../vue/head.html')   ;
include_once('../vue/formConnection.html')   ;


$gfds=$_POST['pseudo']  ;

echo  '<hr />'.$gfds ;

$basededonne=new bdd() ;
$bleurg=$basededonne->active ;


?>