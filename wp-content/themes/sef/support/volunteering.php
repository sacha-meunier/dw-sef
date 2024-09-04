<?php if (have_rows('support_volunteering')) : ?>
    <?php while (have_rows('support_volunteering')) : the_row(); ?>

        <?php
        $card_color = get_sub_field('support_volunteering_color');

        $card_classes = 'support__card'
            . ' support__card--' . $card_color;
        ?>

        <article class="support__container">

            <h2 class="support__subtitle"><?= get_sub_field('support_volunteering_title'); ?></h2>

            <div class="<?= $card_classes; ?>">

                <div class="card__content-wrapper">
                    <div class="card__content">
                        <p class="card__description"><?= get_sub_field('support_volunteering_copy'); ?></p>
                    </div>

                    <div class="card__content">
                        <p class="card__subtext"><?= get_sub_field('support_volunteering_subtext'); ?></p>
                        <ul>
                            <?php if (have_rows('support_volunteering_list')) : ?>
                                <?php while (have_rows('support_volunteering_list')) : the_row(); ?>
                                    <li class="card__content-item"><?= get_sub_field('support_volunteering_list_item'); ?></li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

                <div class="card__button-container">
                    <a class="button"
                       href="<?= get_page_url_by_slug('contact'); ?>"><?= get_sub_field('support_volunteering_cta'); ?></a>
                </div>

            </div>

        </article>
    <?php endwhile; ?>
<?php endif; ?>
