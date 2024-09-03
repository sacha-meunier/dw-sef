<?php if (have_rows('contact_aside')) :
    while (have_rows('contact_aside')) :
        the_row();
        ?>

        <aside class="aside">
            <div class="aside__category">
                <p class="aside__subtext"><?= get_sub_field('contact_aside_subtext'); ?></p>

                <div class="aside__row">
                    <img class="aside__icon" src="<?= dw_asset('/content/images/mail.svg'); ?>" alt="Icône d'email">
                    <p class="aside__copy"><?= get_sub_field('contact_aside_email'); ?></p>
                </div>

                <div class="aside__row">
                    <img class="aside__icon" src="<?= dw_asset('/content/images/phone.svg'); ?>" alt="Icône de téléphone">
                    <p class="aside__copy"><?= get_sub_field('contact_aside_phone'); ?></p>
                </div>

                <div class="aside__row">
                    <img class="aside__icon" src="<?= dw_asset('/content/images/facebook.svg'); ?>" alt="Icône de facebook">
                    <p class="aside__copy"><?= get_sub_field('contact_aside_facebook'); ?></p>
                </div>
            </div>

            <div class="aside__category">
                <p class="aside__subtext"><?= get_sub_field('contact_aside_subtext_visit'); ?></p>

                <div class="aside__row">
                    <img class="aside__icon" src="<?= dw_asset('/content/images/location.svg'); ?>" alt="Icône de location">
                    <p class="aside__copy"><?= get_sub_field('contact_aside_address'); ?></p>
                </div>
            </div>
        </aside>

    <?php endwhile;
endif; ?>