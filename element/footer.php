<?php
$extraClass = $extraClass ?? null;
?>

<footer class="footer animate <?= $extraClass ?>">
    <div class="footer__animation"></div>
    <div class="container-fluid">

        <!-- UPPER FOOTER -->
        <div class="footer__upper">
            <!-- TITLE & PARAGRAPH -->
            <div>
                <h1 class="title">
                    uniscti con noi nel cambiare vite
                </h1>
                <p>
                    Contattaci per maggiori informazioni e donazioni.
                </p>
            </div>

            <!-- SOCIALS & INFO -->
            <div class="footer__upper__socials">
                <a href="#">
                    <button class="button--icon">
                        <?= file_get_contents('img/socials/instagram.svg') ?>
                    </button>
                </a>
                <a href="#">
                    <button class="button--icon">
                        <?= file_get_contents('img/socials/facebook.svg') ?>
                    </button>
                </a>
                <a href="#">
                    <button class="button--pill">
                        info@apendown.com
                    </button>
                </a>
            </div>
        </div>

        <!-- LOWER FOOTER -->
        <div class="footer__lower">
            <p>
                Copyright © Apen’Down
            </p>
            <p>
                P. IVA -------  - Privacy Policy - Cookie Policy - Gestisci Cookie
            </p>
            <p>
                Crafted by Webmotion
            </p>
        </div>
    </div>
</footer>