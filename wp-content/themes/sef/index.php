<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>

    <?php get_template_part('home/hero'); ?>
    <?php /*get_template_part('home/donation'); */?>
    <?php /*get_template_part('home/news'); */?>
    <?php /*get_template_part('home/shop'); */?>
    <?php get_template_part('home/faq'); ?>
    <?php get_template_part('home/support'); ?>

<?php endwhile; endif; ?>
<?php get_footer(); ?>