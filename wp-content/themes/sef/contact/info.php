<?php if (have_rows('contact_info')) :
    while (have_rows('contact_info')) :
        the_row();
        ?>

        <section class="contact__info">
            <h1 class="contact__title">
                <?= get_sub_field('contact_info_title'); ?>
            </h1>
            <p class="contact__copy">
                <?= get_sub_field('contact_info_copy'); ?>
            </p>
        </section>

    <?php endwhile;
endif; ?>
