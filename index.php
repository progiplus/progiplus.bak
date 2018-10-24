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
<<<<<<< HEAD
            require("accueil.php"); // plutôt accueil du site
=======
            afficherPage("Accueil", "accueil.php"); // plutôt accueil du site
>>>>>>> 7fbd833863850c2ff9c3083d7a00050f17a2b7b8
            return null;
            break;
    }
    return $controller->menu($action);
}

<<<<<<< HEAD
=======
function afficherPage($title, $chemin)
{
    return require("View/template.php");
}

>>>>>>> 7fbd833863850c2ff9c3083d7a00050f17a2b7b8
echo main();