<?php /* Template Name: Sef page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="sef">
        <?php get_template_part('project/info'); ?>
        <?php get_template_part('project/services'); ?>
        <?php get_template_part('project/home'); ?>
        <?php get_template_part('project/shops'); ?>
        <?php get_template_part('project/projects'); ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>