<?php /* Template Name: Contact page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="contact">
        <?php get_template_part('contact/info'); ?>
        <div class="contact__switcher">
            <?php get_template_part('contact/form'); ?>
            <?php get_template_part('contact/aside'); ?>
        </div>

    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
