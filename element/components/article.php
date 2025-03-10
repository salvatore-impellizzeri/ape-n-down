<?php 
    function Article($upper_text, $lower_text) {
?>
    <article class="container-M">
        <p>
            <?= $upper_text ?>
        </p>
        <p>
            <?= nl2br($lower_text) ?>
        </p>
    </article>
<?php 
    }
?>

