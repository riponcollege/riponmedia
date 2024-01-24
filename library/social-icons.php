<?php

function the_social_icons() {
    if( have_rows( 'social_icons', 'option' ) ):
        while( have_rows( 'social_icons', 'option' ) ): the_row(); 
            $name = get_sub_field('name');
            $icon = get_sub_field('icon');
            $link = get_sub_field('link');
            echo '<a href="' . $link . '"><img src="' . get_bloginfo( 'template_url' ) . '/img/social/' . $icon . '.png" title="' . $name . '" /></a>'; 
        endwhile; ?>
        </ul>
    <?php
    endif;
}

