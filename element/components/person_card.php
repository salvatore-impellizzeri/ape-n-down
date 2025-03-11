<?php
    function Person_card($img, $name, $container_class) {
?>
    <div class="swiper-slide">
        <div class="others__card-container__card <?= $container_class ?>">
            <img src="<?= $img ?>" alt="<?= $name ?>"> 
            <button>
                <?= file_get_contents("img/icons/play.svg") ?>
            </button>
        </div>
        <p class="name">
            <?= $name ?>
        </p>
    </div>
<?php
    }
?>