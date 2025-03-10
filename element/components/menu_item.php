<?php 
    function Menu_item($title, $class, $link) {
?>
    <a href="<?php $link ?>" class="<?= $class ?> menu__item">
        <h1 class="title">
            <?= $title ?>
        </h1>
    </a>
<?php 
    }
?>