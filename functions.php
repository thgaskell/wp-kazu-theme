<?php
register_nav_menus(
    array(
     'main-menu' => 'Main Menu'
    ) 
);

function print_title() {
    if ( is_single() ) { single_post_title(); }       
    elseif ( is_home() || is_front_page() ) { bloginfo('name'); }
    elseif ( is_page() ) { single_post_title(''); }
    elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . esc_html($s); }
    elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
    else { bloginfo('name'); wp_title('|');}
}
?>