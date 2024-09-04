<section class="news">
    <div class="news__info">
        <h2 class="news__title">
            D'autres articles
        </h2>
        <a class="button button--secondary news__cta news__cta--desktop" href="<?= get_page_url_by_slug('news') ?>">Tout les articles</a>
    </div>
    <div class="news__container">

        <?php
        $articles = [
            'post_type' => 'news',
            'posts_per_page' => 3,
        ];

        $posts = get_posts($articles);

        foreach ($posts as $post) :
            $title = get_field('article_title');
            $image = get_field('article_image');
            $intro_text = get_field('article_intro');
            $date = get_field('article_date');
            ?>

            <article class="post">
                <a class="post__link" href="<?= get_permalink(); ?>">
                    <div class="post__image-wrapper">
                        <img class="post__image" src="<?= $image; ?>" alt="Image de l'article">
                    </div>

                    <div class="post__content">
                        <div class="post__header">
                            <h3 class="post__title"><?= esc_html($title); ?></h3>
                            <p class="post__copy"><?= esc_html($intro_text); ?></p>
                        </div>

                        <div class="post__footer">
                            <p class="post__date"><?= esc_html($date); ?></p>
                        </div>
                    </div>
                </a>
            </article>

        <?php endforeach; ?>
        <a class="button button--secondary news__cta news__cta--mobile" href="<?= get_page_url_by_slug('news') ?>">Tout les articles</a>
    </div>
</section>