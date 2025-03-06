<?php 
    function Project($date, $title, $img) {
?>
    <div class="projects__single-project">
        <div class="projects__single-projects__img">
            <img src="<?= $img ?>" alt="<?= $title ?>">
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