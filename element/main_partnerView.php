<?php
    include 'components/title.php';
    include 'components/article.php';
    include 'components/carousel.php';
?>

<main class="view">
    <?php 
        Title("Nome Partner", "container-L", "")    
    ?>
    <div class="container-L">
        <div class="view__container-img">
            <img src="" alt="Immagine Partner">
        </div>
    </div>
    <?php 
        Article(
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat at eligendi ullam deleniti! Temporibus maxime accusantium ut ea. Eos eum optio commodi eius dolore suscipit mollitia exercitationem officiis odio odit?',
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque at expedita quam porro beatae sequi corporis nostrum explicabo rerum ipsum nesciunt neque officia cumque error, ea fugiat laborum blanditiis magnam?'
        )
    ?>
    
    <!-- CAROUSEL -->
    <?php 
        Title("gallery","container-M mt-223", "font-69")
    ?>
    <div class="swiper swiper--view">
        <div class="swiper-wrapper">
            <?php Carousel(
                "", 
                "Prima Slide", 
                ) 
            ?>
            <?php Carousel(
                "", 
                "Seconda Slide", 
                ) 
            ?>
            <?php Carousel(
                "", 
                "Terza Slide",
                ) 
            ?>
            <?php Carousel(
                "", 
                "Quarta Slide",
                ) 
            ?>
        </div>
        <!-- Navigazione Swiper -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</main>