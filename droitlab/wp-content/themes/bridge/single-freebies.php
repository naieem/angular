<?php
$id = get_the_ID();

$sidebar = "";

if (get_post_meta(get_the_ID(), "qode_portfolio_show_sidebar", true) != "" && get_post_meta(get_the_ID(), "qode_portfolio_show_sidebar", true) !== "default") {
    $sidebar = get_post_meta(get_the_ID(), "qode_portfolio_show_sidebar", true);
} else {
    if (isset($qode_options_proya['portfolio_single_sidebar'])) {
        $sidebar = $qode_options_proya['portfolio_single_sidebar'];
    }
}

$portfolio_qode_like = "on";
if (isset($qode_options_proya['portfolio_qode_like'])) {
    $portfolio_qode_like = $qode_options_proya['portfolio_qode_like'];
}

$lightbox_single_project = "no";
if (isset($qode_options_proya['lightbox_single_project']))
    $lightbox_single_project = $qode_options_proya['lightbox_single_project'];

if (get_post_meta($id, "qode_page_background_color", true) != "") {
    $background_color = get_post_meta($id, "qode_page_background_color", true);
} else {
    $background_color = "";
}

$porftolio_template = 1;
if (get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true) != "") {
    if (get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true) == 1) {
        $porftolio_template = 1;
    } elseif (get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true) == 2) {
        $porftolio_template = 2;
    } elseif (get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true) == 3) {
        $porftolio_template = 3;
    } elseif (get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true) == 4) {
        $porftolio_template = 4;
    } elseif (get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true) == 5) {
        $porftolio_template = 5;
    } elseif (get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true) == 6) {
        $porftolio_template = 6;
    } elseif (get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true) == 7) {
        $porftolio_template = 7;
    }
} elseif (isset($qode_options_proya['portfolio_style'])) {
    if ($qode_options_proya['portfolio_style'] == 1) {
        $porftolio_template = 1;
    } elseif ($qode_options_proya['portfolio_style'] == 2) {
        $porftolio_template = 2;
    } elseif ($qode_options_proya['portfolio_style'] == 3) {
        $porftolio_template = 3;
    } elseif ($qode_options_proya['portfolio_style'] == 4) {
        $porftolio_template = 4;
    } elseif ($qode_options_proya['portfolio_style'] == 5) {
        $porftolio_template = 5;
    } elseif ($qode_options_proya['portfolio_style'] == 6) {
        $porftolio_template = 6;
    } elseif ($qode_options_proya['portfolio_style'] == 7) {
        $porftolio_template = 7;
    }
}

$porftolio_single_template = get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true);

$columns_number = "v4";
if (get_post_meta(get_the_ID(), "qode_choose-number-of-portfolio-columns", true) != "") {
    if (get_post_meta(get_the_ID(), "qode_choose-number-of-portfolio-columns", true) == 2) {
        $columns_number = "v2";
    } else if (get_post_meta(get_the_ID(), "qode_choose-number-of-portfolio-columns", true) == 3) {
        $columns_number = "v3";
    } else if (get_post_meta(get_the_ID(), "qode_choose-number-of-portfolio-columns", true) == 4) {
        $columns_number = "v4";
    }
} else {
    if (isset($qode_options_proya['portfolio_columns_number'])) {
        if ($qode_options_proya['portfolio_columns_number'] == 2) {
            $columns_number = "v2";
        } else if ($qode_options_proya['portfolio_columns_number'] == 3) {
            $columns_number = "v3";
        } else if ($qode_options_proya['portfolio_columns_number'] == 4) {
            $columns_number = "v4";
        }
    }
}

$content_style_spacing = "";
if (get_post_meta($id, "qode_margin_after_title", true) != "") {
    if (get_post_meta($id, "qode_margin_after_title_mobile", true) == 'yes') {
        $content_style_spacing = "padding-top:" . esc_attr(get_post_meta($id, "qode_margin_after_title", true)) . "px !important";
    } else {
        $content_style_spacing = "padding-top:" . esc_attr(get_post_meta($id, "qode_margin_after_title", true)) . "px";
    }
}
?>

<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php if (get_post_meta($id, "qode_page_scroll_amount_for_sticky", true)) { ?>
            <script>
                //var page_scroll_amount_for_sticky = <?php echo get_post_meta($id, "qode_page_scroll_amount_for_sticky", true); ?>;
            </script>
        <?php } ?>
        <?php get_template_part('title'); ?>
        <?php
        $revslider = get_post_meta($id, "qode_revolution-slider", true);
        if (!empty($revslider)) {
            ?>
            <div class="q_slider"><div class="q_slider_inner">
                    <?php echo do_shortcode($revslider); ?>
                </div></div>
            <?php
        }
        ?>
        <div class="container">
            <div class="container_inner default_template_holder clearfix">
                <?php get_template_part('templates/freebie', 'loop'); ?>
            </div>
            <?php
        endwhile;
    endif;
    get_footer();
    ?>