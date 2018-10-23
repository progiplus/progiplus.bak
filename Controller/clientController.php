<?php

class clientController extends abstractController
{
    public function menu($action)
    {
        switch($action)
        {
            case "ajouterClient":
                return ajouterClient();
                break;
        }
    }

    public function ajouterClient()
    {
        $ok = $this->verifClient();
        if($ok)
        {
            // TODO appeler bdd et essayer d'ajouter le client. Si ajouté, ok = vrai, sinon, ok = faux
        }
        return $ok;
    }

    public function verifClient()
    {
        // TODO appeler la méthode static de verif client pour vérifier qu'il est ok
        return false;
    }

    public function ajouterContact()
    {
        $ok = $this->verifContact();
        if($ok)
        {
            // TODO appeler bdd et essayer d'ajouter le contact. Si ajouté, ok = vrai, sinon, ok = faux
        }
        return $ok;
    }

    public function verifContact()
    {
        // TODO appeler la méthode static de verif client pour vérifier qu'il est ok
        return false;
    }

    public function ajouterMoyenComm()
    {
        $ok = $this->verifMoyenComm();
        if($ok)
        {
            // TODO appeler bdd et essayer d'ajouter le contact. Si ajouté, ok = vrai, sinon, ok = faux
        }
        return $ok;
    }

    public function verifMoyenComm()
    {
        // TODO appeler la méthode static de verif client pour vérifier qu'il est ok
        return false;
    }

    public function ajouterTypeMoyenComm()
    {
        $ok = $this->verifMoyenComm();
        if($ok)
        {
            // TODO appeler bdd et essayer d'ajouter le contact. Si ajouté, ok = vrai, sinon, ok = faux
        }
        return $ok;
    }

    public function verifTypeMoyenComm()
    {
        // TODO appeler la méthode static de verif client pour vérifier qu'il est ok
        return false;
    }
}