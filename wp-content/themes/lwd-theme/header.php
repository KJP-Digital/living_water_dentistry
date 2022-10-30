<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package lwd-theme
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta id="viewport" name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width" />
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="header">
            <div class="container">
                <div class="upper-top">
                    <div class="row">
                        <div class="col-md-5 cols">
                            <div class="top-location">
                                <span class="title"><?php
                                    
                                    //Display the Location Title
                                    if(theme_get_option('top_nav_location_title')) {
                                        echo theme_get_option('top_nav_location_title');
                                    }
                                ?></span>
                                &nbsp;
                                <span class="address"><?php
                                  
                                    //Display the Location Details
                                    if(theme_get_option('top_nav_location')) {
                                        echo theme_get_option('top_nav_location');
                                    }  
                                ?></span>
                            </div>
                        </div>
                        <div class="col-md-7 cols">
                            <div class="top-rgtwrap">
                                <div class="top-mail">
                                    <span class="title"><?php
                                      
                                        //Display the Email Title
                                        if(theme_get_option('top_nav_email_title')) {
                                            echo theme_get_option('top_nav_email_title');
                                        }

                                        //Get the Email Address
                                        $userEmail = "";
                                        if(theme_get_option('top_nav_email')) {
                                            $userEmail = theme_get_option('top_nav_email');
                                        } 
                                    ?></span>
                                    &nbsp;
                                    <a href="mailto:<?php echo $userEmail; ?>" class="email-address" target="_blank"><?php echo $userEmail; ?></a>
                                </div>
                                <div class="top-phone">
                                    <span class="title"><?php
                                        
                                        //Display the Phone Title
                                        if(theme_get_option('top_nav_phone_title')) {
                                            echo theme_get_option('top_nav_phone_title');
                                        }

                                        //Get the Phone Number
                                        $userPhone = "";
                                        if(theme_get_option('top_nav_phone')) {
                                            $userPhone = theme_get_option('top_nav_phone');
                                        } 
                                    ?></span>
                                    &nbsp;
                                    <a href="tel:<?php echo $userPhone; ?>" class="phone"><?php echo $userPhone; ?></a>
                                </div>
                                <div class="top-socialicons"><?php

                                    //Get the Social Links
                                    $arrSocialMediaLinks = [];
                                    if(theme_get_option('group_social_medias')) {
                                        $arrSocialMediaLinks = theme_get_option('group_social_medias');
                                    }

                                    //Check the Social Links
                                    if(!empty($arrSocialMediaLinks) && is_array($arrSocialMediaLinks)) {

                                        //Display the Social List
                                        foreach($arrSocialMediaLinks AS $arrSocialMediaLink) {
                                            ?><a href="<?php echo $arrSocialMediaLink['media_link']; ?>" title="<?php echo $arrSocialMediaLink['media_title']; ?>">
                                                <img src="<?php echo esc_url($arrSocialMediaLink['media_image']['url']); ?>" alt="<?php echo $arrSocialMediaLink['media_title']; ?>">
                                            </a><?php
                                        }
                                    }
                                ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="topbar">
                    <div class="inner-row"><?php
                        //Add WP logo if not exist logo display site name
                        if(has_custom_logo()) {
                            $arrLogoImage = wp_get_attachment_image_src(get_theme_mod( 'custom_logo'), 'full');
                            //the_custom_logo();
                            ?><a href="<?php echo home_url(); ?>" class="logo">
                                <img src="<?php echo esc_url($arrLogoImage[0]); ?>" alt="<?php echo bloginfo('name'); ?>">
                            </a><?php
                        } else {
                            bloginfo('name');
                        }
                        ?><div class="navigation"><?php
                            //Add WP logo if not exist logo display site name in Responsive
                            if(has_custom_logo()) {
                                $arrLogoImage = wp_get_attachment_image_src(get_theme_mod( 'custom_logo'), 'full');
                                //the_custom_logo();
                                ?><a href="<?php echo home_url(); ?>" title="<?php echo bloginfo('name'); ?>" class="menu-logo hide-desk">
                                    <img src="<?php echo esc_url($arrLogoImage[0]); ?>" alt="<?php echo bloginfo('name'); ?>">
                                </a><?php
                            }
                            ?><a href="javascript:;" class="close-ico-mob hide-desk">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/close.svg" alt="close">
                            </a>
                            <!-- Nav Menu Start --><?php

                                //Display Main Nav Menu
                                if(has_nav_menu('primary-menu')) {
                                    wp_nav_menu(array(
                                        'theme_location' => 'primary-menu',
                                        'container' => '',
                                        'add_li_class' => ''
                                    ));
                                }
                            ?><!-- Nav Menu End -->
                        </div>
                        <span class="nav-menu-icon hide-desk">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/menu-icon.png" alt="menu icon">
                        </span>
                    </div>
                </div>
            </div>
       </header>
