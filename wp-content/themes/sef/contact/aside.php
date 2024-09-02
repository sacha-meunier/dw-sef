<?php if (have_rows('contact_aside')) :
    while (have_rows('contact_aside')) :
        the_row();
        ?>

        <aside class="contact__aside">
            <div class="aside__category">
                <p class="category__subtext"><?= get_sub_field('contact_aside_subtext'); ?></p>

                <div class="category__row">
                    <img class="category__icon" src="" alt="Icône d'email">
                    <p class="category__copy"><?= get_sub_field('contact_aside_email'); ?></p>
                </div>

                <div class="category__row">
                    <img class="category__icon" src="" alt="Icône de téléphone">
                    <p class="category__copy"><?= get_sub_field('contact_aside_phone'); ?></p>
                </div>

                <div class="category__row">
                    <img class="category__icon" src="" alt="Icône de facebook">
                    <p class="category__copy"><?= get_sub_field('contact_aside_facebook'); ?></p>
                </div>
            </div>

            <div class="aside__category">
                <p class="category__subtext"><?= get_sub_field('contact_aside_subtext_visit'); ?></p>

                <div class="category__row">
                    <img class="category__icon" src="" alt="Icône de location">
                    <p class="category__copy"><?= get_sub_field('contact_aside_address'); ?></p>
                </div>
            </div>
        </aside>

    <?php endwhile;
endif; ?>