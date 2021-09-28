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
                      <h3>Services</h3>
                      <ul>
                          <li><a href="#">Web design</a></li>
                          <li><a href="#">Development</a></li>
                          <li><a href="#">Hosting</a></li>
                      </ul>
                  </div>
                  <div class="col-sm-6 col-md-3 item">
                      <h3>About</h3>
                      <ul>
                          <li><a href="#">Company</a></li>
                          <li><a href="#">Team</a></li>
                          <li><a href="#">Careers</a></li>
                      </ul>
                  </div>
                  <div class="col-md-6 item text">
                      <h3>Subscribe to my newsletter!</h3>
                      <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                  </div>
                  <?php if ( is_active_sidebar( 'footer-social' ) ) : ?>             
                  <?php dynamic_sidebar( 'footer-social' ); ?>
                  <?php endif; ?>
              </div>
              <p class="copyright"><?php dynamic_sidebar( 'footer-copyright' ); ?></p>
          </div>
      </footer>
  </div>


  


        <?php wp_footer(); ?>

    </body>
</html>



