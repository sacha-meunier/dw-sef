<?php if (have_rows('faq_info')) :
    while (have_rows('faq_info')) :
        the_row();
        ?>

        <section class="faq__info">
            <h1 class="faq__title">
                <?= get_sub_field('faq_title'); ?>
            </h1>
            <p class="faq__copy">
                <?= get_sub_field('faq_copy'); ?>
            </p>
        </section>

    <?php endwhile;
endif; ?>
