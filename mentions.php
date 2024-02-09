<?php
/**
 * Template Name: mentions
 */

get_header(); ?>

<div class="container mentions wrap">
    <div class="row">
        <div class="col-md-12">
            <?php
            while (have_posts()) : the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
