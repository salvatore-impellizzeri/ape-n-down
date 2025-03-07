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
    <div class="container-L view__container-img">
        <img src="img/project1.png" alt="Immagine Progetto">
    </div>
    <?php 
        Article(
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat at eligendi ullam deleniti! Temporibus maxime accusantium ut ea. Eos eum optio commodi eius dolore suscipit mollitia exercitationem officiis odio odit?',
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque at expedita quam porro beatae sequi corporis nostrum explicabo rerum ipsum nesciunt neque officia cumque error, ea fugiat laborum blanditiis magnam?'
        )
    ?>
    <?php 
        Title("gallery","container-M mt-223", "font-69")
    ?>
    <div class="view__carousel">
        <?php Carousel("img/project1.png", "Prima Pagina", "img_class") ?>
    </div>
</main>