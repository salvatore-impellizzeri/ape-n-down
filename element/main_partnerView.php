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
            <img src="" alt="Immagine Progetto">
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
    <div class="view__carousel">
        <?php Carousel(
            "", 
            "Prima Slide", 
            "view__carousel__img--small"
            ) 
        ?>
        <?php Carousel(
            "", 
            "Seconda Slide", 
            "view__carousel__img--large"
            ) 
        ?>
        <?php Carousel(
            "", 
            "Terza Slide",
            "view__carousel__img--small"
            ) 
        ?>
    </div>
</main>