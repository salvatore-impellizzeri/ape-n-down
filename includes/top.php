<?php
require('includes/vars.php');
require('includes/functions.php');
$pageTitle = 'Home';
?>

<!DOCTYPE html>
<html lang="it" dir="ltr">
    <?php require('element/head.php') ?>

    <body class="body">
        <?= element('header') ?>
        <?= element('main') ?>
        <?= element('footer') ?>
    </body>
</html>