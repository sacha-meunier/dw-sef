<?php if (have_rows('support_info')) :
    while (have_rows('support_info')) :
        the_row();
        ?>

        <section class="support__info">
            <h1 class="support__title">
                <?= get_sub_field('support_info_title'); ?>
            </h1>
            <p class="support__copy">
                <?= get_sub_field('support_info_copy'); ?>
            </p>
        </section>

    <?php endwhile;
endif; ?>
