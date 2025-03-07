<?php 
    include 'components/title.php';
    include 'components/project.php';
?>

<main>
    <!-- TITLE -->
    <?php 
        Title(
            "tutti i nostri eventi passati e futuri",
            "container-L justify",
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
                "18.02.2024",
                "Fiera Cavalli",
                "img/project2.png"
            )
        ?>

        <?php
            Project(
                "18.02.2024",
                "Oasi San Giacomo",
                "img/project3.png"
            )
        ?>

        <?php
            Project(
                "18.02.2024",
                "Evento Hellas",
                "img/project4.png"
            )
        ?>
    </div>
</main>