<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<title><?php
        print_title();
    ?></title>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <?php wp_head(); ?>
</head>

<body>
<header id="header">
    <hgroup>
        <h1 id="site-title"><?php print_title()?></h1>
    </hgroup>
    <?php if ( has_nav_menu('main-menu') ) {
        echo '<nav id="navigation">';
        wp_nav_menu(
            array( 
                 'container'=>null
                ,'depth'=>1
                ,'theme_location'=>'main-menu'
            )
        );
        if (is_page()) {
            if ($post->post_parent) {
                $ancestors = get_post_ancestors($post->ID);
                $root = count($ancestors)-1;
                $parent = $ancestors[$root];
            } else {
                $parent = $post->ID;
            }
            $children = wp_list_pages(
                            array(
                                 'child_of'=>$parent
                                ,'depth'=>2
                                ,'echo'=>0
                                ,'menu_class'=>'menu'
                                ,'post_status'=>'publish'
                                ,'title_li'=>null
                                ,'sort_column'=>'menu_order'
                            )
                        );
            if ($children) {
                echo "<ul id=\"sub-menu\"class=\"menu\">$children</ul>";
            }
        }
        echo '</nav>';
    } ?>
</header>