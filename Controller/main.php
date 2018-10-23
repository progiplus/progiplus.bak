<?php

echo main();

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
            $result = "Erreur de lien";
            break;
    }
    return $result;
}
