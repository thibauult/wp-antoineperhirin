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
        <a href="<?php echo get_page_link( get_page_by_title( 'contact' )->ID ); ?>" aria-label="Page de Contact">
            <div aria-hidden="true" class="triangle"></div>
        </a>
    </li>
    <li class="phone">
        <a href="tel:<?php echo $GLOBALS['cgv']['phone'] ?>">06</a>
    </li>
    <li class="facebook">
        <a href="<?php echo $GLOBALS['cgv']['facebook'] ?>" target="_blank" rel="noopener">f</a>
    </li>
</ul>