<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */
?>
<?php get_header(); ?>
        <div id="content" role="main">

        <?php if ( have_posts() ) : ?>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

            <article id="<?php the_ID(); ?>">
                <header>
                    <hgroup>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <time><?php the_date(); ?> </time>
                    </hgroup>
                </header>
                <?php the_content(); ?>
            </article>

            <hr>
            <?php endwhile; ?>

        <?php else : ?>

            <article id="post-0" class="post no-results not-found">
                <header class="entry-header">
                    <h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
                    <?php get_search_form(); ?>
                </div><!-- .entry-content -->
            </article><!-- #post-0 -->


        <?php endif; ?>

            <article>
                <b>Footnote:</b> You are encouraged to join the following professional organizations.
                <ul>
                    <li><a href="http://www.ieee.org/">
                        IEEE</a>
                        (<a href="http://www.ieee.org/web/membership/Cost/dues.html">
                        Student Membership</a>)
                        <a href="http://www.computer.org/">Computer Society</a>
                        (<a href="http://www.computer.org/portal/web/membership/membershipdues">
                        Student Membership</a>)
                    </li><li><a href="http://www.acm.org/">
                        ACM</a>
                        (<a href="http://www.acm.org/membership/student/">
                        Student Membership</a>)
                    </li>
                </ul>
            </article>

        </div><!-- #content -->
<?php get_footer(); ?>
