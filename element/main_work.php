<?php 
    include 'components/title.php';
    include 'components/article.php';
    include 'components/card.php';
?>
<main>
    <?php 
        Title(
            "Vuoi lavorare con noi?",
            "container-L", 
            ""
        ) 
    ?>
    <?php 
        Article(
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat at eligendi ullam deleniti! Temporibus maxime accusantium ut ea. Eos eum optio commodi eius dolore suscipit mollitia exercitationem officiis odio odit?',
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque at expedita quam porro beatae sequi corporis nostrum explicabo rerum ipsum nesciunt neque officia cumque error, ea fugiat laborum blanditiis magnam?<br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque at expedita quam porro beatae sequi corporis nostrum explicabo rerum ipsum nesciunt neque officia cumque error, ea fugiat laborum blanditiis magnam?"
        )
    ?>
    <div class="container-L">
        <?php 
            Card(
                "contattaci",
                "info@apendown.com",
                "card--larger card--lighter card--rotation-l mb-180 mt-120",
                "",
                "",
                "",
            )
        ?>
    </div>
</main>