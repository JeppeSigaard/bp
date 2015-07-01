<?php 
add_action( 'customize_register', 'smamo_customize_register' );

function smamo_customize_register($wp_customize){
    
    $wp_customize->add_section('smamo_theme_images', array(
        'title'    => __('Temabilleder', 'smamo'),
        'description' => 'Tilføj logo og billede i sidens header',
        'priority' => 120,
    ));
 
    $wp_customize->add_setting('smamo_theme_options[logo_upload]', array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'type' => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'logo_upload', array(
        'label'    => __('Tilføj logo', 'smamo'),
        'section'  => 'smamo_theme_images',
        'settings' => 'smamo_theme_options[logo_upload]',
    )));
    
    
    
    $wp_customize->add_setting('smamo_theme_options[header_image_upload]', array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'type' => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'header_image_upload', array(
        'label'    => __('Tilføj headerbillede', 'smamo'),
        'section'  => 'smamo_theme_images',
        'settings' => 'smamo_theme_options[header_image_upload]',
    )));
    
    
    
    $wp_customize->add_section('smamo_ct_info', array(
        'title'    => __('Kontaktinformation', 'smamo'),
        'description' => '',
        'priority' => 120,
    ));
 

    $wp_customize->add_setting('smamo_theme_options[telefonnummer]', array(
        'default'        => '22 22 22 22',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('smamo_telefonnummer', array(
        'label'      => __('Telefonnummer', 'smamo'),
        'section'    => 'smamo_ct_info',
        'settings'   => 'smamo_theme_options[telefonnummer]',
    ));
    
    
    $wp_customize->add_setting('smamo_theme_options[email]', array(
        'default'        => 'hello@email.dk',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('smamo_email', array(
        'label'      => __('Emailadresse', 'smamo'),
        'section'    => 'smamo_ct_info',
        'settings'   => 'smamo_theme_options[email]',
    ));

}
?>