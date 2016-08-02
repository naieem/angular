<?php
global $qode_options_proya;
$id = get_the_ID();
if (post_password_required()) {
    echo get_the_password_form();
} else {
    $protocol = is_ssl() ? "https:" : "http:";
    $portfolio_m_images = get_post_meta(get_the_ID(), "image", true);
    $feat_image = wp_get_attachment_url(get_post_thumbnail_id($id));
    $file_path = get_post_meta(get_the_ID(), "file_name", true);
//echo $id;
//print_r($portfolio_m_images);
    ?>
    <div class="portfolio_single">
        <!--<div class="flexslider">
            <ul class="slides">
        <?php
        //if ($portfolio_m_images) {
        //foreach ($portfolio_m_images as $img) {
        ?>
                        <li class="slide">
                            <img src="<?php //echo $img;     ?>" alt="<?php //echo get_the_title($id);     ?>"/>
                        </li>
        <?php
        //}
        //}
        ?>
            </ul>
        </div>-->



        <div class="two_columns_50_50 clearfix portfolio_container">
            <div class="column1">
                <div class="column_inner">
                    <!--<div class="portfolio_images">
                    <?php
                    //if ($portfolio_m_images) {
                    //foreach ($portfolio_m_images as $img) {
                    ?>
                                <a class="lightbox_single_portfolio" title="galleryimg" data-rel="prettyPhoto[single_pretty_photo]" href="<?php //echo $img;   ?>">
                                    <img src="<?php //echo $img;   ?>" alt="">
                                </a>
                    <?php
                //}
                //}
                ?>
                </div>-->
                <div class="flexslider">
                    <ul class="slides">
                        <?php
                        if ($portfolio_m_images) {
                            foreach ($portfolio_m_images as $img) {
                                ?>
                                <li class="slide">
                                    <img src="<?php echo $img; ?>" alt="<?php echo get_the_title($id); ?>"/>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
                
            </div>
        </div>
        <!-- Modal container goes here-->
        <div id="test-popup" class="white-popup-block mfp-hide">
            <h2>Download our Freebie</h2>

            <p>Write your e-mail address to get our .psd file</p>

            <p>&nbsp;</p>

            <form action="#" method="post">
                <fieldset>
                    <div class="control-group">
                        <div class="controls">
                            <input type="text" name="email" placeholder="Your e-mail address" class="input-lg text-center newsletter_email">
                        </div>
                    </div>
                    <div class="form-actions">
                        <input type="hidden" name="id" class="freebie_id" value="<?php echo get_the_id(); ?>">
                        <button type="submit" class="btn btn-lg btn-block btn-green newsletter">Send</button>
                        <div class="result"></div>
                    </div>
                </fieldset>
            </form>
            <div class="text-block">
                Don't worry. We send information message about new templates per week.
            </div>

        </div>

        <div class="white-popup-block mfp-hide" id="signin">
            <h2>Sign up</h2>

            <p>&nbsp;</p>

            <form action="" enctype="multipart/form-data" method="POST" class="" id="registerUser">
                <fieldset>
                    <div class="control-group ">
                        <div class="controls">
                            <input type="text" name="name" value="" class="required  " placeholder="Name">
                        </div>
                    </div>
                    <div class="control-group ">
                        <div class="controls">
                            <input type="text" name="email" value="" class="required email unique  "
                                   placeholder="Email adress">
                        </div>
                    </div>
                    <div class="control-group ">
                        <div class="controls">
                            <input type="password" name="password" value="" class="string  " placeholder="Password">
                        </div>
                    </div>
                    <div class="form-actions">
                        <input type="hidden" name="form_key" value="registerUser">
                        <button type="submit" class="btn btn-danger btn-lg btn-full-width loading-btn">Sign Up
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>

        <div class="column2">
            <div class="column_inner">
                <div class="portfolio_single_text_holder">
                    <?php //if ($disable_portfolio_single_title_label) { ?>
                    <h3><?php echo _e('About This Freebie', 'qode'); ?></h3>
                    <?php //} ?>
                    <?php the_content(); ?>
                </div>
                
                <div class="portfolio_detail">
                    <?php
                    $terms = wp_get_post_terms(get_the_ID(), 'freebie_category');
                    $counter = 0;
                    $all = count($terms);
                    if ($all > 0) {
                        ?>
                        <div class="info portfolio_categories">
                            <h6><?php _e('Category ', 'qode'); ?></h6>
                            <span class="category">
                                <?php
                                foreach ($terms as $term) {
                                    $counter++;
                                    if ($counter < $all) {
                                        $after = ', ';
                                    } else {
                                        $after = '';
                                    }
                                    echo $term->name . $after;
                                }
                                ?>
                            </span>
                        </div>
                    <?php } ?>
                    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/custom//magnific-popup.css">
                    <script src="<?php echo get_stylesheet_directory_uri(); ?>/custom/jquery.magnific-popup.js"></script>
                    <?php
                    if ($file_path != '') {
                        ?>
                        <a href="#test-popup" class="open-popup-link">Download(<?php echo Size($file_path); ?>)</a>
                        <?php
                    }
                    ?>
                    <p>
                        <?php echo downloadcounter(get_the_ID()) . " Downloads"; ?>
                    </p>
                </div>
                <div class="icon_social_holder custom_social_share">
                    <div class="portfolio_share qode_share ">
                        <div class="social_share_holder">
                            <!--<a href="javascript:void(0)" target="_self"><i
                                    class="icon-basic-share social_share_icon"></i><span
                                    class="social_share_title">Share</span></a>-->

                            <div class="social_share_dropdown">
                                <!--<div class="inner_arrow"></div>-->
                                <ul>
                                    <li class="facebook_share"><a href="#"
                                                                  onclick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo get_the_title($id); ?>&amp;p[summary]=<?php echo get_the_excerpt($id); ?>&amp;p[url]=<?php echo get_the_permalink($id); ?>&amp;p[images][0]=<?php echo $feat_image; ?>', 'sharer', 'toolbar=0,status=0,width=620,height=280');"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li class="twitter_share"><a href="#"
                                                                 onclick="popUp = window.open('http://twitter.com/home?status=<?php echo get_the_title($id); ?>+<?php echo get_the_permalink($id); ?>', 'popupwindow', 'scrollbars=yes,width=800,height=400');
                                                                         popUp.focus();
                                                                         return false;"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="tumblr_share"><a href="#"
                                                                onclick="popUp = window.open('http://www.tumblr.com/share/link?url=<?php echo get_the_permalink($id); ?>&amp;name=<?php echo get_the_title($id); ?>&amp;description=<?php echo get_the_excerpt($id); ?>', 'popupwindow', 'scrollbars=yes,width=800,height=400');
                                                                        popUp.focus();
                                                                        return false"><i
                                                class="fa fa-tumblr"></i></a></li>
                                    <li class="pinterest_share"><a href="#"
                                                                   onclick="popUp = window.open('http://pinterest.com/pin/create/button/?url=<?php echo get_the_permalink($id); ?>&amp;description=<?php echo get_the_excerpt($id); ?>&amp;media=<?php echo $feat_image; ?>', 'popupwindow', 'scrollbars=yes,width=800,height=400');
                                                                           popUp.focus();
                                                                           return false"><i
                                                class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--<div class="qode_print">
                        <a href="#" onclick="window.print();
                                    return false;" class="qode_print_page">
                            <span class="icon-basic-printer qode_icon_printer"></span>
                            <span class="eltd-printer-title">Print page</span>
                        </a>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <?php //get_template_part('templates/freebie', 'navigation'); ?>
    <?php //get_template_part('templates/freebie', 'related'); ?>

</div>
<?php } ?>