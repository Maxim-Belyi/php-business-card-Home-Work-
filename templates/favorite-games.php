<?php include('header.php'); ?>
<?php include('link-wrapper.php'); ?>
<h2 class="games__content-title">Мои любимые игры</h2>
<ul class="games__list">

    <?php
    foreach ($myFavoriteGames as $game) {
        echo '<li class="games__item">';
        echo '<h3 class="games__name">' . htmlspecialchars($game['title']) . '</h3>';
        echo ' <button type="button" class="games__button">
            Показать описание
        </button>';
        echo '<img class="games__image" src="' . htmlspecialchars($game['image']) . '" alt="' . htmlspecialchars($game['title']) . '">';
        echo '<p class="games__description">' . ($game['description']) . '</p>';
        echo '</li>';
    }
    ?>
</ul>

<?php include 'footer.php'; ?>
