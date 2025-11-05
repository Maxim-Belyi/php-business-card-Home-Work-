<?php
require_once "constants.php" ?>

<section>
    <h2 class="stack__content-title">Технологический стэк</h2>
    <div class="stack__wrapper">
        <?php foreach ($technologyStack as $category) {
            echo "<h3 class='stack__list-title'>" . htmlspecialchars($category['title']) . "</h3>";
            echo "<ul class='stack__list'>";
            foreach ($category['technologies'] as $tech) {
                echo '<li class="stack__list-item">';
                echo '<img 
                         src="' . htmlspecialchars($tech['image']) . '" 
                         alt="Логотип ' . htmlspecialchars($tech['name']) . '" 
                         width="120" 
                         height="120" 
                         />';
                echo '<p>' . htmlspecialchars($tech['name']) . '</p>';
                echo '</li>';
            }
            echo "</ul>";
        } ?>
    </div>
</section