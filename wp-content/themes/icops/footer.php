<?php
/** 
 * The theme footer.
 * 
 * @package bootstrap-basic4
 */
?>
            </div><!-- End Main Site Content -->

         <?php if ( !is_front_page() ) {
            echo '</div><!-- .page-container -->';
        } 
        ?>



            <footer id="site-footer" class="site-footer page-footer">

                <div class="container">
                    <div id="footer-row" class="row">

                         <div class="col-md-3 footer-left">
                            <?php dynamic_sidebar('footer-left'); ?> 
                        </div>
                    

                        <div class="col-md-3 footer-mid-left">  
                            <?php dynamic_sidebar('footer-mid-left'); ?> 
                        </div>


                        <div class="col-md-3 footer-mid-right">
                            <?php dynamic_sidebar('footer-mid-right'); ?> 
                    
                        </div>

                         <div class="col-md-3 footer-right">
                            <?php dynamic_sidebar('footer-right'); ?> 
                        </div>

                    </div>
                    <p class="copyright"><?php echo 'ICOPs • Illinois Council of Police • All Rights Reserved ' .  '&copy;' .  date("Y");?></p>

                 </div>

            </footer><!--.page-footer-->



        <!--wordpress footer-->
        <?php wp_footer(); ?> 
        <!--end wordpress footer-->
    </body>
</html>
