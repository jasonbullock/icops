<?php

/*
Template Name: Members
*/

/**
 * @package bootstrap-basic4
 */


// begins template. -------------------------------------------------------------------------
get_header();
get_sidebar();
?> 
                <main id="main" class="col-md-<?php echo \BootstrapBasic4\Bootstrap4Utilities::getMainColumnSize(); ?> site-main" role="main">
                    <header class="entry-header">
                        <h1 class="entry-title">Members</h1>
                    </header>
                    <?php
                    if( have_posts() ) :
                        while( have_posts() ) : the_post();
                            the_content();
                        endwhile;
                    endif;
                    ?>
                    <hr>




                    <?php
                    $args = array(
                      'orderby' => 'name',
                      'parent' => 0,
                      'hide_empty' => 0
                      );
                    $categories = get_categories( $args );
                    echo '<ul class="member-list">';
                    foreach ( $categories as $category ) {
                        echo '<li>';
                        echo '<a href="' . get_permalink() . $category->slug . '">'  . $category->name . '</a>';
                        // echo ' ' . $category->category_count;
                        echo '</li>';
                    }
                    echo '</ul>';
?>
                </main>
<?php
get_sidebar('right');
get_footer();