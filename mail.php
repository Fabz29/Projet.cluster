<?php

if(!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['descriptif'])){

	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$email = htmlspecialchars($_POST['email']);
	$descriptif = htmlspecialchars($_POST['descriptif']);
	$batiment = htmlspecialchars($_POST['batiment']);
	$phone = htmlspecialchars($_POST['phone']);

	$destinataire = 'sylvain.pagura@ensam.eu' .', ';
	$destinataire .= 'boris.piotrowski@ensam.eu';
	$titre = 'Probleme avec le cluster';
	$texte = "Utilisateur : <em>$nom $prenom</em> <br/> Téléphone : $phone <br />  Batîment : $batiment <br/>Descriptif : <em>$descriptif</em> <br /> Email : $email";
	$from = 'Content-type: text/html' ."\r\n";
	$from .= 'MIME-version: 1.0' ."\r\n";
	$from .= 'charset: UTF-8' . "\r\n";
	$from .= 'From:'. $email ."\r\n";


	if (!mail($destinataire, $titre, $texte, $from)) {
		 ?><script>alert("Erreur veuiller recommencez SVP !");
		 document.location.href="http://www.lem3.fr/cluster/#section11"</script><?php
	} else {
		?><script>alert("Votre email est bien transmis");
		 document.location.href="http://www.lem3.fr/cluster/#section11"</script><?php
	}
}else{
	?><script>alert("Des informations sont manquantes !");
	 document.location.href="http://www.lem3.fr/cluster/#section11"</script><?php
}

?>
