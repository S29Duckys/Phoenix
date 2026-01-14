<?php

namespace PHOENIX\Controllers;

use PHOENIX\Models\CatalogueManager;

class CatalogueController
{
    private $catalogueManager;

    public function __construct()
    {
        $this->catalogueManager = new CatalogueManager();
    }

    public function index()
    {
        // Récupérer tous les voyages
        $travels = $this->catalogueManager->all();
        
        // Passer les données à la vue
        require VIEWS . 'App/CataloguePage.php';
    }
}