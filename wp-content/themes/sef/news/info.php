<?php if (have_rows('news_info')) :
    while (have_rows('news_info')) :
        the_row();
        ?>

        <section class="news__info">
            <h1 class="news__title">
                <?= get_sub_field('news_title'); ?>
            </h1>
        </section>

    <?php endwhile;
endif; ?>
