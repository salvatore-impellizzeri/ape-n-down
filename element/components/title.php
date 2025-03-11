<?php
    function Title($text, $container_class, $p_class) {

    $current_page = basename($_SERVER['PHP_SELF'], ".php");
?>
     <section class="<?= $container_class ?>">
        <p class="title <?= $p_class ?>">
            <?php if($current_page === 'donation') : ?>
                <?= file_get_contents('img/icons/heart.svg') ?>
            <?php endif; ?>
            <span>
                <?= $text ?>
            </span>
        </p>
    </section>
<?php
    }
?>