<?php
    function Person_card($img, $name, $container_class) {
?>
    <div class="swiper-slide">
        <div class="swiper-card <?= $container_class ?>">
            <img src="<?= $img ?>" alt="<?= $name ?>"> 
            <button>
                <?= file_get_contents("img/icons/play.svg") ?>
            </button>
        </div>
        <p>
            <?= $name ?>
        </p>
    </div>
<?php
    }
?>