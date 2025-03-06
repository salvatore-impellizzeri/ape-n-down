<?php
    function Title($text, $container_class, $p_class) {
?>
     <section class="<?= $container_class ?>">
        <p class="title <?= $p_class ?>">
            <?= $text ?>
        </p>
    </section>
<?php
    }
?>