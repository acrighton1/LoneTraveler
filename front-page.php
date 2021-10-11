<?php
/*
Template Name: Front Page
*/
    
    get_header();
    ?>
<?php
if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} else {
}?>





 <section>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
          <?php if ( is_active_sidebar( 'slider-1' ) ) : ?>             
           <?php dynamic_sidebar( 'slider-1' ); ?>
            <?php endif; ?>
            <div class="carousel-caption d-none d-md-block">
              <h5><?php dynamic_sidebar( 'slider-heading-1' ); ?></h5><br>
              <p><?php dynamic_sidebar( 'slider-subtext-1' ); ?></p><br>
              <?php if ( is_active_sidebar( 'slider-button-1' ) ) : ?>             
           <?php dynamic_sidebar( 'slider-button-1' ); ?>
            <?php endif; ?>
            </div>
          </div>
          <div class="carousel-item">
          <?php if ( is_active_sidebar( 'slider-2' ) ) : ?>             
           <?php dynamic_sidebar( 'slider-2' ); ?>
            <?php endif; ?>
            <div class="carousel-caption d-none d-md-block">
              <h5><?php dynamic_sidebar( 'slider-heading-2' ); ?></h5><br>
              <p><?php dynamic_sidebar( 'slider-subtext-2' ); ?></p><br>
              <?php if ( is_active_sidebar( 'slider-button-2' ) ) : ?>             
           <?php dynamic_sidebar( 'slider-button-2' ); ?>
            <?php endif; ?>
            </div>
          </div>
          <div class="carousel-item">
          <?php if ( is_active_sidebar( 'slider-3' ) ) : ?>             
           <?php dynamic_sidebar( 'slider-3' ); ?>
            <?php endif; ?>
            <div class="carousel-caption d-none d-md-block">
              <h5><?php dynamic_sidebar( 'slider-heading-3' ); ?></h5><br>
              <p><?php dynamic_sidebar( 'slider-subtext-3' ); ?></p><br>
              <?php if ( is_active_sidebar( 'slider-button-3' ) ) : ?>             
           <?php dynamic_sidebar( 'slider-button-3' ); ?>
            <?php endif; ?>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>          
    </section>
    
    
    
    <section>       
    <div class="second-section-places">
        <p class="text-center fs-1 mx-5"><?php dynamic_sidebar( 'first-sec-heading' ); ?>
       </p>
       <div class="row row-cols-1 row-cols-md-2 g-4 mx-5">
        <div class="col">
        <?php if ( is_active_sidebar( 'top-photo-1' ) ) : ?>  
          <div class="card">
          <?php dynamic_sidebar( 'top-photo-1' ); ?>            
          <div class="card-body">
              <h5 class="card-title"><?php dynamic_sidebar( 'top-heading-1' ); ?></h5>
              <p class="card-text"><?php dynamic_sidebar( 'top-paragraph-1' ); ?></p>              
            </div>
          </div>
          <?php endif; ?>
        </div>


        <div class="col">
        <?php if ( is_active_sidebar( 'top-photo-2' ) ) : ?>
          <div class="card">            
          <?php dynamic_sidebar( 'top-photo-2' ); ?>  
               <div class="card-body">
              <h5 class="card-title"><?php dynamic_sidebar( 'top-heading-2' ); ?></h5>
              <p class="card-text"><?php dynamic_sidebar( 'top-paragraph-2' ); ?></p>
            </div>
          </div>
          <?php endif; ?>
        </div>

        
        <div class="row-md-9">
          <div class="col">
          <?php if ( is_active_sidebar( 'top-photo-3' ) ) : ?>
            <?php dynamic_sidebar( 'top-photo-3' ); ?>  
             <div class="card-body">
              <h5 class="card-title"><?php dynamic_sidebar( 'top-heading-3' ); ?></h5>
              <p class="card-text"><?php dynamic_sidebar( 'top-paragraph-3' ); ?></p>
            </div>
          </div>
          <?php endif; ?>
        </div>
        <div class="col">
        <?php if ( is_active_sidebar( 'top-photo-4' ) ) : ?>
          <div class="card">
          <?php dynamic_sidebar( 'top-photo-4' ); ?>  
            <div class="card-body">
              <h5 class="card-title"><?php dynamic_sidebar( 'top-heading-4' ); ?></h5>
              <p class="card-text"><?php dynamic_sidebar( 'top-paragraph-4' ); ?></p>
            </div>
          </div>
        </div>
        <?php endif; ?>
      </div>
      </div>
    </div> 
    </section>
    

    <section>
      <div class="about-me">
        <div class="container">
          <div class="header__center"><?php dynamic_sidebar( 'about-me-heading' ); ?></div>  
          <img src="wp-content\themes\bootscore-5-child\images\Line 2@2x.png" class="img-fluid" alt="...">
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
              <?php if ( is_active_sidebar( 'about-me-image' ) ) : ?>  
              <?php dynamic_sidebar( 'about-me-image' ); ?>
              <?php endif; ?>
              </div>
              <div class="col-md-8">
                <div class="card-body">            
                  <p class="card-text text-wrap"><?php if ( is_active_sidebar( 'about-me-text' ) ) : ?>          
                  <?php dynamic_sidebar( 'about-me-text' ); ?>
                  <?php endif; ?></p>              
                
                <div class="social-icons-2">
                  <li class="icon-specific-2">
                  <?php if ( is_active_sidebar( 'about-me-social' ) ) : ?>             
                  <?php dynamic_sidebar( 'about-me-social' ); ?>
                  <?php endif; ?>
                </li> 
              </div>                  
                </div>
                <img src="wp-content\themes\bootscore-5-child\images\Line 2@2x.png" class="img-fluid" alt="...">
              </div>
              <img src="wp-content\themes\bootscore-5-child\images\Line 2@2x.png" class="img-fluid" alt="...">              
            </div>
          </div>
        </div>
         
         </div>
      </div>
    </section>
    
    
    
    <section>          
      <div class="album py-5 bg-light">
        <div class="container">
          <p class="text-center fs-1 mx-5"><?php dynamic_sidebar( 'blog-heading' ); ?></p>
            <?php
           $pageCardPost1 = new WP_Query(array(
             'post_type' => 'post',
             'orderby' => 'date',
             'order'    => 'desc',
             'posts_per_page' => 1
             

           ));


            while ($pageCardPost1->have_posts()) {
              $pageCardPost1->the_post(); ?>             
         


          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <?php the_post_thumbnail();?>
                <div class="card-body">
                <small class="text-muted">
                                <?php
							         bootscore_date();
							         _e(' by ', 'bootscore'); the_author_posts_link();
							         bootscore_comment_count();							
							     ?>
                            </small>         
                  <h5 class="card-title"><?php the_title(); ?></h5>
                  <p class="card-text"><?php the_excerpt($length); ?>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="<?php the_permalink(); ?>" class="btn btn-dark">Read More</a>
                    </div>
                    <small class="text-muted">at <?php the_time('g:i A'); ?></small>
                  </div>
                </div>
              </div>          
            </div>
            <?php  } wp_reset_postdata();
          ?>
          


            <?php
           $pageCardPost2 = new WP_Query(array(
             'post_type' => 'post',
             'orderby' => 'date',
             'order'    => 'desc',
             'posts_per_page' => 1,
             'offset' => 1
             

           ));


            while ($pageCardPost2->have_posts()) {
              $pageCardPost2->the_post(); ?>
            
              





            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <?php the_post_thumbnail()?>
                <div class="card-body">
                <?php
							         bootscore_date();
							         _e(' by ', 'bootscore'); the_author_posts_link();
							         bootscore_comment_count();							
							     ?>
                            </small>         
                  <h5 class="card-title"><?php the_title(); ?></h5>
                  <p class="card-text"><?php the_excerpt($length) ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="<?php the_permalink(); ?>" class="btn btn-dark">Read More</a>
                    </div>
                    <small class="text-muted">at <?php the_time('g:i A'); ?></small>
                  </div>
                </div>
              </div>
            </div>
            <?php  } wp_reset_postdata();
          ?>
          
          <?php
           $pageCardPost3 = new WP_Query(array(
             'post_type' => 'post',
             'orderby' => 'date',
             'order'    => 'desc',
             'posts_per_page' => 1,
             'offset' => 2
             

           ));


            while ($pageCardPost3->have_posts()) {
              $pageCardPost3->the_post(); ?>
            
              



            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <?php the_post_thumbnail()?>
                <div class="card-body">
                <?php
							         bootscore_date();
							         _e(' by ', 'bootscore'); the_author_posts_link();
							         bootscore_comment_count();							
							     ?>
                            </small>         
                  <h5 class="card-title"><?php the_title(); ?></h5>
                  <p class="card-text"><?php the_excerpt($length) ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="<?php the_permalink(); ?>" class="btn btn-dark">Read More</a>
                    </div>
                    <small class="text-muted">at <?php the_time('g:i A'); ?></small>
                  </div>
                </div>
              </div>
            </div> 
            <?php  } wp_reset_postdata();
          ?>
                    
    </section>

   <!-- START THE FEATURETTES -->
   <p class="text-center fs-1 mx-5"><?php dynamic_sidebar( 'featured-photos-header' ); ?>
  </p>
   <hr class="featurette-divider mx-5">
   <div class="container">
   <div class="row featurette mx-5">
     <div class="col-md-7">
      <h2><?php dynamic_sidebar( 'featured-1-header' ); ?></h2>   
     
      <p><?php dynamic_sidebar( 'featured-1-paragraph' ); ?></p>
       
     </div>
     <div class="col-md-5">       
     <?php dynamic_sidebar( 'featured-1-photo' ); ?>
     </div>
    </div>
   </div>

   <hr class="featurette-divider mx-5">

   <div class="row featurette mx-5">
     <div class="col-md-7 order-md-2">
      <h2><?php dynamic_sidebar( 'featured-2-header' ); ?></h2>     
      <p><?php dynamic_sidebar( 'featured-2-paragraph' ); ?></p>        
     </div>
     <div class="col-md-5 order-md-1">
     <?php dynamic_sidebar( 'featured-2-photo' ); ?>
         </div>
   </div>

   <hr class="featurette-divider mx-5">

   <div class="row featurette mx-5">
     <div class="col-md-7">
      <h2><?php dynamic_sidebar( 'featured-3-header' ); ?></h2> 
      <p><?php dynamic_sidebar( 'featured-3-paragraph' ); ?></p>  
        
     </div>
     <div class="col-md-5">
     <?php dynamic_sidebar( 'featured-3-photo' ); ?>  
    </div>
   </div>
  </div>

   <hr class="featurette-divider">

   <!-- /END THE FEATURETTES -->

 </div>



<?php
get_footer();
