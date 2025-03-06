<?php
    function Card($title, $text, $container_class) {
?>
    <div class="card <?= $container_class ?>">
        <h1 class="text-shadow">
            <?= $title ?>
        </h1>
        <p class="text-shadow">
            <?= $text ?>
        </p>
    </div>
<?php
    }
?>