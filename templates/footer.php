<?php
require_once 'constants.php';
?>

<footer>
    <div class="footer__wrapper">
        <?php foreach ($socials as $contact) {
            echo "<h2 class='footer__title'>" . htmlspecialchars($contact['title']) . "</h2>";
            echo "<ul class='footer__list'>";

            foreach ($contact['contacts'] as $icon) {
                echo "<li class='footer__item'>";
                echo '<a 
                        href=" ' . htmlspecialchars($icon['link']) . '"
                        target = "_blank"
                        aria-label = "' . htmlspecialchars($icon['name']) . '"
                        title="' . htmlspecialchars($icon['title']) . '"
                           >';
                echo '<img
                     src="' . htmlspecialchars($icon['image']) . '"/>';

                echo "</a>";
                echo "</li>";
            }
            echo "</ul>";
        }
        ?>
    </div>
    <script type="module" src="/templates/assets/main-Bc599Lsk.js"></script>

</footer>
</body>
