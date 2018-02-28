<?php
$wp_customize->add_setting( 'iagency-theme-color', array(
        'capability'        => 'edit_theme_options',
        'default'           => '#222222',
        'sanitize_callback' => 'sanitize_text_field'
    ) );
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'iagency-theme-color',array(
                'label'                 =>  __( 'Theme Color', 'iagency' ),
                'section'               => 'colors',
                'type'                  => 'color',
                'priority'              => 30,
                'settings' => 'iagency-theme-color',
            ) )
    );