<section class="contact">
    <?php if (have_rows('home_help')) :
        while (have_rows('home_help')) :
            the_row();
            ?>

            <h2 class="contact__title"><?= get_sub_field('home_help_title'); ?></h2>
            <a class="button" href="<?= get_page_url_by_slug('contact'); ?>"><?= get_sub_field('home_help_cta'); ?></a>

        <?php endwhile;
    endif; ?>
</section>
