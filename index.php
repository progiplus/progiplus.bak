<?php

require_once 'Model/model.php';
require_once 'Controller/abstractController.php';
require_once 'Controller/clientController.php';
require_once 'Controller/produitController.php';

function main()
{
    $page = isset($_GET["page"]) ? $_GET["page"] : null;
    $action = isset($_GET["action"]) ? $_GET["action"] : null;

    switch($page)
    {
        case "client":
            $controller = new clientController();
            break;
        case "produit":
            $controller = new produitController();
            break;
        case null:
        default:
            afficherPage("Accueil", "accueil.php"); // plutôt accueil du site
            return null;
            break;
    }
    return $controller->menu($action);
}

function afficherPage($title, $chemin, $data)
{
    return require("View/template.php");
}

echo main();