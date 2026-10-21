<?php

function tourism_guide_remove_customize_register() {
    global $wp_customize;
    $wp_customize->remove_section( 'adventure_travelling_topbar' );
    $wp_customize->remove_setting( 'adventure_travelling_location' );
    $wp_customize->remove_control( 'adventure_travelling_location' );
    $wp_customize->remove_setting( 'adventure_travelling_timming' );
    $wp_customize->remove_control( 'adventure_travelling_timming' );
    $wp_customize->remove_setting( 'adventure_travelling_timming' );
    $wp_customize->remove_setting( 'adventure_travelling_footer_widget_image' );
    $wp_customize->remove_setting( 'adventure_travelling_tp_footer_bg_color_option' );
    $wp_customize->remove_setting( 'adventure_travelling_menu_font_size' );
    $wp_customize->remove_control( 'adventure_travelling_menu_font_size' );
    $wp_customize->remove_setting( 'adventure_travelling_slider_content_layout' );
    $wp_customize->remove_control( 'adventure_travelling_slider_content_layout' );  

    $wp_customize->remove_setting( 'adventure_travelling_tp_color_option_link' );
    $wp_customize->remove_control( 'adventure_travelling_tp_color_option_link' );   

    $wp_customize->remove_setting( 'adventure_travelling_show_slider_content' );
    $wp_customize->remove_control( 'adventure_travelling_show_slider_content' );   


}
add_action( 'customize_register', 'tourism_guide_remove_customize_register', 11 );

if ( ! defined( 'TOURISM_GUIDE_TEXT' ) ) {
    define( 'TOURISM_GUIDE_TEXT', __( 'Tourism Guide Pro','tourism-guide' ));
}
if ( ! defined( 'TOURISM_GUIDE_BUY_TEXT' ) ) {
    define( 'TOURISM_GUIDE_BUY_TEXT', __( 'Upgrade Pro','tourism-guide' ));
}

add_action( 'customize_register', function( $manager ) {

// Load custom sections.
load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

    $manager->register_section_type( Adventure_Travelling_Button::class );

    $manager->add_section(
        new Adventure_Travelling_Button( $manager, 'adventure_travelling_pro', [
            'title'       => esc_html( TOURISM_GUIDE_TEXT,'tourism-guide' ),
            'priority'    => 0,
            'button_text' => __( 'GET PREMIUM', 'tourism-guide' ),
            'button_url'  => esc_url( ADVENTURE_TRAVELLING_PRO_THEME_URL )
        ] )
    );

} );

function tourism_guide_customize_register( $wp_customize ) {

    // Pro Version
    class tourism_guide_Customize_Pro_Version extends WP_Customize_Control {
        public $type = 'pro_options';

        public function render_content() {
            echo '<span>Unlock Premium <strong>'. esc_html( $this->label ) .'</strong>? </span>';
            echo '<a href="'. esc_url($this->description) .'" target="_blank">';
                echo '<span class="dashicons dashicons-info"></span>';
                echo '<strong> '. esc_html( TOURISM_GUIDE_BUY_TEXT,'tourism-guide' ) .'<strong></a>';
            echo '</a>';
        }
    }

    // Custom Controls
    function tourism_guide_sanitize_custom_control( $input ) {
        return $input;
    }

    // Register the custom control type.
    $wp_customize->register_control_type( 'Tourism_Guide_Toggle_Control' );

    $wp_customize->add_setting( 'tourism_guide_search_icon', array(
        'default'           => true,
        'transport'         => 'refresh',
        'sanitize_callback' => 'adventure_travelling_sanitize_checkbox',
    ) );
    $wp_customize->add_control( new Adventure_Travelling_Toggle_Control( $wp_customize, 'tourism_guide_search_icon', array(
        'label'       => esc_html__( 'Show / Hide Search Option','tourism-guide'),
        'section'     => 'adventure_travelling_social_media',
        'type'        => 'toggle',
        'settings'    => 'tourism_guide_search_icon',
        ) ) );

    //Slider Text Alignment
    $wp_customize->add_setting('tourism_guide_slider_content_layout',array(
        'default' => 'CENTER-ALIGN',
        'priority'=> 2,
        'sanitize_callback' => 'adventure_travelling_sanitize_choices'
    ));
    $wp_customize->add_control('tourism_guide_slider_content_layout',array(
        'type' => 'radio',
        'label'     => __('Slider Content Layout', 'tourism-guide'),
        'section' => 'adventure_travelling_slider_section',
        'choices' => array(
            'CENTER-ALIGN' => __('CENTER-ALIGN','tourism-guide'),
            'LEFT-ALIGN' => __('LEFT-ALIGN','tourism-guide'),
            'RIGHT-ALIGN' => __('RIGHT-ALIGN','tourism-guide'),
        ),
    ) );

    // Post Section
	$wp_customize->add_section( 'tourism_guide_trip_offer_section' , array(
        'title'      => __( 'Explore Places Settings', 'tourism-guide' ),
        'panel' => 'adventure_travelling_panel_id',
        'priority' => 4,
    ) );

    $wp_customize->add_setting( 'tourism_guide_explore_show_hide', array(
        'default'           => true,
        'transport'         => 'refresh',
        'sanitize_callback' => 'adventure_travelling_sanitize_checkbox',
    ) );
    $wp_customize->add_control( new Tourism_Guide_Toggle_Control( $wp_customize, 'tourism_guide_explore_show_hide', array(
        'label'       => esc_html__( 'Show / Hide section', 'tourism-guide' ),
        'section'     => 'tourism_guide_trip_offer_section',
        'type'        => 'toggle',
        'settings'    => 'tourism_guide_explore_show_hide',
    ) ) );

    $wp_customize->add_setting( 'tourism_guide_explore_show_animation', array(
        'default'           => true,
        'transport'         => 'refresh',
        'sanitize_callback' => 'adventure_travelling_sanitize_checkbox',
    ) );
    $wp_customize->add_control( new adventure_travelling_Toggle_Control( $wp_customize, 'tourism_guide_explore_show_animation', array(
        'label'       => esc_html__( 'Show / Hide Animation', 'adventure-travelling' ),
        'section'     => 'tourism_guide_trip_offer_section',
        'type'        => 'toggle',
        'settings'    => 'tourism_guide_explore_show_animation',
    ) ) );

    $categories = get_categories();
    $cats = array();
    $i = 0;
    $offer_cat[]= 'select';
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $offer_cat[$category->slug] = $category->name;
    }

    $wp_customize->add_setting('tourism_guide_explore_section_category',array(
        'default'   => 'select',
        'sanitize_callback' => 'adventure_travelling_sanitize_choices',
    ));
    $wp_customize->add_control('tourism_guide_explore_section_category',array(
        'type'    => 'select',
        'choices' => $offer_cat,
        'label' => __('Select Category','tourism-guide'),
        'section' => 'tourism_guide_trip_offer_section',
    ));

    // Pro Version
    $wp_customize->add_setting( 'tourism_guide_services_pro_version_logo', array(
        'sanitize_callback' => 'tourism_guide_sanitize_custom_control'
    ));
    $wp_customize->add_control( new tourism_guide_Customize_Pro_Version ( $wp_customize,'tourism_guide_services_pro_version_logo', array(
        'section'     => 'tourism_guide_trip_offer_section',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Features ', 'tourism-guide' ),
        'description' => esc_url( ADVENTURE_TRAVELLING_PRO_THEME_URL ),
    )));

}
add_action( 'customize_register', 'tourism_guide_customize_register' );
