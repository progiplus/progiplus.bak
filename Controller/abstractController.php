<?php

abstract class abstractController
{
    public function __construct()
    {
        return $this->menu($_GET["action"]);
    }

    abstract public function menu($action);
}