<?php 
    include 'components/title.php';
    include 'components/projects.php';
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
    <div class="container-L">
        <?php
            Project(
                "16.02.2024",
                "Evento Afad",
                "img/project1.jpg"
            )
        ?>
    </div>
</main>