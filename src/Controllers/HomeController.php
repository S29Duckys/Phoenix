<?php

namespace PHOENIX\Controllers;

class HomeController
{
    public function __construct() {}

    public function accueil()
    {
        require VIEWS . 'App/homepage.php';
    }

    public function catalogue()
    {
        require VIEWS . 'App/catalogue.php';
    }

    public function reservation()
    {
        require VIEWS . 'App/reservation.php';
    }

    public function confirmation()
    {
        require VIEWS . 'App/confirmation.php';
    }
}
