<div class="column_inner">
    <aside class="sidebar">	
        <?php
        if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar')) :
            dynamic_sidebar('sidebar');
        endif;
        ?>
    </aside>
</div>
