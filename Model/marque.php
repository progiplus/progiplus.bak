<?php

class Marque
{
    private $_id;
    private $_nom;
    
    public function getId()
    {
        return $this->_id;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function setId($id)
    {
        $this->_id = $id;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

}

?>