<?php

class clientController extends abstractController
{
    public function menu($action)
    {
        switch($action)
        {
            case "ajouterClient":
                return $this->ajouterClient();
                break;
            case "ajouterContact":
                return $this->ajouterContact();
                break;
            case "ajouterMoyenComm":
                return $this->ajouterMoyenComm();
                break;
            case "ajouterTypeMoyenComm":
                return $this->ajouterTypeMoyenComm();
                break;
            case "listeClient":
                $this->listeClient();
                break;
            default:
                echo "client : erreur de menu";
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
        // TODO essayer d'instancier un client
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
        // TODO essayer d'instancier un contact
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
        // TODO essayer d'instancier un moyen comm
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
        // TODO essayer d'instancier un type moyen comm
        return false;
    }

    public function listeClient()
    {
        include_once("client.php");
    }
}