<?php 
    function Menu(){
?>

<div id="menu" class="menu-container">
    <?php 
        Menu_item(
            "home",
            "menu__item--r",
            "/"
        )
    ?>
    <?php
        Menu_item(
            "eventi",
            "menu__item--l",
            "/progetti.php"
        )
    ?>
    <?php
        Menu_item(
            "dona ora",
            "menu__item--r",
            "/donation.php"
        )
    ?>
    <?php
        Menu_item(
            "parlano di noi",
            "menu__item--l",
            "/about.php"
        )
    ?>
    <?php
        Menu_item(
            "lavora con noi",
            "menu__item--r",
            "/work.php"
        )
    ?>
    <?php
        Menu_item(
            "partner",
            "menu__item--l",
            "/partner.php"
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

<?php 
    }
?>