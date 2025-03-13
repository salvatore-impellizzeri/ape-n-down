<?php 
    function Carousel($img, $alt) {
?>
    <div class="swiper-slide swiper-slide--view">
        <div class="swiper-card">
            <img src="<?= $img ?>" alt="<?= $alt ?>">
    
            <!-- OVERLAY -->
            <div class="overlay overlay--full"></div>
        </div>
    </div>
<?php 
    }
?>
