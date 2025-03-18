<?php
    include 'components/menu.php';
    include 'components/menu_item.php';
?>

<header class="header z-100 fadeInFromTop">
    <button class="menu-toggle">
        <a>
            <?= file_get_contents('img/icons/menu.svg') ?>
            <span>
                Menu
            </span>
        </a>
    </button>
    <div class="header__logo">
        <a href="/">
            <?= file_get_contents('img/logo.svg') ?>
        </a>
    </div>
    <button class="header__donation">
        <a href="/donation.php">
            <?= file_get_contents('img/icons/heart.svg') ?> 
            <span>
                Dona ora
            </span>
        </a>
    </button>
</header>
<?php Menu() ?>