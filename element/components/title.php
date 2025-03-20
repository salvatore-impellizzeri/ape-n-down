<?php
    function Title($text, $container_class, $p_class) {

    $current_page = basename($_SERVER['PHP_SELF'], ".php");
?>
     <section class="<?= $container_class ?>">
        <p class="title <?= $p_class ?>">
            <?= $text ?>
        </p>
    </section>
<?php
    }
?>