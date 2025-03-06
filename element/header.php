<?php
    $extraClass = $extraClass ?? '';
?>

<header class="header z-100">
    <button>
        <?= file_get_contents('img/icons/menu.svg') ?> Menu
    </button>
    <div class="header__logo">
        <a href="/">
            <?= file_get_contents('img/logo.svg') ?>
        </a>
    </div>
    <button>
    <?= file_get_contents('img/icons/heart.svg') ?> Dona ora
    </button>

</header>