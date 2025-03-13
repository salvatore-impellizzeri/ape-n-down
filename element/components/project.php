<?php 
    function Project($date, $title, $img, $link) {
?>
    <div class="projects__single-project">
        <a href="<?= $link ?>" class="projects__single-projects__img">
            <!-- IMMAGINE -->
            <img src="<?= $img ?>" alt="<?= $title ?>">

            <!-- SVG SCOPRI -->
            <?= file_get_contents('img/find.svg') ?>

            <!-- OVERLAY -->
            <div class="overlay overlay--45"></div>
        </a>
        <!-- INFO -->
        <div>
            <p>
                <?= $date ?>
            </p>
            <p>
                <?= $title ?>
            </p>
        </div>
    </div>
<?php 
    }
?>