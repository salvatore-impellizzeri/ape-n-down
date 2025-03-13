<?php 
    include 'components/title.php';
    include 'components/card.php';
    include 'components/sponsors.php';
    include 'components/person_card.php';
?>

<main>
    <!-- TITLE -->
    <?php 
        Title(
            "apen'down: un progetto <img class='square-s' src='img/project1.png' alt='img'> per l'inclusione <img class='square-s' src='img/img2.png' alt='img'> e l'opportunità", 
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
                "card--medium card--rotation-l card--darker",
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
        Title("scopri <img class='rectangle' src='img/img3.png' alt='img'> i nostri eventi passati
            <img class='square-l' src='img/img3.png' alt='img'>
            <br> 
            e futuri", 
            "container-M mt-74 inline justify", 
            ""
        )
    ?>

    <!-- OTHERS -->
    <section class="others">
        
        <!-- VECTOR -->
        <div class="others__vector">
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
                                "img/person-smaller.png",
                                "Nome Cognome",
                                ""
                            )
                        ?>
                        <?php 
                            Person_card(
                                "img/person-smaller.png",
                                "Nome Cognome",
                                ""
                            )
                        ?>
                        <?php 
                            Person_card(
                                "img/person-smaller.png",
                                "Nome Cognome",
                                ""
                            )
                        ?>
                        <?php 
                            Person_card(
                                "img/person-smaller.png",
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