<?php 
    include 'components/title.php';
    include 'components/project.php';
?>

<main>
    <!-- TITLE -->
    <?php 
        Title(
            "tutti i nostri partner",
            "container-L justify",
            "text-shadow"
        )
    ?>

    <!-- PROGETTI -->
    <div class="container-L projects">
        <?php
            Project(
                "",
                "Nome Partner",
                "",
                "/parterView.php"
            )
        ?>

        <?php
            Project(
                "",
                "Nome Partner",
                "",
                "/parterView.php"
            )
        ?>

        <?php
            Project(
                "",
                "Nome Partner",
                "",
                "/parterView.php"
            )
        ?>

        <?php
            Project(
                "",
                "Nome Partner",
                "",
                "/parterView.php"
            )
        ?>
    </div>
</main>