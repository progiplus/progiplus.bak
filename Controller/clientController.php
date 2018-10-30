<?php

class clientController extends abstractController
{
    public function menu($action)
    {
        switch($action)
        {
            case "ajouterClient":
                $result = $this->ajouterClient();
                break;
            case "ajouterContact":
                $result = $this->ajouterContact();
                break;
            case "ajouterMoyenComm":
                $result = $this->ajouterMoyenComm();
                break;
            case "ajouterTypeMoyenComm":
                $result = $this->ajouterTypeMoyenComm();
                break;
            case "listeClient":
                $result = $this->listeClient();
                break;
            default:
                $result = "client : erreur de menu";
                break;
        }
        return $result;
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
        $db = Database::connect();
        $statement = $db->query(' 
            SELECT client.code_client,client.raison_sociale,civilite.libelle,contact.nom,contact.prenom,contact.service
            FROM contact
            INNER JOIN client ON client.id_client = contact.id_client
            INNER JOIN civilite ON contact.id_civilite = civilite.id_civilite');

       
        return afficherPage("liste client", "View/client.php", $statement);
    }
}