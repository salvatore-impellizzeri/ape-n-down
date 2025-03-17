<?php 
    function Menu_item($title, $class, $link) {
?>
    <a href="<?= $link ?>" class="<?= $class ?> menu__item">
        <div class="menu__item__text">
            <?= $title ?>
        </div>
    </a>
<?php 
    }
?>