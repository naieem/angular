<div class="portfolio_navigation navigation_title">
    <div class="portfolio_prev">
        <?php
                $prev_html_info = '';
                if(get_previous_post() != ""){
                    $prev_post = get_previous_post();
                    $prev_html_info = getfreebienavigationPostCategoryAndTitle($prev_post);
                }

                $prev_html = '<i class="fa fa-angle-left"></i>'.$prev_html_info;
                previous_post_link('%link', $prev_html, true,'','freebie_category');
        ?>
    </div>
    <?php //if(get_post_meta(get_the_ID(), "qode_choose-portfolio-list-page", true) != ""){ ?>
        <div class="portfolio_button"><a href="<?php echo home_url('/'); ?>"></a></div>
    <?php //} ?>
    <div class="portfolio_next">
        <?php
                $next_html_info = '';
                if(get_next_post() != ""){
                    $next_post = get_next_post();
                    $next_html_info = getfreebienavigationPostCategoryAndTitle($next_post);
                }
                $next_html = $next_html_info.'<i class="fa fa-angle-right"></i>';
                next_post_link('%link',$next_html, true,'','freebie_category');
        ?>
    </div>
</div>