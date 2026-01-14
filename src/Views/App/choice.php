<?php
ob_start();


if (!isset($_SESSION['user'])) {
    header('Location: /auth/login/');
}

?>

<main>
    <h1>Bienvenue sur Phoenix voici la page de choix de destination</h1>
</main>

<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';
