<?php 

require_once('../inc/init.inc.php');

// ----------------------- TRAITEMENT ----------------------------------------
// 1-on vérifie que le membre est admin :
if (!internauteEstConnecteEtEstAdmin()) {
	header('location:../connexion.php');
	exit();
}

// Affichage des Avis insérés en base












// ----------------------- AFFICHAGE ----------------------------------------

require_once('../inc/haut.inc.php');

echo $c;

require_once('../inc/bas.inc.php');

