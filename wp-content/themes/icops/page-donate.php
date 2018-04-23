<?php
/** 
 * The page template file.<br>
 * This file works as display page content (post type "page") and its comments.
 * 
 * @package bootstrap-basic4
 */


// begins template. -------------------------------------------------------------------------
get_header();
get_sidebar();
?> 
            
                <main id="main" class="col-md-<?php echo \BootstrapBasic4\Bootstrap4Utilities::getMainColumnSize(); ?> site-main" role="main">
                    <?php
                    if (have_posts()) {
                        $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
                        while (have_posts()) {
                            the_post();
                            get_template_part('template-parts/content', 'page');
                            echo "\n\n";

                            $Bsb4Design->pagination();
                            echo "\n\n";

                            // If comments are open or we have at least one comment, load up the comment template
                            if (comments_open() || '0' != get_comments_number()) {
                                comments_template();
                            }
                            echo "\n\n";
                        }// endwhile;

                        
                        unset($Bsb4Design);
                    } else {
                        get_template_part('template-parts/section', 'no-results');
                    }// endif;
                    ?> 

                     <form action="https://payflowlink.paypal.com" method="POST"><input name="LOGIN" type="hidden" value="vasukapa"><input name="PARTNER" type="hidden" value="paypal"><input name="DESCRIPTION" type="hidden" value="ICOPS donation"><input name="TYPE" type="hidden" value="S"><p></p>


                        <div class="form-row  justify-content-left">
                            <div class="col-md-3 col-sm-4 col-6">
                                <div class="input-group mb-2">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                  </div>
                                  <input id="item_cost" class="donate-input form-control" name="Amount" size="5" type="text" placeholder="Dollars">
                                </div>
                            </div>
                            <div class="col-auto">
                              <button type="submit" class="btn btn-primary mb-2" value="Donate">Donate</button>
                            </div>
                        </div>
                      </form>
                    <!--END FORM-->
                    <p class="small text-muted margin-top">* Payment will bring you to a secure PayPal Transaction page</p>

                </main>

        

<?php
get_sidebar('right');
get_footer();