<?php /* Template Name: Faq page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="faq">
        <?php get_template_part('faq/info'); ?>
        <?php get_template_part('faq/faq'); ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>