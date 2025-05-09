<?php


	if ( ! isset($_SESSION["email"])){ 
		require_once("vue/inscription/inscription.php");
	}

	else {
	require_once("controleur/c_deconnexion.php");
	} 


    

    if (isset($_POST["valider"])){
		//insertion des données dans la base  
		$unControleur->inscription($_POST);
	}

	
?>