<?php

namespace PHOENIX\Controllers;

use PHOENIX\Models\CatalogueManager;

class HomeController
{
    public function __construct() {}

    public function accueil()
    {
        require VIEWS . 'App/homepage.php';
    }

    public function catalogue()
    {
        $catalogueManager = new CatalogueManager();
        $travels = $catalogueManager->all();
        
        require VIEWS . 'App/CataloguePage.php';
    }

    public function reservation()
    {
        require VIEWS . 'App/ReservationPage.php';
    }

    public function confirmation()
    {
        require VIEWS . 'App/ConfirmationPage.php';
    }
}