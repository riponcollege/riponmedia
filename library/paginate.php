<?php


// pagination
function paginate( $prev = '&laquo;', $next = '&raquo;' ) {
    global $wp_query, $wp_rewrite;
    echo '<div class="pagination">' . paginate_links( $pagination ) . '</div>';
}


function my_excerpt_length( $length ) { 
    return 30; 
}
add_filter( 'excerpt_length', 'my_excerpt_length' );

