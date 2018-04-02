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
            <a href="mailto:<?php echo $GLOBALS['cgv']['email'] ?>">
                <div class="triangle"></div>
            </a>
        </li>
        <li class="phone">
            <a href="tel:<?php echo $GLOBALS['cgv']['phone'] ?>">06</a>
        </li>
        <li class="facebook">
            <a href="<?php echo $GLOBALS['cgv']['facebook'] ?>" target="_blank">f</a>
        </li>
    </ul>

</div>