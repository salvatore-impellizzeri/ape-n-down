<?php
    function Card($title, $text, $container_class, $writer, $articleName, $link) {
?>
    <div class="card <?= $container_class ?>">
        <h1 class="text-shadow">
            <?= $title ?>
        </h1>
        <p class="text-shadow">
            <?= $text ?>
        </p>
        <?php 
            if(!empty($writer) && !empty($link) && !empty($articleName)) {
        ?>
                <p>
                    - <?= $writer ?>, <?= $articleName ?>
                </p>
                <a href="<?= $link ?>">
                    <button>
                        Leggi l'articolo completo
                    </button>
                </a>
        <?php 
            }
        ?>
    </div>
<?php
    }
?>