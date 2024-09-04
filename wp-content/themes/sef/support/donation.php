<?php if (have_rows('support_donation')) : ?>

    <div class="support__container">

        <?php while (have_rows('support_donation')) : the_row(); ?>

            <h2 class="support__subtitle"><?= get_sub_field('support_donation_title'); ?></h2>

            <?php if (have_rows('donation')) : ?>
                <?php while (have_rows('donation')) : the_row(); ?>

                    <?php
                    $card_color = get_sub_field('support_donation_color');

                    $article_classes = 'support__card'
                        . ' support__card--' . $card_color;
                    ?>

                    <article class="<?= $article_classes; ?>">

                        <div class="card__content">
                            <h3 class="card__title"><?= get_sub_field('support_donation_title'); ?></h3>
                            <p class="card__description"><?= get_sub_field('support_donation_copy'); ?></p>
                        </div>

                        <div class="card__image-container">
                            <img class="card__image" src="<?= get_sub_field('support_donation_image'); ?>"
                                 alt="Image pour illustrer le type de support">
                        </div>

                    </article>
                <?php endwhile; ?>
            <?php endif; ?>

        <?php endwhile; ?>
    </div>
<?php endif; ?>