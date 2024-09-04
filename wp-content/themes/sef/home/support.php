<div class="support-types">
    <section class="support">
        <div class="support__content">
            <div class="support__intro">
                <h2 class="support__title"><?= get_field('home_support_title'); ?></h2>
                <p class="support__copy"><?= get_field('home_support_copy'); ?></p>
            </div>

            <div class="support__cards">
                <?php if (have_rows('home_support_donation_card')) :
                    while (have_rows('home_support_donation_card')) :
                        the_row();
                        ?>
                        <a class="card" href="">
                            <div class="card__image-container">
                                <img class="card__image"
                                     src="<?= get_sub_field('home_support_donation_card_image'); ?>" alt="Icône de">
                            </div>
                            <p class="card__copy"><?= get_sub_field('home_support_donation_card_copy'); ?></p>
                        </a>
                    <?php endwhile;
                endif; ?>
            </div>
        </div>
    </section>

    <section class="volunteering">
        <h3 class="volunteering__title"><?= get_field('home_volunteering_title'); ?></h3>

        <div class="volunteering__card">
            <div class="volunteering__info">
                <p class="volunteering__copy">
                    <?= get_field('home_volunteering_copy'); ?>
                </p>
                <a class="volunteering__cta" href="<?= esc_url(get_contact_page_url()); ?>">
                    <?= get_field('home_volunteering_cta'); ?>
                </a>
            </div>

            <div class="volunteering__details">
                <p class="volunteering__subcopy"><?= get_field('home_volunteering_subcopy'); ?></p>

                <ul class="volunteering__list">
                    <?php if (have_rows('home_volunteering_list')) :
                        while (have_rows('home_volunteering_list')) :
                            the_row();
                            ?>
                            <li class="volunteering__list-item"><?= get_sub_field('home_volunteering_list_item'); ?></li>
                        <?php endwhile;
                    endif; ?>
                </ul>
            </div>
        </div>
    </section>
</div>
