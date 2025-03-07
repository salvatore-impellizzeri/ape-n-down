<?php 
    function Menu_item($title, $class, $link) {
?>
    <a href="<?php $link ?>">
        <div class="<?= $class ?> menu__item card">
            <h1 class="title">
                <?= $title ?>
            </h1>
        </div>
    </a>
<?php 
    }
?>