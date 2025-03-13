<?php
    function Sponsors($title) {
?>
    <div class="z-10 others__section">
        <p>
            <?= $title ?>
        </p>
        <div class="swiper swiper--marquee">
            <div class="swiper-wrapper">
                <?php 
                    for ($i = 0; $i < 5; $i++) { 
                ?>
                    <div class="swiper-slide">
                        <img src="img/sponsor-1.png" alt="Hellas Verona">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/sponsor-2.png" alt="Fiera Cavalli">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/sponsor-1.png" alt="Hellas Verona">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/sponsor-2.png" alt="Fiera Cavalli">
                    </div>
                <?php
                    } 
                ?>
            </div>
        </div>
    </div>
<?php
    }
?>