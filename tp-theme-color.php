<?php
	
$adventure_travelling_tp_theme_css = '';

$adventure_travelling_tp_color_option = get_theme_mod('adventure_travelling_tp_color_option');

// 1st color
$adventure_travelling_tp_color_option = get_theme_mod('adventure_travelling_tp_color_option', '#83bd75');
if ($adventure_travelling_tp_color_option) {
    $adventure_travelling_tp_theme_css .= ':root {';
    $adventure_travelling_tp_theme_css .= '--color-primary1: ' . esc_attr($adventure_travelling_tp_color_option) . ';';
    $adventure_travelling_tp_theme_css .= '}';
}

//Preloader
$adventure_travelling_tp_preloader_color1_option = get_theme_mod('adventure_travelling_tp_preloader_color1_option');

if($adventure_travelling_tp_preloader_color1_option != false){
$adventure_travelling_tp_theme_css .='.center1{';
	$adventure_travelling_tp_theme_css .='border-color: '.esc_attr($adventure_travelling_tp_preloader_color1_option).' !important;';
$adventure_travelling_tp_theme_css .='}';
}
if($adventure_travelling_tp_preloader_color1_option != false){
$adventure_travelling_tp_theme_css .='.center1 .ring::before{';
	$adventure_travelling_tp_theme_css .='background: '.esc_attr($adventure_travelling_tp_preloader_color1_option).' !important;';
$adventure_travelling_tp_theme_css .='}';
}

$adventure_travelling_tp_preloader_color2_option = get_theme_mod('adventure_travelling_tp_preloader_color2_option');

if($adventure_travelling_tp_preloader_color2_option != false){
$adventure_travelling_tp_theme_css .='.center2{';
	$adventure_travelling_tp_theme_css .='border-color: '.esc_attr($adventure_travelling_tp_preloader_color2_option).' !important;';
$adventure_travelling_tp_theme_css .='}';
}
if($adventure_travelling_tp_preloader_color2_option != false){
$adventure_travelling_tp_theme_css .='.center2 .ring::before{';
	$adventure_travelling_tp_theme_css .='background: '.esc_attr($adventure_travelling_tp_preloader_color2_option).' !important;';
$adventure_travelling_tp_theme_css .='}';
}

//Footer
$adventure_travelling_tp_preloader_bg_color_option = get_theme_mod('adventure_travelling_tp_preloader_bg_color_option');

if($adventure_travelling_tp_preloader_bg_color_option != false){
$adventure_travelling_tp_theme_css .='.loader{';
	$adventure_travelling_tp_theme_css .='background: '.esc_attr($adventure_travelling_tp_preloader_bg_color_option).';';
$adventure_travelling_tp_theme_css .='}';
}

$adventure_travelling_tp_footer_bg_color_option = get_theme_mod('adventure_travelling_tp_footer_bg_color_option');


if($adventure_travelling_tp_footer_bg_color_option != false){
$adventure_travelling_tp_theme_css .='#footer{';
	$adventure_travelling_tp_theme_css .='background: '.esc_attr($adventure_travelling_tp_footer_bg_color_option).';';
$adventure_travelling_tp_theme_css .='}';
}
$adventure_travelling_footer_widget_image = get_theme_mod('adventure_travelling_footer_widget_image');
	if($adventure_travelling_footer_widget_image != false){
		$adventure_travelling_tp_theme_css .='#footer{';
			$adventure_travelling_tp_theme_css .='background: url('.esc_attr($adventure_travelling_footer_widget_image).');';
		$adventure_travelling_tp_theme_css .='}';
	}


//======================= slider Content layout ===================== //
 
$tourism_guide_slider_content_layout = get_theme_mod('tourism_guide_slider_content_layout', 'CENTER-ALIGN'); 
$adventure_travelling_tp_theme_css .= '#slider .carousel-caption{';
switch ($tourism_guide_slider_content_layout) {
    case 'LEFT-ALIGN':
        $adventure_travelling_tp_theme_css .= 'text-align:left; right: 53%; left: 15%';
        break;
    case 'CENTER-ALIGN':
        $adventure_travelling_tp_theme_css .= 'text-align:center; left: 25%; right: 25%';
        break;
    case 'RIGHT-ALIGN':
        $adventure_travelling_tp_theme_css .= 'text-align:right; left: 49%; right: 15%';
        break;
    default:
        $adventure_travelling_tp_theme_css .= 'text-align:left; right: 40%; left: 15%';
        break;
}
$adventure_travelling_tp_theme_css .= '}';	

//Font Weight
$adventure_travelling_menu_font_weight = get_theme_mod( 'adventure_travelling_menu_font_weight','500');
if($adventure_travelling_menu_font_weight == '100'){
$adventure_travelling_tp_theme_css .='.main-navigation a{';
    $adventure_travelling_tp_theme_css .='font-weight: 100;';
$adventure_travelling_tp_theme_css .='}';
}else if($adventure_travelling_menu_font_weight == '200'){
$adventure_travelling_tp_theme_css .='.main-navigation a{';
    $adventure_travelling_tp_theme_css .='font-weight: 200;';
$adventure_travelling_tp_theme_css .='}';
}else if($adventure_travelling_menu_font_weight == '300'){
$adventure_travelling_tp_theme_css .='.main-navigation a{';
    $adventure_travelling_tp_theme_css .='font-weight: 300;';
$adventure_travelling_tp_theme_css .='}';
}else if($adventure_travelling_menu_font_weight == '400'){
$adventure_travelling_tp_theme_css .='.main-navigation a{';
    $adventure_travelling_tp_theme_css .='font-weight: 400;';
$adventure_travelling_tp_theme_css .='}';
}else if($adventure_travelling_menu_font_weight == '500'){
$adventure_travelling_tp_theme_css .='.main-navigation a{';
    $adventure_travelling_tp_theme_css .='font-weight: 500;';
$adventure_travelling_tp_theme_css .='}';
}else if($adventure_travelling_menu_font_weight == '600'){
$adventure_travelling_tp_theme_css .='.main-navigation a{';
    $adventure_travelling_tp_theme_css .='font-weight: 600;';
$adventure_travelling_tp_theme_css .='}';
}else if($adventure_travelling_menu_font_weight == '700'){
$adventure_travelling_tp_theme_css .='.main-navigation a{';
    $adventure_travelling_tp_theme_css .='font-weight: 700;';
$adventure_travelling_tp_theme_css .='}';
}else if($adventure_travelling_menu_font_weight == '800'){
$adventure_travelling_tp_theme_css .='.main-navigation a{';
    $adventure_travelling_tp_theme_css .='font-weight: 800;';
$adventure_travelling_tp_theme_css .='}';
}else if($adventure_travelling_menu_font_weight == '900'){
$adventure_travelling_tp_theme_css .='.main-navigation a{';
    $adventure_travelling_tp_theme_css .='font-weight: 900;';
$adventure_travelling_tp_theme_css .='}';
}

// logo tagline color
$adventure_travelling_site_title_color = get_theme_mod('adventure_travelling_site_title_color');

if($adventure_travelling_site_title_color != false){
$adventure_travelling_tp_theme_css .='.logo h1 a, .logo p.site-title a{';
$adventure_travelling_tp_theme_css .='color: '.esc_attr($adventure_travelling_site_title_color).';';
$adventure_travelling_tp_theme_css .='}';
}

$adventure_travelling_logo_tagline_color = get_theme_mod('adventure_travelling_logo_tagline_color');
if($adventure_travelling_logo_tagline_color != false){
$adventure_travelling_tp_theme_css .='p.site-description{';
$adventure_travelling_tp_theme_css .='color: '.esc_attr($adventure_travelling_logo_tagline_color).';';
$adventure_travelling_tp_theme_css .='}';
}

// menu color
$adventure_travelling_menu_color = get_theme_mod('adventure_travelling_menu_color');
if($adventure_travelling_menu_color != false){
$adventure_travelling_tp_theme_css .='.main-navigation a{';
$adventure_travelling_tp_theme_css .='color: '.esc_attr($adventure_travelling_menu_color).';';
$adventure_travelling_tp_theme_css .='}';
}

// sec animation
$tourism_guide_explore_show_animation = get_theme_mod( 'tourism_guide_explore_show_animation', true );
if ( $tourism_guide_explore_show_animation ) {
    $adventure_travelling_tp_theme_css .= '#travel-offer { animation: bounceInDown 3s; animation-fill-mode: both; }';
}
