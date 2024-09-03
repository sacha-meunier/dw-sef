<?php if (have_rows('shop_info')) :
    while (have_rows('shop_info')) :
        the_row();
        ?>

        <section class="shop__info">
            <h1 class="shop__title">
                <?= get_sub_field('title'); ?>
            </h1>
            <p class="shop__copy">
                <?= get_sub_field('copy'); ?>
            </p>
        </section>

    <?php endwhile;
endif; ?>
