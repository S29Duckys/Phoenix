<?php

namespace PHOENIX\Controllers;

class CatalogueController
{
    public function __construct()
    {

    }

    public function index()
    {
        require VIEWS . 'App/ChoicePage.php';
    }

}