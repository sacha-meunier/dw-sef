<?php if (have_rows('shop')) : ?>
    <div class="shop__container">
        <?php while (have_rows('shop')) : the_row(); ?>

        <?php
        $card_color = get_sub_field('shop_color');
        $card_is_reverse = get_sub_field('shop_reverse');

        $article_classes = 'shop__card'
            . ' shop__card--' . $card_color
            . ($card_is_reverse ? ' shop__card--reverse' : '')
            ;
        ?>

            <article
                    <?= $card_is_reverse ?>
                    class="<?= $article_classes; ?>">

                <div class="card__content">
                    <div class="card__header">
                        <h2 class="card__title"><?= get_sub_field('shop_title'); ?></h2>
                        <p class="card__description"><?= get_sub_field('shop_copy'); ?></p>
                    </div>

                    <div class="card__details">
                        <span class="card__subtext"><?= get_sub_field('shop_subtext'); ?></span>
                        <ul class="card__days-list">
                            <?php if (have_rows('shop_days_list')) : ?>
                                <?php while (have_rows('shop_days_list')) : the_row(); ?>
                                    <li class="card__day">
                                        <?= get_sub_field('shop_day_name'); ?>
                                        :
                                        <?= get_sub_field('shop_opening_hours'); ?>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>

                    <div class="card__footer">
                        <p class="card__address"><?= get_sub_field('shop_address'); ?></p>
                        <a class="button card__phone" href="tel:<?= get_sub_field('shop_phone') ?>"><?= get_sub_field('shop_phone'); ?></a>
                    </div>
                </div>

                <div class="card__image-container">
                    <img class="card__image" src="<?= get_sub_field('shop_image'); ?>" alt="Image du magasin">
                </div>

            </article>

        <?php endwhile; ?>
    </div>
<?php endif; ?>