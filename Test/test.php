<?php
$test =1;
    include('../Model/model.php');
    echo 'je rentre une marque ';
	echo '</br>';
    $marque = new Marque(1,'Peugeot');
	echo '**********marque entrée**********</bru>';
	echo '</br>';
    echo 'je rentre une gamme</bru>';
	echo '</br>';
    $gamme = new Gamme(1,'2666',$marque);
	echo '**********gamme entrée**********';
	echo '</br>';
    echo 'je rentre une catégorie de produit</bru>';
	echo '</br>';
    $cat = new CategorieProduit(1,'voiture',null);
	echo '**********categorie produit entrée**********';
	echo '</br>';
    echo 'je rentre un produit';
	echo '</br>';
    $prod = new Produit('000000f','peugeot 266',50000,TRUE,$cat,$gamme);
	echo '**********produit entré**********';
	echo '</br>';
    echo 'le test ',$test,' est passé avec succès';
	$test=$test+1;
?>

<!-- $ref, $designation, $prixUnit, $actif, $catProduit, $gamme -->