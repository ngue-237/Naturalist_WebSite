<?php 
 require_once "../../controllers/utilisateurs/reponseSC.php.php";
 session_start();
  $UtilisateurC=new RsujetC();
 
	$UtilisateurC->supprimerReponse($_POST['id']);
	header('Location: forum.php');
  

?>
