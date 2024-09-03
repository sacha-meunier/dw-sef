<?php
$faq_page = get_page_by_path('faq');

if ($faq_page) {
    $faq_page_id = $faq_page->ID;

    if (have_rows('faq_question', $faq_page_id)) :
        $max_faq_element = 3; // Nombre maximum d'éléments à afficher
        $counter = 1; // Compteur d'éléments FAQ
        ?>

        <section>
            <div>
                <h2>Questions fréquemment posées</h2>
                <div>
                    <p>Si vous avez des questions concernant les donations, le bénévolat ou le fonctionnement de notre
                        ASBL, vous trouverez certainement les réponses à vos questions dans notre FAQ.</p>
                    <p>Si vous ne trouvez pas les réponses que vous cherchez, n'hésitez pas à nous contacter.</p>
                </div>
            </div>

            <div>
                <ul class="faq__list">
                    <?php while (have_rows('faq_question', $faq_page_id)) : the_row();
                        if ($counter > $max_faq_element) break;
                        $faq_id = 'faq-' . $counter;
                        ?>

                        <li class="faq__item">
                            <article class="faq__article">
                                <input class="faq__input" type="checkbox" name="accordion"
                                       id="<?= esc_attr($faq_id); ?>">
                                <label class="faq__label" for="<?= esc_attr($faq_id); ?>">
                                    <?= esc_html(get_sub_field('faq_question_title')); ?>
                                </label>

                                <div class="faq__answer">
                                    <p class="faq__text"><?= wp_kses_post(get_sub_field('faq_question_copy')); ?></p>
                                </div>
                            </article>
                        </li>

                        <?php $counter++; ?>
                    <?php endwhile; ?>
                </ul>

                <a href="<?= esc_url(get_page_url_by_slug('faq')); ?>">Voir toute la FAQ</a>
            </div>
        </section>

    <?php endif;
}
?>
