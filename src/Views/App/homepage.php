<?php
ob_start();


if (!isset($_SESSION['user'])) {
    header('Location: /auth/login/');
}

?>

<main>
    <header>
        <nav>
            <img src="/img/logo.png" alt="Logo">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/catalogue">Choisir une destination</a></li>
                <li><a href="/">Réserver & payer</a></li>
        </nav>
    </header>
    <section>
        <button>Choisire mon séjourtout de suite !</button>
    </section>
</main>

<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';
