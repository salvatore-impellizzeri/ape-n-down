<?php 
    include 'components/title.php';
    include 'components/card.php';
    include 'components/sponsors.php';
    include 'components/person_card.php';
?>

<main class="home">
    <!-- TITLE -->
    <?php 
        Title(
            "<span class='opacity'>apen'down: un progetto</span> 
            <img class='square-s firstCard' src='img/project1.png' alt='img'> 
            <span class='opacity'>per l'inclusione</span> 
            <img class='square-s secondCard' src='img/img2.png' alt='img'> 
            <span class='opacity'>e l'opportunità</span>", 
            "container-L justify", 
            "text-shadow"
        )
    ?>

    <!-- CARDS -->
    <section class="container-L my-180">
        <?php 
            Card(
                "Cos'è?", 
                "Apen'down è una cooperativa sociale che mira all'inserimento lavorativo, dapprima in ambito ristorazione e successivamente 
                in altri settori di servizio, delle persone con disabilità.", 
                "card--medium card--rotation-l card--darker firstInfoCard",
                "",
                "",
                "",
            )
        ?>
        <?php 
            Card(
                "il progetto", 
                "Il progetto Apen'Down vuole proporsi come possibilità di formazione e di occupazione lavorativa, credendo che l'occupazione lavorativa sia un percorso consigliabile e praticabile per le persone con disabilità e che sia altresì un diritto di tutti.", 
                "card--larger card--lighter card--translate-1 z-10",
                "",
                "",
                "",
            )
        ?>
         <?php 
            Card(
                "l'obbiettivo", 
                "Apen'down vuole costruire un futuro per tutti i giovani e adulti con disabilità attraverso l'integrazione lavorativa inizialmente con stand all'interno di Fiere ed eventi di Verona fino ad arrivare all'ambizioso progetto della gestione di un bar.", 
                "card--medium card--rotation-r card--black card--translate-2 z-20",
                "",
                "",
                "",
            )
        ?> 
    </section>

    <!-- SECOND BIG TITLE -->
    <?php 
        Title(
            "<span class='opacity'>scopri</span> 
            <img class='rectangle' src='img/img3.png' alt='img'>
            <span class='opacity'>i nostri eventi passati</span>
            <span class='img-wrapper'>
                <img class='square-l' src='img/img3.png' alt='img'>
                <img class='svg' src='img/find.svg' alt='find'>
            </span>
            <br> 
            <span class='opacity'>e futuri</span>", 
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