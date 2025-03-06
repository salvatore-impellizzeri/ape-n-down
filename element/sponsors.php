<?php
    function Sponsors($title) {
?>
    <div class="z-10 others__section">
        <p>
            <?= $title ?>
        </p>
        <div class="others__section__icons">
            <?php 
                for ($i = 0; $i < 3; $i++) { 
            ?>
            <div>
                <img src="img/sponsor-1.png" alt="Hellas Verona">
            </div>
            <div>
                <img src="img/sponsor-2.png" alt="Fiera Cavalli">
            </div>
            <?php
                } 
            ?>
        </div>
    </div>
<?php
    }
?>