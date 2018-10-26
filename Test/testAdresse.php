<?php
    $test =1;
    include('../Model/ville.php');
include('../Model/adresse.php');
    echo 'je rentre une ville';
	echo '</br>';
    $ville= new Ville(1,'Bordeaux',33000);
	echo '**********ville entrée**********</bru>';
	echo '</br>';
echo 'je rentre une adresse';
echo '</br>';
$Adresse= new Adresse('19 rue du codextrem',null,$ville);
echo '**********Adresse entrée**********</bru>';
echo '</br>';


	?>