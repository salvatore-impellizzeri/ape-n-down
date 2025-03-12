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
            ""
        )
    ?>

    <!-- PROGETTI -->
    <div class="container-L projects">
        <?php
            Project(
                "",
                "Nome Partner",
                "",
                "/partnerView.php"
            )
        ?>

        <?php
            Project(
                "",
                "Nome Partner",
                "",
                "/partnerView.php"
            )
        ?>

        <?php
            Project(
                "",
                "Nome Partner",
                "",
                "/partnerView.php"
            )
        ?>

        <?php
            Project(
                "",
                "Nome Partner",
                "",
                "/partnerView.php"
            )
        ?>
    </div>
</main>