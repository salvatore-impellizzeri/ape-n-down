<?php 
    function Project($date, $title, $img, $link) {
?>
    <div class="projects__single-project">
        <a href="<?= $link ?>" class="projects__single-projects__img">
            <img src="<?= $img ?>" alt="<?= $title ?>">
            <?= file_get_contents('img/find.svg') ?>
        </a>
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