<?php
$wp_customize->add_section('npa_header_area', array(
    'title'         =>  __('Main Logo, Portal Name and other', 'khoborer-kagoj'),
    'description'   => 'If you want to update main logo, you can do it here.',
    'panel'         => 'npa_header_panel',
));

/**
 * ==========================
 * Main Logo upload 
 * ==========================
 */

$wp_customize->add_setting('npa-main-logo', array(
    'default' => get_bloginfo('template_directory') . '/images/logo.png',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'npa-main-logo', array(
    'label'        => __('Main Logo', 'khoborer-kagoj'),
    'settings'     => 'npa-main-logo',
    'section'      => 'npa_header_area',
)));


/**
 * ==========================
 * Schools's Name
 * ==========================
 */
$wp_customize->add_setting('name-of-school', array(
    'default'       => 'খবরের কাগজ',
    'transport'     => 'refresh',
));
$wp_customize->add_control('name-of-portal', array(
    'label'     => __('পোর্টালের নাম', 'khoborer-kagoj'),
    'settings'  => 'name-of-portal',
    'section'   => 'npa_header_area',
    'type'      => 'text'
));



/**
 * ==========================
 * Address
 * ==========================
 */
$wp_customize->add_setting('address', array(
    'default'       => 'ঢাকা',
    'transport'     => 'refresh',
));
$wp_customize->add_control('address', array(
    'label'     => __('ঠিকানা', 'khoborer-kagoj'),
    'settings'  => 'address',
    'section'   => 'npa_header_area',
    'type'      => 'text'
));

/**
 * ==========================
 * Phone
 * ==========================
 */
$wp_customize->add_setting('phone', array(
    'default'       => '০১৯১৫৩৪৪৪১৮',
    'transport'     => 'refresh',
));
$wp_customize->add_control('phone', array(
    'label'     => __('ফোন নাম্বার', 'khoborer-kagoj'),
    'settings'  => 'phone',
    'section'   => 'npa_header_area',
    'type'      => 'text'
));

/**
 * ==========================
 * Email
 * ==========================
 */
$wp_customize->add_setting('email', array(
    'default'       => 'faroque.computer@gmail.com',
    'transport'     => 'refresh',
));
$wp_customize->add_control('email', array(
    'label'     => __('ইমেইল', 'khoborer-kagoj'),
    'settings'  => 'email',
    'section'   => 'npa_header_area',
    'type'      => 'email'
));