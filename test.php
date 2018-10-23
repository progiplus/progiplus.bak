<?php
ini_set ('display_errors',1);
try {
    
    echo 'je rentre une marque';
    $marque = new Marque(1,'Peugeot');
    echo 'je rentre une gamme';
    $gamme = new Gamme(1,'2666');
    echo 'je rentre une catégorie de produit';
    $cat = new CategorieProduit(1,'voiture',null);
    echo 'je rentre un produit';
    $prod = new Produit(0000f,'peugeot 266',50000,1,1);
    
    
}
catch ($e){
    echo 'exception reçue';//$e->getMessage();
}
    
    
?>

<!-- $ref, $designation, $prixUnit, $actif, $catProduit, $gamme -->