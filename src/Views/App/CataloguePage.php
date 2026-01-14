<?php
ob_start();

if (!isset($_SESSION['user'])) {
    header('Location: /auth/login/');
}

?>

<div class="catalogue-container">
    <h1>Catalogue des Voyages</h1>
    
    <div class="travels-grid">
        <?php foreach ($travels as $travel): ?>
            <div class="travel-card">
                <img src="<?= htmlspecialchars($travel->getTravelImage()) ?>" alt="<?= htmlspecialchars($travel->getTravelName()) ?>">
                <h3><?= htmlspecialchars($travel->getTravelName()) ?></h3>
                <p><?= htmlspecialchars($travel->getTravelDescription()) ?></p>
                <p class="price"><?= number_format($travel->getTravelPrice(), 2) ?>€</p>
                <button class="book-btn">Réserver</button>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';