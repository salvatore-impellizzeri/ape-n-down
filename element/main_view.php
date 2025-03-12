<?php
    include 'components/title.php';
    include 'components/article.php';
    include 'components/carousel.php';
?>

<main class="view">
    <p>
        18.02.2024
    </p>
    <?php 
        Title("Evento afad", "container-L", "")    
    ?>
    <div class="container-L">
        <div class="view__container-img">
            <img src="img/project1.png" alt="Immagine Progetto">
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
                    "img/project1.png", 
                    "Prima Pagina", 
                    ) 
                ?>
                <?php Carousel(
                    "img/project1.png", 
                    "Seconda Pagina", 
                    ) 
                ?>
                <?php Carousel(
                    "img/project1.png", 
                    "Terza Pagina",
                    ) 
                ?>
                <?php Carousel(
                    "img/project1.png", 
                    "Terza Pagina",
                    ) 
                ?>
        </div>
        <!-- Navigazione Swiper -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</main>