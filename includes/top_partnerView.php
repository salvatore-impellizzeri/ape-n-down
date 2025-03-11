<?php
require('includes/vars.php');
require('includes/functions.php');
$pageTitle = 'Partner View';
?>

<!DOCTYPE html>
<html lang="it" dir="ltr">
    <?php require('element/head.php') ?>

    <body class="body">
        <?= element('header') ?>
        <?= element('main_partnerView') ?>
        <?= element('footer') ?>
    </body>
</html>