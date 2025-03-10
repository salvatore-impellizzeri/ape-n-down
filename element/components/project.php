<?php 
    function Project($date, $title, $img) {
?>
    <div class="projects__single-project">
        <div class="projects__single-projects__img">
            <a href="/view.php">
                <img src="<?= $img ?>" alt="<?= $title ?>">
            </a>
            <?= file_get_contents('img/find.svg') ?>
        </div>
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