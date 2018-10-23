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
            default:
                return "Pas d'action ".$action." dans le contrôleur ".get_class($this);
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
        // TODO essayer d'instancier un produit
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
        // TODO essayer d'instancier une categorieProduit
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
        // TODO essayer d'instancier une gamme
        return false;
    }

    public function ajouterMarque()
    {
        $marque = $this->verifMarque();
        if($marque instanceof Marque)
        {
            $marque = true;
            // TODO appeler bdd et essayer d'ajouter la marque. Si ajouté, vrai, sinon, message d'erreur
        }
        return $marque;
    }

    public function verifMarque()
    {
        $nom = $_POST['nomMarque'];
        try
        {
            $marque = new Marque(1, $nom);
            return $marque;
        }
        catch(Exception $e)
        {
            return $e;
        }
    }
}