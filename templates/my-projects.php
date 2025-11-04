<?php include('header.php'); ?>
<?php include('link-wrapper.php'); ?>

<section>
<?php
    foreach ($myProjects as $projects) {
        echo "<h2 class='projects__content-title'>" . $projects['title'] . "</h2>";
        echo "<div class='swiper'>";
        echo "<div class='swiper-wrapper'>";

        foreach ($projects['projects'] as $project) {
            echo "<div class='projects__item swiper-slide'>";
            echo "<img src='" . htmlspecialchars($project['image']) . "' alt='" . htmlspecialchars($project['title']) . "'/>";
            echo "<a class='projects__item-link'  target='_blank' href='" . htmlspecialchars($project['link']) . "'>";
            echo htmlspecialchars($project['title']);
            echo "</a>";

            echo "<p class='projects__item-description'>" . htmlspecialchars($project['description']) . "</p>";
            echo "</div>";
        }

        echo "</div>";
        echo "<div class='swiper-button-prev swiper-button'></div>";
        echo "<div class='swiper-button-next  swiper-button'></div>";
        echo "<div class='swiper-pagination'></div>";
        echo "</div>";
    }
    ?>

</section>
<?php include('footer.php'); ?>
