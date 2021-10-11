<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 */

?>

            <div class="footer-dark">
      <footer>        
      <div class="container">
            <div class="header__center">Let's Connect</div> 
              <div class="row">
                  <div class="col-sm-6 col-md-3 item">                    
                      <h3><?php dynamic_sidebar( 'footer-menu-1-header'); ?></h3>
                      <ul>
                      <?php dynamic_sidebar( 'footer-menu-1'); ?>
                      </ul>
                  </div>
                  <div class="col-sm-6 col-md-3 item">
                      <h3><?php dynamic_sidebar( 'footer-menu-2-header'); ?></h3>
                      <ul>
                      <?php dynamic_sidebar( 'footer-menu-2'); ?>
                      </ul>
                  </div>
                  
                  <div class="col-md-6 d-flex align-items-center flex-column">
                      <h2 class="text-center">Subscribe to my newsletter!</h2>
                      <p class="text-center">Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                      <?php dynamic_sidebar( 'footer-newsletter' ); ?>
                  </div>
                  <?php if ( is_active_sidebar( 'footer-social' ) ) : ?>             
                  <?php dynamic_sidebar( 'footer-social' ); ?>
                  <?php endif; ?>
              </div>
              <p class="copyright"><?php dynamic_sidebar( 'footer-copyright' ); ?></p>
          </div>
      </footer>
  </div>


  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>


        <?php wp_footer(); ?>

    </body>
</html>



