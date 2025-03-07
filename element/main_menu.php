<?php 
    include 'components/menu_item.php'
?>

<main class="menu-container">
    <div class="menu-container__menu">
        <?php 
            Menu_item(
                "home",
                "menu__item--r",
                "#"
            )
        ?>
        <?php
            Menu_item(
                "eventi",
                "menu__item--l",
                "#"
            )
        ?>
        <?php
            Menu_item(
                "dona ora",
                "menu__item--r",
                "#"
            )
        ?>
        <?php
            Menu_item(
                "parlano di noi",
                "menu__item--l",
                "#"
            )
        ?>
        <?php
            Menu_item(
                "lavora con noi",
                "menu__item--r",
                "#"
            )
        ?>
        <?php
            Menu_item(
                "partner",
                "menu__item--l",
                "#"
            )
        ?>
        <?php
            Menu_item(
                "contatti",
                "menu__item--r",
                "#"
            )
        ?>
    </div>
</main>