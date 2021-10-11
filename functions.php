<?php

	// style and scripts
	 add_action( 'wp_enqueue_scripts', 'bootscore_5_child_enqueue_styles' );
	 function bootscore_5_child_enqueue_styles() {
         
         // style.css
         wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
         
         // custom.js
         wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', false, '', true);

     };


     // Dequeue parent bootstrap.min.css and enqueue child
function bootscore_remove_scripts() {
    
    // Dequeue parent bootstrap.min.css
    wp_dequeue_style( 'bootstrap' );
    wp_deregister_style( 'bootstrap' );

    // Register your child bootstrap.min.css
    wp_enqueue_style( 'child-theme-bootstrap', get_stylesheet_directory_uri() .'/css/lib/bootstrap.min.css' , array('parent-style'));
}
add_action( 'wp_enqueue_scripts', 'bootscore_remove_scripts', 20 );



 /**
 * Filter the except length to number of words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );





function lonetraveler_sidebars() {



    register_sidebar( array(
        'id'            => 'navbar-logo',
        'name'          => esc_html__( 'Navbar Logo'),
        'description'   => esc_html__( 'Top Left Navbar Logo'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="navbar-brand">',
        'after_title'   => '</h2>',
    ) );




    register_sidebar( array(
        'id'            => 'slider-1',
        'name'          => esc_html__( 'Slider Image 1'),
        'description'   => esc_html__( 'First Slide Photo'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<img>',
        'after_title'   => '</img>',
    ) );

    register_sidebar( array(
        'id'            => 'slider-2',
        'name'          => esc_html__( 'Slider Image 2'),
        'description'   => esc_html__( 'Second Slide Photo'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<img>',
        'after_title'   => '</img>',
    ) );

    
    register_sidebar( array(
        'id'            => 'slider-3',
        'name'          => esc_html__( 'Slider Image 3'),
        'description'   => esc_html__( 'Third Slide Photo'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<img>',
        'after_title'   => '</img>',
    ) );

    register_sidebar( array(
        'id'            => 'slider-button-1',
        'name'          => esc_html__( 'Slider Button 1'),
        'description'   => esc_html__( 'First Slider Button',),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'slider-button-2',
        'name'          => esc_html__( 'Slider Button 2'),
        'description'   => esc_html__( 'Second Slider Button'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'slider-button-3',
        'name'          => esc_html__( 'Slider Button 3'),
        'description'   => esc_html__( 'Third Slider Button'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    
    register_sidebar( array(
        'id'            => 'slider-heading-1',
        'name'          => esc_html__( 'Slider Heading 1'),
        'description'   => esc_html__( 'Slider Title Heading'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ) );

    register_sidebar( array(
        'id'            => 'slider-heading-2',
        'name'          => esc_html__( 'Slider Heading 2'),
        'description'   => esc_html__( 'Slider Title Heading'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ) );


    register_sidebar( array(
        'id'            => 'slider-heading-3',
        'name'          => esc_html__( 'Slider Heading 3'),
        'description'   => esc_html__( 'Slider Title Heading'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ) );

    register_sidebar( array(
        'id'            => 'slider-subtext-1',
        'name'          => esc_html__( 'Slider Sub-Heading-1'),
        'description'   => esc_html__( 'Slider Text'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>',
    ) );


    register_sidebar( array(
        'id'            => 'slider-subtext-2',
        'name'          => esc_html__( 'Slider Sub-Heading-2'),
        'description'   => esc_html__( 'Slider Text'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>',
    ) );


    register_sidebar( array(
        'id'            => 'slider-subtext-3',
        'name'          => esc_html__( 'Slider Sub-Heading-3'),
        'description'   => esc_html__( 'Slider Text'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>',
    ) );



    register_sidebar( array(
        'id'            => 'footer-social',
        'name'          => esc_html__( 'Footer Social Icons'),
        'description'   => esc_html__( 'Social Icons For Footer'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'navbar-social',
        'name'          => esc_html__( 'Navbar Social Icons'),
        'description'   => esc_html__( 'Social Icons for Navbar'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'first-sec-heading',
        'name'          => esc_html__( 'First Section Heading'),
        'description'   => esc_html__( 'Change the first section heading'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1>',
        'after_title'   => '</h1>',
    ) );

    register_sidebar( array(
        'id'            => 'top-photo-1',
        'name'          => esc_html__( 'Top Section Photo 1'),
        'description'   => esc_html__( 'Widget to change photos at the top of landing page'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<img class=" img-fluid img-thumbnail">',
        'after_title'   => '</img>',
    ) );

    register_sidebar( array(
        'id'            => 'top-photo-2',
        'name'          => esc_html__( 'Top Section Photo 2'),
        'description'   => esc_html__( 'Widget to change photos at the top of landing page'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'top-photo-3',
        'name'          => esc_html__( 'Top Section Photo 3'),
        'description'   => esc_html__( 'Widget to change photos at the top of landing page'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'top-photo-4',
        'name'          => esc_html__( 'Top Section Photo 4'),
        'description'   => esc_html__( 'Widget to change photos at the top of landing page'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );



    register_sidebar( array(
        'id'            => 'top-heading-1',
        'name'          => esc_html__( 'Top Section Photo Heading 1'),
        'description'   => esc_html__( 'First Photo Heading'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ) );
    register_sidebar( array(
        'id'            => 'top-heading-2',
        'name'          => esc_html__( 'Top Section Photo Heading 2'),
        'description'   => esc_html__( 'Second Photo Heading'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ) );
    register_sidebar( array(
        'id'            => 'top-heading-3',
        'name'          => esc_html__( 'Top Section Photo Heading 3'),
        'description'   => esc_html__( 'Third Photo Heading'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ) );
    register_sidebar( array(
        'id'            => 'top-heading-4',
        'name'          => esc_html__( 'Top Section Photo Heading 4'),
        'description'   => esc_html__( 'Fourth Photo Heading'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ) );
    


    register_sidebar( array(
        'id'            => 'top-paragraph-1',
        'name'          => esc_html__( 'Top Section Paragraph 1'),
        'description'   => esc_html__( 'Top Section Paragraph'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ) );
    register_sidebar( array(
        'id'            => 'top-paragraph-2',
        'name'          => esc_html__( 'Top Section Paragraph 2'),
        'description'   => esc_html__( 'Top Section Paragraph'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ) );
    register_sidebar( array(
        'id'            => 'top-paragraph-3',
        'name'          => esc_html__( 'Top Section Paragraph 3'),
        'description'   => esc_html__( 'Top Section Paragraph'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ) );
    register_sidebar( array(
        'id'            => 'top-paragraph-4',
        'name'          => esc_html__( 'Top Section Paragraph 4'),
        'description'   => esc_html__( 'Top Section Paragraph'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ) );
    

    register_sidebar( array(
        'id'            => 'about-me-heading',
        'name'          => esc_html__( 'About Me Heading'),
        'description'   => esc_html__( 'About Me Heading'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="header__center">',
        'after_title'   => '</h1>',
    ) );
    
    register_sidebar( array(
        'id'            => 'about-me-social',
        'name'          => esc_html__( 'About Me Social Icons'),
        'description'   => esc_html__( 'About Me Social Icons'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );


    register_sidebar( array(
        'id'            => 'about-me-image',
        'name'          => esc_html__( 'About Me Image'),
        'description'   => esc_html__( 'About Me Image'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'about-me-text',
        'name'          => esc_html__( 'About Me Text'),
        'description'   => esc_html__( 'About Me Text'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ) );

    register_sidebar( array(
        'id'            => 'blog-heading',
        'name'          => esc_html__( 'Blog Section Heading'),
        'description'   => esc_html__( 'Blog Heading'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1>',
        'after_title'   => '</h1>',
    ) );
    

    register_sidebar( array(
        'id'            => 'featured-photos-header',
        'name'          => esc_html__( 'Featured Photos Main Header'),
        'description'   => esc_html__( 'Featured Photo Heading'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1>',
        'after_title'   => '</h1>',
    ) );

    register_sidebar( array(
        'id'            => 'featured-1-header',
        'name'          => esc_html__( 'Featured Header 1'),
        'description'   => esc_html__( 'Featured Photo Header One'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );



    register_sidebar( array(
        'id'            => 'featured-1-paragraph',
        'name'          => esc_html__( 'Featured Paragraph 1'),
        'description'   => esc_html__( 'First Featured Photo Paragraph'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ) );


    register_sidebar( array(
        'id'            => 'featured-1-photo',
        'name'          => esc_html__( 'Featured Photo 1'),
        'description'   => esc_html__( 'First Featured Photo'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<img>',
        'after_title'   => '</img>',
    ) );

    //SECOND SECTION//

    register_sidebar( array(
        'id'            => 'featured-2-header',
        'name'          => esc_html__( 'Featured Header 2'),
        'description'   => esc_html__( 'Featured Header 2'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );



    register_sidebar( array(
        'id'            => 'featured-2-paragraph',
        'name'          => esc_html__( 'Featured Paragraph 2'),
        'description'   => esc_html__( 'Featured Paragraph Two'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ) );


    register_sidebar( array(
        'id'            => 'featured-2-photo',
        'name'          => esc_html__( 'Featured Photo 2'),
        'description'   => esc_html__( 'Featured Photo Two'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<img>',
        'after_title'   => '</img>',
    ) );

    //THIRD SECTION//

    register_sidebar( array(
        'id'            => 'featured-3-header',
        'name'          => esc_html__( 'Featured Header 3'),
        'description'   => esc_html__( 'Featured Header Three'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );



    register_sidebar( array(
        'id'            => 'featured-3-paragraph',
        'name'          => esc_html__( 'Featured Paragraph 3'),
        'description'   => esc_html__( 'Featured Paragraph Three'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ) );


    register_sidebar( array(
        'id'            => 'featured-3-photo',
        'name'          => esc_html__( 'Featured Photo 3'),
        'description'   => esc_html__( 'Featured Photo Three'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<img>',
        'after_title'   => '</img>',
    ) );

    //END//
    
    

    register_sidebar( array(
        'id'            => 'footer-copyright',
        'name'          => esc_html__( 'Footer Copyright Text'),
        'description'   => esc_html__( 'Copyright Text for Footer'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<p class="copyright">',
        'after_title'   => '</p>',
    ) );

    register_sidebar( array(
        'id'            => 'footer-newsletter',
        'name'          => esc_html__( 'Footer Newsletter'),
        'description'   => esc_html__( 'Newsletter Section'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ) );

    
    register_sidebar( array(
        'id'            => 'footer-menu-1-header',
        'name'          => esc_html__( 'Footer Menu Header 1'),
        'description'   => esc_html__( 'First Footer Menu Header'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'footer-menu-1',
        'name'          => esc_html__( 'Footer Menu 1'),
        'description'   => esc_html__( 'First Footer Menu Area'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<li>',
        'after_title'   => '</li>',
    ) );


    
    register_sidebar( array(
        'id'            => 'footer-menu-2-header',
        'name'          => esc_html__( 'Footer Menu Header 2'),
        'description'   => esc_html__( 'Second Footer Menu Header'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'footer-menu-2',
        'name'          => esc_html__( 'Footer Menu 2'),
        'description'   => esc_html__( 'Second Footer Menu Area'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<li>',
        'after_title'   => '</li>',
    ) );




}
  
add_action( 'init', 'lonetraveler_sidebars' );






