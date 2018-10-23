<?php

include '../Model/model.php';
include 'abstractController.php';
include 'clientController.php';
include 'produitController.php';

function main()
{
    $page = $_GET["page"];

    switch($page)
    {
        case "client":
            $result = new clientController();
            break;
        case "produit":
            $result = new produitController();
            break;
        default:
            return $result = "Erreur de lien"; // accueil du site
            break;
    }
    return $result->menu();
}

echo main();