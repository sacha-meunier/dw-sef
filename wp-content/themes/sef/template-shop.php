<?php /* Template Name: Shop page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="shop">
        <?php get_template_part('shop/info'); ?>
        <?php get_template_part('shop/shop'); ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>