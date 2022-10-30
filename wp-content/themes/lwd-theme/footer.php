<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package lwd-theme
 */

?><!--FOOTER START-->
    <footer class="footer">
        <div class="container">
            <div class="top-footer">
                <div class="row">
                    <div class="col-md-2 cols">
                        <div class="ft-links-wrapper">
                            <h3 class="hd panelheading"><?php echo esc_html(wp_get_nav_menu_name('footer-menu')); ?></h3><?php

                            //Display Footer Quick Links
                            if(has_nav_menu('footer-menu')) {
                                wp_nav_menu(array(
                                    'theme_location' => 'footer-menu',
                                    'container' => 'ul',
                                    'add_li_class' => 'panel-content'
                                ));
                            }
                        ?></div>
                    </div>
                    <div class="col-md-4 cols">
                        <div class="ft-links-wrapper">
                            <h3 class="hd panelheading"><?php echo esc_html(wp_get_nav_menu_name('footer-service-menu')); ?></h3>
                            <div class="panel-content services-list"><?php

                                //Display Footer Services Menu
                                if(has_nav_menu('footer-service-menu')) {
                                    wp_nav_menu(array(
                                        'theme_location' => 'footer-service-menu',
                                        'container' => '',
                                        'add_li_class' => ''
                                    ));
                                }

                                //Display Footer Services Menu 2
                                if(has_nav_menu('footer-service-menu2')) {
                                    wp_nav_menu(array(
                                        'theme_location' => 'footer-service-menu2',
                                        'container' => '',
                                        'add_li_class' => ''
                                    ));
                                }
                            ?></div>
                        </div>
                    </div>
                    <div class="col-md-3 cols">
                        <div class="ft-address">
                            <h3 class="hd panelheading"><?php 

                                //Display Footer Contact Title
                                if(theme_get_option('footer_contact_us_title')) {
                                    echo theme_get_option('footer_contact_us_title');
                                }
                            ?></h3>
                            <div class="panel-content">
                                <div class="address">
                                    <strong class="title"><?php 

                                        //Display Footer Address Title
                                        if(theme_get_option('footer_address_title')) {
                                            echo theme_get_option('footer_address_title');
                                        }
                                    ?></strong>&nbsp;<?php
                                    
                                    //Display Footer Address
                                    if(theme_get_option('footer_address')) {
                                        echo theme_get_option('footer_address');
                                    }
                                ?></div>
                                <div class="mail-wrap">
                                    <strong class="title"><?php

                                        //Display Footer Email Title
                                        if(theme_get_option('footer_email_title')) {
                                            echo theme_get_option('footer_email_title');
                                        }  
                                    ?></strong>&nbsp;
                                    <div class="mail"><?php

                                        //Display Footer Email
                                        $footerEmail = "";
                                        if(theme_get_option('footer_email')) {
                                            $footerEmail = theme_get_option('footer_email');
                                        }  
                                        ?><a href="mailto:<?php echo $footerEmail; ?>" title="<?php echo $footerEmail; ?>"><?php echo $footerEmail; ?></a>   
                                    </div>
                                </div>
                                <div class="phones">
                                    <div class="title"><?php
                                        
                                        //Display Footer Phone Title
                                        if(theme_get_option('footer_phone_title')) {
                                            echo theme_get_option('footer_phone_title');
                                        }  
                                    ?></div>&nbsp;
                                    <div class="numbr"><?php

                                        //Display Footer Phone Number
                                        $footerPhoneNo = "";
                                        if(theme_get_option('footer_phone')) {
                                            $footerPhoneNo = theme_get_option('footer_phone');
                                        }  
                                        ?><a href="tel:<?php echo $footerPhoneNo; ?>" title="<?php echo $footerPhoneNo; ?>"><?php echo $footerPhoneNo; ?></a>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class="col-md-3 cols">
                        <div class="ft-hours">
                            <h3 class="hd panelheading"><?php 

                                //Display Footer Hours Title
                                if(theme_get_option('footer_hours_title')) {
                                    echo theme_get_option('footer_hours_title');
                                }  
                            ?></h3>
                            <div class="panel-content"><?php
                                
                                //Display Footer Date & Time List
                                $arrDateTimeList = [];
                                if(theme_get_option('group_footer_hours')) {
                                    $arrDateTimeList = theme_get_option('group_footer_hours');
                                }

                                //Check the Date & time list
                                if(!empty($arrDateTimeList) && is_array($arrDateTimeList)) {
                                    ?><ul><?php

                                        //Display the Date & Time List                                        
                                        foreach($arrDateTimeList AS $arrDateTime) {
                                            ?><li>
                                                <strong><?php echo $arrDateTime['opening_date']; ?></strong>
                                                <span><?php echo $arrDateTime['opening_time']; ?></span>
                                            </li><?php
                                        }
                                    ?></ul><?php
                                }
                            ?></div>  
                        </div>
                    </div>

                </div>
                <div class="ft-socialicons"><?php

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
            <div class="ft-bottom-sec">
                <div class="row">
                    <div class="col-md-6 cols order-12 order-md-1">
                        <div class="copyrights"><?php
                            
                            //Display the Footer Copy Right Text
                            if(theme_get_option('footer_copy_right')) {
                                echo theme_get_option('footer_copy_right');
                            }
                        ?></div>
                    </div>
                    <div class="col-md-6 cols order-1 order-md-12">
                        <div class="ft-bottom-links"><?php

                            //Get the Footer Privacy Policy Link and Title
                            $privacyPageTitle = "";
                            $privacyPageUrl = "";

                            //Check and get the Privacy Policy Page Title
                            if(theme_get_option('footer_privacy_page_title')) {
                                $privacyPageTitle = theme_get_option('footer_privacy_page_title');
                            }

                            //Check and get the Privacy Policy Page Link
                            if(theme_get_option('footer_privacy_page_link')) {
                                $privacyPageUrl = theme_get_option('footer_privacy_page_link');
                                $privacyPageUrl = ($privacyPageUrl) ? get_the_permalink($privacyPageUrl) : "#";
                            }

                            //Get the Footer Terms & Condition Link and Title
                            $termsPageTitle = "";
                            $termsPageUrl = "";

                            //Check and get the Terms & Condition Page Title
                            if(theme_get_option('footer_terms_page_title')) {
                                $termsPageTitle = theme_get_option('footer_terms_page_title');
                            }

                            //Check and get the Terms & Condition Page Link
                            if(theme_get_option('footer_terms_page_link')) {
                                $termsPageUrl = theme_get_option('footer_terms_page_link');
                                $termsPageUrl = ($termsPageUrl) ? get_the_permalink($termsPageUrl) : "#";
                            }

                            ?><a href="<?php echo $privacyPageUrl; ?>" title="<?php echo $privacyPageTitle; ?>"><?php echo $privacyPageTitle; ?></a>
                            <span class="sep">|</span> 
                            <a href="<?php echo $termsPageUrl; ?>" title="<?php echo $termsPageTitle; ?>"><?php echo $termsPageTitle; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--FOOTER END-->
    
    <?php wp_footer(); ?>

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.6.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
    <script>
        //SERVICES SLIDER JS
        $('.service-slider').slick({
            dots: true,
            arrows: true,
            prevArrow: '<div class="slick-prev"><img src="images/prev-btn.png"/></div>',
            nextArrow: '<div class="slick-next"><img src="images/next-btn.png"/></div>',
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplaySpeed: 2000,
            infinite: false,
            responsive: [
                {
                breakpoint:1200,
                settings: {
                    slidesToShow:3,
                    slidesToScroll: 1,
                    }
                },
                {
                breakpoint:991,
                settings: {
                    infinite: false,
                    autoplay: true,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    speed: 1500,
                    autoplaySpeed: 3000,
                    }
                },
                {
                breakpoint: 480,
                settings: {
                    dots: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                    }
                }
            ]
        });
        
        //TESTIMONIALS SLIDER JS
        $('.testimonials-slider').slick({
            dots: true,
            arrows: true,
            prevArrow: '<div class="slick-prev"><img src="images/prev-btn.png"/></div>',
            nextArrow: '<div class="slick-next"><img src="images/next-btn.png"/></div>',
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplaySpeed: 2000,
            infinite: false,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    }
                },
                {
                breakpoint:991,
                settings: {
                    infinite: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    speed: 1500,
                    autoplaySpeed: 3000,
                    }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                    }
                }
            ]
        });
    </script>
    <script>
        //BEFORE & AFTER SLIDER JS
        $("#beforeafter-slider").on("input change", (e)=>{
            const sliderPos = e.target.value;
            // Update the width of the foreground image
            $('.foreground-img').css('width', `${sliderPos}%`)
            // Update the position of the slider button
            $('.slider-button').css('left', `calc(${sliderPos}% - 18px)`)
        });
    </script>
    <script>
        $('.patientreviews-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: true,
            dots: false,
            arrows: true,
            prevArrow: '<div class="slick-prev"><img src="images/prev-white-btn.png"/></div>',
            nextArrow: '<div class="slick-next"><img src="images/next-white-btn.png"/></div>',
            speed: 300,
            centerPadding: '20px',
            infinite: true,
            autoplaySpeed: 5000,
            autoplay: true,
            responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        }
                    },
                    {
                    breakpoint:991,
                    settings: {
                        infinite: false,
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        speed: 1500,
                        autoplaySpeed: 3000,
                        }
                    },
                    {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                        }
                    }
                ]
        });
    </script>
</body>
</html>
