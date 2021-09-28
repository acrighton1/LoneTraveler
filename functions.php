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
        'id'            => 'slider-1',
        'name'          => esc_html__( 'Slider Image 1'),
        'description'   => esc_html__( 'Appears on the static front page template'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'slider-2',
        'name'          => esc_html__( 'Slider Image 2'),
        'description'   => esc_html__( 'Appears on the static front page template'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    
    register_sidebar( array(
        'id'            => 'slider-3',
        'name'          => esc_html__( 'Slider Image 3'),
        'description'   => esc_html__( 'Appears on the static front page template'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'slider-button-1',
        'name'          => esc_html__( 'Slider Button 1'),
        'description'   => esc_html__( 'Appears on the static front page template',),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'slider-button-2',
        'name'          => esc_html__( 'Slider Button 2'),
        'description'   => esc_html__( 'Appears on the static front page template'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'slider-button-3',
        'name'          => esc_html__( 'Slider Button 3'),
        'description'   => esc_html__( 'Appears on the static front page template'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    
    register_sidebar( array(
        'id'            => 'slider-heading-1',
        'name'          => esc_html__( 'Slider Heading 1'),
        'description'   => esc_html__( 'Appears on the static front page template'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'slider-heading-2',
        'name'          => esc_html__( 'Slider Heading 2'),
        'description'   => esc_html__( 'Appears on the static front page template'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );


    register_sidebar( array(
        'id'            => 'slider-heading-3',
        'name'          => esc_html__( 'Slider Heading 3'),
        'description'   => esc_html__( 'Appears on the static front page template'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'slider-subtext-1',
        'name'          => esc_html__( 'Slider Sub-Heading-1'),
        'description'   => esc_html__( 'Appears on the static front page template'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );


    register_sidebar( array(
        'id'            => 'slider-subtext-2',
        'name'          => esc_html__( 'Slider Sub-Heading-2'),
        'description'   => esc_html__( 'Appears on the static front page template'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );


    register_sidebar( array(
        'id'            => 'slider-subtext-3',
        'name'          => esc_html__( 'Slider Sub-Heading-3'),
        'description'   => esc_html__( 'Appears on the static front page template'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );



    register_sidebar( array(
        'id'            => 'footer-social',
        'name'          => esc_html__( 'Footer Social Icons'),
        'description'   => esc_html__( 'Appears on the static front page template'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'navbar-social',
        'name'          => esc_html__( 'Navbar Social Icons'),
        'description'   => esc_html__( 'Appears on the static front page template'),
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
        'name'          => esc_html__( 'Top Photo 1'),
        'description'   => esc_html__( 'Widget to change photos at the top of landing page'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'top-photo-2',
        'name'          => esc_html__( 'Top Photo 2'),
        'description'   => esc_html__( 'Widget to change photos at the top of landing page'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'top-photo-3',
        'name'          => esc_html__( 'Top Photo 3'),
        'description'   => esc_html__( 'Widget to change photos at the top of landing page'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'top-photo-4',
        'name'          => esc_html__( 'Top Photo 4'),
        'description'   => esc_html__( 'Widget to change photos at the top of landing page'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    
    
    register_sidebar( array(
        'id'            => 'about-me-social',
        'name'          => esc_html__( 'About Me Social Icons'),
        'description'   => esc_html__( 'Appears on the static front page template'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );


    register_sidebar( array(
        'id'            => 'about-me-image',
        'name'          => esc_html__( 'About Me Image'),
        'description'   => esc_html__( 'Appears on the static front page template'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'about-me-text',
        'name'          => esc_html__( 'About Me Text'),
        'description'   => esc_html__( 'Appears on the static front page template'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
    



    register_sidebar( array(
        'id'            => 'footer-copyright',
        'name'          => esc_html__( 'Footer Copyright Text'),
        'description'   => esc_html__( 'Appears on the static front page template'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'navbar-logo',
        'name'          => esc_html__( 'Navbar Logo'),
        'description'   => esc_html__( 'Appears on the static front page template'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );


}
  
add_action( 'init', 'lonetraveler_sidebars' );






//Custom Header and Theme Background Colors//

function wp_customizer_add_colorPicker( $wp_customize){
     
    // Add New Section: Colors//
  
    $wp_customize->add_section( 'wp_color_section', array(
                     'title' => 'Header, Footer, & Font Color',
                     'description' => 'Set Colors For Background & Links',
                     'priority' => '40'                  
    ));
 
    // Add Settings   
 
    $wp_customize->add_setting( 'header_bgcolor', array(
        'default' => '#ffffff',                        
    ));

    $wp_customize->add_setting( 'font_color', array(
        'default' => '#8e8e8e',                        
    ));
 
    $wp_customize->add_setting( 'footer_background_color', array(
        'default' => '#232323',                        
    ));

    $wp_customize->add_setting( 'link_color', array(
        'default' => '#6c757d',                        
    ));
 
    $wp_customize->add_setting( 'footer_title_color', array(
        'default' => '#fff',                        
    ));

    $wp_customize->add_setting( 'button_color', array(
        'default' => '#000',                        
    ));

    $wp_customize->add_setting( 'button_text_color', array(
        'default' => '#fff',                        
    ));
 
    $wp_customize->add_setting( 'social_media_color', array(
        'default' => '#fff',                        
    ));
 
 
    // Add Controls// 
 
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_bgcolor', array(
        'label' => 'Header Background',
        'section' => 'wp_color_section',
        'settings' => 'header_bgcolor'
    )));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'font_color', array(
        'label' => 'Header Font Color',
        'section' => 'wp_color_section',
        'settings' => 'font_color'
    )));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_background_color', array(
        'label' => 'Footer Background Color',
        'section' => 'wp_color_section',
        'settings' => 'footer_background_color'
    )));
 

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
        'label' => 'Footer Link Color',
        'section' => 'wp_color_section',
        'settings' => 'link_color'
    )));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_title_color', array(
        'label' => 'Footer Title Color',
        'section' => 'wp_color_section',
        'settings' => 'footer_title_color'
    )));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_color', array(
        'label' => 'Button Color',
        'section' => 'wp_color_section',
        'settings' => 'button_color'
    )));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_text_color', array(
        'label' => 'Button Text Color',
        'section' => 'wp_color_section',
        'settings' => 'button_text_color'
    )));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_media_color', array(
        'label' => 'Social Icon Color',
        'section' => 'wp_color_section',
        'settings' => 'social_media_color'
    )));
}
 
add_action( 'customize_register', 'wp_customizer_add_colorPicker' );



//CSS targeting for Custom Color Controls//

function wp_generate_theme_option_css(){
 
    $themeColor = get_theme_mod('wp_theme_color');
    $header_bgcolor = get_theme_mod('header_bgcolor');
    $font_color = get_theme_mod('font_color');
    $footer_background_color = get_theme_mod('footer_background_color');
    $link_color = get_theme_mod('link_color');
    $footer_title_color = get_theme_mod('footer_title_color');
    $button_color = get_theme_mod('button_color');
    $button_text_color = get_theme_mod('button_text_color');
    $social_media_color = get_theme_mod('social_media_color');

    if(!empty($themeColor)):
     
    ?>
    <style type="text/css" id="wp-theme-option-css">
         
        .navigation {
            background:<?php echo $header_bgcolor; ?>;
        }
 
        a:hover{
            color: <?php echo $themeColor; ?>
        }        
 
        .search-form .search-submit{
            background: <?php echo $themeColor; ?>
        }
        .navbar-light .navbar-nav .nav-link {
            color: <?php echo $font_color; ?>;
        }
     
        .footer-main{
            background: <?php echo $footer_background_color; ?>;
        }
       
        a{
            color: <?php echo $link_color; ?>;
        }

        .widget-title-footer{
            color: <?php echo $footer_title_color; ?>;
            
        }

        .btn{
           background-color: <?php echo $button_color; ?>
        }

        .btn{         
            color: <? echo $button_text_color; ?>
        }

        i{
            color: <?php echo $social_media_color; ?>
        }
     
    </style>    
 
    <?php
 
    endif;    
}
 
add_action( 'wp_head', 'wp_generate_theme_option_css' );



