<?php
/**
 * The main template file.
 * 
 * To override home page (for listing latest post) add home.php into the theme.<br>
 * If front page displays is set to static, the index.php file will be use.<br>
 * If front-page.php exists, it will be override any home page file such as home.php, index.php.<br>
 * To learn more please go to https://developer.wordpress.org/themes/basics/template-hierarchy/ .
 * 
 * @package bootstrap-basic4
 */


// begins template. -------------------------------------------------------------------------
get_header();
// get_sidebar();
?> 


<main id="main" class="site-main" role="main">


<!-- 
http://via.placeholder.com/960x200 -->


<div class="container" style="margin-top: 2em; margin-bottom:2em; padding:0px;">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="6000" data-pause="hover">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
<!--       <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        
        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img/hero/small/wewatchout-small.jpg" class="w-100 d-md-none"/>

        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img/hero/large/wewatchout.jpg" class="w-100 d-none d-md-block"/>

    </div>
    <div class="carousel-item">
        
        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img/hero/small/onevoice-small.jpg" class="w-100 d-md-none"/>

        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img/hero/large/onevoice.jpg" class="w-100 d-none d-md-block"/>

    </div>


    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>







<div class="section">
  <div class="container">

<!--START CARDS-->
    <div class="row">
          <div class="col-lg-4 col-md-12 add-margin-bottom ">
              <div class="card h-100 text-center">
               <i class="hm-icons fa fa-star"></i>
                <div class="card-body">
                  <h5 class="card-title"><?php the_field('section_1_title'); ?></h5>
                  <p><?php the_field('section_1_content'); ?></p>
                </div>
                <div class="card-footer">
                   <a href="<?php echo get_stylesheet_directory_uri()?>/assets/img/pdf/icops-legal-plan-application.pdf" target="_blank">
                    <button type="button" class="btn btn-outline-primary btn-sm"><i class="far fa-file-pdf" style="margin-right: 7px;"></i>Download an Application</button></a>
                </div>
              </div>
          </div>


          <div class="col-lg-4 col-md-12 add-margin-bottom ">
             <div class="card h-100 text-center">
                <i class="hm-icons fa fa-users"></i>
                <div class="card-body">
                  <h5 class="card-title"><?php the_field('section_2_title'); ?></h5>
                  <p class="card-text"><?php the_field('section_2_content'); ?></p>
                </div>
                <div class="card-footer">
                   <a href="<?php echo get_stylesheet_directory_uri()?>/members/"><button type="button" class="btn btn-outline-primary btn-sm"><i class="fa fa-list-ul" style="margin-right: 7px;"></i>See Updates for Your Town</button></a>
                </div>
              </div>
          </div>


          <div class="col-lg-4 col-md-12 add-margin-bottom ">
            <div class="card h-100 text-center">
                <i class="hm-icons fa fa-donate"></i>
                <div class="card-body">
                  <h5 class="card-title"><?php the_field('section_3_title'); ?></h5>
                  <p class="card-text" style="margin-bottom:40px;"><?php the_field('section_3_content'); ?></p>

                    <!--FORM-->
                      <form action="https://payflowlink.paypal.com" method="POST"><input name="LOGIN" type="hidden" value="vasukapa"><input name="PARTNER" type="hidden" value="paypal"><input name="DESCRIPTION" type="hidden" value="ICOPS donation"><input name="TYPE" type="hidden" value="S"><p></p>


                        <div class="form-row align-items-center justify-content-center">
                            <div class="col-lg-6 col-md-7 col-sm-4 col-6">
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
                    <p class="small text-muted margin-top">* Processed by PayPal</p>

                </div><!--END Card Body-->
            </div><!--END Card-->


        </div><!--END Last Column-->
    </div><!--END Row-->


  <!--END Cards-->
  </div><!-- </section> -->
</div><!-- </section> -->





<!-- 

<hr>




<div class="section">
  <div class="container">




    <div class="row">
          <div class="col-md-5 col-sm-12 text-center">
                  <div class="fb-page" data-href="https://www.facebook.com/theicops" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-height="500" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/theicops">Facebook</a></blockquote></div>

          </div>




          <div class="col-md-7 col-sm-12 justify-content-right ">
            <blockquote class="blockquote clearfix">
              <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img/testimonials/norm_freese_100.jpg" class="float-left rounded-circle">
              <p class="mb-0 ">"Police Officers deserve a union that steps up to the plate and is there when needed."</p>
              <footer class="blockquote-footer float-right">Norm Frese, <cite title="Source Title">ICOPs President</cite></footer>
            </blockquote>

             <blockquote class="blockquote clearfix">
               <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img/testimonials/richard_bruno_100.jpg" class="float-left rounded-circle">
               <p class="mb-0">"Today and every day, law enforcement officers deserve the best representation. With ICOPs, you get it."</p>
              <footer class="blockquote-footer float-right">Richard Bruno, <cite title="Source Title">ICOPs Staff Representative</cite></footer>
            </blockquote>

             <blockquote class="blockquote clearfix">
                <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img/testimonials/barnett_100.jpg" class="float-left rounded-circle">
                <p class="mb-0">"I want to thank ICOPs for its past and continued support over the years while I was with the Maywood P.D. I know the union will continue the fantastic job…"</p>
              <footer class="blockquote-footer float-right">Namon Barnett,  <cite title="Source Title">Retired Police Officer</cite></footer>
            </blockquote>
          </div>







        </div>
    </div><




  </div>
</div>



 -->




























</main>

<?php
// get_sidebar('right');
get_footer();