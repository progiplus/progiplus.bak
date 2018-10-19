<?php

class ligneBonLivraison
{
    private $_id;
    private $_quantite;
    
    public function __construct($id, $quantite)
    {
        // Chaque setter renvoit vrai ou faux selon qu'il ait effectué l'action ou non
        // On lève une exception si un setter renvoit faux.
        if(!$this->setId($id))
        {
            throw new Exception("LigneBonLivraison : id incorrect!");
        }
        if(!$this->setQuantite($quantite))
        {
            throw new Exception("LigneBonLivraison : quantité incorrecte!");
        }
    }
    
    public function getId()
    {
        return $this->_id;
    }
    
    public function getQuantite()
    {
        return $this->_quantite;
    }
    
    public function setId($id)
    {
        $ok = is_int($id);
        if($ok)
        {
            $this->_id = $id;
        }
        return $ok;
    }
    
    public function setQuantite($quantite)
    {
        $ok = is_int($quantite) && $quantite > 0;
        if($ok)
        {
            $this->_quantite = $quantite;
        }
        return $ok;
    }
    
}

?>