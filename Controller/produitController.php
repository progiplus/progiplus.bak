<?php

class produitController extends abstractController
{
    public function menu($action)
    {
        switch($action)
        {
            case "ajouterProduit":
                return ajouterProduit();
                break;
            case "ajouterCatProduit":
                return $this->ajouterCatProduit();
                break;
            case "ajouterGamme":
                return $this->ajouterGamme();
                break;
            case "ajouterMarque":
                return $this->ajouterMarque();
                break;
        }
    }

    public function ajouterProduit()
    {
        $ok = $this->verifProduit();
        if($ok)
        {
            // TODO appeler bdd et essayer d'ajouter le produit. Si ajouté, ok = vrai, sinon, ok = faux
        }
        return $ok;
    }

    public function verifProduit()
    {
        // TODO appeler la méthode static de verif produit pour vérifier qu'il est ok
        return false;
    }

    public function ajouterCatProduit()
    {
        $ok = $this->verifCatProduit();
        if($ok)
        {
            // TODO appeler bdd et essayer d'ajouter la cat produit. Si ajouté, ok = vrai, sinon, ok = faux
        }
        return $ok;
    }

    public function verifCatProduit()
    {
        // TODO appeler la méthode static de verif cat produit pour vérifier qu'il est ok
        return false;
    }

    public function ajouterGamme()
    {
        $ok = $this->verifGamme();
        if($ok)
        {
            // TODO appeler bdd et essayer d'ajouter la gamme. Si ajouté, ok = vrai, sinon, ok = faux
        }
        return $ok;
    }

    public function verifGamme()
    {
        // TODO appeler la méthode static de gamme pour vérifier qu'il est ok
        return false;
    }

    public function ajouterMarque()
    {
        $ok = $this->verifMarque();
        if($ok)
        {
            // TODO appeler bdd et essayer d'ajouter la marque. Si ajouté, ok = vrai, sinon, ok = faux
        }
        return $ok;
    }

    public function verifMarque()
    {
        // TODO appeler la méthode static de marque pour vérifier qu'il est ok
        return false;
    }
}