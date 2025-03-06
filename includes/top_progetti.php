<?php
require('includes/vars.php');
require('includes/functions.php');
$pageTitle = 'Progetti';
?>

<!DOCTYPE html>
<html lang="it" dir="ltr">
    <?php require('element/head.php') ?>

    <body class="body">
        <?= element('header') ?>
        <?= element('main_progetti') ?>
        <?= element('footer') ?>
    </body>
</html>