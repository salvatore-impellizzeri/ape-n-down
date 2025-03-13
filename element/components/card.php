<?php
    function Card($title, $text, $container_class, $writer, $articleName, $link) {
?>
    <div class="card <?= $container_class ?>">
        <h1>
            <?= $title ?>
        </h1>
        <p class="<?= ($_SERVER['REQUEST_URI'] === '/work.php') ? 'underline' : '' ?>">
            <?= $text ?>
        </p>
        <?php 
            if(!empty($writer) && !empty($link) && !empty($articleName)) {
        ?>
                <p>
                    - <?= $writer ?>, <?= $articleName ?>
                </p>
                <button>
                    <a href="<?= $link ?>">
                        Leggi l'articolo completo
                    </a>
                </button>
        <?php 
            }
        ?>
    </div>
<?php
    }
?>