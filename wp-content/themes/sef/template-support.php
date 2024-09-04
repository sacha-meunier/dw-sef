<?php /* Template Name: Support page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="support">
        <?php get_template_part('support/info'); ?>
        <?php get_template_part('support/donation'); ?>
        <?php get_template_part('support/volunteering'); ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>