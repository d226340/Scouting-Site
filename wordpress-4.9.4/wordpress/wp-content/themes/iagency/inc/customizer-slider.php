<?php
function iagency_customize_register ( $wp_customize ) {
	// Header Slider Option
    
$wp_customize->add_section('iagency_main_slider',array(
			'priority' => 0,
			'title' => __('Front Slider Option','iagency'),
			'description' => __('This will disable the Main Banner Options','iagency'),
			'panel' => 'ithemer_front_option',
		)
	);
	//About section enable disable

$wp_customize->add_setting( 'iagency_slider_section_enable', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => 0,
    'sanitize_callback'     => 'ithemer_sanitize_checkbox'
) );

$wp_customize->add_control( 'iagency_slider_section_enable', array(
    'label'                 =>  __( 'Enable Slider for Header', 'iagency' ),
    'section'               => 'iagency_main_slider',
    'type'                  => 'checkbox',
    'priority'              => 10,
    'settings'              => 'iagency_slider_section_enable',
) );


for ($i=1;$i<=10;$i++) {
$wp_customize->add_setting( 'iagency_slider_page_'.$i, array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'ithemer_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'iagency_slider_page_'.$i, array(
    'label'                 =>  sprintf( __( 'Select Page for Slider %s', 'iagency' ), $i ),
    'section'               => 'iagency_main_slider',
    'type'                  => 'dropdown-pages',
    'priority'              => $i*10,
    'settings'              => 'iagency_slider_page_'.$i,
) );

$wp_customize->add_setting( 'iagency_slider_subtitle_'.$i, array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'iagency_slider_subtitle_'.$i, array(
    'label'                 =>  sprintf( __( 'Slider Sub Heading %s', 'iagency' ), $i ),
    'description'           =>  __( 'A Professional Profession', 'iagency' ),
    'section'               => 'iagency_main_slider',
    'type'                  => 'text',
    'priority'              => $i*10+1,
    'settings' => 'iagency_slider_subtitle_'.$i,
) );
$wp_customize->add_setting( 'iagency_slider_button_title_'.$i, array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'iagency_slider_button_title_'.$i, array(
    'label'                 =>  sprintf( __( 'Second Button Title %s', 'iagency' ), $i ),
    'description'           =>  __( 'Hire Me', 'iagency' ),
    'section'               => 'iagency_main_slider',
    'type'                  => 'text',
    'priority'              => $i*10+2,
    'settings' => 'iagency_slider_button_title_'.$i,
) );
$wp_customize->add_setting( 'iagency_slider_button_url_'.$i, array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'iagency_slider_button_url_'.$i, array(
    'label'                 =>  sprintf( __( 'Select Button URL %s', 'iagency' ), $i ),
    'description'           =>  __( '#', 'iagency' ),
    'section'               => 'iagency_main_slider',
    'type'                  => 'url',
    'priority'              => $i*10+3,
    'settings' => 'iagency_slider_button_url_'.$i,
) );
	}
require get_stylesheet_directory() . '/inc/customizer-theme-color.php';
}

add_action( 'customize_register', 'iagency_customize_register' );