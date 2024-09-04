<?php /* Template Name: News page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="news">
        <?php get_template_part('news/info'); ?>
        <?php get_template_part('news/news'); ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>