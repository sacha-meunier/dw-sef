<?php if (have_rows('sef_info')) :
    while (have_rows('sef_info')) :
        the_row();
        ?>

        <section class="info">
            <div class="info__content">
                <h1 class="info__title">
                    <?= get_sub_field('sef_info_title'); ?>
                </h1>
                <p class="info__copy">
                    <?= get_sub_field('sef_info_copy'); ?>
                </p>
            </div>

            <div class="info__wrapper">
                <img class="info__image" src="<?= get_sub_field('sef_info_image') ?>" alt="Image de présentation du SEF.">
            </div>
        </section>

    <?php endwhile;
endif; ?>
