<ul class="faq__list">
    <?php if (have_rows('faq_question')) :
        $i = 1;
        while (have_rows('faq_question')) :
            the_row();
            ?>
        <?php $faq_id = 'faq-' . $i; ?>


            <li class="faq__item">
                <article class="faq__article">
                    <h2 class="sro"><?= get_sub_field('faq_question_title'); ?></h2>

                    <input class="faq__input" type="checkbox" name="accordion" id="<?= esc_attr($faq_id); ?>">
                    <label class="faq__label" for="<?= esc_attr($faq_id); ?>">
                        <?= get_sub_field('faq_question_title'); ?>
                    </label>

                    <div class="faq__answer">
                        <p class="faq__text"><?= get_sub_field('faq_question_copy'); ?></p>
                    </div>
                </article>
            </li>

            <?php $i++; ?>
        <?php endwhile;
    endif; ?>
</ul>
