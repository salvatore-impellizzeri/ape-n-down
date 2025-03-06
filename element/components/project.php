<?php 
    function Project($date, $title, $img) {
?>
    <img src="<?= $img ?>" alt="<?= $title ?>">
    <p>
        <?= $date ?>
    </p>
    <p>
        <?= $title ?>
    </p>
<?php 
    }
?>