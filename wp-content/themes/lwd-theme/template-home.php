<?php
/**
 * The template for displaying full width pages.
 *
 * Template Name: homepage template
 *
 * @package lwd-theme
 */
get_header();

//Get All Home template meta details
$homePageMetaInfo = get_post_meta( get_the_ID(), '_home_common_options', true );

//Get the Home Page banner sections
$bannerSection = $homePageMetaInfo['banner_section'] ?? [];

//Home Page Banner Details
$bannerTitle = ($bannerSection['title']) ? $bannerSection['title'] : "";
$bannerUrl = ($bannerSection['image']['url']) ? esc_url($bannerSection['image']['url']) : "";
$welcomeBoxTitle = ($bannerSection['welcom-box-header']) ? $bannerSection['welcom-box-header'] : "";
$welcomeBoxDesc = ($bannerSection['welcom-box-desc']) ? $bannerSection['welcom-box-desc'] : "";
$welcomeBoxDesc2 = ($bannerSection['welcom-box-desc2']) ? $bannerSection['welcom-box-desc2'] : "";
$welcomeBoxPageTitle = ($bannerSection['welcom-box-page-title']) ? $bannerSection['welcom-box-page-title'] : "";
$welcomeBoxPageUrl = ($bannerSection['welcom-box-page-link']) ? get_the_permalink($bannerSection['welcom-box-page-link']) : "";
$welcomeBoxFooterImgTitle = ($bannerSection['welcom-box-footer-img-title']) ? $bannerSection['welcom-box-footer-img-title'] : "";
$welcomeBoxFooterImgUrl = ($bannerSection['welcom-box-footer-img']['url']) ? esc_url($bannerSection['welcom-box-footer-img']['url']) : "";


//Get the Home Page Opening Hours Section
$openingHoursSection = $homePageMetaInfo['home_open_hours'] ?? [];

//Get the Opening Hours Section Details
$openingHoursTitle = ($openingHoursSection['open_hours']) ? $openingHoursSection['open_hours'] : "";
$openingHours = ($openingHoursSection['group_open_hours']) ? $openingHoursSection['group_open_hours'] : [];


//Get the Home Page Our Location Section
$ourLocationSection = $homePageMetaInfo['home_our_location'] ?? [];

//Get the Our Location Section Details
$ourLocationTitle = ($ourLocationSection['our_location']) ? $ourLocationSection['our_location'] : "";
$ourLocationAddressTitle = ($ourLocationSection['address_title']) ? $ourLocationSection['address_title'] : "";
$ourLocationAddress = ($ourLocationSection['our_location_address']) ? $ourLocationSection['our_location_address'] : "";
$ourLocationMapTitle = ($ourLocationSection['google_map_title']) ? $ourLocationSection['google_map_title'] : "";
$ourLocationMapUrl = ($ourLocationSection['google_map_url']) ? $ourLocationSection['google_map_url'] : "";


//Get the Home Page Book Your Appointment Section
$bookAppointmentSection = $homePageMetaInfo['home_book_appointment'] ?? [];

//Get the Book Your Appointment Section Details
$bookAppointmentTitle = ($bookAppointmentSection['book_appointment']) ? $bookAppointmentSection['book_appointment'] : "";
$bookAppointmentPhoneNo = ($bookAppointmentSection['phone_number']) ? $bookAppointmentSection['phone_number'] : "";
$bookAppointmentHint = ($bookAppointmentSection['book_appointment_hint']) ? $bookAppointmentSection['book_appointment_hint'] : "";
$bookAppointmentOffers = ($bookAppointmentSection['group_book_appointment_offers']) ? $bookAppointmentSection['group_book_appointment_offers'] : [];


//Get the Home Page Meet Our Team Section
$meetOurTeamSection = $homePageMetaInfo['home_meet_our_team'] ?? [];

//Get the Meet Our Team Section Details
$meetOurTeamTitle = ($meetOurTeamSection['main_title']) ? $meetOurTeamSection['main_title'] : "";
$meetOurTeamHint = ($meetOurTeamSection['main_hint']) ? $meetOurTeamSection['main_hint'] : "";
$meetOurTeamDesignation = ($meetOurTeamSection['designation_name']) ? $meetOurTeamSection['designation_name'] : "";
$meetOurTeamUserName = ($meetOurTeamSection['user_name']) ? $meetOurTeamSection['user_name'] : "";
$meetOurTeamUserImgUrl = ($meetOurTeamSection['user_image']['url']) ? esc_url($meetOurTeamSection['user_image']['url']) : "";
$meetOurTeamUserDesc = ($meetOurTeamSection['user_desc']) ? $meetOurTeamSection['user_desc'] : "";
$meetOurTeamPageTitle = ($meetOurTeamSection['meet_our_team_page_title']) ? $meetOurTeamSection['meet_our_team_page_title'] : "";
$meetOurTeamPageUrl = ($meetOurTeamSection['meet_our_team_page_link']) ? get_the_permalink($meetOurTeamSection['meet_our_team_page_link']) : "";

//Get the Home Page Our Services Section
$ourServiceSection = $homePageMetaInfo['home_our_services'] ?? [];

//Get the Our Services Section Details
$ourServiceTitle = ($ourServiceSection['main_title']) ? $ourServiceSection['main_title'] : "";
$ourServiceSubTitle = ($ourServiceSection['sub_title']) ? $ourServiceSection['sub_title'] : "";
$ourServicePageTitle = ($ourServiceSection['our_services_page_title']) ? $ourServiceSection['our_services_page_title'] : "";
$ourServicePageUrl = ($ourServiceSection['our_services_page_link']) ? get_the_permalink($ourServiceSection['our_services_page_link']) : "";

//Get the Home Page Testimonials Section
$testimonialSection = $homePageMetaInfo['home_testimonials'] ?? [];

//Get the Testimonials Section Details
$testimonialTitle = ($testimonialSection['main_title']) ? $testimonialSection['main_title'] : "";
$testimonialSubTitle = ($testimonialSection['sub_title']) ? $testimonialSection['sub_title'] : "";
$testimonialComments = ($testimonialSection['group_testimonials']) ? $testimonialSection['group_testimonials'] : [];

//Get the Home Page After & Before Gallery Section
$afterBeforeGallerySection = $homePageMetaInfo['home_after_before_gallery'] ?? [];

//Get the After & Before Gallery Section Details
$afterBeforeGalleryTitle = ($afterBeforeGallerySection['main_title']) ? $afterBeforeGallerySection['main_title'] : "";
$afterBeforeGallerySubTitle = ($afterBeforeGallerySection['sub_title']) ? $afterBeforeGallerySection['sub_title'] : "";
$afterBeforeGalleryDesc = ($afterBeforeGallerySection['gallery_desc']) ? $afterBeforeGallerySection['gallery_desc'] : "";
$afterBeforeGalleryPageTitle = ($afterBeforeGallerySection['gallery_button_title']) ? $afterBeforeGallerySection['gallery_button_title'] : "";
$afterBeforeGalleryPageUrl = ($afterBeforeGallerySection['gallery_button_link']) ? $afterBeforeGallerySection['gallery_button_link'] : "#";

//Get the Home Page Patient Reviews Section
$patientReviewSection = $homePageMetaInfo['home_patient_reviews'] ?? [];

//Get the Patient Reviews Section Details
$patientReviewTitle = ($patientReviewSection['main_title']) ? $patientReviewSection['main_title'] : "";
$patientReviewSubTitle = ($patientReviewSection['sub_title']) ? $patientReviewSection['sub_title'] : "";
$patientReviews = ($patientReviewSection['group_patient_reviews']) ? $patientReviewSection['group_patient_reviews'] : [];

//Get the Home Page Gallery Section
$gallerySection = $homePageMetaInfo['home_gallery'] ?? [];

//Get the Gallery Section Details
$galleryTitle = ($gallerySection['main_title']) ? $gallerySection['main_title'] : "";
$gallerySubTitle = ($gallerySection['sub_title']) ? $gallerySection['sub_title'] : "";
$galleries = ($gallerySection['group_gallery']) ? $gallerySection['group_gallery'] : [];

?>
<!-- Home Page Section Start -->
<section class="midbar">
    <img src="<?php echo $bannerUrl; ?>" alt="<?php echo $bannerTitle; ?>">
    <div class="welcome-box">
        <h2 class="hd-typ1"><?php echo $welcomeBoxTitle; ?></h2>
        <p><?php echo $welcomeBoxDesc; ?></p>
        <p><?php echo $welcomeBoxDesc2; ?></p>
        <div class="btnbar">
            <a href="<?php echo $welcomeBoxPageUrl; ?>" title="<?php echo $welcomeBoxPageTitle; ?>" class="btn-typ1"><?php echo $welcomeBoxPageTitle; ?></a>
        </div>
        <div class="make-ur-smile">
            <img src="<?php echo $welcomeBoxFooterImgUrl; ?>" alt="<?php echo $welcomeBoxFooterImgTitle; ?>">
        </div>
    </div>
   </section>
   <section class="topcontact-bg">
        <div class="container">
            <div class="top-contact">
                <div class="row">
                    <div class="col-md-4 cols opening-hours">
                        <div class="infobox-contact">
                            <h2 class="hd-typ2"><?php echo $openingHoursTitle; ?></h2>
                            <ul class="list-opening"><?php
                                //List out the Opening Hours
                                if(!empty($openingHours) && is_array($openingHours)) {
                                    foreach($openingHours AS $openingHour) {
                                        ?><li>
                                            <div class="date"><?php echo $openingHour['opening_date']; ?></div>
                                            <div class="time"><?php echo $openingHour['opening_time']; ?></div>
                                        </li><?php 
                                    }
                                }
                            ?></ul>
                        </div>
                    </div>
                    <div class="col-md-4 cols our-location">
                        <div class="infobox-contact">
                            <h2 class="hd-typ2"><?php echo $ourLocationTitle; ?></h2>
                            <h6 class="hd-typ6"><?php echo $ourLocationAddressTitle; ?></h6>
                            <div class="address">
                                <?php echo $ourLocationAddress; ?>
                            </div>
                            <a href="<?php echo $ourLocationMapUrl; ?>" target="_blank" title="<?php echo $ourLocationMapTitle; ?>" class="link-typ1"><?php echo $ourLocationMapTitle; ?></a>
                        </div>
                    </div>
                    <div class="col-md-4 cols book-your-appointment">
                        <div class="infobox-contact">
                            <h2 class="hd-typ2"><?php echo $bookAppointmentTitle; ?></h2>
                            <a href="tel:6045960444" class="phone">
                                <span class="icon">
                                    <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect x="0.0976562" width="30.1626" height="30" fill="url(#pattern0)"/>
                                        <defs>
                                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_612_98" transform="translate(0 -0.00271002) scale(0.0333333 0.033514)"/>
                                        </pattern>
                                        <image id="image0_612_98" width="30" height="30" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAABKVJREFUSEu1139sE2UYB/Dvc20HbIK46ZT4g2QZsl0HoqHXAUrYrz+Uv9QAgYBZYoIk7dUNzZAYk8UgRIGBu7Jk/uGPREMYuD/GiPgj/gqyXocKOK5rEDbQKDi7kMgYdr17zFsoKd3adWzeX03ued/P+z733HNvCUnXAu1EiUnmx2DMA9Ne44H+N7F6tZkck+633HQ8nx32GrB1gQbv+sloLItmGkeJmwtauotM0/oOgI3BXQR6DsBBRPLWjzeJmKNEO75Agu30zfmuENARM6Xt4TpXeKwFxOESv14gMQJgzLbIrOxVl/7i9OtbmLEDoHZEcteNh8uNPTm2gutFMZglEmMlE1YByANob2FkaOu3jRWx5AUQGlmS84NHQKgEWcsN7xI9EVDqD9QRU1M2eFHribtzR8ynYiNWT2/9kv5Fe36eHbVHdwDYxEAnRfKeT148yc3BWhB/wCBPSFVaUtOSLZ6Sap2JGkJe5XunP+BhJj9A7xmq8lJifpL9+gkwphsRZSEayRrreSRwAh0443WtAxGnxolUI394EZG1jAk+MB4BU4PhU3bL/sAuML3CLNWEfK6vxFiSNT0KUIuhKnWZqlDWgq8BvIOBLSHV/U5qrEj1tH/ZNTzz6jFxL/fqjA8BWgPmVVEUHM6hwRCAS4bqXpqAfwMhYHjdohgyXrIW/AKA01CVB1MDk1L9JyReXTgwHPjr3lxRsPchkjePCoY8DDSZplQiKl2k+i0wGiCRy/AoJ9PJpc2BciI6CkaX4XM/nRpX3Hx2mgOD1US8C6A5ksnzYSeXxTgMSM/YbAibpnUOjE2Gz91K898+NtOW6+gBMGJiZHlYffKPUbvx649KjCCAATtzxWlf+e/pFhhvQjANEF6NWvn7cmhwCMA2Q3U3ypo+xEBrSHVvvvEe33j5uwD0R9lR8avviYHkiUs1vYkAL0xbsVG3+OK4j6Q5WGtJHO71urvEW0NEZ8+orh9kLbgektVveMqP3epcZVrXCgvSEQB9qbjsD2wEUyuYXzR85e+PB2dz/xYsgp3vBipYos5ReFubTb4093MQVhB4zRm1/NNsJs8UcxucCRe1IOU5jhJjscS0tsentE8GHwVnwoubA7McEn02FfiYcAp+PsqOykTBTRWeFv6/8YywwGVNrwREE0BWOy/bF3zYYv4IjFIG9oS8ys6xevu4cJa4AvBGJvNrYvs3AO4BqBvgGgb23x+59sLo73GWpZlu5wt3nsqLTb9+AMBKAOK4c82yuLr35fIfSzX9dQK2gXCo8O9ra5PxrHacWFs6HG1tttLLc2uJIZsEf1h19yXGODW9XnwcUvEJwbennc5F2V6V2l7HSqDs1zeDsTsZnzA8BfgnhkfZcEdwHPcHq8DcAUxk54GtYNrOjIY7hu8Y13TxIVoyKXiiuLNZf4wJXwLcN2n4dhznIVGN4VEupRaZU+texrBEI/oHklk1JXBSwXWIA50F81nxpyCOx8/t3V4QiwPiRaZYTci77MKUwcK4eew5KA41YLSDcBlANRBvn53TYjkbTtY/fkXETiksJnyo6fiMWQ77GwCvAzAHjFMg7DS8yqHknv0fFlmPoLBu9GcAAAAASUVORK5CYII="/>
                                        </defs>
                                    </svg>
                                </span>
                                <span class="number">
                                    <?php echo $bookAppointmentPhoneNo; ?>
                                </span>
                            </a>
                            <div class="txt-line"><?php echo $bookAppointmentHint; ?></div>
                            <ul class="offer-list"><?php

                                if(!empty($bookAppointmentOffers) && is_array($bookAppointmentOffers)) {
                                    foreach($bookAppointmentOffers AS $bookAppointmentOffer) {
                                        ?><li><?php echo $bookAppointmentOffer['offer_lists']; ?></li><?php
                                    }
                                }
                            ?></ul>
                            
                        </div>
                    </div>

                </div>
                <div class="horizontal-line">&nbsp;</div>
            </div>
        </div>
   </section>
   <section class="welcome">
        <div class="container">
            <h2 class="hd-typ3"><?php echo $meetOurTeamTitle; ?></h2>
            <div class="txt-line"><?php echo $meetOurTeamHint; ?></div>
            <div class="dr-details-container">
                <div class="row">
                    <div class="col-md-6 lft-cols cols">
                        <h3 class="hd-typ4"><?php echo $meetOurTeamDesignation; ?></h3>
                        <h4 class="hd-typ5"><?php echo $meetOurTeamUserName; ?></h4>
                        <div class="discription">
                           <?php echo $meetOurTeamUserDesc; ?>
                        </div>
                        <div class="btn-bar">
                            <a href="<?php echo $meetOurTeamPageUrl; ?>" title="<?php echo $meetOurTeamPageTitle; ?>" class="btn-typ2"><?php echo $meetOurTeamPageTitle; ?></a>
                        </div>
                    </div>
                    <div class="col-md-6 rgt-cols cols">
                        <div class="imgbox">
                            <img src="<?php echo $meetOurTeamUserImgUrl; ?>" alt="<?php echo $meetOurTeamUserName; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
   <section class="our-services">
        <div class="container">
          <h2 class="hd-typ7"><?php echo $ourServiceTitle; ?></h2>
          <h3 class="hd-typ8"><?php echo $ourServiceSubTitle; ?></h3>
          <div class="service-slider">

            <!--Item-->
            <div class="item">
                <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/family-dentistry.png" alt="Family Dentistry">
                </div>
                <div class="description">
                    <h4 class="hd">Family Dentistry</h4>
                    <p class="para">
                        Lorem ipsum dolor sit amet, 
                        consectetur adipiscing elit. Morbi
                        hendrerit elit turpis.
                    </p>
                    <a href="javascript:;" title="Read More" class="read-more">Read More</a>
                </div>
            </div>
            <!--Item-->
            <div class="item">
                <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/invisalign-fixed-braces.png" alt="Invisalign & Fixed Braces">
                </div>
                <div class="description">
                    <h4 class="hd">Invisalign &amp; Fixed Braces</h4>
                    <p class="para">
                        Lorem ipsum dolor sit amet, 
                        consectetur adipiscing elit. Morbi
                        hendrerit elit turpis.
                    </p>
                    <a href="javascript:;" title="Read More" class="read-more">Read More</a>
                </div>
            </div>
            <!--Item-->
            <div class="item">
                <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/restorative-dentistry.png" alt="Restorative Dentistry">
                </div>
                <div class="description">
                    <h4 class="hd">Restorative Dentistry</h4>
                    <p class="para">
                        Lorem ipsum dolor sit amet, 
                        consectetur adipiscing elit. Morbi
                        hendrerit elit turpis.
                    </p>
                    <a href="javascript:;" title="Read More" class="read-more">Read More</a>
                </div>
            </div>
            <!--Item-->
            <div class="item">
                <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/dentures.png" alt="Dentures">
                </div>
                <div class="description">
                    <h4 class="hd">Dentures</h4>
                    <p class="para">
                        Lorem ipsum dolor sit amet, 
                        consectetur adipiscing elit. Morbi
                        hendrerit elit turpis.
                    </p>
                    <a href="javascript:;" title="Read More" class="read-more">Read More</a>
                </div>
            </div>
            <!--Item-->
            <div class="item">
                <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/family-dentistry.png" alt="Family Dentistry">
                </div>
                <div class="description">
                    <h4 class="hd">Family Dentistry</h4>
                    <p class="para">
                        Lorem ipsum dolor sit amet, 
                        consectetur adipiscing elit. Morbi
                        hendrerit elit turpis.
                    </p>
                    <a href="javascript:;" title="Read More" class="read-more">Read More</a>
                </div>
            </div>
            <!--Item-->
            <div class="item">
                <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/invisalign-fixed-braces.png" alt="Invisalign & Fixed Braces">
                </div>
                <div class="description">
                    <h4 class="hd">Invisalign &amp; Fixed Braces</h4>
                    <p class="para">
                        Lorem ipsum dolor sit amet, 
                        consectetur adipiscing elit. Morbi
                        hendrerit elit turpis.
                    </p>
                    <a href="javascript:;" title="Read More" class="read-more">Read More</a>
                </div>
            </div>
            <!--Item-->
            <div class="item">
                <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/restorative-dentistry.png" alt="Restorative Dentistry">
                </div>
                <div class="description">
                    <h4 class="hd">Restorative Dentistry</h4>
                    <p class="para">
                        Lorem ipsum dolor sit amet, 
                        consectetur adipiscing elit. Morbi
                        hendrerit elit turpis.
                    </p>
                    <a href="javascript:;" title="Read More" class="read-more">Read More</a>
                </div>
            </div>

          </div>
          <div class="btn-bar">
            <a href="<?php echo $ourServicePageUrl; ?>" title="<?php echo $ourServicePageTitle; ?>" class="btn-typ2"><?php echo $ourServicePageTitle; ?></a>
          </div>  
        </div>
   </section> 
   <section class="testimonials">
        <div class="container">
            <h2 class="hd-typ7"><?php echo $testimonialTitle; ?></h2>
            <h3 class="hd-typ8"><?php echo $testimonialSubTitle; ?></h3>
            <div class="testimonials-slider"><?php

                //List the Patient Testimonials Comments or Feedback
                if(!empty($testimonialComments) && is_array($testimonialComments)) {
                    foreach($testimonialComments AS $testimonialComment) {
                        ?><!--Item-->
                        <div class="item">
                            <div class="inner">
                                <div class="comments"><?php echo $testimonialComment['patient_feedback']; ?></div>
                                <div class="name"><?php echo $testimonialComment['patient_name']; ?></div>
                            </div>
                        </div><?php
                    }
                }
            ?></div>
        </div>
    </section> 
    <section class="afterbeforegallery-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 cols left-cols">
                    <h3 class="hd-typ9"><?php echo $afterBeforeGalleryTitle; ?></h3>
                    <h4 class="hd-typ10"><?php echo $afterBeforeGallerySubTitle; ?></h4>
                    <div class="discription"><?php echo $afterBeforeGalleryDesc; ?></div>
                    <div class="btnbar">
                        <a href="<?php echo $afterBeforeGalleryPageUrl; ?>" title="<?php echo $afterBeforeGalleryPageTitle; ?>" class="btn-typ3"><?php echo $afterBeforeGalleryPageTitle; ?></a>
                    </div>
                </div>
                <div class="col-md-6 cols rgt-cols">
                    <div class='afterbefore-container'>
                        <div class='img background-img'></div>
                        <div class='img foreground-img'></div>
                        <input type="range" min="1" max="100" value="50" class="ba-slider" name='slider' id="beforeafter-slider">
                        <div class='slider-button'></div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <section class="patientreviews-section">
        <div class="container">
            <h3 class="hd-typ11"><?php echo $patientReviewTitle; ?></h3>
            <h4 class="hd-typ12"><?php echo $patientReviewSubTitle; ?></h4>
            <div class="patientreviews-slider"><?php

                //List the Patient Reviews
                if(!empty($patientReviews) && is_array($patientReviews)) {
                    foreach($patientReviews AS $patientReview) {
                        ?><!--item-->
                        <div class="item">
                            <img src="<?php echo $patientReview['review_image']['url']; ?>" alt="<?php echo $patientReview['review_title']; ?>">
                        </div><?php
                    }
                }
            ?></div>
        </div>
    </section>
    <section class="home-gallery">
        <div class="container">
            <h2 class="hd-typ7"><?php echo $galleryTitle; ?></h2>
            <h3 class="hd-typ8"><?php echo $gallerySubTitle; ?></h3>
            <div class="gallery-list">
                <div class="row"><?php

                    //List the Galleries
                    if(!empty($galleries) && is_array($galleries)) {
                        foreach($galleries AS $gallery) {
                            ?><div class="col-md-3 cols">
                                <div class="gallery-img">
                                    <img src="<?php echo $gallery['gallery_image']['url']; ?>" alt="<?php echo $gallery['gallery_title']; ?>">
                                </div>
                            </div><?php
                        }
                    }                    
                ?></div>
            </div>
        </div>
    </section>
    <section class="googlereview-section">
        <div class="container">
            <h3 class="hd-typ8">Google Review</h3>
            <div class="googlereview-box">
                <img src="<?php echo get_template_directory_uri(); ?>/images/google-review-img.png" alt="Google Review">
            </div>    
        </div>
    </section>
<!-- Home Page Section End -->

<?php get_footer(); ?>