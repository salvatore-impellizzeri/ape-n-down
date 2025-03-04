<?php
    $extraClass = $extraClass ?? '';
?>

<header class="header">
    <button class="header__menu">
        Menu
    </button>
    <div class="header__logo">
        <a href="/">
            <?= file_get_contents('img/logo.svg') ?>
        </a>
    </div>
    <button class="header__donate">
        Dona ora
    </button>

</header>