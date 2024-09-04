<?php if (have_rows('sef_services')) :
    while (have_rows('sef_services')) :
        the_row();
        ?>

        <section class="services">
            <div class="services__content">
                <h2 class="services__title">
                    <?= get_sub_field('sef_services_title'); ?>
                </h2>
                <p class="services__copy">
                    <?= get_sub_field('sef_services_copy'); ?>
                </p>
            </div>

            <div class="services__wrapper">
                <?php if (have_rows('service')) : ?>
                    <?php while (have_rows('service')) : the_row(); ?>

                        <?php
                        $card_color = get_sub_field('service_color');
                        $svg_url = get_field('service_image');

                        $article_classes = 'services__card'
                            . ' services__card--' . $card_color;
                        ?>

                        <article class="<?= $article_classes; ?>">

                            <div class="card__image-container">
                                <!--<img src="<?php /*= esc_url($svg_url); */?>" alt="SVG Image">-->
                                <img src="<?= dw_asset('content/images/home.svg'); ?>" alt="SVG Image">
                            </div>

                            <div class="card__content">
                                <h3 class="card__title"><?= get_sub_field('service_title'); ?></h3>
                                <p class="card__description"><?= get_sub_field('service_copy'); ?></p>
                            </div>


                        </article>
                    <?php endwhile; ?>
                <?php endif; ?>
                <img class="info__image" src="<?= get_sub_field('sef_info_image') ?>" alt="Image de présentation du SEF.">
            </div>
        </section>

    <?php endwhile;
endif; ?>
