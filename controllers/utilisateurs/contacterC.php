<?php
	require_once "../config.php";
	require_once "../Model/contacter.php";
	

	class ContactC 
	{
		
		function ajouterContact($Contact)
		{
			
		$sql="INSERT INTO contact (nom, email, sujet, message) VALUES(:nom, :email, :sujet, :message)";
			$db = config::getConnexion();
			try
			{
				$query = $db->prepare($sql);
				$query->bindValue(':nom', $Contact->get_nom());
				$query->bindValue(':email', $Contact->get_email());
				$query->bindValue(':sujet', $Contact->get_sujet());
				$query->bindValue(':message', $Contact->get_message());
			
				$query->execute();		
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
    }


?>