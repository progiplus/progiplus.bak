<?php

abstract class abstractController
{
    public function __construct()
    {
        return menu($_GET["action"]);
    }

    abstract public function menu($action);
}