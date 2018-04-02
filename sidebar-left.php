<div id="menu-left">
    <ul class="root">
        <li class="burger">
            <span></span>
            <span></span>
            <span></span>

            <?php wp_nav_menu(array(
                'menu_id' => 'contextual-menu',
                'container' => '',
                'menu_class' => ''
            )); ?>

        </li>
        <li class="envelope">
            <a href="mailto:antoine.perhirin@orange.fr">
                <div class="triangle"></div>
            </a>
        </li>
        <li class="phone">
            <a href="tel:+33685505440">06</a>
        </li>
        <li class="facebook">
            <a href="https://www.facebook.com/antoine.perhirin" target="_blank">f</a>
        </li>
    </ul>
</div>