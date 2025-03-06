<?php 
    include 'components/title.php';
    include 'components/project.php';
?>

<main>
    <!-- TITLE -->
    <?php 
        Title(
            "tutti i nostri eventi passati e futuri",
            "container-L",
            "text-shadow"
        )
    ?>

    <!-- PROGETTI -->
    <div class="container-L projects">
        <?php
            Project(
                "16.02.2024",
                "Evento Afad",
                "img/project1.png"
            )
        ?>

        <?php
            Project(
                "16.02.2024",
                "Evento Afad",
                "img/project1.png"
            )
        ?>

        <?php
            Project(
                "16.02.2024",
                "Evento Afad",
                "img/project1.png"
            )
        ?>

        <?php
            Project(
                "16.02.2024",
                "Evento Afad",
                "img/project1.png"
            )
        ?>
    </div>
</main>