<?php 
    include 'components/title.php';
    include 'components/card.php';
    include 'components/sponsors.php';
    include 'components/person_card.php';
    include 'components/cursor.php';
?>

<main class="home">
    <!-- CURSOR HOVER -->
    <?php cursor() ?>

    <!-- TITLE -->
    <?php 
        Title(
            "<span class='opacity'>apen'down: un progetto</span> 
            <span class='square-s container-title-img'>
                <img class='firstCard' src='img/project1.png' alt='img'> 
                <img class='square-s__img' src='img/project1.png' alt='img'> 
            </span>
            <span class='opacity'>per l'inclusione</span> 
            <img class='square-s secondCard' src='img/img2.png' alt='img'> 
            <span class='opacity'>e l'opportunità</span>", 
            "container-L justify", 
            "text-shadow"
        )
    ?>

    <div class="overlay-img">
        <div class="overlay-img__bg">
            
        </div>
    </div>
 
    <!-- CARDS -->
    <section class="container-L cardContainer my-180">
        <?php 
            Card(
                "Cos'è?", 
                "Apen'down è una cooperativa sociale che mira all'inserimento lavorativo, dapprima in ambito ristorazione e successivamente 
                in altri settori di servizio, delle persone con disabilità.", 
                "card--medium card--rotation-l card--darker card-gsap",
                "",
                "",
                "",
            )
        ?>
        <?php 
            Card(
                "il progetto", 
                "Il progetto Apen'Down vuole proporsi come possibilità di formazione e di occupazione lavorativa, credendo che l'occupazione lavorativa sia un percorso consigliabile e praticabile per le persone con disabilità e che sia altresì un diritto di tutti.", 
                "card--larger card--lighter card--translate-1 z-2 card-gsap",
                "",
                "",
                "",
            )
        ?>
         <?php 
            Card(
                "l'obbiettivo", 
                "Apen'down vuole costruire un futuro per tutti i giovani e adulti con disabilità attraverso l'integrazione lavorativa inizialmente con stand all'interno di Fiere ed eventi di Verona fino ad arrivare all'ambizioso progetto della gestione di un bar.", 
                "card--medium card--rotation-r card--black card--translate-2 z-3 card-gsap",
                "",
                "",
                "",
            )
        ?> 

        <div class="endy-trendy" style="display:block; width:100%; height:500px;"></div>
    </section>

    <!-- SECOND BIG TITLE -->
    <?php 
        Title(
            "<span class='text-hover'>scopri</span> 
            <a href='/progetti.php' class='rectangle hover-image img-wrapper-1'>
                <img src='img/img3.png' alt='img'>
                <img class='svg' src='img/find.svg' alt='find'>
            </a>    
            <span class='text-hover'>i nostri eventi passati</span>
            <a href='/progetti.php' class='square-l hover-image img-wrapper-2'>
                <img src='img/img3.png' alt='img'>
                <img class='svg' src='img/find.svg' alt='find'>
            </a>
            <br> 
            <span class='text-hover'>e futuri</span>", 
            "container-M mt-74 inline justify", 
            ""
        );
    ?>

    <!-- OTHERS -->
    <section class="others translateToTop">
        
        <!-- VECTOR -->
        <div class="others__vector vector">
        </div>

        <?php
            Sponsors("Main sponsor:")
        ?>

        <!-- SOSTENITORI -->
        <?php
            Sponsors("I nostri sostenitori:")
        ?>
        <!-- SCELTO -->
        <div class="z-10 others__section">
            <p>
                Ci hanno scelto:
            </p>
                <div class="swiper swiper--home">
                    <div class="swiper-wrapper">
                        <?php 
                            Person_card(
                                "img/person.png",
                                "Nome Cognome",
                                ""
                            )
                        ?>
                        <?php 
                            Person_card(
                                "img/person.png",
                                "Nome Cognome",
                                ""
                            )
                        ?>
                        <?php 
                            Person_card(
                                "img/person.png",
                                "Nome Cognome",
                                ""
                            )
                        ?>
                        <?php 
                            Person_card(
                                "img/person.png",
                                "Nome Cognome",
                                ""
                            )
                        ?>
                    </div>
                    <!-- Navigazione Swiper -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>
</main>
