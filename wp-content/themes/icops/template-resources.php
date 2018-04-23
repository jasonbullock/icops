<?php

/*
Template Name: Resources
*/

/**
 * @package bootstrap-basic4
 */


// begins template. -------------------------------------------------------------------------
get_header();
get_sidebar();
?> 
<main id="main" class="col-md-<?php echo \BootstrapBasic4\Bootstrap4Utilities::getMainColumnSize(); ?> site-main" role="main">




    <header class="page-header">
        <h1 class="page-title">Resources</h1>
    </header>

    
<!--  <div class="page-content row-with-vspace no-gutters">
     <div class="col-sm-12 col-md-6"> -->

    <?php    
      $args = array(
        'post_type' => 'resource_posts',
        'posts_per_page' => '-1',
        'orderby'       => 'date',
        'order'         => 'DESC'
      );



    $resource_loop = new WP_Query( $args );
?>


<?php
if ($resource_loop->have_posts()) { 
        while ( $resource_loop->have_posts() ) { 
                $resource_loop->the_post();    
                get_template_part('template-parts/content', get_post_format());

        } //endwhile; 

        $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
        $Bsb4Design->pagination();
        unset($Bsb4Design);
                    
} //endif; 
?>


<!-- <div class="clearfix"></div> 
    </div>
     <div class="col-sm-12 col-md-6">
-->
    <?php
                 
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            //get_template_part('template-parts/content-resource_posts', get_post_format());
        }// endwhile;

        $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
        $Bsb4Design->pagination();
        unset($Bsb4Design);
    } 
    ?>


        <h4>Useful Links for Illinois Police Officers</h4>
        <hr>


        <?php

        //FEDERAL 
        if( have_rows('federal_government_links') ): ?>
            <h5 class="useful-links">Federal Government</h5>
            <?php
            while ( have_rows('federal_government_links') ) : the_row();
                $fedUrl = get_sub_field('federal_link_url');
                $fedText = get_sub_field('federal_link_text');
                echo '<a href="' .  $fedUrl . '" target="_blank">' . $fedText . '</a><br>';
            endwhile;
        endif;



        //STATE
        if( have_rows('state_government_links') ): ?>
            <h5 class="useful-links">State Government</h5>
            <?php
            while ( have_rows('state_government_links') ) : the_row();
                $stateUrl = get_sub_field('state_link_url');
                $stateText = get_sub_field('state_link_text');
                echo '<a href="' .  $stateUrl . '" target="_blank">' . $stateText . '</a><br>';
            endwhile;
        endif;

        ?> 


<!--     </div>
</div>
 -->

<p>&nbsp;</p>
</main>




    <?php
get_sidebar('right');
get_footer();